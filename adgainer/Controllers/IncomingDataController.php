<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Campaign;
use Adgainer\Models\PhoneNumberInventory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Thytanium\Agent\Facades\Agent;
use function base_url;
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
        $data[ 'tracking_number' ] = $this->getTrackingNumber( $campaign_id ) ?: $campaign->default_number;
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

    public function getTrackingNumber( $campaign_id )
    {
        $phoneNumberInventory = PhoneNumberInventory::where( [
                'campaign_id' => $campaign_id,
                'active' => '0',
                'useable' => '1',
            ] )->first();
        if ( $phoneNumberInventory ) {
            return $phoneNumberInventory->phone_number;
        }
        return null;
    }

}
