<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Campaign;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{
    protected $viewDir = 'adgainer.campaigns';

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

}
