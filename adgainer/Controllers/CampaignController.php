<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Account;
use Adgainer\Models\Campaign;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function asset;
use function redirect;
use function response;
use function storage_path;
use function view;

class CampaignController extends Controller
{
    protected $viewDir = 'adgainer.campaigns';
    protected $tableReportController;
    protected $accountController;
    protected $campaignModelController;

    public function __construct( TableReportController $tableReportController, AccountController $accountController, CampaignModelController $campaignModelController )
    {
        $this->tableReportController = $tableReportController;
        $this->accountController = $accountController;
        $this->campaignModelController = $campaignModelController;
    }

    /**
     * Detail Campaign page
     * 
     * TODO: display campaign details.
     */
    public function details( $campaign_id, $account_id )
    {
        
        $data[ 'campaign' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        $data[ 'accountData' ] = Account::where( 'account_id', $account_id )->first();
        $user = Auth::user();
        $data[ 'level' ] = $user->level;
        $user_account_id = $user->account_id;

        if ( $data[ 'level' ] == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }

        $acctArray = array();
        foreach ( $accounts as $acct ) {
            if ( isset( $acct->account_id ) ) {
                $acctArray[] = $acct->account_id;
            }
        }

        $data[ 'campaignController' ] = $this;

        if ( in_array( $data[ 'campaign' ]->account_id, $acctArray ) || $user_account_id == $data[ 'campaign' ]->account_id || $data[ 'accountData' ]->agent_id == $user_account_id
        ) {
            return view( "{$this->viewDir}.mgt-details", $data );
        } else {
            echo "No Access";
        }
    }

    /**
     * Create Campaign page
     */
    public function create()
    {
        $data = [];
        $user = Auth::user();
        $level = $user->level;
        if ( $level == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }
        $data[ 'level' ] = $level;
        $data[ 'allAccounts' ] = $accounts;
        $data[ 'accountData' ] = false;

        // get account data
        return view( "{$this->viewDir}.create", $data );
    }

    /**
     * Create Campaign page by selected account
     */
    public function createByAccount( $account_id )
    {
        $data = [];
        $user = Auth::user();
        $level = $user->level;
        if ( $level == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }
        $data[ 'level' ] = $level;
        $data[ 'allAccounts' ] = $accounts;

        // get account data
        $data[ 'accountData' ] = Account::where( 'account_id', $account_id )->first();
        $data[ 'account_id' ] = $account_id;
        return view( "{$this->viewDir}.create", $data );
    }

    /**
     * Edit Campaign page.
     * 
     * TODO: display campaign edit form.
     */
    public function edit( $campaign_id, $account_id )
    {
        $data[ 'campaign_id' ] = $campaign_id;
        $data[ 'account_id' ] = $account_id;
        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        $data[ 'accountData' ] = Account::where( 'account_id', $account_id )->first();
        $user = Auth::user();
        $data[ 'level' ] = $user->level;
        $user_account_id = $user->account_id;

        if ( $data[ 'level' ] == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }

        $acctArray = array();
        foreach ( $accounts as $acct ) {
            if ( isset( $acct->account_id ) ) {
                $acctArray[] = $acct->account_id;
            }
        }

        if ( in_array( $account_id, $acctArray ) || $user_account_id == $account_id || $data[ 'accountData' ]->agent_id == $user_account_id
        ) {
            $data[ 'ga_codes' ] = $this->getGA_codes( $campaign_id );
            return view( "{$this->viewDir}.edit", $data );
        } else {
            echo '1';
        }
    }

    /**
     * submit create form.
     * 
     */
    public function submitCreate( Request $request )
    {
        $account_id = $request->input( 'account_id' );
        $camp_name = $request->input( 'campaign_name' );
        if ( empty( $account_id ) || empty( $camp_name ) ) {
            return back()->with( 'error_msg', 'Account and Campaign name are required' );
        }
        $call_notification = $request->input( 'call_notification' );
        if ( is_array( $call_notification ) && count( $call_notification ) > 0 ) {
            $call_notification = implode( ',', $call_notification );
        } else {
            $call_notification = '';
        }

        $postback_fields = $request->input( 'postback_fields' );
        if ( is_array( $postback_fields ) && count( $postback_fields ) > 0 ) {
            $postback_fields = implode( ',', $postback_fields );
        } else {
            $postback_fields = '';
        }

        $campaign_id = md5( $account_id . time() );

        $camp_field = $request->input( 'camp_type' );

        $campaign_tracking_type = 'Standard Tracking';
        if ( strstr( $camp_field, 'multi' ) ) {
            $campaign_tracking_type = 'Multi-Tracking';
        } elseif ( strstr( $camp_field, 'source' ) ) {
            $campaign_tracking_type = 'Source Tracking';
        }

        $corr_time = $request->input( 'correlation_time' );
        $default_number = $request->input( 'default_number' ) ? $request->input( 'default_number' ) : '';
        $data = array(
            "account_id"               => $account_id,
            "campaign_id"              => $campaign_id,
            "campaign_name"            => $camp_name,
            "campaign_cycle"           => $request->input( 'campaign_cycle' ),
            "campaign_budget"          => $request->input( 'campaign_budget' ) ? $request->input( 'campaign_budget' ) : 0,
            "campaign_currency"        => $request->input( 'campaign_currency' ),
            "campaign_mgr"             => $request->input( 'campaign_mgr' ) ? $request->input( 'campaign_mgr' ) : '',
            "dblclick_name_calls"      => $request->input( 'dblclick_name_calls' ) ? $request->input( 'dblclick_name_calls' ) : '',
            "dblclick_name_goals"      => $request->input( 'dblclick_name_goals' ) ? $request->input( 'dblclick_name_goals' ) : '',
            "dblclick_agency_id"       => $request->input( 'dblclick_agency_id' ) ? $request->input( 'dblclick_agency_id' ) : '',
            "dblclick_advertiser_id"   => $request->input( 'dblclick_advertiser_id' ) ? $request->input( 'dblclick_advertiser_id' ) : '',
            "yahoojpn_aid"             => $request->input( 'yahoojpn_aid' ) ? $request->input( 'yahoojpn_aid' ) : '',
            "yahoojpn_cid"             => $request->input( 'yahoojpn_cid' ) ? $request->input( 'yahoojpn_cid' ) : '',
            "adwords_campaign_id"      => $request->input( 'adwords_campaign_id' ) ? $request->input( 'adwords_campaign_id' ) : '',
            "bing_campaign_id"         => $request->input( 'bing_campaign_id' ) ? $request->input( 'bing_campaign_id' ) : '',
            "sp_campaign_id"           => $request->input( 'sp_campaign_id' ) ? $request->input( 'sp_campaign_id' ) : '',
            $camp_field                => 1,
            "date_created"             => date( "Y-m-d H:i:s" ),
            "multi_phone"              => $request->input( 'multi_phone' ) ? $request->input( 'multi_phone' ) : 0,
            "ppc_markup"               => $request->input( 'ppc_markup' ) ? $request->input( 'ppc_markup' ) : 0,
            "correlation_time"         => $corr_time,
            "timeZone"                 => $request->input( 'timeZone' ),
            "chat_campaign"            => $request->input( 'chat_campaign' ),
            "numbers_to_replace"       => $request->input( 'numbers_to_replace' ) ? $request->input( 'numbers_to_replace' ) : '',
            "blacklist_words"          => $request->input( 'blacklist_words' ) ? $request->input( 'blacklist_words' ) : '',
            "blacklist_ips"            => $request->input( 'blacklist_ips' ) ? $request->input( 'blacklist_ips' ) : '',
            "tracking_type"            => $request->input( 'tracking_type' ),
            "email_tracking"           => $request->input( 'email_tracking' ),
            "email_notify"             => $request->input( 'email_notify' ),
            "email_notify_user"        => $request->input( 'email_notify_user' ),
            "email_to_notify_user"     => $request->input( 'email_to_notify_user' ) ? $request->input( 'email_to_notify_user' ) : '',
            "email_to_notify"          => $request->input( 'email_to_notify' ) ? $request->input( 'email_to_notify' ) : '',
            "text_notify"              => $request->input( 'text_notify' ),
            "call_notification"        => $call_notification,
            "postback_fields"          => $postback_fields,
            "cell_to_text"             => $request->input( 'cell_to_text' ) ? $request->input( 'cell_to_text' ) : '',
            "cell_provider"            => $request->input( 'cell_provider' ) ? $request->input( 'cell_provider' ) : '',
            "phone_format"             => $request->input( 'phone_format' ),
            "default_phone_format"     => $request->input( 'default_phone_format' ),
            "greeting"                 => $request->input( 'greeting' ) ? $request->input( 'greeting' ) : '',
            "prompt"                   => $request->input( 'prompt' ) ? $request->input( 'prompt' ) : '',
            "greet_voice"              => $request->input( 'greet_voice' ),
            "language"                 => $request->input( 'language' ),
            "transfer_to_number"       => $request->input( 'transfer_to_number' ) ? $request->input( 'transfer_to_number' ) : '',
            "default_number"           => $default_number,
            "postback_page"            => $request->input( 'postback_page' ) ? $request->input( 'postback_page' ) : '',
            "post_back_type"           => $request->input( 'post_back_type' ),
            "country_tracking"         => $request->input( 'country_tracking' ),
            "tracking_campaign_type"   => $request->input( 'tracking_campaign_type' ),
            "tag_words"                => $request->input( 'tag_words' ) ? $request->input( 'tag_words' ) : '',
            "goal1Memo"                => $request->input( 'goal_page1_memo' ) ? $request->input( 'goal_page1_memo' ) : '',
            "goal1"                    => $request->input( 'goal_page1' ) ? $request->input( 'goal_page1' ) : '',
            "goal2Memo"                => $request->input( 'goal_page2_memo' ) ? $request->input( 'goal_page2_memo' ) : '',
            "goal2"                    => $request->input( 'goal_page2' ) ? $request->input( 'goal_page2' ) : '',
            "goal3Memo"                => $request->input( 'goal_page3_memo' ) ? $request->input( 'goal_page3_memo' ) : '',
            "goal3"                    => $request->input( 'goal_page3' ) ? $request->input( 'goal_page3' ) : '',
            "goal4Memo"                => $request->input( 'goal_page4_memo' ) ? $request->input( 'goal_page4_memo' ) : '',
            "goal4"                    => $request->input( 'goal_page4' ) ? $request->input( 'goal_page4' ) : '',
            "goal5Memo"                => $request->input( 'goal_page5_memo' ) ? $request->input( 'goal_page5_memo' ) : '',
            "goal5"                    => $request->input( 'goal_page5' ) ? $request->input( 'goal_page5' ) : '',
            "goal6Memo"                => $request->input( 'goal_page6_memo' ) ? $request->input( 'goal_page6_memo' ) : '',
            "goal6"                    => $request->input( 'goal_page6' ) ? $request->input( 'goal_page6' ) : '',
            "goal7Memo"                => $request->input( 'goal_page7_memo' ) ? $request->input( 'goal_page7_memo' ) : '',
            "goal7"                    => $request->input( 'goal_page7' ) ? $request->input( 'goal_page7' ) : '',
            "goal8Memo"                => $request->input( 'goal_page8_memo' ) ? $request->input( 'goal_page8_memo' ) : '',
            "goal8"                    => $request->input( 'goal_page8' ) ? $request->input( 'goal_page8' ) : '',
            "goal9Memo"                => $request->input( 'goal_page9_memo' ) ? $request->input( 'goal_page9_memo' ) : '',
            "goal9"                    => $request->input( 'goal_page9' ) ? $request->input( 'goal_page9' ) : '',
            "goal10Memo"               => $request->input( 'goal_page10_memo' ) ? $request->input( 'goal_page10_memo' ) : '',
            "goal10"                   => $request->input( 'goal_page10' ) ? $request->input( 'goal_page10' ) : '',
            "save_chat"                => $request->input( 'save_chat' ),
            "avgCalls"                 => $request->input( 'avgCalls' ) ? $request->input( 'avgCalls' ) : 0,
            "callsThresh"              => $request->input( 'callsThresh' ) ? $request->input( 'callsThresh' ) : '',
            "avgClicks"                => $request->input( 'avgClicks' ) ? $request->input( 'avgClicks' ) : 0,
            "clicksThresh"             => $request->input( 'clicksThresh' ) ? $request->input( 'clicksThresh' ) : '',
            "avgEmails"                => $request->input( 'avgEmails' ) ? $request->input( 'avgEmails' ) : 0,
            "emailsThresh"             => $request->input( 'emailsThresh' ) ? $request->input( 'emailsThresh' ) : '',
            "avgGoalPgs"               => $request->input( 'avgGoalPgs' ) ? $request->input( 'avgGoalPgs' ) : 0,
            "goalsThresh"              => $request->input( 'goalsThresh' ) ? $request->input( 'goalsThresh' ) : '',
            "avgConversions"           => $request->input( 'avgConversions' ) ? $request->input( 'avgConversions' ) : 0,
            "convsThresh"              => $request->input( 'convsThresh' ),
            "camp_custom1"             => $request->input( 'camp_custom1' ) ? $request->input( 'camp_custom1' ) : '',
            "camp_custom2"             => $request->input( 'camp_custom2' ) ? $request->input( 'camp_custom2' ) : '',
            "camp_custom3"             => $request->input( 'camp_custom3' ) ? $request->input( 'camp_custom3' ) : '',
            "camp_custom4"             => $request->input( 'camp_custom4' ) ? $request->input( 'camp_custom4' ) : '',
            "camp_custom5"             => $request->input( 'camp_custom5' ) ? $request->input( 'camp_custom5' ) : '',
            "camp_custom6"             => $request->input( 'camp_custom6' ) ? $request->input( 'camp_custom6' ) : '',
            "camp_custom7"             => $request->input( 'camp_custom7' ) ? $request->input( 'camp_custom7' ) : '',
            "camp_custom8"             => $request->input( 'camp_custom8' ) ? $request->input( 'camp_custom8' ) : '',
            "camp_custom9"             => $request->input( 'camp_custom9' ) ? $request->input( 'camp_custom9' ) : '',
            "camp_custom10"            => $request->input( 'camp_custom10' ) ? $request->input( 'camp_custom10' ) : '',
            "last_edited"              => Auth::user()->username,
            "last_update"              => date( "Y-m-d H:i:s", time() ),
            ///---------------
            "dblclick_action"          => '',
            "account_mgt"              => '',
            "account_mgr"              => '',
            "goal_notify_email"        => '',
            "notified_date"            => date( "Y-m-d H:i:s", time() ),
            "source_numbers"           => '',
            "email_tracking_email"     => '',
            "email_tracking_post_page" => '',
            "kakao_id"                 => '',
            "line_id"                  => '',
            "viber_id"                 => '',
            "whatsapp_id"              => '',
            "wechat_id"                => '',
            "TWILIO_XML"               => '',
            "sttCount"                 => 0,
        );

        foreach ( $data as $key => $val ) {
            $data[ $key ] = $this->scrubSQL( $val );
        }

        $goal_code = $this->scrubSQL( $request->input( 'goal_code' ) );
        $call_code = $this->scrubSQL( $request->input( 'call_code' ) );
        DB::beginTransaction();
        try {
            $this->setGA_code( $campaign_id, 'goal', $goal_code );
            $this->setGA_code( $campaign_id, 'call', $call_code );
            DB::table( 'campaigns' )->insert( $data );
            DB::commit();
            // TODO: send email
            return redirect()->route( 'campaignDetails', [ 'campaign_id' => $campaign_id, 'account_id' => $account_id ] );
        } catch ( Exception $ex ) {
            DB::rollback();
            var_dump( $ex );
        }
    }

    /**
     * submit Edit form.
     * 
     * TODO: Save to database
     */
    public function submitEdit( Request $request )
    {

        $account_id = $request->input( 'account_id' );
        $campaign_id = $request->input( 'campaign_id' );
        $campaign_name = $request->input( 'campaign_name' );

        $campaign_id = $this->scrubSQL( $campaign_id );
        $campaign_name = $this->scrubSQL( $campaign_name );
        if ( $campaign_id == "" ) {
            exit;
        }

        $call_notification = $request->input( 'call_notification' );
        if ( is_array( $call_notification ) && count( $call_notification ) > 0 ) {
            $call_notification = implode( ",", $call_notification );
        } else {
            $call_notification = "";
        }

        $postback_fields = $request->input( 'postback_fields' );
        if ( is_array( $postback_fields ) && count( $postback_fields ) > 0 ) {
            $postback_fields = implode( ",", $postback_fields );
        } else {
            $postback_fields = "";
        }

        $source_code = 0;
        $multi_code = 0;

        $camp_type = $request->input( 'camp_type' );
        if ( $camp_type == 'source_code' ) {
            $source_code = 1;
        } elseif ( $camp_type == 'multi_code' ) {
            $multi_code = 1;
        }

        $data = array(
            "campaign_name"          => $request->input( 'campaign_name' ),
            "campaign_cycle"         => $request->input( 'campaign_cycle' ),
            "campaign_budget"        => $request->input( 'campaign_budget' ),
            "campaign_currency"      => $request->input( 'campaign_currency' ),
            "campaign_mgr"           => $request->input( 'campaign_mgr' ),
            "dblclick_name_calls"    => $request->input( 'dblclick_name_calls' ),
            "dblclick_name_goals"    => $request->input( 'dblclick_name_goals' ),
            "dblclick_agency_id"     => $request->input( 'dblclick_agency_id' ),
            "dblclick_advertiser_id" => $request->input( 'dblclick_advertiser_id' ),
            "yahoojpn_aid"           => $request->input( 'yahoojpn_aid' ),
            "yahoojpn_cid"           => $request->input( 'yahoojpn_cid' ),
            "adwords_campaign_id"    => $request->input( 'adwords_campaign_id' ),
            "bing_campaign_id"       => $request->input( 'bing_campaign_id' ),
            "sp_campaign_id"         => $request->input( 'sp_campaign_id' ),
            "ppc_markup"             => $request->input( 'ppc_markup' ),
            "correlation_time"       => $request->input( 'correlation_time' ),
            "timeZone"               => $request->input( 'timeZone' ),
            "show_number"            => $request->input( 'show_number' ),
            "chat_campaign"          => $request->input( 'chat_campaign' ),
            "tracking_type"          => $request->input( 'tracking_type' ),
            "email_tracking"         => $request->input( 'email_tracking' ),
            "email_notify"           => $request->input( 'email_notify' ),
            "text_notify"            => $request->input( 'text_notify' ),
            "cell_to_text"           => $request->input( 'cell_to_text' ),
            "cell_provider"          => $request->input( 'cell_provider' ),
            "phone_format"           => $request->input( 'phone_format' ),
            "default_phone_format"   => $request->input( 'default_phone_format' ),
            "multi_phone"            => $request->input( 'multi_phone' ),
            "greeting"               => $request->input( 'greeting' ),
            "prompt"                 => $request->input( 'prompt' ),
            "record_calls"           => $request->input( 'record_calls' ),
            "greet_voice"            => $request->input( 'greet_voice' ),
            "source_code"            => $source_code,
            "multi_code"             => $multi_code,
            "language"               => $request->input( 'language' ),
            "default_number"         => $request->input( 'default_number' ),
            "post_back_type"         => $request->input( 'post_back_type' ),
            "postback_page"          => $request->input( 'postback_page' ),
            "country_tracking"       => $request->input( 'country_tracking' ),
            "tracking_campaign_type" => $request->input( 'tracking_campaign_type' ),
            "location_tracking"      => $request->input( 'location_tracking' ),
            "location_device"        => $request->input( 'location_device' ),
            "goal1Memo"              => $request->input( 'goal_page1_memo' ),
            "goal1"                  => $request->input( 'goal_page1' ),
            "goal2Memo"              => $request->input( 'goal_page2_memo' ),
            "goal2"                  => $request->input( 'goal_page2' ),
            "goal3Memo"              => $request->input( 'goal_page3_memo' ),
            "goal3"                  => $request->input( 'goal_page3' ),
            "goal4Memo"              => $request->input( 'goal_page4_memo' ),
            "goal4"                  => $request->input( 'goal_page4' ),
            "goal5Memo"              => $request->input( 'goal_page5_memo' ),
            "goal5"                  => $request->input( 'goal_page5' ),
            "goal6Memo"              => $request->input( 'goal_page6_memo' ),
            "goal6"                  => $request->input( 'goal_page6' ),
            "goal7Memo"              => $request->input( 'goal_page7_memo' ),
            "goal7"                  => $request->input( 'goal_page7' ),
            "goal8Memo"              => $request->input( 'goal_page8_memo' ),
            "goal8"                  => $request->input( 'goal_page8' ),
            "goal9Memo"              => $request->input( 'goal_page9_memo' ),
            "goal9"                  => $request->input( 'goal_page9' ),
            "goal10Memo"             => $request->input( 'goal_page10_memo' ),
            "goal10"                 => $request->input( 'goal_page10' ),
            "goal1_inc"              => $request->input( 'goal1_inc' ),
            "goal2_inc"              => $request->input( 'goal2_inc' ),
            "goal3_inc"              => $request->input( 'goal3_inc' ),
            "goal4_inc"              => $request->input( 'goal4_inc' ),
            "goal5_inc"              => $request->input( 'goal5_inc' ),
            "goal6_inc"              => $request->input( 'goal6_inc' ),
            "goal7_inc"              => $request->input( 'goal7_inc' ),
            "goal8_inc"              => $request->input( 'goal8_inc' ),
            "goal9_inc"              => $request->input( 'goal9_inc' ),
            "goal10_inc"             => $request->input( 'goal10_inc' ),
            "tag_words"              => $request->input( 'tag_words' ),
            "save_chat"              => $request->input( 'save_chat' ),
            "avgCalls"               => $request->input( 'avgCalls' ),
            "callsThresh"            => $request->input( 'callsThresh' ),
            "avgClicks"              => $request->input( 'avgClicks' ),
            "clicksThresh"           => $request->input( 'clicksThresh' ),
            "avgEmails"              => $request->input( 'avgEmails' ),
            "emailsThresh"           => $request->input( 'emailsThresh' ),
            "avgGoalPgs"             => $request->input( 'avgGoalPgs' ),
            "goalsThresh"            => $request->input( 'goalsThresh' ),
            "avgConversions"         => $request->input( 'avgConversions' ),
            "convsThresh"            => $request->input( 'convsThresh' ),
            "camp_custom1"           => $request->input( 'camp_custom1' ),
            "camp_custom2"           => $request->input( 'camp_custom2' ),
            "camp_custom3"           => $request->input( 'camp_custom3' ),
            "camp_custom4"           => $request->input( 'camp_custom4' ),
            "camp_custom5"           => $request->input( 'camp_custom5' ),
            "camp_custom6"           => $request->input( 'camp_custom6' ),
            "camp_custom7"           => $request->input( 'camp_custom7' ),
            "camp_custom8"           => $request->input( 'camp_custom8' ),
            "camp_custom9"           => $request->input( 'camp_custom9' ),
            "camp_custom10"          => $request->input( 'camp_custom10' ),
            "last_edited"            => Auth::user()->username,
            "last_update"            => date( "Y-m-d H:i:s", time() )
        );

        $data[ 'email_to_notify_user' ] = $request->input( 'email_to_notify_user' ) ? $request->input( 'email_to_notify_user' ) : 0;
        $data[ 'email_notify_user' ] = $request->input( 'email_notify_user' ) ? $request->input( 'email_notify_user' ) : 0;
        $data[ 'email_to_notify' ] = $request->input( 'email_to_notify' );
        $data[ 'numbers_to_replace' ] = $request->input( 'numbers_to_replace' );
        $data[ 'transfer_to_number' ] = $request->input( 'transfer_to_number' );
        $data[ 'blacklist_words' ] = $request->input( 'blacklist_words' );
        $data[ 'blacklist_ips' ] = $request->input( 'blacklist_ips' );
        $data[ 'call_notification' ] = $call_notification;
        $data[ 'postback_fields' ] = $postback_fields;

        foreach ( $data as $key => $val ) {
            $data[ $key ] = $this->scrubSQL( $val );
        }
        $goal_code = $this->scrubSQL( $request->input( 'goal_code' ) );
        $call_code = $this->scrubSQL( $request->input( 'call_code' ) );

        DB::beginTransaction();
        try {
            $this->setGA_code( $campaign_id, 'goal', $goal_code );
            $this->setGA_code( $campaign_id, 'call', $call_code );
            DB::table( 'campaigns' )
                ->where( 'account_id', $account_id )
                ->where( 'campaign_id', $campaign_id )
                ->update( $data );
            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollback();
            return back()->with( 'error_msg', $ex->getMessage() );
        }

        return back()->with( 'success_msg', "Campaign: " . $campaign_name . ", has been updated." );
    }

    public function delete( $campaign_id, $account_id )
    {
        $user = Auth::user();
        $level = $user->level;
        $data[ 'level' ] = $level;
        $user_account_id = $user->account_id;

        if ( $level == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }

        $data[ 'accountData' ] = Account::where( 'account_id', $account_id )->first();
        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();

        $acctArray = array();
        foreach ( $accounts as $acct ) {
            if ( isset( $acct->account_id ) ) {
                $acctArray[] = $acct->account_id;
            }
        }

        if ( in_array( $account_id, $acctArray ) || $user_account_id == $account_id || $data[ 'campaignDetails' ]->agent_id == $user_account_id ) {
            $data[ 'result' ] = $this->getCampaignPhoneNumbers( $campaign_id );
            $data[ 'campaigns' ] = Campaign::where( 'account_id', $account_id )->get();
            return view( "{$this->viewDir}.delete", $data );
        }
    }

    public function submitDelete( Request $request, $campaign_id )
    {
        $yes = $request->input( 'deleteYes' );
        if ( $yes != 1 ) {
            return back()->with( 'error_msg', 'You must confirm your deletion' );
        }
        $numPhoneNumbers = $request->input( 'numPhoneNumbers' );

        $campaignDetails = Campaign::where( 'campaign_id', $campaign_id )->first();
        if ( !$campaignDetails ) {
            return;
        }
        $account_id = $campaignDetails->account_id;

        DB::beginTransaction();
        try {
            $new_campaign_id = $request->input( 'transferCampaignId' );
            if ( $numPhoneNumbers > 0 && $new_campaign_id ) {
                $this->transferPhoneNumbersToCampaign( $campaign_id, $new_campaign_id );
            }
            // delete campaign
            DB::table( 'campaigns' )->where( 'campaign_id', $campaign_id )->delete();
            DB::commit();
            return redirect()->route( 'accountDetails', [ 'account_id' => $account_id ] );
        } catch ( Exception $ex ) {
            DB::rollback();
            return back()->with( 'error_msg', $ex->getMessage() );
        }
    }

    public function scrubSQL( $string )
    {
        $string = htmlspecialchars( strip_tags( trim( $string ) ) );
        $string = str_replace( "'", "", $string );
        $string = str_replace( ",", "", $string );
        return $string;
    }

    public function setGA_code( $campaign_id, $type, $code )
    {
        $q = DB::table( 'camp_analytics_codes' )->where( [ 'campaign_id' => $campaign_id, 'type' => $type ] )->get();
        if ( !$q ) {
            DB::table( 'camp_analytics_codes' )->insert( [ 'campaign_id' => $campaign_id, 'type' => $type, 'code' => $code ] );
        } else {
            DB::table( 'camp_analytics_codes' )
                ->where( [ 'campaign_id' => $campaign_id, 'type' => $type ] )
                ->update( [ 'campaign_id' => $campaign_id, 'type' => $type, 'code' => $code ] );
        }
    }

    function getGA_codes( $campaign_id, $type = '' )
    {
        $q = DB::table( 'camp_analytics_codes' )->where( 'campaign_id', $campaign_id );
        if ( $type != "" ) {
            $q = $q->where( 'type', $type );
        }
        if ( $type == "" ) {
            return $q->get();
        } else {
            return $q->first();
        }
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
                    <a href="<?php echo $urlDelete; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

    function getUnassignedPhoneNumbers( $account_id )
    {
        return DB::table( 'source_number_inventory' )
                ->where( [ 'account_id' => $account_id, 'campaign_id' => '' ] )
                ->get();
    }

    function getCampaignSourcePhoneNumbers( $campaign_id )
    {
        return DB::table( 'source_number_inventory' )
                ->where( [ 'useable' => 1, 'campaign_id' => $campaign_id ] )
                ->get();
    }

    function getMultiTrackingNumberSets( $account_id, $campaign_id, $multi_phone )
    {
        $result = DB::table( 'multi_tracking_inventory' )
            ->where( 'account_id', $account_id )
            ->where( 'campaign_id', $campaign_id )
            ->where( 'track_phone', '!=', 0 )
            ->get();
        $allTrack = array();
        foreach ( $result as $phone ) {
            $allTrack[ $phone->cust_phone ][] = $phone->track_phone;
        }
        $totalPerGroup = array();
        foreach ( $allTrack as $phoneArr ) {
            $totalPerGroup[] = count( $phoneArr );
        }
        if ( count( $totalPerGroup ) == 0 ) {
            $totalPerGroup = array( 0 );
        }
        $smallestGroup = min( $totalPerGroup );

        return array( 'MIN' => $smallestGroup, 'ALLTRACK' => $allTrack, 'GRPTOTAL' => $totalPerGroup );
    }

    function countMultiPhoneAssigned( $account_id, $campaign_id )
    {
        return DB::table( 'multi_tracking_inventory' )
                ->where( 'account_id', $account_id )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'track_phone', '!=', 0 )->count();
    }

    function getAllCampaignSourcePhoneNumbers( $campaign_id )
    {
        $result = DB::table( 'source_number_inventory' )->where( 'campaign_id', $campaign_id )->get();
        return $result;
    }

    function getCampaignPhoneNumbers( $campaign_id )
    {
        return DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'useable', 1 )
                ->get();
    }

