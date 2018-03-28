<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignController extends Controller
{
    protected $view_directory_name = "v1.Campaign.";

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
            $urlDetail = url( "campaign/campaign-detail/$campaignId/$accountId" );
            $urlEdit = url( "campaign/campaign-edit/$campaignId/$accountId" );
            $urlDelete = url( "campaign/campaign-delete/$campaignId/$accountId" );
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
                    <a href="<?php echo $urlDelete; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php
        }
        return ob_get_clean();
    }

    //
    //================================
    //

    public function index()
    {

        return view( $this->view_directory_name . 'campaign' );
    }

    public function check_phone_number()
    {

        return view( $this->view_directory_name . 'micros.CheckPhoneNumber' );
    }

    public function goal_action()
    {

        return view( $this->view_directory_name . 'micros.goalaction' );
    }

    public function new_compaign()
    {

        return view( $this->view_directory_name . 'micros.newcampaign' );
    }

    public function view_compaign()
    {

        return view( $this->view_directory_name . 'micros.viewcampaign' );
    }

//$test = DB::table('campaigns')->select('campaign_name', 'clicksThresh', 'callsThresh','avgCalls','avgConversions','goal1_inc','emailsThresh','conversion_flag','avgConversions')->get();
    // return view($this->view_directory_name.'micros.viewcampaign',['test' => $test]);
    // return view($this->view_directory_name.'micros.viewcampaign');



    public function check( Request $request )
    {



        $phone_number1 = ( string ) $request->input( 'chck_phone_1' );
        $phone_number2 = $request->chck_phone_2;
        $phone_number3 = $request->chck_phone_3;
        $phone_number4 = $request->chck_phone_4;
        $phone_number5 = $request->chck_phone_5;
        $phone_number6 = $request->chck_phone_6;
        $phone_number7 = $request->chck_phone_7;
        $phone_number8 = $request->chck_phone_8;
        $phone_number9 = $request->chck_phone_9;
        $phone_number10 = $request->chck_phone_10;

        $data = [];

        if ( $phone_number1 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number1 )->get();
            $msg = (count( $query ) > 0) ? $phone_number1 . ' : Phone number exists' : $phone_number1 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number2 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number2 )->get();
            $msg = (count( $query ) > 0) ? $phone_number2 . ' : Phone number exists' : $phone_number2 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number3 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number3 )->get();
            $msg = (count( $query ) > 0) ? $phone_number3 . ' : Phone number exists' : $phone_number3 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number4 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number4 )->get();
            $msg = (count( $query ) > 0) ? $phone_number4 . ' : Phone number exists' : $phone_number4 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number5 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number5 )->get();
            $msg = (count( $query ) > 0) ? $phone_number5 . ' : Phone number exists' : $phone_number5 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number6 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number6 )->get();
            $msg = (count( $query ) > 0) ? $phone_number6 . ' : Phone number exists' : $phone_number6 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number7 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number7 )->get();
            $msg = (count( $query ) > 0) ? $phone_number7 . ' : Phone number exists' : $phone_number7 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number8 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number8 )->get();
            $msg = (count( $query ) > 0) ? $phone_number8 . ' : Phone number exists' : $phone_number8 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number9 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number9 )->get();
            $msg = (count( $query ) > 0) ? $phone_number9 . ' : Phone number exists' : $phone_number9 . ' : Phone number not exists';
            array_push( $data, $msg );
        }

        if ( $phone_number10 ) {
            $query = DB::table( 'phone_number_inventory' )->where( "phone_number", $phone_number10 )->get();
            $msg = (count( $query ) > 0) ? $phone_number10 . ' : Phone number exists' : $phone_number10 . ' : Phone number not exists';
            array_push( $data, $msg );
        }


        return back()->with( 'check', $data );
    }

}
