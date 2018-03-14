<?php
namespace App\Http\Controllers\Autoissue;

use App\Http\Controllers\Controller;
use App\Account;
use App\Campaign;
use App\IntecClient;
use App\Http\Controllers\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Libraries\Intecapi\CallnotesWebService;

class AutoissueController extends Controller
{

    protected $accountController;
    //
    protected $view_dir = 'autoissue.';
    //
    private static $VENDORS = array(
        'intec' => array(
            'numbers' => array( '050' => 10, '0800' => 10, '0120' => 1, 'any' => 10 ),
            'functions' => array(
                'func1' => true, // 時間外転送
                'func2' => true, // 通話録音機能
                'func3' => false, // コールキューイング
                'func4' => true, // 音声ガイダンス機能(IVR)
                'func5' => false, // 音声合成機能
                'func6' => false  // SMS連携機能(Twilio)
            )
        ),
        'comsquare' => array(
            'numbers' => array( '050' => 1, '0800' => 1, '0120' => 0, 'any' => 10 ),
            'functions' => array(
                'func1' => false, // 時間外転送
                'func2' => false, // 通話録音機能
                'func3' => true, // コールキューイング
                'func4' => true, // 音声ガイダンス機能(IVR)
                'func5' => false, // 音声合成機能
                'func6' => false   // SMS連携機能(Twilio)
            )
        ),
        'twilio' => array(
            'numbers' => array( '050' => 10, '0800' => 10, '0120' => 0, 'any' => 10 ),
            'functions' => array(
                'func1' => true, // 時間外転送
                'func2' => true, // 通話録音機能
                'func3' => false, // コールキューイング
                'func4' => true, // 音声ガイダンス機能(IVR)
                'func5' => true, // 音声合成機能
                'func6' => true   // SMS連携機能(Twilio)
            )
        )
    );

    public function __construct( AccountController $accountController )
    {
        $this->accountController = $accountController;
    }

    /**
     * view index page with buttons
     */
    public function index()
    {
        return view( $this->view_dir . 'index' );
    }

    /**
     * view transfer setting page
     */
    public function transferSetting()
    {
        $account_list = $this->accountController->getAccounts();
        return view( $this->view_dir . 'transfer-setting', compact( 'account_list' ) );
    }

    /**
     * view change client number page
     */
    public function changeClientNumber()
    {
        \Illuminate\Support\Facades\Log::debug('ok');
        $account_list = $this->accountController->getAccounts();
        return view( $this->view_dir . 'change-client-number', compact( 'account_list' ) );
    }

    /**
     * view schedule page
     */
    public function schedule()
    {
        $account_list = $this->accountController->getAccounts();
        return view( $this->view_dir . 'schedule', compact( 'account_list' ) );
    }

