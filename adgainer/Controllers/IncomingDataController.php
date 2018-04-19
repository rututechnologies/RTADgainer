<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Campaign;
use Adgainer\Models\PhoneNumberInventory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Thytanium\Agent\Facades\Agent;
use function base_url;
use function get_ip_address;
use function gmt_to_local;
use function mdate;
use function response;

class IncomingDataController extends Controller
{
    protected $viewDir = 'adgainer.incomingdata';
    protected $viewDirTracking = 'adgainer.tracking';

//    var $visitor;

    public function __construct()
    {
//        $this->controller_url = 'adgainer';
    }

    public function index( Request $request )
    {
        if ( Agent::isRobot() ) {
            exit;
        }
        $campaign_id = $request->input( 'campaign_id' );
        /// get campaign
        $campaign = Campaign::where( 'campaign_id', $campaign_id )->first();
        if ( ! $campaign ) {
            exit;
        }
        // get numbers to replace and trackng number
        $data[ 'numbers_to_replace' ] = $campaign->numbers_to_replace;

        // get visitor and validate
        $visitor = get_ip_address();
//        $visitor = '1.1.1.3';
        $this->validateIP( $visitor, $campaign );

        $data[ 'tracking_number' ] = $this->getTrackingNumber( $campaign, $visitor ) ?: $campaign->default_number;
        if ( empty( $data[ 'numbers_to_replace' ] ) || empty( $data[ 'tracking_number' ] ) ) {
            exit;
        }

        return response()
                ->view( "{$this->viewDirTracking}.trackingscript", $data )
                ->header( 'content-type', 'application/x-javascript' );
    }

    public function getCode( Request $request )
    {
        // get campaign id
        $campaign_id = $request->input( 'campaign_id' );
        if ( $request->input( 'url_campaign_id' ) ) {
            $campaign_id = $request->input( 'url_campaign_id' );
        }
        if ( $request->input( 'display_ad_id' ) ) {
            $campaign_id = $request->input( 'display_ad_id' );
        }
        echo "//\n// $campaign_id\n";
        if ( strlen( $campaign_id ) > 32 ) {
            $campaign_id = substr( $campaign_id, 0, 32 );
        }
        if ( $campaign_id == '' ) {
            exit;
        }
        // vars
        $vars = $request->input( 'vars' );
        // referer
        $referrer = $request->input( 'referrer' );
        return response()
                ->view( "{$this->viewDir}.getcode", [ 'vars' => $vars, 'referrer' => $referrer, 'campaign_id' => $campaign_id ] )
                ->header( 'content-type', 'application/x-javascript' );
    }

    public function tagManager( Request $request )
    {
        $referrer = $request->input( 'referrer' );
        $campaign_id = $request->input( 'campaign_id' );
        $vars = $request->input( 'vars' );
        $vars = urldecode( $vars );
        $url_campign_id_url = '';

        if ( ! $campaign_id ) {
            return response()->json( [ 'scripts' => [] ] );
        }
        $campInfo = Campaign::where( 'campaign_id', $campaign_id )->first();

        if ( ! $campInfo || $campInfo->active != 1 ) {
            return response()->json( [ 'scripts' => [] ] );
        }

        $code = array(
            'scripts' => array(),
            'campaign_id' => array()
        );
        if ( $campInfo->email_code == 1 ) {
            $code[ 'scripts' ][] = array(
                'script' => base_url(
                    sprintf(
                        'incomingdata/email_tracking_js_code/?formId=&class=&campaignId=%s%s', $campaign_id, $url_campign_id_url
                    )
                )
            );
        }
        if ( $campInfo->heatmap_code == 1 ) {
            $code[ 'scripts' ][] = array( 'script' => sprintf( '%sapplication/js/heatmap.js', base_url() ) );
        }
        if ( $campInfo->multi_code == 1 ) {
            $code[ 'scripts' ][] = array(
                'script' => base_url(
                    sprintf(
                        'incomingdata/multi_track?campaign_id=%s%s&vars=%s&referrer=%s', $campaign_id, $url_campign_id_url, $vars, $referrer
                    )
                )
            );
        } else {
            if ( $campInfo->source_code == 1 ) {
                $code[ 'scripts' ][] = array(
                    'script' => base_url(
                        sprintf(
                            'incomingdata/source_track?campaign_id=%s%s&vars=%s&referrer=%s', $campaign_id, $url_campign_id_url, $vars, $referrer
                        )
                    )
                );
            } else {
                $code[ 'scripts' ][] = array(
                    'script' => base_url(
                        sprintf(
                            'incomingdata/?campaign_id=%s%s&vars=%s&referrer=%s', $campaign_id, $url_campign_id_url, $vars, $referrer
                        )
                    )
                );
            }
        }
        return response()->json( [ 'scripts' => $code[ 'scripts' ] ] );
    }

    public function getTrackingNumber( $campaign, $visitor )
    {
        $campaign_id = $campaign->campaign_id;
        $tracking_number = '';

        // get phone number by visitor
        $phoneTimeUse = DB::table( 'phone_time_use' )
            ->select( 'phone_number' )
            ->where( 'campaign_id', $campaign_id )
            ->where( 'ip', $visitor )
            ->orderBy( 'id', 'DESC' )
            ->first();
        if ( $phoneTimeUse && $phoneTimeUse->phone_number !== '' ) {
            // check if phone_number is exist and usable
            $phone_number_inventory = DB::table( 'phone_number_inventory' )
                ->select( 'useable' )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'phone_number', $phoneTimeUse->phone_number )
                ->where( 'useable', '1' )
                ->first();
            if ( $phone_number_inventory ) {
                $phone_number = $phoneTimeUse->phone_number;
                return $phone_number;
            }
        }