    function getAllCampaignPhoneNumbers( $campaign_id )
    {
        return DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->get();
    }

    function transferPhoneNumbersToCampaign( $old_campaign_id, $new_campaign_id )
    {
        DB::table( 'phone_number_inventory' )
            ->where( 'campaign_id', $old_campaign_id )
            ->update( [ 'campaign_id' => $new_campaign_id ] );
    }

    function actionGoals()
    {
        $data = [];
        $user = Auth::user();
        $data[ 'level' ] = $user->level;
        $data[ 'user_account_id' ] = $user->account_id;
        $data[ 'account' ] = Account::where( 'account_id', $user->account_id )->first();
        $data[ 'campaigns' ] = Campaign::where( 'account_id', $user->account_id )->get();

        if ( $data[ 'level' ] == 5 ) {
            $accounts = $this->accountController->getAccountAgent();
        } else {
            $accounts = $this->accountController->getAccounts();
        }
        $data[ 'accounts' ] = $accounts;
        return view( "{$this->viewDir}.goal-actions", $data );
    }

    function do_saveGoalAction( Request $request )
    {
        $data = $request->input();
        unset( $data[ '_token' ] );
        foreach ( $data as $key => $val ) {
            $data[ $key ] = $this->scrubSQL( $val );
        }
        $data[ 'click_tag' ] = (isset( $data[ 'click_tag' ] )) ? $data[ 'click_tag' ] : '';
        $data[ 'url' ] = (isset( $data[ 'url' ] )) ? $data[ 'url' ] : '';
        if ( count( $data ) > 0 ) {
            $qr = DB::table( 'campaign_triggers' )->insert( $data );
            if ( $qr ) {
                return back()->with( 'success_msg', 'Success' );
            } else {
                return back()->with( 'error_msg', 'Failed' );
            }
        }
    }

