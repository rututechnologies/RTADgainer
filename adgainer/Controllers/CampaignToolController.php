<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Account;
use Adgainer\Models\Campaign;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use DateTimeZone;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function view;

class CampaignToolController extends Controller
{
    protected $viewDir = 'adgainer.campaign-tools';
    protected $accountController;

    public function __construct( AccountController $accountController )
    {
        $this->accountController = $accountController;
    }

    /**
     * View My Campaign Tool.
     * 
     * ref code:
     * application/controller/campaign::myCampaign() | 2560
     * application/views/campaigns/myCampaign.php
     */
    public function myCampaign( Request $request )
    {
        // get my account and campaign data
        $account_id = Auth::user()->account_id;
        $data = $this->getData( $request, $account_id );
        return view( "{$this->viewDir}.mycampaign", $data );
    }

    /**
     * View All campaign tools.
     * 
     * ref code:
     * application/controller/campaign::viewCampaigns() | 2533
     * application/views/campaigns/viewCampaigns.php
     */
    public function allCampaigns( Request $request )
    {
        // get all accounts
        // TODO: get account agent if level = 5
        $data[ 'accounts' ] = $this->accountController->getAccounts();
        $data[ 'account_id' ] = '';

        $carbon_date1 = Carbon::parse( 'first day of this month' );
        $carbon_date2 = Carbon::yesterday();

        $data[ 'date1_show_input' ] = $carbon_date1->format( 'm/d/Y' );
        $data[ 'date2_show_input' ] = $carbon_date2->format( 'm/d/Y' );
        $data[ 'archive' ] = 0;
        $data[ 'time_zone' ] = "America/Los_Angeles";

        // TODO: validation
//        $validator = Validator::make( $request->all(), [
//                'account_id' => 'required',
//                'data1'      => 'required',
//                'data2'      => 'required',
//            ] );
//            var_dump( $validator);
//        if ( $validator->fails() ) {
//            return view( "{$this->viewDir}.all-campaigns", $data );
//        }
        // get data reports
        $account_id = $request->query( 'account_id' );
        if ( $account_id ) {
            $data = array_merge( $data, $this->getData( $request, $account_id ) );
        }
        return view( "{$this->viewDir}.all-campaigns", $data );
    }

    /**
     * Get data for campaigns
     */
    public function getData( Request $request, $account_id )
    {
        $data = [];

        $data[ 'archive' ] = $request->query( 'archive', 0 );
        // TODO: data level
        $data[ 'level' ] = 1;

        // accounts and campaign
        $data[ 'account_id' ] = $account_id;
        $accountData = Account::where( 'account_id', $account_id )->first();
        $data[ 'accountData' ] = $accountData;
        // TODO: get campaigns by user campaign permission
        $campaigns = Campaign::where( 'account_id', $account_id )->get();
        $data[ 'campaigns' ] = $campaigns;
        $data[ 'accountMGR' ] = User::where( 'email', $accountData->account_mgr )->first();

        // start - get date and time
        $time_zone = "America/Los_Angeles";
        if ( $accountData && isset( $accountData->account_time_zone ) ) {
            $time_zone = $accountData->account_time_zone;
        }

        $time_zone = $request->query( 'time_zone', $time_zone );
        $data[ 'time_zone' ] = $time_zone;

        $date1_ = $request->query( 'date1' );
        $carbon_date1 = ($date1_) ? Carbon::parse( $date1_ ) : Carbon::parse( 'first day of this month' );
        $date1 = $carbon_date1->format( 'Y-m-d' );

        $date2_ = $request->query( 'date2' );
        $carbon_date2 = ($date2_) ? Carbon::parse( $date2_ ) : Carbon::yesterday();
        $date2 = $carbon_date2->format( 'Y-m-d' );

        $data[ 'date1_show' ] = $carbon_date1->format( 'Y-m-d' );
        $data[ 'date2_show' ] = $carbon_date2->format( 'Y-m-d' );
        $data[ 'date2_show_' ] = date( "Y-m-d H:i:s", strtotime( $data[ 'date2_show' ] . " +1 DAY" ) );

        $data[ 'date1_show_input' ] = $carbon_date1->format( 'm/d/Y' );
        $data[ 'date2_show_input' ] = $carbon_date2->format( 'm/d/Y' );
        // TODO: selcted timezone
        $TZ_offset1 = $this->get_timezone_offset( 'America/Los_Angeles', $time_zone, $date1 );
        $tz1 = $TZ_offset1[ 'HR' ];
        $TZ_offset2 = $this->get_timezone_offset( 'America/Los_Angeles', $time_zone, $date2 );
        $tz2 = $TZ_offset2[ 'HR' ];
        $data[ 'tz' ] = $tz1;
        $data[ 'date1' ] = date( "Y-m-d H:i:s", strtotime( "-" . $tz1 . " HOURS", strtotime( $date1 ) ) );
        $data[ 'date2' ] = date( "Y-m-d H:i:s", strtotime( "-" . $tz2 . " HOURS", strtotime( $date2 ) ) );

        // get PPC tracking details
        $data[ 'ppc' ] = [];
        if ( $campaigns ) {
            $data[ 'ppc' ] = $this->getPpcTrackingDetails( $campaigns, $data[ 'date1' ], $data[ 'date2' ], $data[ 'date1_show' ], $data[ 'date2_show' ], $data[ 'archive' ] );
        }
        
        return $data;
    }