    /**
     * view intec client page
     */
    public function intecClient()
    {
        return view( $this->view_dir . 'intec-client' );
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
     * Get intec clients json data by campaign_id.
     */
    public function getIntecClients( $campaign_id )
    {
        // get campaigns
        $clients = IntecClient::where( 'campaign_id', $campaign_id )->get();
        if ( $clients->count() > 0 ) {
            return response()->json( $clients );
        } else {
            return response( 'Failed API: Clinets Data Not Found', 500 );
        }
    }

    /**
     * get instance of CallnotesClient
     */
    public function getServiceClient( $service_cd )
    {
        // get intec account setting based on service_cd of client
        $all_accounts = config( 'intec.accounts' );
        $account = array_filter( $all_accounts, function($o)use($service_cd) {
            if ( $o[ 'support_cd' ] != $service_cd ) {
                return false;
            }
            return true;
        } );
        // get first only
        if ( $account ) {
            $account = array_shift( $account );
        } else {
//            return response( 'Failed API: no intec account', 500 );
            return null;
        }

        // get instance of CallnotesClient by CallnotesWebService
        $callnote_web_service = new CallnotesWebService( $account );
        try {
            return $callnote_web_service->getServiceClient();
        } catch ( Exception $e ) {
//            return response( 'Failed API: 通信に失敗しました。[' . $e->getMessage() . ']', 500 );
            return null;
        }
    }

    /**
     * Update client number
     */
    public function updateClientNumber( Request $request )
    {
        // validation
        // required id and client_number
        $this->validate( $request, [
            'id' => 'required',
            'client_number' => 'required',
        ] );
        $id = $request->input( 'id' );
        $client_number = $request->input( 'client_number' );

        // //
        // get intec client model
        $client = IntecClient::find( $id );
        if ( ! $client ) {
            return response( 'Failed API: intec_clinet record not find', 500 );
        }
        $service_cd = $client->service_cd;
        $client_cd = $client->client_cd;

        /*
         * ================================
         * Begin call note API
         * ================================
         */
        // get instance of CallnotesClient
        $callnoteClient = $this->getServiceClient( $service_cd );
        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        // update client number to CallnotesClient
        try {
            $callnoteClient->update( $client_cd, array(
                'client_number' => $client_number,
            ) );
        } catch ( Exception $e ) {
            return response( 'Failed API: ' . $e->getMessage(), 500 );
        }
        /*
         * ================================
         * End call note API
         * ================================
         */

        // update intec client model
        $last_time_number = $client->client_number;
        $client->last_time_number = $last_time_number;
        $client->client_number = $client_number;
        if ( $client->save() ) {
            // 以下、multiの時のみ「cust_phone」を更新する
            // update multi_tracking_inventory table
            if ( $client->table_name == 'multi_tracking_inventory' ) {
                DB::table( 'multi_tracking_inventory' )
                    ->where( 'id', $client->table_id )
                    ->update( [
                        'cust_phone' => $client_number,
                        'time_stamp' => \Carbon\Carbon::now(),
                    ] );
            }

            // return response
            return response()->json( $client );
        } else {
            return response( 'Failed API: Could not update intec_clients table.', 500 );
        }
    }

    /**
     * Get schedule list
     */
    public function scheduleList( $client_id )
    {
        //
        // get intec client model
        $client = IntecClient::find( $client_id );
        if ( ! $client ) {
            return response( 'Failed API: intec_clinet record not find', 500 );
        }
        $service_cd = $client->service_cd;
        $client_cd = $client->client_cd;

        /*
         * sample
         */
//        $inusetype = array( 'test' => 'ok' );
//        $res = array(
//            'schedule_list' => array(
//                'dow' => 'mon',
//                'starttime' => '0230',
//                'endtime' => '0645',
//                'action' => '2',
//                'plan_cd' => '1',
//                'number' => '123456789',
//                'inusetype' => $inusetype,
//            )
//        );
//        return response()->json( $res );
//        return response()->json( array() );
        /*
         * end sample
         */

        // get and return schedule plan list
        /*
         * ================================
         * Begin call note API
         * ================================
         */
        // get instance of CallnotesClient
        $callnoteClient = $this->getServiceClient( $service_cd );
        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        // update client number to CallnotesClient
        try {
            $res = $callnoteClient->schedulePlanList( $client_cd );

            if ( ! empty( $res ) ) {
                return response()->json( $res );
            } else {
                return response()->json( '' );
            }
        } catch ( Exception $e ) {
            return response( 'Failed API: ' . $e->getMessage(), 500 );
        }
        /*
         * ================================
         * End call note API
         * ================================
         */
    }

    /**
     * register schedule
     */
    public function schedulePlanCreate( Request $request )
    {
        // validate input
        $this->validate( $request, [
            'id' => 'required',
            'transfer_number' => 'required',
            'args' => 'required|array',
        ] );

        $id = $request->input( 'id' );
        $transfer_number = $request->input( 'transfer_number' );
        $args = $request->input( 'args' );

        // get intec client model
        $client = IntecClient::find( $id );
        if ( ! $client ) {
            return response( 'Failed API: intec_clinet record not find', 500 );
        }

        $service_cd = $client->service_cd;
        $client_cd = $client->client_cd;

        // demo
        // return $this->scheduleList( $id );
        /*
         * ================================
         * Begin call note API
         * ================================
         */
        // get instance of CallnotesClient
        $callnoteClient = $this->getServiceClient( $service_cd );
        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        // create schedule plan
        try {
            $callnoteClient->scheduleTransferNumber( $client_cd, [ 'transfer_number' => $transfer_number ] );

            foreach ( $args as $arg ) {
                if ( ! empty( $arg[ 'plan_cd' ] ) ) {
                    $callnoteClient->schedulePlanDelete( $client_cd, $arg[ 'plan_cd' ] );
                }
                $data = [
                    'dow' => $arg[ 'dow' ],
                    'starttime' => $arg[ 'starttime' ],
                    'endtime' => $arg[ 'endtime' ],
                    'act' => $arg[ 'act' ],
                ];
                $res = $callnoteClient->schedulePlanCreate( $client_cd, $data );
            }
            return $this->scheduleList();
        } catch ( Exception $e ) {
            return response( 'Faild schedulePlanCreate API: ' . $e->getMessage(), 500 );
        }
        /*
         * ================================
         * End call note API
         * ================================
         */
    }

    /**
     * Stop or start schedule plan
     */
    public function scheduleSetInuse( Request $request )
    {
        // validate input
        $this->validate( $request, [
            'id' => 'required',
            'plan_cd' => 'required',
            'action' => 'required',
        ] );

        $id = $request->input( 'id' );
        $plan_cd = $request->input( 'plan_cd' );
        $action = $request->input( 'action' );
        // get intec client model
        $client = IntecClient::find( $id );
        if ( ! $client ) {
            return response( 'Failed API: intec_clinet record not find', 500 );
        }

        // demo
        // return $this->scheduleList( $id );

        $service_cd = $client->service_cd;
        $client_cd = $client->client_cd;

        /*
         * ================================
         * Begin call note API
         * ================================
         */
        // get instance of CallnotesClient
        $callnoteClient = $this->getServiceClient( $service_cd );
        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        // create schedule plan
        try {
            if ( $action === 'start' ) {
                $callnoteClient->schedulePlanStart( $client_cd, $plan_cd );
            } else {
                $callnoteClient->schedulePlanStop( $client_cd, $plan_cd );
            }
            return $this->scheduleList();
        } catch ( Exception $e ) {
            if ( $action === 'start' ) {
                return response( 'Failed schedulePlanStart API: ' . $e->getMessage(), 500 );
            } else {
                return response( 'Failed schedulePlanStop API: ' . $e->getMessage(), 500 );
            }
        }
        /*
         * ================================
         * End call note API
         * ================================
         */
    }

    /**
     * delete schedule plan
     */
    public function schedulePlanDelete( Request $request )
    {
        // validate input
        $this->validate( $request, [
            'id' => 'required',
            'plan_cd' => 'required',
        ] );

        $id = $request->input( 'id' );
        $plan_cd = $request->input( 'plan_cd' );
        // get intec client model
        $client = IntecClient::find( $id );
        if ( ! $client ) {
            return response( 'Failed API: intec_clinet record not find', 500 );
        }

        // demo
        // return $this->scheduleList( $id );

        $service_cd = $client->service_cd;
        $client_cd = $client->client_cd;

        /*
         * ================================
         * Begin call note API
         * ================================
         */
        // get instance of CallnotesClient
        $callnoteClient = $this->getServiceClient( $service_cd );
        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        // create schedule plan
        try {
            $callnoteClient->schedulePlanDelete( $client_cd, $plan_cd );
            return $this->scheduleList();
        } catch ( Exception $e ) {
            return response( 'Failed schedulePlanDelete API: ' . $e->getMessage(), 500 );
        }
        /*
         * ================================
         * End call note API
         * ================================
         */
    }

    /**
     * Acquire Phone Numbers.
     */
    public function acquirePhoneNumbers( Request $request )
    {
        // validate input
        $this->validate( $request, [
            'account_id' => 'required',
            'campaign_id' => 'required',
            'corp' => 'required',
            'funcs' => 'required|array',
            'row_sources' => 'required|array',
        ] );

        $account_id = $request->input( 'account_id' );
        $campaign_id = $request->input( 'campaign_id' );
        $corp = $request->input( 'corp' );
        $funcs = $request->input( 'funcs' );
        $sources = $request->input( 'row_sources' );

        /*
         * Get vendor
         */
        $supported = array_filter( self::$VENDORS, function($x)use($funcs, $corp) {
            if ( $x[ 'numbers' ][ $corp ] == 0 ) {
                return false;
            }
            foreach ( $funcs as $func ) {
                if ( $x[ 'functions' ][ $func ] == false ) {
                    return false;
                }
            }
            return true;
        } );
        $vendor_name = '';
        foreach ( $supported as $name => $value ) {
            $vendor_name = $name;
            break;
        }

        // get account and campaign model
        $account = Account::where( 'account_id', $account_id )->first();
        $campaign = Campaign::where( 'campaign_id', $campaign_id )->first();
        $intecClient = IntecClient::where( 'account_id', $account_id )->first();
        if ( ! $account || ! $campaign || ! $intecClient ) {
            return response( 'Failed API: record not find', 500 );
        }
        $camp_type = '';

        if ( $campaign->multi_code == 1 ) {
            $camp_type = 'multi_tracking_inventory';
        } else if ( $campaign->source_code == 1 ) {
            $camp_type = 'source_number_inventory';
        } else {
            $camp_type = 'phone_number_inventory';
        }
        /*
         * End Get vendor
         */

        /*
         *  get intec account setting based on corp and funcs
         */
        $intec_account = null;
        $all_accounts = config( 'intec.accounts' );
        $supported_intec_accounts = array_filter( $all_accounts, function($o)use($corp, $funcs) {
            if ( $corp != 'any' && $o[ 'support_number' ] != $corp ) {
                return false;
            }
            if ( array_search( 'func2', $funcs ) != FALSE && ! $o[ 'rec' ] ) {
                return false;
            }
            if ( array_search( 'func4', $funcs ) != FALSE && ! $o[ 'ivr' ] ) {
                return false;
            }
            return true;
        } );
        // get first only
        if ( $supported_intec_accounts ) {
            $intec_account = array_shift( $supported_intec_accounts );
        } else {
            return response( 'Failed API: no intec account', 500 );
        }

        // get instance of CallnotesClient by CallnotesWebService
        $callnote_web_service = new CallnotesWebService( $account );
        try {
            $callnoteClient = $callnote_web_service->getServiceClient();
        } catch ( Exception $e ) {
            return response( 'Failed API: 通信に失敗しました。[' . $e->getMessage() . ']', 500 );
        }

        if ( empty( $callnoteClient ) ) {
            return response( 'Failed API: 通信に失敗しました。', 500 );
        }

        //
        //
        switch ( $vendor_name ) {
            case "intec":
                // get client cd
                $client_cd_ = $intecClient->client_cd;
                $res = preg_match( '/^A(\d{5})C(\d{4})T(\d{6})$/', $client_cd_, $matches );
                $c = ($res === 1) ? intval( $matches[ 2 ] ) + 1 : 1;
                $client_cd = sprintf( "A%05dC%04dT%s", $account->id, $c, date( "His" ) );

                foreach ( $sources as $source ) {
                    try {
                        $res = $callnoteClient->create( array(
                            'client_cd' => $client_cd,
                            'client_number' => $source,
                            'name' => $account->accountName,
                            'client_mail' => $account->email,
                            'client_ccy_push_mail' => $account->email,
                            'client_web_use' => '1',
                            'client_sms_use' => '1',
                            'customer_number_disp' => '1',
                            ) );
                    } catch ( Exception $e ) {
                        return response( 'Failed API: [' . $e->getMessage() . ']', 500 );
                    }

                    // store intec data
                    $values = array(
                        'service_cd' => $intec_account[ 'support_cd' ],
                        'client_cd' => $client_cd,
                        'client_name' => $account->accountName,
                        'client_number' => $source,
                        'cnt_number' => $res->publish->number,
                        'account_id' => $account->account_id,
                        'campaign_id' => $campaign->campaign_id,
                        'attach_cd' => $res->publish->attachCd,
                        'inuse' => 'active',
                    );

                    $this->storeIntecData( $values, $camp_type );

                    // TODO: send email
                    // 通知メールの送信
//                    $user = $_SESSION[ 'username' ];
//                    $phone = $res->publish->number;
//                    $to = 'jpnsales@adgainer.co.jp';
//                    $subject = 'A new phone number has been issued.';
//                    $body = <<< BODY
//Dear ADgainer members.
//
//A new phone number was issued by operation of account $user.
//For the issued telephone number, refer to the following.
//
//Account: $account->accountName
//Campaign: $campaign->campaign_name
//Phone number: $phone
//
//This mail will be sent automatically when a phone number is issued.
//please confirm.
//BODY;
//                    $result = mail( $to, $subject, $body );
                    //log_message('DEBUG', "Autoissue mail body = $body");
                    //log_message('DEBUG', "Autoissue mail send = $result");
                }
                break;
        }
        
        return $this->getIntecClients( $campaign_id );
    }

    /**
     * Store intec data
     */
    public function storeIntecData( $values, $camp_type )
    {
        DB::beginTransaction();
        try {
            // insert inventory table
            $table_item = '';
            $data = [];

            if ( $camp_type == 'phone_number_inventory' ) {
                $data = [
                    'account_id' => $values[ 'account_id' ],
                    'campaign_id' => $values[ 'campaign_id' ],
                    'phone_number' => $values[ 'cnt_number' ]
                ];
                $table_item = 'phone_number';
            }

            if ( $camp_type == 'source_number_inventory' ) {
                $data = [
                    'account_id' => $values[ 'account_id' ],
                    'campaign_id' => $values[ 'campaign_id' ],
                    'phone_number' => $values[ 'cnt_number' ],
                    'timestamp' => mdate( "%Y-%m-%d %H:%i:%S", now() )
                ];
                $table_item = 'phone_number';
            }

            if ( $camp_type == 'multi_tracking_inventory' ) {
                $data = [
                    'account_id' => $values[ 'account_id' ],
                    'campaign_id' => $values[ 'campaign_id' ],
                    'cust_phone' => $values[ 'client_number' ],
                    'track_phone' => $values[ 'cnt_number' ],
                    'order_id' => 1,
                    'time_stamp' => mdate( "%Y-%m-%d %H:%i:%S", now() )
                ];
                $table_item = 'track_phone';
            }
            $table_id = 0;
            if ( ! empty( $data ) ) {
                $table_id = DB::table( $camp_type )->insertGetId( $data );
                if ( ! $table_id ) {
                    DB::rollback();
                    return false;
                }
            }

            // insert intec client
            DB::table( 'intec_clients', array(
                'service_cd' => $values[ 'service_cd' ],
                'client_cd' => $values[ 'client_cd' ],
                'client_name' => $values[ 'client_name' ],
                'client_number' => $values[ 'client_number' ],
                'cnt_number' => $values[ 'cnt_number' ],
                'attach_cd' => $values[ 'attach_cd' ],
                'inuse' => $values[ 'inuse' ],
                'table_name' => $camp_type,
                'table_item' => $table_item,
                'table_id' => $table_id,
                'account_id' => $values[ 'account_id' ],
                'campaign_id' => $values[ 'campaign_id' ],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ) );

            DB::commit();
            // all good
        } catch ( \Exception $e ) {
            DB::rollback();
        }
    }

}