    function getClientCampaigns( Request $request )
    {
        $account_id = $request->input( 'account_id' );
        $show_sp = $request->input( 'show_sp' );
        $campaigns = Campaign::where( 'account_id', $account_id )->get();
        foreach ( $campaigns as $campaign ) {
            $show = "";
            if ( $show_sp == TRUE && $campaign->sp_campaign_id != "" ) {
                $show = "(SP)";
            }
            echo "<option value='" . $campaign->campaign_id . "'>" . $campaign->campaign_name . " $show</option>";
        }
    }

    function getCampaignGoals( Request $request )
    {
        $campaign_id = $request->input( 'campaign_id' );
        $info = Campaign::where( 'campaign_id', $campaign_id )->first();

        if ( !isset( $info->campaign_id ) ) {
            echo "<option value=''>Select a Campaign</option>";
        } else {
            echo "<option value=''>Select a Goal</option>";
            if ( $info->goal1Memo != "" ) {
                echo "<option value='1'>" . $info->goal1Memo . "</option>";
            }
            if ( $info->goal2Memo != "" ) {
                echo "<option value='2'>" . $info->goal2Memo . "</option>";
            }
            if ( $info->goal3Memo != "" ) {
                echo "<option value='3'>" . $info->goal3Memo . "</option>";
            }
            if ( $info->goal4Memo != "" ) {
                echo "<option value='4'>" . $info->goal4Memo . "</option>";
            }
        }
    }