        // new visitor
        // get active and useable number
        $phone_number_inventory = DB::table( 'phone_number_inventory' )
            ->select( 'phone_number' )
            ->where( 'campaign_id', $campaign_id )
            ->where( 'active', '0' )
            ->where( 'useable', '1' )
            ->orderBy( 'id', 'ASC' )
            ->first();
        // any active number
        if ( $phone_number_inventory && $phone_number_inventory->phone_number ) {
            $tracking_number = $phone_number_inventory->phone_number;
            // update phone number to active
            DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'phone_number', $phone_number_inventory->phone_number )
                ->update( [ 'active' => '1' ] );
        } else {
            // no active number
            DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->update( [ 'active' => '0' ] );
            // get active and useable number
            $phone_number_inventory = DB::table( 'phone_number_inventory' )
                ->select( 'phone_number' )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'active', '0' )
                ->where( 'useable', '1' )
                ->orderBy( 'id', 'ASC' )
                ->first();
            $tracking_number = $phone_number_inventory->phone_number;

            // update phone number to active
            DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->where( 'phone_number', $phone_number_inventory->phone_number )
                ->update( [ 'active' => '1' ] );
        }

        // update phone_time_use
        if ( $tracking_number !== '' ) {
            $insert_raw = "INSERT IGNORE INTO phone_time_use (phone_number, account_id, campaign_id, ip) VALUES ('$tracking_number', '$campaign->account_id', '$campaign_id','$visitor')";
            DB::select( $insert_raw );
        }

        return $tracking_number;
    }

    public function getTrackingNumber_( $campaign, $visitor )
    {
        $campaign_id = $campaign->campaign_id;
        $tracking_number = '';
        // get phone_time_use by ip
        $unix_current_date = time(); // today

        $phone_expiration_secs = ($campaign->correlation_time * 60 * 60);    // 3600
        $newTime = gmt_to_local( ($phone_expiration_secs + $unix_current_date ), 'UM1', TRUE );
        $expired_phone = mdate( '%Y-%m-%d %H:%i:%s', $newTime );
        $newTime2 = gmt_to_local( ($unix_current_date - $phone_expiration_secs ), 'UM1', TRUE );
        $time_before_current = mdate( '%Y-%m-%d  %H:%i:%s', $newTime2 ); // time before entry
        // TODO: cache phone time use by session
        // TODO: time_stamp
        $phoneTimeUse = DB::table( 'phone_time_use' )
            ->where( 'campaign_id', $campaign_id )
            ->where( 'ip', $visitor )
//            ->where( 'time_stamp', '<', $expired_phone )
//            ->where( 'time_stamp', '>=', $time_before_current )
            ->orderBy( 'id', 'desc' )
            ->limit( 1 )
            ->first();
        // if no ip
        // TODO: compare with cache
//        var_dump( $expired_phone);
//        var_dump( $time_before_current);
//        var_dump( $phoneTimeUse);exit;
        if ( $phoneTimeUse ) {
            $tm = strtotime( $phoneTimeUse->time_stamp );
            $current_time = time();
            if ( $current_time > ($phone_expiration_secs + $tm) ) {
                // update phone_number_inventory to set not active
                DB::table( 'phone_number_inventory' )
                    ->where( 'campaign_id', $campaign_id )
                    ->where( 'timestamp', '<', $time_before_current )
                    ->update( [ 'active' => 0 ] );
            }
            // get phone number inventory left join
            $check_visit = "SELECT u.phone_number
				FROM phone_time_use as u
				LEFT JOIN phone_number_inventory as p
				ON (u.campaign_id = p.campaign_id AND u.phone_number = p.phone_number)
				WHERE u.ip = '$visitor' and u.campaign_id='$campaign_id'
				and '" . date( "Y-m-d H:i:s" ) . "' < DATE_ADD(u.time_stamp,INTERVAL u.time_out_duration SECOND)
				order by u.id desc";
            $phoneTimeUseNumber = DB::select( $check_visit );
            if ( isset( $phoneTimeUseNumber[ 0 ] ) && isset( $phoneTimeUseNumber[ 0 ]->phone_number ) ) {
                $tracking_number = $phoneTimeUseNumber[ 0 ]->phone_number;
//                var_dump( $phoneTimeUseNumber );
//                exit;
            }
        }

        if ( $tracking_number === '' ) {
            $phoneNumberInventory = PhoneNumberInventory::where( [
                    'campaign_id' => $campaign->campaign_id,
                    'active' => '0',
                    'useable' => '1',
                ] )->first();
            if ( $phoneNumberInventory && $phoneNumberInventory->phone_number !== '' ) {
                $tracking_number = $phoneNumberInventory->phone_number;
            }

            // insert phone_time_use
            $insert_raw = "INSERT IGNORE INTO phone_time_use (phone_number, account_id, campaign_id, ip, time_out_duration) VALUES ('$tracking_number', '$campaign->account_id', '$campaign_id','$visitor','$phone_expiration_secs')";
            DB::select( $insert_raw );
            // TODO: if inserted ?
            $current_date = mdate( "%Y-%m-%d %H:%i:%s", time() );
            DB::table( 'phone_number_inventory' )
                ->where( 'phone_number', $tracking_number )
                ->where( 'campaign_id', $campaign_id )
                ->update( [ 'active' => 1, 'timestamp' => $current_date, 'ip' => $visitor ] );
        }
//        var_dump( $tracking_number );
//        exit;
        return $tracking_number;
    }

    public function validateIP( $visitor, $campaign_id )
    {
        if ( empty( $visitor ) ) {
            exit;
        }
    }

}
