<?php
namespace Adgainer\Controllers;

class TwilioController extends Controller
{
    function searchNumbers()
    {
        $data[ 'campaign_id_' ] = $this->input->get( 'campaign_id' );
        $data[ 'account_id_' ] = $this->input->get( 'account_id' );
        $level[ 'level' ] = $_SESSION[ 'user_level' ];
        $campaign_id = $this->Login_model->scrubSQL( $data[ 'campaign_id_' ] );
        $data[ 'campaignData' ] = $this->Campaign_model->getCampaignById( $campaign_id );
        $this->load->view( 'mainHeader', $level );
        $this->load->view( 'twilio/searchNumbers', $data );
    }

}