    public function addCampaignSourceNumbers( Request $request )
    {
        $campaign_id = $request->get( 'campaign_id' );
        $data[ 'campaign_id' ] = $campaign_id;
        $user = Auth::user();
        $data[ 'level' ] = $user->level;

        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        if ( !isset( $data[ 'campaignDetails' ]->account_id ) ) {
            echo 'Campaign not found';
            exit;
        }
        $data[ 'accountData' ] = Account::where( 'account_id', $data[ 'campaignDetails' ]->account_id )->first();
        return view( "{$this->viewDir}.addCampaignSourceNumbers", $data );
    }

    public function do_addCampaignSourceNumbers( Request $request )
    {
        $this->validate( $request, [
            'account_id'        => 'required',
            'campaign_id'       => 'required',
            'phone_number'      => 'array',
            'phone_number_file' => 'file|max:10000|mimetypes:text/csv,text/plain|mimes:csv,txt',
            'phone_number_file' => 'file',
        ] );

        $numbers = $request->input( 'phone_number', [] );
        $campaign_id = $request->input( 'campaign_id' );
        $account_id = $request->input( 'account_id' );

        $data[ 'campaign_id' ] = $campaign_id;
        $data[ 'result' ] = "";
        DB::beginTransaction();
        try {
            if ( $request->hasFile( 'phone_number_file' ) ) {
                $path = $request->file( 'phone_number_file' )->store( 'csv' );

                $update = [ 'pre_account_id' => $account_id, 'account_id' => '', 'campaign_id' => '' ];

                if ( $path ) {
                    $fullpath = Storage::path( $path );
                    if ( ($handle = fopen( Storage::path( $path ), "r" )) !== FALSE ) {
                        while ( ($data = fgetcsv( $handle, 1000, "," )) !== FALSE ) {
                            DB::table( 'phone_number_inventory' )->where( 'phone_number', $data[ 1 ] )->update( $update );
                            DB::table( 'multi_tracking_inventory' )->where( 'track_phone', $data[ 1 ] )->update( $update );
                            DB::table( 'source_number_inventory' )->where( 'phone_number', $data[ 1 ] )->update( $update );
                            DB::table( 'source_number_inventory' )->insert( [
                                'pre_account_id'  => '',
                                'campaign_id'     => $campaign_id,
                                'account_id'      => $account_id,
                                'source'          => $data[ 0 ],
                                'phone_number'    => $data[ 1 ],
                                'replace_number'  => '',
                                'forward_number'  => $data[ 2 ],
                                'single_tracking' => 0,
                                'device'          => 0,
                                'useable'         => 0,
                                'timestamp'       => Carbon::now()
                            ] );
//                            $this->db->query( "UPDATE phone_number_inventory SET pre_account_id = account_id, account_id = "', campaign_id='' WHERE phone_number='" . $data[ 1 ] . "'" );
//                            $this->db->query( "UPDATE multi_tracking_inventory SET pre_account_id = account_id, account_id = '', campaign_id='' WHERE track_phone='" . $data[ 1 ] . "'" );
//                            $this->db->query( "UPDATE source_number_inventory SET pre_account_id = account_id, account_id = '', campaign_id=''  WHERE phone_number='" . $data[ 1 ] . "'" );
//                            $this->db->insert( 'source_number_inventory', array( "account_id" => $account_id, "campaign_id" => $campaign_id, "source" => $data[ 0 ], "phone_number" => $data[ 1 ], "forward_number" => $data[ 2 ] ) );
                        }
                        fclose( $handle );
                    }
                    unlink( $fullpath );
                }
            } else {
                $update = [ 'pre_account_id' => $account_id, 'account_id' => '', 'campaign_id' => '' ];
                foreach ( $numbers as $key => $number ) {
                    if ( !empty( $number ) ) {
                        DB::table( 'phone_number_inventory' )->where( 'phone_number', $number )->update( $update );
                        DB::table( 'multi_tracking_inventory' )->where( 'track_phone', $number )->update( $update );
                        DB::table( 'source_number_inventory' )->where( 'phone_number', $number )->update( $update );
                        DB::table( 'source_number_inventory' )->insert( [
                            'pre_account_id'  => '',
                            'campaign_id'     => $campaign_id,
                            'account_id'      => $account_id,
                            'source'          => '',
                            'phone_number'    => $number,
                            'replace_number'  => '',
                            'forward_number'  => '',
                            'single_tracking' => 0,
                            'device'          => 0,
                            'useable'         => 0,
                            'timestamp'       => Carbon::now()
                        ] );
                    }
                }
            }

            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollback();
            echo 'failed';
            exit;
        }

        return redirect()->route( 'campaignDetails', [ 'campaign_id' => $campaign_id, 'account_id' => $account_id ] )->with( [ 'success_msg' => 'Numbers Added' ] );
    }