    /**
     * Get PPC Tracking Details
     * @param array $campaigns collection
     * 
     * @return array
     */
    public function getPpcTrackingDetails( $campaigns, $date1, $date2, $date1_show, $date2_show, $archive )
    {
        $ppc = [];

        $sourceTraffic[ 'SOURCE' ] = [];
        $sourceTraffic[ 'CALLSOURCE' ] = [];
        $sourceTraffic[ 'CONVSOURCE' ] = [];
        $sourceTraffic[ 'CONVTYPE' ] = [];
        $date1_r = date( "Y-m-d H:i:s", strtotime( $date1 . " -2 DAY" ) );
        $date2_r = date( "Y-m-d H:i:s", strtotime( $date2 . " +2 DAY" ) );
        $date2_show_ = date( "Y-m-d H:i:s", strtotime( $date2_show . " +1 DAY" ) );
        $date2 = date( "Y-m-d H:i:s", strtotime( $date2 . " +1 DAY" ) );

        $time_stamp_begin = new DateTime( $date1, new DateTimeZone( 'America/Los_Angeles' ) );
        $time_stamp_end = new DateTime( $date2, new DateTimeZone( 'America/Los_Angeles' ) );
        $time_of_call_begin = clone $time_stamp_begin;
        $time_of_call_begin->setTimezone( new DateTimeZone( 'Asia/Tokyo' ) );
        $time_of_call_end = clone $time_stamp_end;
        $time_of_call_end->setTimezone( new DateTimeZone( 'Asia/Tokyo' ) );
        $time_stamp_begin->sub( new DateInterval( 'P2D' ) );
        $time_stamp_end->add( new DateInterval( 'P1D' ) );

        foreach ( $campaigns as $campaign ) {
            $ppc[ $campaign->campaign_id ] = $this->getCampaignTraffic( $campaign->campaign_id, $date1_r, $date2_r, '', $date1_show, $date2_show_, $archive );
        }

        return $ppc;
    }

    /**
     * Get Campaign Traffic.
     * 
     * ref: application/models/Campaign_model | 92
     * 
     * @param string $campaign_id
     * @param string $date1
     * @param string $date2
     * @param string $type
     * @param string $camp
     * @param string $actual_date1
     * @param string $actual_date2
     * @param string $archive
     * @return type
     */
    function getCampaignTraffic( $campaign_id, $date1, $date2, $type = '', $actual_date1 = '', $actual_date2 = '', $archive = '' )
    {
        $m = date( "m" );
        $y = date( "Y" );
        $day = date( "d" );
        $dateQ = " AND time_stamp >= '" . date( "Y-m-d H:i:s", mktime( 0, 0, 0, $m, 1, $y ) ) . "' AND time_stamp <= '" . date( "Y-m-d H:i:s", mktime( 0, 0, 0, $m, $day, $y ) ) . "' ";
        if ( $date1 != '' && $date2 != '' ) {
            $dateQ = " AND (  ( time_stamp >= '$date1' AND time_stamp < '$date2' )  ";
        }
        $dateC = " ) ";
        if ( $actual_date1 && $actual_date2 ) {
            $dateC = " OR ( time_of_call >= '$actual_date1' AND time_of_call < '$actual_date2' ) ) ";
        }
        $tQ = "";
        if ( $type ) {
            $tQ = " AND upper(traffic_type)='$type' ";
        }
        $table = "phone_time_use";
        if ( $archive == 1 ) {
            $table = "phone_time_use_archive";
        }
        $select = 'ip,caller_phone,phone_number,email_data_sent,goal1_hit,
		goal2_hit,goal3_hit,goal4_hit,
		visits,traffic_type,page_views,keyword,j_keyword,ch_keyword,
		k_keyword,matchtype,call_duration,time_stamp,time_of_call';
        $res = DB::table( $table )
            ->select( DB::raw( $select ) )
//            ->whereRaw( "campaign_id='$campaign_id' $tQ  $dateQ $dateC" )
            ->get()
            ->toArray();
        return $res;
    }

    /**
     * Get timezone offset
     */
    function get_timezone_offset( $remote_tz, $origin_tz = NULL, $datetime = 'now' )
    {
        if ( $origin_tz === NULL || $origin_tz == '' ) {
            if ( !is_string( $origin_tz = date_default_timezone_get() ) ) {
                return FALSE; // A UTC timestamp was returned -- bail out!
            }
        }
        $origin_dtz = new DateTimeZone( $origin_tz );
        $remote_dtz = new DateTimeZone( $remote_tz );
        $origin_dt = new DateTime( $datetime, $origin_dtz );
        $remote_dt = new DateTime( $datetime, $remote_dtz );
        $offset = $origin_dtz->getOffset( $origin_dt ) - $remote_dtz->getOffset( $remote_dt );
        return array( 'SEC' => $offset, 'HR' => (($offset / 60) / 60) );
    }

}
