<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Account;
use Adgainer\Models\Campaign;
use Adgainer\Models\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;

class AccountController extends Controller
{
    protected $viewDir = 'adgainer.accounts';
    protected $tableReportController;

    public function __construct( TableReportController $tableReportController )
    {
        $this->tableReportController = $tableReportController;
    }

    /**
     * Account list page.
     * 
     * Old system related URL:
     * https://adgainersolutions.com/adgainer/account/getAccounts
     * 
     * Old system related files:
     * application/views/account/accounts.php
     * application/controllers/Account::getAccounts
     * 
     */
    public function index()
    {
        $accounts = $this->getAccounts();
        return view( "{$this->viewDir}.index", [ 'accounts' => $accounts ] );
    }

    /**
     * Account details page.
     * 
     * @param string $account_id
     */
    public function details( $account_id )
    {
        $account = Account::where( 'account_id', $account_id )->first();
        return view( "{$this->viewDir}.details", [ 'account' => $account ] );
    }

    /**
     * Edit Account page.
     * 
     * @param string $account_id
     */
    public function edit( $account_id )
    {
        /*
         * TODO: Get account details and display form
         */
        return view( "{$this->viewDir}.edit" );
    }

    /**
     * Submitted edit form.
     * Save to database and return to edit form with alert
     */
    public function editSubmit( Request $request )
    {
        /*
         * TODO: Get submitted form fields and save to database
         */
    }