    public function addcampaignnumbers( Request $request )
    {
        $campaign_id = $request->get( 'campaign_id' );
        $data[ 'campaign_id' ] = $campaign_id;
        $user = Auth::user();
        $data[ 'level' ] = $user->level;

        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        if ( !isset( $data[ 'campaignDetails' ]->account_id ) ) {
            echo 'Campaign not found';
            exit;
        }
        $data[ 'accountData' ] = Account::where( 'account_id', $data[ 'campaignDetails' ]->account_id )->first();
        return view( "{$this->viewDir}.addCampaignNumbers", $data );
    }

    public function do_addcampaignnumbers( Request $request )
    {
        $this->validate( $request, [
            'account_id'        => 'required',
            'campaign_id'       => 'required',
            'phone_number'      => 'array',
            'phone_number_file' => 'file|max:10000|mimetypes:text/csv,text/plain|mimes:csv,txt',
        ] );

        $numbers = $request->input( 'phone_number', [] );
        $campaign_id = $request->input( 'campaign_id' );
        $account_id = $request->input( 'account_id' );

        $data[ 'campaign_id' ] = $campaign_id;
        $data[ 'result' ] = "";
        DB::beginTransaction();
        try {
            if ( $request->hasFile( 'phone_number_file' ) ) {
                $path = $request->file( 'phone_number_file' )->store( 'csv' );

                $update = [ 'pre_account_id' => $account_id, 'account_id' => '', 'campaign_id' => '' ];

                if ( $path ) {
                    $fullpath = Storage::path( $path );
                    if ( ($handle = fopen( Storage::path( $path ), "r" )) !== FALSE ) {
                        while ( ($data = fgetcsv( $handle, 1000, "," )) !== FALSE ) {
                            DB::table( 'source_number_inventory' )->where( 'phone_number', $data[ 0 ] )->update( $update );
                            DB::table( 'multi_tracking_inventory' )->where( 'track_phone', $data[ 0 ] )->update( $update );
                            DB::table( 'phone_number_inventory' )->where( 'phone_number', $data[ 0 ] )->update( $update );
                            DB::table( 'phone_number_inventory' )->insert( [
                                'pre_account_id'  => '',
                                'campaign_id'     => $campaign_id,
                                'account_id'      => $account_id,
                                'phone_number'    => $data[ 0 ],
                                'type'            => '',
                                'provider'        => '',
                                'ip'              => '',
                                'session_id'      => '',
                                'phone_id'        => '',
                                'single_tracking' => 0,
                                'device'          => 0,
                                'useable'         => 0,
                                'timestamp'       => Carbon::now()
                            ] );
//                            $this->db->query( "UPDATE phone_number_inventory SET pre_account_id = account_id, account_id = "', campaign_id='' WHERE phone_number='" . $data[ 1 ] . "'" );
//                            $this->db->query( "UPDATE multi_tracking_inventory SET pre_account_id = account_id, account_id = '', campaign_id='' WHERE track_phone='" . $data[ 1 ] . "'" );
//                            $this->db->query( "UPDATE source_number_inventory SET pre_account_id = account_id, account_id = '', campaign_id=''  WHERE phone_number='" . $data[ 1 ] . "'" );
//                            $this->db->insert( 'source_number_inventory', array( "account_id" => $account_id, "campaign_id" => $campaign_id, "source" => $data[ 0 ], "phone_number" => $data[ 1 ], "forward_number" => $data[ 2 ] ) );
                        }
                        fclose( $handle );
                    }
                    unlink( $fullpath );
                }
            } else {
                $update = [ 'pre_account_id' => $account_id, 'account_id' => '', 'campaign_id' => '' ];
                foreach ( $numbers as $key => $number ) {
                    if ( !empty( $number ) ) {
                        DB::table( 'source_number_inventory' )->where( 'phone_number', $number )->update( $update );
                        DB::table( 'multi_tracking_inventory' )->where( 'track_phone', $number )->update( $update );
                        DB::table( 'phone_number_inventory' )->where( 'phone_number', $number )->update( $update );
                        DB::table( 'phone_number_inventory' )->insert( [
                            'pre_account_id'  => '',
                            'campaign_id'     => $campaign_id,
                            'account_id'      => $account_id,
                            'phone_number'    => $number,
                            'type'            => '',
                            'provider'        => '',
                            'ip'              => '',
                            'session_id'      => '',
                            'phone_id'        => '',
                            'single_tracking' => 0,
                            'device'          => 0,
                            'useable'         => 0,
                            'timestamp'       => Carbon::now()
                        ] );
                    }
                }
            }

            DB::commit();
        } catch ( Exception $ex ) {
            DB::rollback();
            echo 'failed';
            exit;
        }

        return redirect()->route( 'campaignDetails', [ 'campaign_id' => $campaign_id, 'account_id' => $account_id ] )->with( [ 'success_msg' => 'Numbers Added' ] );
    }

