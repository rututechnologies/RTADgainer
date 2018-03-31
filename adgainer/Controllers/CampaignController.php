<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Account;
use Adgainer\Models\Campaign;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function asset;
use function response;
use function view;

class CampaignController extends Controller
{
    protected $viewDir = 'adgainer.campaigns';
    protected $tableReportController;
    protected $accountController;

    public function __construct( TableReportController $tableReportController, AccountController $accountController )
    {
        $this->tableReportController = $tableReportController;
        $this->accountController = $accountController;
    }

    /**
     * Detail Campaign page
     * 
     * TODO: display campaign details.
     */
    public function details( $campaign_id, $account_id )
    {
        /*
         * TODO: Get account details and display to details page
         */
        return view( "{$this->viewDir}.details" );
    }

    /**
     * Create Campaign page
     * 
     * TODO: display campaign form.
     */
    public function create( $account_id )
    {
        /*
         * TODO: Get account details and display form
         */
        return view( "{$this->viewDir}.create" );
    }

    /**
     * Edit Campaign page.
     * 
     * TODO: display campaign edit form.
     */
    public function edit( $campaign_id, $account_id )
    {
        /*
         * TODO: Get account details and display form
         */
        return view( "{$this->viewDir}.edit" );
    }

    /**
     * submit create form.
     * 
     * TODO: Save to database
     */
    public function submitCreate( Requets $request )
    {
        
    }

    /**
     * submit Edit form.
     * 
     * TODO: Save to database
     */
    public function submitEdit( Requets $request )
    {
        
    }

    /**
     * Get campaigns json data by account_id.
     */
    public function getCampaigns( $account_id )
    {
        // get campaigns
        $campaigns = Campaign::where( 'account_id', $account_id )->get();
        if ( $campaigns->count() > 0 ) {
            return response()->json( $campaigns );
        } else {
            return response( 'Failed API: Campaigns Data Not Found', 500 );
        }
    }

    /**
     * Get campaigns with html (table rows) by account_id.
     */
    public function getCampaignRows( $account_id )
    {
        // get campaigns
        $campaigns = Campaign::where( 'account_id', $account_id )->get();
        ob_start();
        foreach ( $campaigns as $campaign ) {
            // camp type
            $campType = "Standard";
            $editType = "edit";
            if ( $campaign->multi_code == 1 ) {
                $campType = "Mutli";
                $editType = "editMulti";
            } elseif ( $campaign->source_code == 1 ) {
                $campType = "Source";
                $editType = "editSource";
            }

            // ppc comps
            $ppc_comps = "";
            if ( $campaign->adwords_campaign_id != "" ) {
                $ppc_comps .= ' <img src="' . asset( "images/adw.jpg" ) . '" width="25" />';
            }
            if ( $campaign->bing_campaign_id != "" ) {
                $ppc_comps .= ' <img src="' . asset( "images/bing_ads.png" ) . '" width="25" />';
            }
            if ( $campaign->sp_campaign_id != "" ) {
                $ppc_comps .= ' <img src="' . asset( "images/superpages.png" ) . '" width="25" />';
            }
            $campaignId = $campaign->campaign_id;
            $accountId = $campaign->account_id;
            $urlDetail = "campaign/details/$campaignId/$accountId";
            $urlEdit = "campaign/edit/$campaignId/$accountId";
            $urlDelete = "campaign/delete/$campaignId/$accountId";
            ?>
            <tr class="campaign-item">
                <td class="campaign-name"><?php echo $campaign->campaign_name; ?></td>
                <td><?php echo $campaign->campaign_budget . "  " . $campaign->campaign_currency; ?></td>
                <td><?php echo $campaign->tracking_campaign_type; ?></td>
                <td><?php echo $campaign->correlation_time; ?></td>
                <td><?php echo $campaign->default_number; ?></td>
                <td class="text-center"><?php echo $campType; ?></td>
                <td class="text-center"><?php echo $ppc_comps; ?></td>
                <td class="text-center"><?php echo ($campaign->record_calls == 1) ? 'Yes' : 'No'; ?></td>
                <td class="text-center"><?php echo ($campaign->active) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-close text-danger"></i>'; ?></td>
                <td>
                    <a href="<?php echo $urlDetail; ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                    <a href="<?php echo $urlEdit; ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php
        }
        return ob_get_clean();
    }

    public function tableReports( Request $request )
    {

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
        $data[ 'build' ] = $build;
        $data[ 'archive' ] = $archive;

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
            $TZ_offset = $this->accountController->getTimezoneOffset( 'America/Los_Angeles', $time_zone, $date_1 );
            $tz = $TZ_offset[ 'HR' ];
            $data[ 'time_zone' ] = $tz;
        }
        $date_1 = date( "Y-m-d H:i:s", strtotime( "-" . $tz . " HOURS", strtotime( $date_1 ) ) );
        if ( $time_zone ) {
            $TZ_offset = $this->accountController->getTimezoneOffset(
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

        $accounts = $this->accountController->getAccounts();
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

            if ( $data[ 'accountData' ]->account_view_keywords == 0 && $data[ 'accountData' ]->account_id == $user_account_id ) {
                $removeFields = array( 'searchTerm', 'source', 'keyword' );
                foreach ( $data[ 'reportFields' ] as $k => $fieldName ) {
                    if ( in_array( $fieldName, $removeFields ) ) {
                        unset( $data[ 'reportFields' ][ $k ] );
                    }
                }
                $reportInfo[ 'FIELDS' ] = implode( ',', $data[ 'reportFields' ] );
            }

            $data[ 'reportFields' ] = $this->tableReportController->checkCampaignGoalSet( $data[ 'reportFields' ], $account_id );

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
            $data[ 'tableReportController' ] = $this->tableReportController;
            return view( "adgainer.reports.get-table", $data );
        }
    }

}