    /**
     * Display table reports
     */
    public function tableReports( Request $request )
    {
        // TODO: validate
//        $this->validate($request, [
//            'date1' => 'required|date',
//            'date2' => 'required|date',
//        ]);

        $report = $request->query( 'report' );
        $campaign_id = $request->query( 'campaign_id' );
        $account_id = $request->query( 'account_id' );
        $rType = $request->query( 'rType' );
        $order = $request->query( 'order' );
        $dir = $request->query( 'dir' );
        $start = $request->query( 'start', 1 );
        $end = $request->query( 'end', 200 );
        $archive = $request->query( 'archive' );
        $traffic = $request->query( 'traffic' );
        $build = $request->query( 'build' );

        $data[ 'start' ] = $start;
        $data[ 'end' ] = $end;
        $data[ 'rType' ] = $rType;
        $data[ 'order' ] = $order;
        $data[ 'dir' ] = $dir;
        $data[ 'account_id_acct' ] = $account_id;
        $data[ 'campaign_id_acct' ] = $campaign_id;
        $data[ 'report' ] = $report;
        $data[ 'traffic' ] = $traffic;
        $data[ 'archive' ] = $archive;
        $data[ 'build' ] = $build;
        $level[ 'level' ] = FALSE;
        // TODO: user level
//        if ( isset( $_SESSION[ 'user_level' ] ) ) {
//            $level[ 'level' ] = $_SESSION[ 'user_level' ];
//        }
        // start date

        $date1_ = $request->query( 'date1' );
        $carbon_date1 = ($date1_) ? Carbon::parse( $date1_ ) : Carbon::parse( 'first day of this month' );
        $date1 = $carbon_date1->format( 'Y-m-d' );

        $date2_ = $request->query( 'date2' );
        $carbon_date2 = ($date2_) ? Carbon::parse( $date2_ ) : Carbon::yesterday();
        $date2 = $carbon_date2->format( 'Y-m-d' );

        $data[ 'date1' ] = $date1;
        $data[ 'date2' ] = $date2;
        if ( $date1 ) {
            $data[ 'dateAD' ] = date( "Ymd", strtotime( $date1 ) ) . "-" . date( "Ymd", strtotime( $date2 ) );
            $date_1 = date( "Y-m-d", strtotime( $date1 ) );
            $date_2 = date( "Y-m-d", strtotime( $date2 ) );
        } else {
            $date_1 = date( "Y-m-d", mktime( 0, 0, 0, date( "m", time() ), 1, date( "Y", time() ) ) );
            $date_2 = date( "Y-m-d", mktime( 0, 0, 0, date( "m", time() ), date( "d", time() ), date( "Y", time() ) ) );
        }
        $date_1_ = $date_1;
        $date_2_ = $date_2;

        $time_zone = $request->query( 'time_zone', 'America/Los_Angeles' );
        $data[ 'actual_time_zone' ] = $time_zone;
        if ( $time_zone ) {
            $TZ_offset = $this->getTimezoneOffset( 'America/Los_Angeles', $time_zone, $date_1 );
            $tz = $TZ_offset[ 'HR' ];
            $data[ 'time_zone' ] = $tz;
        }
        $date_1 = date( "Y-m-d H:i:s", strtotime( "-" . $tz . " HOURS", strtotime( $date_1 ) ) );
        if ( $time_zone ) {
            $TZ_offset = $this->getTimezoneOffset(
                'America/Los_Angeles', $time_zone, date( 'Y-m-d H:i:s', strtotime( $date_2 . ' +1 DAY' ) )
            );
            $tz = $TZ_offset[ 'HR' ];
        }
        $date_2 = date( "Y-m-d H:i:s", strtotime( "-" . $tz . " HOURS", strtotime( $date_2 . " +1 DAY" ) ) );
        // end date

        $accountData = Account::where( 'account_id', $account_id )->first();
        $data[ 'accountData' ] = $accountData;
        $campaign = Campaign::where( 'campaign_id', $campaign_id )->first();
        $data[ 'campaignData' ] = $campaign;
        $user = Auth::User();
        $user_account_id = $user->account_id;

        // TODO: get by account agent by user level
//        if ( $_SESSION[ 'user_level' ] == 5 ) {
//            $accounts = $this->Account_model->getAccountAgent();
//        } else {
//            $accounts = $this->Account_model->getAccounts();
//        }

        $accounts = $this->getAccounts();
        $acctArray = [];
        foreach ( $accounts as $acct ) {
            if ( isset( $acct->account_id ) ) {
                $acctArray[] = $acct->account_id;
            }
        }
        if ( in_array( $account_id, $acctArray ) || $user_account_id == $account_id || ($accountData && $accountData->agent_id == $user_account_id) ) {
            $reportInfo = $this->tableReportController->getReportType( $report, 'is_table', $account_id, $user->username, '', $build );
            $data[ 'reportType' ] = $reportInfo[ 'TYPE' ];
            $data[ 'reportFields' ] = explode( ",", $reportInfo[ 'FIELDS' ] );
            $data[ 'report_id' ] = $reportInfo[ 'ID' ];
            if ( $traffic == "" ) {
                $data[ 'traffic' ] = $reportInfo[ 'TRAFFIC' ];
            }
            $data[ 'reportFields' ] = $this->tableReportController->checkCampaignGoalSet( $data[ 'reportFields' ], $account_id );

            if ( $data[ 'accountData' ]->account_view_keywords == 0 && $data[ 'accountData' ]->account_id == $user_account_id ) {
                $removeFields = array( 'searchTerm', 'source', 'keyword' );
                foreach ( $data[ 'reportFields' ] as $k => $fieldName ) {
                    if ( in_array( $fieldName, $removeFields ) ) {
                        unset( $data[ 'reportFields' ][ $k ] );
                    }
                }
                $reportInfo[ 'FIELDS' ] = implode( ',', $data[ 'reportFields' ] );
            }
            $reportInfo[ 'FIELDS' ] = $this->tableReportController->setDataFields( $data[ 'reportFields' ], $reportInfo[ 'FIELDS' ] );
            if ( $order != "" && !in_array( $order, $data[ 'reportFields' ] ) ) {
                $order = "";
            }
            if ( $dir != "" && $dir != "DESC" ) {
                $dir = "";
            }
            if ( $dir == "" ) {
                $dir = "DESC";
            }
            $data[ 'records' ] = $this->tableReportController->getReportRecords( $reportInfo[ 'FIELDS' ], $date_1_, $date_2_, $rType, $order, $dir, 0, 0, $traffic, $account_id, $campaign_id, $archive, $date_1, $date_2 );
            //getReportRecords($fields,$date1,$date2,$rType,$order,$dir,$start,$end,$traffic,$account_id,$campaign_id='',$archive='',$date1_TZ='',$date2_TZ='',$report='',$type='',$user_account_id='')
            $data[ 'all_total_calls' ] = $this->tableReportController->getAllCallsData( $account_id, $campaign_id, $date1, $date2, $archive );
//            var_dump( $data);
            $data['tableReportController'] = $this->tableReportController;
            return view( "adgainer.reports.get-table", $data );
        }
    }

    /**
     * Get account list according to user id
     * Account_model::getAccounts()
     * TODO: add account_id parameter
     */
    public function getAccounts( $user_id = '' )
    {
        $accounts = array();
        if ( !empty( $user_id ) ) {
            // get user by id
            $user = User::find( $user_id );
            if ( !$user ) {
                return array();
            }
        } else {
            // get loggedin user id
            $user = Auth::user();
            if ( $user ) {
                $user_id = $user->id;
            } else {
                // unauthenticated
                return array();
            }
        }

        // get attach_accounts from user
        $accounts = array();
        if ( isset( $user->attach_accounts ) ) {
            $attach_accounts = explode( ',', $user->attach_accounts );
            $accounts = array_merge( $accounts, $attach_accounts );
        }

        // add self account_id from user
        array_push( $accounts, $user->account_id );

        // get accounts
        $account_list = Account::whereIn( 'account_id', $accounts )->orderBy( 'accountName' )->get();
        return $account_list;
    }

    /**
     * TODO: add get account agent if level = 5
     */
    public function getAccountAgent( $user_id = '' )
    {
        
    }

    /**
     * Get timezone offset
     */
    function getTimezoneOffset( $remote_tz, $origin_tz = NULL, $datetime = 'now' )
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