    function addMultiPhoneNumbers( Request $request )
    {
        $campaign_id = $request->get( 'campaign_id' );
        $data[ 'account_id' ] = $request->get( 'account_id' );
        $data[ 'campaign_id' ] = $campaign_id;
        $user = Auth::user();
        $data[ 'level' ] = $user->level;

        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        if ( !isset( $data[ 'campaignDetails' ]->account_id ) ) {
            echo 'Campaign not found';
            exit;
        }
        $data[ 'accountData' ] = Account::where( 'account_id', $data[ 'campaignDetails' ]->account_id )->first();
        $data[ 'campaignModel' ] = $this->campaignModelController;
        return view( "{$this->viewDir}.addMultiPhoneNumbers", $data );
    }

    function do_addMultiPhoneNumbers( Request $request )
    {
        $this->validate( $request, [
            'account_id'        => 'required',
            'campaign_id'       => 'required',
            'track_phone'       => 'array',
            'phone_name'        => 'array',
            'cust_phone'        => 'array',
            'forward_to'        => 'array',
            'phone_number_file' => 'file|max:10000|mimetypes:text/csv,text/plain|mimes:csv,txt',
        ] );
        $track_phone = $request->input( 'track_phone', [] );
        $phone_name = $request->input( 'phone_name', [] );
        $cust_phone = $request->input( 'cust_phone', [] );
        $forward_to = $request->input( 'forward_to', [] );
        $account_id = $request->input( 'account_id' );
        $campaign_id = $request->input( 'campaign_id' );
        $added = 0;
        $errors = [];
        DB::beginTransaction();
        try {
            if ( $request->hasFile( 'phone_number_file' ) ) {
                $path = $request->file( 'phone_number_file' )->store( 'csv' );

                $update = [ 'pre_account_id' => $account_id, 'account_id' => '', 'campaign_id' => '' ];

                if ( $path ) {
                    $fullpath = Storage::path( $path );
                    if ( ($handle = fopen( Storage::path( $path ), "r" )) !== FALSE ) {
                        while ( ($data = fgetcsv( $handle, 1000, "," )) !== FALSE ) {
                            if ( !isset( $data[ 0 ] ) ) {
                                $errors[] = ' CUSTOMER NUMBER IS NOT SET ';
                                break;
                            }
                            if ( !isset( $data[ 1 ] ) ) {
                                $errors[] = ' TRACKING NUMBER IS NOT SET ';
                                break;
                            }
                            if ( !isset( $data[ 2 ] ) ) {
                                $errors[] = ' FORWARDING NUMBER IS NOT SET ';
                                break;
                            }
                            if ( !isset( $data[ 3 ] ) ) {
                                $errors[] = ' NUMBER NAME IS NOT SET ';
                                break;
                            }
                            if ( !isset( $data[ 4 ] ) ) {
                                $errors[] = ' ORDER ID IS NOT SET ';
                                break;
                            }
                            DB::table( 'phone_number_inventory' )->where( 'phone_number', 'LIKE', "%{$data[ 1 ]}%" )->update( $update );
                            DB::table( 'source_number_inventory' )->where( 'phone_number', 'LIKE', "%{$data[ 1 ]}%" )->update( $update );
                            DB::table( 'multi_tracking_inventory' )->where( 'track_phone', 'LIKE', "%{$data[ 1 ]}%" )->update( $update );
                            DB::table( 'multi_tracking_inventory' )->insert( [
                                'pre_account_id'  => '',
                                'campaign_id'     => $campaign_id,
                                'account_id'      => $account_id,
                                "phone_name"      => $data[ 3 ],
                                'cust_phone'      => $data[ 0 ],
                                "track_phone"     => $data[ 1 ],
                                "forward_to"      => $data[ 2 ],
                                "order_id"        => $data[ 4 ],
                                "active"          => 1,
                                'ip'              => '',
                                'single_tracking' => 0,
                                'device'          => 0,
                                'useable'         => 0,
                                'time_stamp'      => Carbon::now()
                            ] );
                            $this->db->insert( 'multi_tracking_inventory', array( "phone_name" => $data[ 3 ], "account_id" => $account_id, "campaign_id" => $campaign_id, "cust_phone" => $data[ 0 ], "track_phone" => $data[ 1 ], "forward_to" => $data[ 2 ], "order_id" => $data[ 4 ], "active" => 1 ) );
                            $added++;
                        }
                        fclose( $handle );
                    }
                    unlink( $fullpath );
                }
            } else {
                $added = $this->campaignModelController->addMultiPhoneNumbers( $track_phone, $phone_name, $cust_phone, $forward_to, $account_id, $campaign_id );
            }
        } catch ( Exception $ex ) {
            DB::rollback();
            echo 'failed';
            exit;
        }

        if ( count( $errors ) ) {
            return back()->withErrors( $errors );
        }
        return redirect()->route( 'campaignDetails', [ 'campaign_id' => $campaign_id, 'account_id' => $account_id ] )->with( [ 'success_msg' => $added . ' Numbers Added' ] );
    }

    function getMultiPhoneNumbers( Request $request )
    {
        $account_id = $request->input( 'account_id' );
        $result = $this->campaignModelController->getMultiPhoneNumbers( $account_id );

        echo "<option value=''>Select an Existing Number </option>";
        echo "<option value=''>Clear Selected</option>";

        foreach ( $result as $phone ) {
            echo "<option value='" . $phone->cust_phone . "' name='" . $phone->phone_name . "' forward='" . $phone->forward_to . "' >" . $phone->cust_phone . "</option>";
        }
    }

    public function campaignSourcePhoneNumbers( Request $request )
    {
        $account_id = $request->input( 'account_id' );
        $campaign_id = $request->input( 'campaign_id' );
        $user = Auth::user();
        $data[ 'level' ] = $user->level;

        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        $data[ 'campaignPhoneNumbers' ] = $this->campaignModelController->getAllCampaignSourcePhoneNumbers( $campaign_id );

        if ( !isset( $data[ 'campaignDetails' ]->account_id ) ) {
            exit;
        }

        $data[ 'account_id' ] = $data[ 'campaignDetails' ]->account_id;
        $data[ 'accountData' ] = Account::where( 'account_id', $data[ 'account_id' ] )->first();

        return view( "{$this->viewDir}.viewSourceCampaignPhoneNumbers", $data );
    }

    public function removeSourceCampaignNumbers( Request $request )
    {
        $this->validate( $request, [
            'account_id'     => 'required',
            'campaign_id'    => 'required',
            'forward_number' => 'array',
            'replace_number' => 'array',
            'source'         => 'array',
            'allNumbers'     => 'array',
        ] );

        $numbers = $request->input( 'phoneNumber' );
        $forward_number = $request->input( 'forward_number' );
        $replace_number = $request->input( 'replace_number' );
        $source = $request->input( 'source' );
        $allNumbers = $request->input( 'allNumbers' );
        $campaign_id = $request->input( 'campaign_id' );

        $camp_info = Campaign::where( 'campaign_id', $campaign_id )->first();

        $data[ 'result' ] = '';

        if ( isset( $numbers[ 0 ] ) ) {
            foreach ( $numbers as $key => $id ) {
                DB::table( 'source_number_inventory' )
                    ->where( 'id', $id )
                    ->delete();
            }
        }

        if ( isset( $allNumbers[ 0 ] ) ) {
            foreach ( $allNumbers as $key => $id ) {
                $value = $_POST[ 'non_' . $id ];
                DB::table( 'source_number_inventory' )
                    ->where( 'id', $id )
                    ->where( 'campaign_id', $campaign_id )
                    ->update( [
                        "useable"        => $value,
                        "forward_number" => $forward_number[ $key ] | 0,
                        "replace_number" => $replace_number[ $key ] | 0,
                        "source"         => $source[ $key ] | 0
                    ] );
            }
        }
        return back();
    }

    public function campaignPhoneNumbers( Request $request )
    {
        $account_id = $request->input( 'account_id' );
        $campaign_id = $request->input( 'campaign_id' );
        $user = Auth::user();
        $data[ 'level' ] = $user->level;

        $data[ 'campaignDetails' ] = Campaign::where( 'campaign_id', $campaign_id )->first();
        $data[ 'campaignPhoneNumbers' ] = $this->campaignModelController->getAllCampaignPhoneNumbers( $campaign_id );

        if ( !isset( $data[ 'campaignDetails' ]->account_id ) ) {
            exit;
        }

        $data[ 'account_id' ] = $data[ 'campaignDetails' ]->account_id;
        $data[ 'accountData' ] = Account::where( 'account_id', $data[ 'account_id' ] )->first();

        return view( "{$this->viewDir}.viewCampaignPhoneNumbers", $data );
    }

    public function removecampaignnumbers( Request $request )
    {
        $this->validate( $request, [
            'account_id'  => 'required',
            'campaign_id' => 'required',
            'phoneNumber' => 'array',
            'allNumbers'  => 'array',
        ] );

        $numbers = $request->input( 'phoneNumber' );
        $allNumbers = $request->input( 'allNumbers' );
        $campaign_id = $request->input( 'campaign_id' );
        $camp_info = Campaign::where( 'campaign_id', $campaign_id )->first();

        $data[ 'result' ] = '';
        if ( isset( $numbers[ 0 ] ) ) {
            foreach ( $numbers as $key => $id ) {
                DB::table( 'phone_number_inventory' )
                    ->where( 'id', $id )
                    ->where( 'campaign_id', $campaign_id )
                    ->update( [ "campaign_id" => "_" ] );
            }
        }
        if ( isset( $allNumbers[ 0 ] ) ) {
            foreach ( $allNumbers as $key => $id ) {
                $value = $_POST[ 'non_' . $id ];
                DB::table( 'phone_number_inventory' )
                    ->where( 'id', $id )
                    ->where( 'campaign_id', $campaign_id )
                    ->update( [ "useable" => $value ] );
            }
        }
        return back();
    }

}
