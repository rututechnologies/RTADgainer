<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Campaign;
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
        return response()
                ->view( "{$this->viewDirTracking}.trackingscript", [] )
                ->header( 'content-type', 'application/x-javascript' );
    }

    public function send_missing()
    {
        exit;
    }

    public function import_missing()
    {
//        header( 'content-type: application/x-javascript' );
//        header( 'Access-Control-Allow-Origin: *' );
//        $this->load->model( 'Campaign_model' );
//        $this->load->model( 'Report_model' );
//        if ( !$this->input->get( 'send_traffic' ) ) {
//            exit;
//        }
//        $this->load->view( 'tracking/import_missing_traffic' );
    }

    public function send_missing_calls()
    {
        exit;
    }

    public function do_fileUploadMissingCallsIntec()
    {
        
    }

    public function source_track()
    {
        /* $this->output->set_header( 'content-type: application/x-javascript' );
          $this->output->set_header( 'Access-Control-Allow-Origin: *' );
          if ( $this->agent->is_robot() ) {
          exit;
          }
          $this->load->model( 'Campaign_model' );
          $this->load->model( 'Webtracking_model' );
          $this->load->view( 'tracking/source_trackingscript' ); */
    }

    public function multi_track()
    {
        /* $this->output->set_header( 'content-type: application/x-javascript' );
          $this->output->set_header( 'Access-Control-Allow-Origin: *' );
          if ( $this->agent->is_robot() ) {
          exit;
          }
          $this->load->model( 'Campaign_model' );
          $this->load->model( 'Webtracking_model' );
          $this->load->model( 'Ga_client_model' );
          $this->load->view( 'tracking/multi_trackingscript' ); */
    }

    public function incoming()
    {
        /* //mail("hayashi@adgainer.co.jp","API SQLs","BEGIN 1");
          $this->load->model( 'Webtracking_model' );
          $time1 = date( 'H:i:s', time() );
          $inputSocket = fopen( 'php://input', 'rb' );
          $contents = stream_get_contents( $inputSocket );
          fclose( $inputSocket );
          $xml = simplexml_load_string( $contents );
          $callstart = $xml->callstart;
          $phonenumber = $xml->dnis;
          $disposition = $xml->disposition;
          $duration = $xml->duration;
          $callid = $xml->phonenumber;
          $recordings = $xml->recordings->file;
          $recording_name = "";
          $mp3_name = "";
          $unique_call_id = $xml->callid;
          $ch = curl_init();
          curl_setopt( $ch, CURLOPT_URL, sprintf( '%stwilio/so_phone?PhoneNumber=%s&Action=Submit', base_url(), $callid ) ); // set url to post to
          curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
          curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
          curl_setopt( $ch, CURLOPT_POST, 1 );
          curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/xml' ) );
          curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
          $output = curl_exec( $ch );
          curl_close( $ch );
          //mail("hayashi@adgainer.co.jp","API SQLs","BEGIN 2");
          include VIEWPATH . 'tracking/postback.php'; */
    }

    public function jpncalldata()
    {
//        $this->load->model( 'Calltracking_model', 'CM' );
//        include VIEWPATH . 'tracking/php_postback_functions.php';
//        //header ("Content-Type:text/xml");
//        $this->load->view( 'tracking/jpn_postback_xml' );
    }

    public function jpnincoming()
    {
//        $data[ 'date' ] = $this->uri->segment( 3 );
//        $this->load->view( 'tracking/jpn_postback', $data );
    }

    public function jpnincoming0800()
    {
//        $data[ 'date' ] = $this->uri->segment( 3 );
//        $this->load->view( 'tracking/jpn_postback0800', $data );
    }

    public function saveLatLng()
    {
        /* header( 'content-type: application/x-javascript' );
          header( 'Access-Control-Allow-Origin: *' );
          $this->load->model( 'Login_model' );
          $lat = $this->Login_model->scrubSQL( $this->input->get( 'lat' ) );
          $lng = $this->Login_model->scrubSQL( $this->input->get( 'lng' ) );
          $ip = $this->Login_model->scrubSQL( $this->input->get( 'ip' ) );
          $campaign_id = $this->Login_model->scrubSQL( $this->input->get( 'campaign_id' ) );
          $geoErr = $this->Login_model->scrubSQL( $this->input->get( 'geoErr' ) );
          if ( $geoErr != '' && $ip ) {
          //$qry = "UPDATE phone_time_use SET geoErr='$geoErr' WHERE  ip='$ip' and campaign_id='$campaign_id' order by id desc LIMIT 1 ";
          //echo $qry;
          //$q = $this->db->query($qry);
          }
          if ( $lat != "" && $lng != "" && $geoErr == "" && $ip ) {
          //
          //              $haveUser = $this->db->query("SELECT * FROM phone_time_use WHERE ip='$ip' AND campaign_id='$campaign_id' order by id desc LIMIT 1");
          //              $userData = $haveUser->row();

          //              if($userData->lat != ""){
          //$lat = $userData->lat.",".$lat;
          //$lng = $userData->lng.",".$lng;
          //}
          //
          $qry = "UPDATE phone_time_use SET lat='$lat',lng='$lng',location='BROWSER' WHERE  ip='$ip' and campaign_id='$campaign_id' order by id desc LIMIT 1 ";
          $q = $this->db->query( $qry );
          } */
    }

    public function get_zip()
    {
//        $data[ 'date' ] = $this->uri->segment( 3 );
//        $this->load->view( 'tracking/get_zip', $data );
    }

    public function unzip()
    {
//        $data[ 'date' ] = $this->uri->segment( 3 );
//        $this->load->view( 'tracking/unzip', $data );
    }

    public function directuploadcsv()
    {
//        $data[ 'campaign_id' ] = $this->uri->segment( 3 );
//        $level[ 'level' ] = $this->session->userdata( 'level' );
//        $this->load->view( 'header', $level );
//        $this->load->view( 'track/uploadCSV', $data );
    }

    public function do_uploadcsv()
    {
//        $config[ 'upload_path' ] = './jpn_zip/';
//        $config[ 'allowed_types' ] = 'gif|jpg|png';
//        $config[ 'max_size' ] = '100';
//        $config[ 'max_width' ] = '1024';
//        $config[ 'max_height' ] = '768';
//        $this->load->library( 'upload', $config );
//        if ( !$this->upload->do_upload() ) {
//            $error = array( 'error' => $this->upload->display_errors() );
//            $this->load->view( 'upload_form', $error );
//        } else {
//            $data = array( 'upload_data' => $this->upload->data() );
//            $this->load->view( 'upload_success', $data );
//        }
    }

    public function post()
    {
//        $this->load->view( 'tracking/post' );
    }

    public function email_tracking_js_code()
    {
//        header( 'Access-Control-Allow-Origin: *' );
//        header( 'Access-Control-Allow-Headers: X-Requested-With' );
//        header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
//        header( 'Access-Control-Max-Age: 86400' );
//        header( 'content-type: application/x-javascript' );
//        $data[ 'formId' ] = $this->input->get( 'formId' );
//        $data[ 'frame' ] = $this->input->get( 'frame' );
//        $data[ 'class' ] = $this->input->get( 'class' );
//        $data[ 'campaignId' ] = $this->input->get( 'campaignId' );
//        $this->load->view( 'tracking/trackemail', $data );
    }

    public function track_email()
    {
        /* header( 'Access-Control-Allow-Origin: *' );
          header( 'Access-Control-Allow-Headers: X-Requested-With' );
          header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
          header( 'Access-Control-Max-Age: 86400' );
          header( 'content-type: application/x-javascript' );
          $this->load->model( 'Webtracking_model' );
          mail( 'hayashi@adgainer.co.jp', 'TRACK EMAIL', 'SENT' );
          $all_posts = $_GET;
          $campaign_id = $this->input->get( 'campaign_id' );
          if ( $campaign_id == '' ) {
          $campaign_id = $this->input->get( 'campaignId' );
          }
          $ip = $this->input->ip_address();
          $visitor = $ip;
          //echo shell_exec("ls");
          if ( isset( $_SESSION[ 'city' ] ) ) {
          $city = $_SESSION[ 'city' ];
          $state = $_SESSION[ 'state' ];
          $country = $_SESSION[ 'country' ];
          $country_code = $_SESSION[ 'country_code' ];
          $city = $city . " - " . $state . " (" . $country . ")";
          } else {
          include 'application/views/tracking/geo_location.php';
          }
          //mail("hayashi@adgainer.co.jp","campaign_id_EMAIL","$campaign_id");
          if ( $campaign_id ) {
          $email_data = '';
          $x = 1;
          $y = count( $all_posts );
          foreach ( $all_posts as $key => $value ) {
          if ( $x < $y ) {
          $email_data .= $key . ":::" . $value . ";";
          } else {
          $email_data .= $key . ":::" . $value;
          }
          $x++;
          }
          mail( "hayashi@adgainer.co.jp", "EMAIL TRACK", "$email_data $visitor" );
          if ( $email_data != '' ) {
          //echo $email_data;
          } else {
          //echo "no data";
          }
          $getCampaign = $this->db->query( "SELECT * FROM campaigns WHERE campaign_id = '$campaign_id'" );
          $campaignData = $getCampaign->row();
          $account_id = $campaignData->account_id;
          $country_tracking = $campaignData->country_tracking;
          //$data = $_REQUEST
          /////find user
          $getUser = $this->db->query( "SELECT * FROM phone_time_use WHERE account_id = '$account_id' AND ip='$visitor' AND time_stamp < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND) ORDER BY id DESC LIMIT 1" );
          $campaign_id_vis = "";
          if ( $getUser->num_rows() == 1 ) {
          $userData = $getUser->row();
          $campaign_id_vis = $userData->campaign_id;
          }
          $getActiveUser = $this->db->query( "SELECT * FROM phone_time_use WHERE campaign_id='$campaign_id' AND time_stamp < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND) AND account_id='$account_id' AND ip='$visitor'  ORDER BY id DESC LIMIT 1" );
          $campaign_id_camp = "";
          $history = 0;
          if ( $getActiveUser->num_rows() == 1 ) {
          $activeUserData = $getActiveUser->row();
          $campaign_id_camp = $activeUserData->campaign_id;
          } else {
          $getLastUser = $this->db->query( "SELECT * FROM phone_time_use WHERE campaign_id='$campaign_id' AND account_id='$account_id' AND ip='$visitor'  ORDER BY id DESC LIMIT 1" );
          $history = $getLastUser->num_rows();
          if ( $history > 0 ) {
          $haveHistoryData = $getLastUser->row();
          $campaign_id_camp = $haveHistoryData->campaign_id;
          }
          }
          if ( $campaign_id_vis != $campaign_id_camp && $campaign_id_vis != "" ) {
          $campaign_id = $campaign_id_vis;
          }
          $getCamp = $this->db->query( "SELECT * FROM campaigns as c JOIN accounts as a ON (c.account_id = a.account_id) WHERE campaign_id='$campaign_id'" );
          if ( $getCamp->num_rows() == 1 ) {
          $campData = $getCamp->row();
          if ( $campData->track_email == 0 ) {
          $email_data = "EMAIL CONTENT HAS BEEN PROHIBITED";
          }
          $campaign_post_page = $campData->email_tracking_post_page;
          if ( $campaign_post_page != '' ) {
          $curl_handle = curl_init();
          curl_setopt( $curl_handle, CURLOPT_URL, "$campaign_post_page?email_data=$email_data" );
          curl_exec( $curl_handle );
          curl_close( $curl_handle );
          }
          }
          if ( $getUser->num_rows() > 0 ) {
          $max_id = $userData->id;
          $existing_data = $userData->email_data;
          if ( $existing_data != "" ) {
          $existing_data = "

          ; _________ : ________ ;

          " . $existing_data;
          }
          $newData = $email_data . $existing_data;
          $newData = $this->db->escape_str( $newData );
          $updateTable = $this->db->query( "UPDATE phone_time_use SET email_data='$newData',email_data_sent='1' WHERE id='$max_id' AND campaign_id='$campaign_id'" );
          }
          if ( $history > 0 ) {
          $max_id = $haveHistoryData->id;
          $existing_data = $haveHistoryData->email_data;
          if ( $existing_data != "" ) {
          $existing_data = "

          ; _________ : ________ ;

          " . $existing_data;
          }
          $newData = $email_data . $existing_data;
          $newData = $this->db->escape_str( $newData );
          $updateTable = $this->db->query( "UPDATE phone_time_use SET email_data='$newData',email_data_sent='1' WHERE id='$max_id' AND campaign_id='$campaign_id'" );
          } else {
          echo "// new $account_id,$campaign_id";
          $email_data = $this->db->escape_str( $email_data );
          $this->Webtracking_model->insertNew( $account_id, $campaign_id, $country_tracking, $city, $ip, $email_data );
          }
          } */
    }

    public function getCode( Request $request )
    {
//        $this->output->set_header( 'Access-Control-Allow-Origin: *' );
//          $this->output->set_header( 'Access-Control-Allow-Headers: X-Requested-With' );
//          $this->output->set_header( 'Access-Control-Allow-Methods: GET' );
//          $this->output->set_header( 'content-type: application/x-javascript' );

        $vars = $request->input( 'vars' );
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
        $referrer = $request->input( 'referrer' );
        $decode_vars = urldecode( $vars );
        $split_vars = explode( '&', $decode_vars );
        foreach ( $split_vars as $k => $v ) {
            $split_var = explode( '=', $v );
            $val = '';
            if ( isset( $split_var[ 1 ] ) ) {
                $val = $split_var[ 1 ];
            }
            // TODO: escape str
//            $val = $this->db->escape_str( $val );

            $vars .= sprintf( '&%s=%s', $split_var[ 0 ], $val );
            if ( $split_var[ 0 ] == 'url_campaign_id' && is_numeric( $split_var[ 0 ] ) == FALSE && $campaign_id == '' ) {
                echo "//c
          ";
                $campaign_id = $split_var[ 1 ];
            }
        }
        echo " //\n// VA |$vars|\n\n";
        $referrer_split = explode( '?', $referrer );
        if ( strlen( $vars ) < 40 ) {
            echo "\n// " . __LINE__ . "\n";
            if ( isset( $referrer_split[ 1 ] ) ) {
                foreach ( $referrer_split[ 1 ] as $k => $v ) {
                    $split_var = explode( '=', $v );
                    $val = '';
                    if ( isset( $split_var[ 1 ] ) ) {
                        $val = $split_var[ 1 ];
                    }
                    $val = $this->db->escape_str( $val );
                    $vars .= sprintf( '&%s=%s', $split_var[ 0 ], $val );
                    if ( $split_var[ 0 ] == 'url_campaign_id' && is_numeric( $split_var[ 0 ] ) == FALSE && $campaign_id == '' ) {
                        echo "//c\n";
                        $campaign_id = $split_var[ 1 ];
                    }
                }
            }
        }
        if ( strlen( $vars ) < 40 ) {
            echo "\n// " . __LINE__ . "\n";
            foreach ( $_GET as $k => $v ) {
                // TODO: escape str
//                $v = $this->db->escape_str( $v );
                $vars .= "&$k=$v";
            }
        }
        $send_vars = $vars;
        $vars = urlencode( $vars );
        if ( $campaign_id == '' ) {
            exit;
        }
        if ( strlen( $campaign_id ) > 32 ) {
            $campaign_id = substr( $campaign_id, 0, 32 );
        }
//          $this->load->view( 'incomingdata/getCode', compact( 'vars', 'referrer', 'campaign_id' ) );
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

        if ( !$campaign_id ) {
            return response()->json( [ 'scripts' => [] ] );
        }
        $campInfo = Campaign::where( 'campaign_id', $campaign_id )->first();

        if ( !$campInfo || $campInfo->active != 1 ) {
            return response()->json( [ 'scripts' => [] ] );
        }
        // TODO: mobile user
//        if ( $this->agent->is_mobile() ) {
//            $mobile = 1;
//        } else {
//            $mobile = 0;
//        }
//        if ( $campInfo->device_tracking != 2 ) {
//            if ( $mobile == 1 && $campInfo->device_tracking != 1 ) {
//                echo json_encode( array( 'scripts' => array(), 'campaign_id' => array( 'Not Track Mobile' ) ) );
//                exit;
//            }
//            if ( $mobile == 0 && $campInfo->device_tracking != 0 ) {
//                echo json_encode( array( 'scripts' => array(), 'campaign_id' => array( 'Not Track Desktop' ) ) );
//                exit;
//            }
//        }

        $code = array(
            'scripts'     => array(),
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

    public function getIncomingClickCall()
    {
//        $ip = $this->input->post( 'ip' );
//        $campaign_id = $this->input->post( 'campaign_id' );
//        $phone_number = $this->input->post( 'phone_number' );
    }

    public function getDeviceID()
    {
//        $ip = $this->input->post( 'ip' );
//        $campaign_id = $this->input->post( 'campaign_id' );
//        $device_id = $this->input->post( 'phone_number' );
    }

    public function updatetime()
    {
        /* header( 'Access-Control-Allow-Origin: *' );
          header( 'Access-Control-Allow-Headers: X-Requested-With' );
          header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
          header( 'Access-Control-Max-Age: 86400' );
          header( 'content-type: application/x-javascript' );
          echo "//write";
          $id = $this->input->get_post( 'id' );
          $ip = $this->input->get_post( 'ip' );
          $session_id = $this->input->get_post( 'session_id' );
          if ( $ip == '' || $id == '' || $session_id == '' ) {
          exit;
          }
          $this->load->model( 'Login_model' );
          $this->load->model( 'Webtracking_model' );
          //$ip = mysql_real_escape_string($ip);
          $ip = $this->Login_model->scrubSQL( $ip );
          $id = $this->Login_model->scrubSQL( $id );
          $session_id = $this->Login_model->scrubSQL( $session_id );
          $this->Webtracking_model->updateTime( $id, $ip, $session_id ); */
    }

    public function postbackTest()
    {
//        $all = '';
//        $url = $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ];
//        $inputSocket = fopen( 'php://input', 'rb' );
//        $contents = stream_get_contents( $inputSocket );
//        fclose( $inputSocket );
//        $xml = simplexml_load_string( $contents );
//        foreach ( $xml as $key => $val ) {
//            $all .= " " . $key . " - " . urldecode( $val ) . "\n";
//        }
//        foreach ( $_POST as $key => $val ) {
//            $all .= " " . $key . " - " . urldecode( $val ) . "\n";
//        }
//        mail( 'hayashi@adgainer.co.jp', 'POST TEST', $contents );
    }

    public function getMac()
    {
//        $this->load->view( 'tracking/getMac' );
    }

    public function PPCserver()
    {
        /* $this->session->sess_destroy();
          $this->load->model( 'Webtracking_model' );
          $this->load->model( 'Client_model' );
          //$config['protocol'] = 'sendmail';
          //$config['mailpath'] = '/usr/sbin/sendmail';
          $config[ 'charset' ] = 'utf-8';
          $config[ 'wordwrap' ] = TRUE;
          if ( !isset( $_GET[ 'AGurl' ] ) ) {
          redirect( 'http://www.adgainer.com' );
          exit;
          }
          $time1 = date( 'His', time() );
          if ( stristr( $_GET[ 'AGurl' ], '?' ) ) {
          $vals = '&';
          } else {
          $vals = '?';
          }
          $counter = 0;
          foreach ( $_GET as $key => $val ) {
          if ( $counter == 0 ) {
          $amp = '';
          } else {
          $amp = '&';
          }
          if ( $key != 'AGurl' ) {
          $vals .= "$amp$key=$val";
          $counter++;
          }
          }
          $time2 = date( 'His', time() );
          $AG_URL = urldecode( $_GET[ 'AGurl' ] );
          if ( !stristr( $AG_URL, 'http://' ) && !stristr( $AG_URL, 'https://' ) ) {
          $AG_URL = 'http://' . $AG_URL;
          }
          if ( stristr( $AG_URL, 'https//' ) ) {
          $AG_URL = str_replace( 'https//', 'https://', $AG_URL );
          }
          $time3 = date( 'His', time() );
          $FWD = $AG_URL . $vals;
          if ( $this->agent->is_robot() ) {
          redirect( $AG_URL );
          exit;
          }
          $campaign_id = $this->input->get( 'campaign_id' );
          if ( $this->input->get( 'campaign_id' ) == "" ) {
          $campaign_id = $this->input->get( 'url_campaign_id' );
          } else {
          if ( $campaign_id == "" ) {
          $campaign_id = $this->input->get( 'display_ad_id' );
          }
          }
          $campaign_id = $this->Client_model->scrubSQL( $campaign_id );
          if ( $campaign_id == '' ) {
          redirect( $AG_URL );
          exit;
          }
          $keyword = $this->input->get( 'keyword' );
          if ( $this->input->get( 'j_keyword' ) != '' ) {
          $keyword = $this->input->get( 'j_keyword' );
          }
          if ( $this->input->get( 'ch_keyword' ) != '' ) {
          $keyword = $this->input->get( 'ch_keyword' );
          }
          if ( $this->input->get( 'k_keyword' ) != '' ) {
          $keyword = $this->input->get( 'k_keyword' );
          }
          if ( stristr( $FWD, 'j_keyword=' ) ) {
          $ref_split = explode( 'j_keyword=', $FWD );
          //if(isset($ref_split[1])){
          $keyword_split = explode( '&', $ref_split[ 1 ] );
          $keyword = urldecode( $keyword_split[ 0 ] );
          //}
          ////$entry = 1;
          }
          //$keyword = urldecode($keyword);
          //$keyword = htmlspecialchars_decode($keyword);
          //$keyword = mb_convert_encoding($keyword, "UTF-8", "auto");
          $gclid = $this->input->get( 'gclid' );
          $mkwid = $this->input->get( 'mkwid' );
          $pcrid = $this->input->get( 'pcrid' );
          $pkw = $this->input->get( 'pkw' );
          $pmt = $this->input->get( 'pmt' );
          $pdv = $this->input->get( 'pdv' );
          $msclkid = $this->input->get( 'msclkid' );
          $matchtype = $this->input->get( 'matchtype' );
          $network = $this->input->get( 'network' );
          $searchTerm = '';
          if ( $this->input->get( 'utm_term' ) != '' ) {
          $searchTerm = $this->input->get( 'utm_term' );
          }
          if ( $this->input->get( 'text' ) != '' ) {
          $searchTerm = $this->input->get( 'text' );
          }
          if ( $this->input->get( 'query' ) != '' ) {
          $searchTerm = $this->input->get( 'query' );
          }
          if ( $this->input->get( 'q' ) != '' ) {
          $searchTerm = $this->input->get( 'q' );
          }
          if ( $this->input->get( 'p' ) != '' ) {
          $searchTerm = $this->input->get( 'p' );
          }
          //$searchTerm = urldecode($searchTerm);
          //$searchTerm = htmlspecialchars_decode($searchTerm);
          //$searchTerm = mb_convert_encoding($searchTerm, "UTF-8", "auto");
          $time4 = date( 'His', time() );
          $source = $this->input->get( 'source' );
          if ( $source == "" ) {
          $source = $this->input->get( 'utm_source' );
          }
          $display = $this->input->get( 'display_ad_id' );
          $platform = sprintf( '%s/%s/%s', $this->agent->platform(), $this->agent->browser(), $this->agent->version() );
          $visitor = $this->input->ip_address();
          $v_host = gethostbyaddr( $visitor );
          if ( stristr( $v_host, 'google' ) ) {
          redirect( $AG_URL );
          exit;
          }
          $time5 = date( "His", time() );
          $city = '';
          $state = '';
          $country = '';
          $country_code = '';
          $lat = '';
          $lng = '';
          include 'application/views/tracking/geo_location.php';
          include 'application/views/tracking/get_user_data.php';
          if ( $this->agent->is_mobile() ) {
          $mobile = checkmobile();
          $mobile = sprintf( 'Yes %s %s %s %s', $mobile[ 1 ], $mobile[ 2 ], $mobile[ 3 ], $this->agent->mobile() );
          $isMobile = 1;
          } else {
          $mobile = 'No';
          $isMobile = 0;
          }
          $time6 = date( 'His', time() );
          $type = 'PPC';
          if ( isset( $_GET[ 'url_campaign_id' ] ) ) {
          $type = 'PPC';
          }
          if ( isset( $_GET[ 'display_ad_id' ] ) ) {
          $type = 'DISPLAY';
          }
          $DOMAIN = $this->Webtracking_model->domain( $_GET[ 'AGurl' ] );
          $time7 = date( 'His', time() );
          $sessID = $this->session->userdata( 'session_id' );
          $session_id = md5( $sessID . $DOMAIN . time() );
          $_SESSION[ 'SESSID' ] = $session_id;
          $this->session->set_userdata( 'SESSID', $session_id );
          $_SESSION[ 'page_views' ] = -1;
          $check_campaign = $this->db->query( "SELECT a.account_id,a.status,a.active,c.blacklist_words,c.omit_google_ip,c.blacklist_ips,c.correlation_time,c.goal1,c.goal2,c.goal3,c.goal4,c.country_tracking,c.default_number,c.campaign_id FROM campaigns as c JOIN accounts as a ON (c.account_id = a.account_id) WHERE c.campaign_id='$campaign_id' and c.active='1'" );
          if ( $check_campaign->num_rows() > 0 ) {
          $have_campaign = $check_campaign->row();
          $_SESSION[ 'campaign_id' ] = $have_campaign->campaign_id;
          $account_id = $have_campaign->account_id;
          $account_id_ = $have_campaign->account_id;
          } else {
          redirect( $AG_URL );
          exit;
          }
          if ( ($have_campaign->status == 'TEMP' && ($type == 'PPC' || $type == 'DISPLAY') ) ) {
          exit;
          }
          $date = mdate( '%m-%d-%Y %H:%i:%s', time() );
          if ( $check_campaign->num_rows() > 0 ) {
          if ( $visitor ) {
          //	mail("hayashi@adgainer.co.jp","step 3-1 visitor exists",$visitor." ".$values);
          //check blacklist words
          $blacklist_words_array = explode( ',', $have_campaign->blacklist_words );
          if ( count( $blacklist_words_array ) > 0 ) {
          if ( $keyword != '' ) {
          if ( in_array( $keyword, $blacklist_words_array ) ) {
          redirect( $AG_URL );
          exit;
          }
          }
          }
          //check blacklist ips
          $blacklist_ips_array = explode( ',', $have_campaign->blacklist_ips );
          if ( count( $blacklist_ips_array ) > 0 ) {
          foreach ( $blacklist_ips_array as $key => $val ) {
          if ( $val != '' ) {
          if ( strpos( $visitor, $val ) == 0 ) {
          redirect( $AG_URL );
          exit;
          }
          }
          }
          }
          $findIp = $this->db->query( "SELECT ip FROM BAD_IPS WHERE ip LIKE '$visitor' " );
          if ( $findIp->num_rows() > 0 ) {
          redirect( $AG_URL );
          exit;
          } else {
          $findIp->free_result();
          }
          $current_date = mdate( '%Y-%m-%d %H:%i:%s', time() );
          ///phone
          $unix_current_date = time();
          $phone_expiration_secs = ($have_campaign->correlation_time * 60 * 60);
          $newTime = gmt_to_local( ($phone_expiration_secs + $unix_current_date ), 'UM1', TRUE );
          $expired_phone = mdate( '%Y-%m-%d  %H:%i:%s', $newTime );
          $newTime2 = gmt_to_local( ($unix_current_date - $phone_expiration_secs ), 'UM1', TRUE );
          $time_before_current = mdate( '%Y-%m-%d  %H:%i:%s', $newTime2 );
          $update_visit_records = "UPDATE phone_number_inventory SET active='0' WHERE ip='$visitor' and campaign_id='$campaign_id' and active='1'";
          $update_ip = $this->db->query( $update_visit_records );
          $expQry = "UPDATE phone_time_use SET tracking_active='0',time_out_duration=0 WHERE ip='$visitor' and campaign_id='$campaign_id' and tracking_active='1' order by id desc limit 1";
          $update_ip = $this->db->query( $expQry );
          $sql_check_phone = "SELECT phone_number,campaign_id FROM phone_number_inventory WHERE campaign_id='$campaign_id' and active='0' and useable='1' LIMIT 1";
          //echo $sql_check_phone;
          $check_phone_numbers = $this->db->query( $sql_check_phone );
          $have_phone_number = $check_phone_numbers->row();
          $def = 0;
          if ( $check_phone_numbers->num_rows() > 0 ) {
          $phone_number_to_assign = $have_phone_number->phone_number;
          $qry = "UPDATE phone_number_inventory SET active='1',ip='$visitor',timestamp='" . date( "Y-m-d H:i:s", time() ) . "' WHERE phone_number='$phone_number_to_assign' AND campaign_id='" . $have_phone_number->campaign_id . "'";
          $this->db->query( $qry );
          } else {
          $phone_number_to_assign = $have_campaign->default_number;
          $def = 1;
          }
          $page_time = mdate( '%Y-%m-%d %H:%i:%s', time() );
          $last_page = sprintf( '%s : %s;', $FWD, $page_time );
          $goalPg1 = $have_campaign->goal1;
          $goalPg2 = $have_campaign->goal2;
          $goalPg3 = $have_campaign->goal3;
          $goalPg4 = $have_campaign->goal4;
          $goal1_hit = 0;
          $goal2_hit = 0;
          $goal3_hit = 0;
          $goal4_hit = 0;
          if ( $goalPg1 == '' ) {
          $goalPg1 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg2 == '' ) {
          $goalPg2 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg3 == '' ) {
          $goalPg3 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg4 == '' ) {
          $goalPg4 = 'NO_PAGE_EXISTS';
          }
          if ( $have_campaign->country_tracking == 'keyword' || $have_campaign->country_tracking == NULL ) {
          $keywordField = 'keyword';
          } else {
          if ( $have_campaign->country_tracking == 'j_keyword' ) {
          $keywordField = 'j_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'ch_keyword' ) {
          $keywordField = 'ch_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'k_keyword' ) {
          $keywordField = 'k_keyword';
          }
          }
          }
          }
          if ( stristr( $FWD, $goalPg1 ) ) {
          $goal1_hit = 1;
          }
          if ( stristr( $FWD, $goalPg2 ) ) {
          $goal2_hit = 1;
          }
          if ( stristr( $FWD, $goalPg3 ) ) {
          $goal3_hit = 1;
          }
          if ( stristr( $FWD, $goalPg4 ) ) {
          $goal4_hit = 1;
          }
          $city = $this->Client_model->scrubSQL( $city );
          $country = $this->Client_model->scrubSQL( $country );
          //$keyword = $this->Client_model->scrubSQL($keyword);
          $keyword = fuzzy_decode( $keyword );
          $time16 = date( "His", time() );
          $sql_insert = "INSERT INTO phone_time_use
          (ag_server,
          phone_number,
          time_out_duration,
          number_type,
          account_id,
          campaign_id,
          visitor_city_state,
          visitor_country,
          visitor_country_code,
          $keywordField,
          matchtype,
          network,
          searchTerm,
          gclid,
          mkwid,
          pcrid,
          pkw,
          pmt,
          pdv,
          msclkid,
          ip,
          whois,
          lat,
          lng,
          session_id,
          source,
          mobile,
          platform,
          traffic_type,
          entry_type,
          tracking_active,
          visits,
          clicks,
          page_views,
          last_page,
          goal1_hit,
          goal2_hit,
          goal3_hit,
          goal4_hit,
          display
          )
          VALUES (
          '1',
          '$phone_number_to_assign',
          '$phone_expiration_secs',
          '$def',
          '$account_id_',
          '$campaign_id',
          '$city',
          '$country',
          '$country_code',
          '$keyword',
          '$matchtype',
          '$network',
          '$searchTerm',
          '$gclid',
          '$mkwid',
          '$pcrid',
          '$pkw',
          '$pmt',
          '$pdv',
          '$msclkid',
          '$visitor',
          '$v_host',
          '$lat',
          '$lng',
          '$session_id',
          '$source',
          '$mobile',
          '$platform',
          '$type',
          '$type',
          '1',
          '0',
          '1',
          '0',
          '',
          '$goal1_hit',
          '$goal2_hit',
          '$goal3_hit',
          '$goal4_hit',
          '$display')";
          $this->db->query( $sql_insert );
          $time17 = date( 'His', time() );
          }
          }
          redirect( $FWD . '&server=1' ); */
    }

    public function PPCsource()
    {
        /* $this->session->sess_destroy();
          $this->load->model( 'Webtracking_model' );
          $this->load->model( 'Campaign_model' );
          $this->load->model( 'Client_model' );
          //$config['protocol'] = 'sendmail';
          //$config['mailpath'] = '/usr/sbin/sendmail';
          $config[ 'charset' ] = 'utf-8';
          $config[ 'wordwrap' ] = TRUE;
          if ( !isset( $_GET[ 'AGurl' ] ) ) {
          redirect( 'http://www.adgainer.com' );
          }
          $time1 = date( 'His', time() );
          if ( stristr( $_GET[ 'AGurl' ], '?' ) ) {
          $vals = '&';
          } else {
          $vals = '?';
          }
          $counter = 0;
          foreach ( $_GET as $key => $val ) {
          if ( $counter == 0 ) {
          $amp = '';
          } else {
          $amp = '&';
          }
          if ( $key != 'AGurl' ) {
          $vals .= "$amp$key=$val";
          $counter++;
          }
          }
          $time2 = date( 'His', time() );
          $AG_URL = urldecode( $_GET[ 'AGurl' ] );
          $step = 0;
          if ( !stristr( $AG_URL, 'http://' ) && !stristr( $AG_URL, 'https://' ) ) {
          $AG_URL = 'http://' . $AG_URL;
          }
          if ( stristr( $AG_URL, 'https//' ) ) {
          $AG_URL = str_replace( 'https//', 'https://', $AG_URL );
          }
          $time3 = date( 'His', time() );
          $FWD = $AG_URL . $vals;
          $step++;
          if ( $this->agent->is_robot() ) {
          // echo $step; exit;
          redirect( $AG_URL );
          }
          $campaign_id = $this->input->get( 'campaign_id' );
          if ( $this->input->get( 'campaign_id' ) == '' ) {
          $campaign_id = $this->input->get( 'url_campaign_id' );
          } else {
          if ( $campaign_id == "" ) {
          $campaign_id = $this->input->get( 'display_ad_id' );
          }
          }
          $campaign_id = $this->Client_model->scrubSQL( $campaign_id );
          if ( $campaign_id == '' ) {
          redirect( $AG_URL );
          exit;
          }
          $keyword = $this->input->get( 'keyword' );
          if ( isset( $_GET[ 'j_keyword' ] ) ) {
          $keyword = $_GET[ 'j_keyword' ];
          }
          if ( isset( $_GET[ 'ch_keyword' ] ) ) {
          $keyword = $_GET[ 'ch_keyword' ];
          }
          if ( isset( $_GET[ 'k_keyword' ] ) ) {
          $keyword = $_GET[ 'k_keyword' ];
          }
          $gclid = $this->input->get( 'gclid' );
          $msclkid = $this->input->get( 'msclkid' );
          $matchtype = $this->input->get( 'matchtype' );
          $network = $this->input->get( 'network' );
          $searchTerm = $keyword;
          if ( $this->input->get( 'text' ) != '' ) {
          $searchTerm = $this->input->get( 'text' );
          }
          if ( $this->input->get( 'query' ) != '' ) {
          $searchTerm = $this->input->get( 'query' );
          }
          if ( $this->input->get( 'q' ) != '' ) {
          $searchTerm = $this->input->get( 'q' );
          }
          if ( $this->input->get( 'p' ) != '' ) {
          $searchTerm = $this->input->get( 'p' );
          }
          $time4 = date( 'His', time() );
          $source = $this->input->get( 'source' );
          if ( $source == "" ) {
          $source = $this->input->get( 'utm_source' );
          }
          $display = $this->input->get( 'display_ad_id' );
          $platform = sprintf( '%s/%s/%s', $this->agent->platform(), $this->agent->browser(), $this->agent->version() );
          $visitor = $this->input->ip_address();
          $v_host = gethostbyaddr( $visitor );
          $step++;
          if ( stristr( $v_host, 'google' ) ) {
          //echo $step; exit;
          redirect( $AG_URL );
          }
          $time5 = date( 'His', time() );
          $city = '';
          $state = '';
          $country = '';
          $country_code = '';
          $lat = '';
          $lng = '';
          include 'application/views/tracking/geo_location.php';
          include 'application/views/tracking/get_user_data.php';
          $time6 = date( 'His', time() );
          $type = 'PPC';
          if ( isset( $_GET[ 'url_campaign_id' ] ) ) {
          $type = 'PPC';
          }
          if ( isset( $_GET[ 'display_ad_id' ] ) ) {
          $type = 'DISPLAY';
          }
          $DOMAIN = $this->Webtracking_model->domain( $_GET[ 'AGurl' ] );
          $time7 = date( 'His', time() );
          $sessID = $this->session->userdata( 'session_id' );
          $session_id = md5( $sessID . $DOMAIN . time() );
          $_SESSION[ 'SESSID' ] = $session_id;
          $this->session->set_userdata( 'SESSID', $session_id );
          $_SESSION[ 'page_views' ] = -1;
          $check_campaign = $this->db->query( "SELECT a.account_id,a.status,a.active,c.blacklist_words,c.omit_google_ip,c.blacklist_ips,c.correlation_time,c.goal1,c.goal2,c.goal3,c.goal4,c.country_tracking,c.default_number,c.campaign_id FROM campaigns as c JOIN accounts as a ON (c.account_id = a.account_id) WHERE c.campaign_id='$campaign_id' and c.active='1'" );
          $step++;
          if ( $check_campaign->num_rows() > 0 ) {
          $have_campaign = $check_campaign->row();
          $_SESSION[ 'campaign_id' ] = $have_campaign->campaign_id;
          } else {
          // echo $step; exit;
          redirect( $AG_URL );
          }
          $time8 = date( 'His', time() );
          $step++;
          if ( ($have_campaign->status == 'TEMP' && ($type == 'PPC' || $type == 'DISPLAY') ) ) {
          // echo $step; exit;
          redirect( $AG_URL );
          exit;
          }
          $date = mdate( '%m-%d-%Y %H:%i:%s', time() );
          if ( $check_campaign->num_rows() > 0 ) {
          if ( $visitor ) {
          //	mail("hayashi@adgainer.co.jp","step 3-1 visitor exists",$visitor." ".$values);
          //check blacklist words
          $step++;
          $blacklist_words_array = explode( ",", $have_campaign->blacklist_words );
          if ( count( $blacklist_words_array ) > 0 ) {
          if ( $keyword != '' ) {
          if ( in_array( $keyword, $blacklist_words_array ) ) {
          // echo $step; exit;
          redirect( $AG_URL );
          exit;
          }
          }
          }
          $step++;
          //check blacklist ips
          $blacklist_ips_array = explode( ',', $have_campaign->blacklist_ips );
          if ( count( $blacklist_ips_array ) > 0 ) {
          foreach ( $blacklist_ips_array as $key => $val ) {
          if ( $val != "" ) {
          if ( stristr( $val, $visitor ) ) {
          echo '// blacklist ip';
          // echo $step; exit;
          redirect( $AG_URL );
          exit;
          }
          }
          }
          }
          $step++;
          $findIp = $this->db->query( "SELECT ip FROM BAD_IPS WHERE ip LIKE '$visitor' " );
          if ( $findIp->num_rows() > 0 ) {
          redirect( $AG_URL );
          exit;
          } else {
          $findIp->free_result();
          }
          $time9 = date( 'His', time() );
          $current_date = mdate( '%Y-%m-%d %H:%i:%s', time() );
          ///phone
          $unix_current_date = time();
          $phone_expiration_secs = ($have_campaign->correlation_time * 60 * 60);
          $newTime = gmt_to_local( ($phone_expiration_secs + $unix_current_date ), 'UM1', TRUE );
          $expired_phone = mdate( '%Y-%m-%d  %H:%i:%s', $newTime );
          $newTime2 = gmt_to_local( ($unix_current_date - $phone_expiration_secs ), 'UM1', TRUE );
          $time_before_current = mdate( '%Y-%m-%d  %H:%i:%s', $newTime2 );
          //$update_phones = $this->db->query("UPDATE phone_number_inventory SET active='0' WHERE timestamp < '$time_before_current' and campaign_id='$campaign_id'");
          //echo "SELECT * FROM phone_time_use WHERE ip = '$visitor' and campaign_id='$campaign_id' and time_stamp < '$expired_phone' and active='1' order by id desc";
          $time10 = '';
          $time11 = date( 'His', time() );
          //$expQry = "UPDATE phone_time_use SET tracking_active='0' WHERE ip='$visitor' and campaign_id='$campaign_id'";
          //$update_ip = $this->db->query($expQry);
          $time12 = date( 'His', time() );
          $phone_number_to_assign = '';
          $def = 0;
          $source_numbers = $this->Campaign_model->getSourceNumbers( $campaign_id );
          foreach ( $source_numbers as $s_match ) {
          if ( $source == '' ) {
          continue;
          }
          if ( stristr( $source, $s_match->source ) ) {
          $phone_number_to_assign = $s_match->phone_number;
          break;
          }
          }
          if ( $phone_number_to_assign == '' ) {
          $phone_number_to_assign = $have_campaign->default_number;
          $def = 1;
          }
          $time13 = date( 'His', time() );
          $def = 0;
          $time14 = '';
          $time15 = '';
          $page_time = mdate( '%Y-%m-%d %H:%i:%s', time() );
          $last_page = sprintf( '%s : %s;', $FWD, $page_time );
          $goalPg1 = $have_campaign->goal1;
          $goalPg2 = $have_campaign->goal2;
          $goalPg3 = $have_campaign->goal3;
          $goalPg4 = $have_campaign->goal4;
          $goal1_hit = 0;
          $goal2_hit = 0;
          $goal3_hit = 0;
          $goal4_hit = 0;
          if ( $goalPg1 == '' ) {
          $goalPg1 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg2 == '' ) {
          $goalPg2 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg3 == '' ) {
          $goalPg3 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg4 == '' ) {
          $goalPg4 = 'NO_PAGE_EXISTS';
          }
          if ( $have_campaign->country_tracking == 'keyword' || $have_campaign->country_tracking == NULL ) {
          $keywordField = 'keyword';
          } else {
          if ( $have_campaign->country_tracking == 'j_keyword' ) {
          $keywordField = 'j_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'ch_keyword' ) {
          $keywordField = 'ch_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'k_keyword' ) {
          $keywordField = 'k_keyword';
          }
          }
          }
          }
          if ( stristr( $FWD, $goalPg1 ) ) {
          $goal1_hit = 1;
          }
          if ( stristr( $FWD, $goalPg2 ) ) {
          $goal2_hit = 1;
          }
          if ( stristr( $FWD, $goalPg3 ) ) {
          $goal3_hit = 1;
          }
          if ( stristr( $FWD, $goalPg4 ) ) {
          $goal4_hit = 1;
          }
          if ( $this->agent->is_mobile() ) {
          $mobile = checkmobile();
          $mobile = sprintf( 'Yes %s %s %s %s', $mobile[ 1 ], $mobile[ 2 ], $mobile[ 3 ], $this->agent->mobile() );
          } else {
          $mobile = 'No';
          }
          $city = $this->Client_model->scrubSQL( $city );
          $country = $this->Client_model->scrubSQL( $country );
          //$keyword = $this->Client_model->scrubSQL($keyword);
          $keyword = fuzzy_decode( $keyword );
          $time16 = date( 'His', time() );
          $sql_insert = "INSERT INTO phone_time_use
          (ag_server,
          phone_number,
          number_type,
          account_id,
          campaign_id,
          visitor_city_state,
          visitor_country,
          visitor_country_code,
          $keywordField,
          matchtype,
          network,
          searchTerm,
          gclid,
          msclkid,
          ip,
          whois,
          lat,
          lng,
          session_id,
          source,
          mobile,
          platform,
          traffic_type,
          entry_type,
          tracking_active,
          visits,
          clicks,
          page_views,
          last_page,
          goal1_hit,
          goal2_hit,
          goal3_hit,
          goal4_hit,
          display
          )
          VALUES (
          '1',
          '$phone_number_to_assign',
          '$def',
          '" . $have_campaign->account_id . "',
          '$campaign_id',
          '$city',
          '$country',
          '$country_code',
          '$keyword',
          '$matchtype',
          '$network',
          '$searchTerm',
          '$gclid',
          '$msclkid',
          '$visitor',
          '$v_host',
          '$lat',
          '$lng',
          '$session_id',
          '$source',
          '$mobile',
          '$platform',
          '$type',
          '$type',
          '1',
          '0',
          '1',
          '0',
          '',
          '$goal1_hit',
          '$goal2_hit',
          '$goal3_hit',
          '$goal4_hit',
          '$display')";
          $this->db->query( $sql_insert );
          $time17 = date( 'His', time() );
          }
          }
          redirect( $FWD . '&server=1' ); */
    }

    public function PPCmulti()
    {
        /* $this->session->sess_destroy();
          $this->load->model( 'Webtracking_model' );
          $this->load->model( 'Campaign_model' );
          $this->load->model( 'Client_model' );
          //$config['protocol'] = 'sendmail';
          //$config['mailpath'] = '/usr/sbin/sendmail';
          $config[ 'charset' ] = 'utf-8';
          $config[ 'wordwrap' ] = TRUE;
          if ( !isset( $_GET[ 'AGurl' ] ) ) {
          redirect( 'http://www.adgainer.com' );
          }
          $time1 = date( 'His', time() );
          if ( stristr( $_GET[ 'AGurl' ], '?' ) ) {
          $vals = '&';
          } else {
          $vals = '?';
          }
          $counter = 0;
          foreach ( $_GET as $key => $val ) {
          if ( $counter == 0 ) {
          $amp = '';
          } else {
          $amp = '&';
          }
          if ( $key != 'AGurl' ) {
          $vals .= "$amp$key=$val";
          $counter++;
          }
          }
          $time2 = date( 'His', time() );
          $AG_URL = urldecode( $_GET[ 'AGurl' ] );
          if ( !stristr( $AG_URL, 'http://' ) && !stristr( $AG_URL, 'https://' ) ) {
          $AG_URL = sprintf( 'http://%s', $AG_URL );
          }
          if ( stristr( $AG_URL, 'https//' ) ) {
          $AG_URL = str_replace( 'https//', 'https://', $AG_URL );
          }
          $time3 = date( 'His', time() );
          $FWD = $AG_URL . $vals;
          if ( $this->agent->is_robot() ) {
          redirect( $AG_URL );
          }
          $campaign_id = $this->input->get( 'campaign_id' );
          if ( $this->input->get( 'campaign_id' ) == "" ) {
          $campaign_id = $this->input->get( 'url_campaign_id' );
          } else {
          if ( $campaign_id == "" ) {
          $campaign_id = $this->input->get( 'display_ad_id' );
          }
          }
          $campaign_id = $this->Client_model->scrubSQL( $campaign_id );
          if ( $campaign_id == "" ) {
          redirect( $AG_URL );
          exit;
          }
          if ( $this->agent->is_robot() ) {
          redirect( $AG_URL );
          }
          $keyword = $this->input->get( 'keyword' );
          if ( isset( $_GET[ 'j_keyword' ] ) ) {
          $keyword = $_GET[ 'j_keyword' ];
          }
          if ( isset( $_GET[ 'ch_keyword' ] ) ) {
          $keyword = $_GET[ 'ch_keyword' ];
          }
          if ( isset( $_GET[ 'k_keyword' ] ) ) {
          $keyword = $_GET[ 'k_keyword' ];
          }
          $gclid = $this->input->get( 'gclid' );
          $msclkid = $this->input->get( 'msclkid' );
          $matchtype = $this->input->get( 'matchtype' );
          $network = $this->input->get( 'network' );
          $searchTerm = $keyword;
          if ( $this->input->get( 'text' ) != '' ) {
          $searchTerm = $this->input->get( 'text' );
          }
          if ( $this->input->get( 'query' ) != '' ) {
          $searchTerm = $this->input->get( 'query' );
          }
          if ( $this->input->get( 'q' ) != '' ) {
          $searchTerm = $this->input->get( 'q' );
          }
          if ( $this->input->get( 'p' ) != '' ) {
          $searchTerm = $this->input->get( 'p' );
          }
          $time4 = date( 'His', time() );
          $source = $this->input->get( 'source' );
          if ( $source == '' ) {
          $source = $this->input->get( 'utm_source' );
          }
          $display = $this->input->get( 'display_ad_id' );
          $platform = $this->agent->platform() . " / " . $this->agent->browser() . " / " . $this->agent->version();
          $visitor = $this->input->ip_address();
          $time5 = date( 'His', time() );
          $city = '';
          $state = '';
          $country = '';
          $country_code = '';
          $lat = '';
          $lng = '';
          include 'application/views/tracking/geo_location.php';
          include 'application/views/tracking/get_user_data.php';
          $time6 = date( 'His', time() );
          $type = 'PPC';
          if ( isset( $_GET[ 'url_campaign_id' ] ) ) {
          $type = 'PPC';
          }
          if ( isset( $_GET[ 'display_ad_id' ] ) ) {
          $type = 'DISPLAY';
          }
          $DOMAIN = $this->Webtracking_model->domain( $_GET[ 'AGurl' ] );
          $time7 = date( 'His', time() );
          $sessID = $this->session->userdata( 'session_id' );
          $session_id = md5( $sessID . $DOMAIN . time() );
          $_SESSION[ 'SESSID' ] = $session_id;
          $this->session->set_userdata( 'SESSID', $session_id );
          $_SESSION[ 'page_views' ] = -1;
          $check_campaign = $this->db->query( "SELECT
          a.account_id,a.status,a.active,c.blacklist_words,c.omit_google_ip,c.blacklist_ips,c.correlation_time,c.goal1,c.goal2,c.goal3,c.goal4,c.country_tracking,c.default_number,c.campaign_id,multi_phone
          FROM campaigns as c
          JOIN accounts as a ON (c.account_id = a.account_id)
          WHERE c.campaign_id='$campaign_id'
          AND c.active='1'" );
          if ( $check_campaign->num_rows() > 0 ) {
          $have_campaign = $check_campaign->row();
          $_SESSION[ 'campaign_id' ] = $have_campaign->campaign_id;
          } else {
          redirect( $AG_URL );
          }
          $time8 = date( 'His', time() );
          if ( ($have_campaign->status == 'TEMP' && ($type == 'PPC' || $type == 'DISPLAY') ) ) {
          exit;
          }
          $date = mdate( '%m-%d-%Y %H:%i:%s', time() );
          if ( $check_campaign->num_rows() > 0 ) {
          if ( $visitor ) {
          //	mail("hayashi@adgainer.co.jp","step 3-1 visitor exists",$visitor." ".$values);
          //check blacklist words
          $blacklist_words_array = explode( ',', $have_campaign->blacklist_words );
          if ( count( $blacklist_words_array ) > 0 ) {
          if ( $keyword != '' ) {
          if ( in_array( $keyword, $blacklist_words_array ) ) {
          exit;
          }
          }
          }
          //check blacklist ips
          $blacklist_ips_array = explode( ',', $have_campaign->blacklist_ips );
          if ( count( $blacklist_ips_array ) > 0 ) {
          foreach ( $blacklist_ips_array as $key => $val ) {
          if ( $val != '' ) {
          if ( stristr( $val, $visitor ) ) {
          echo '// blacklist ip';
          exit;
          }
          }
          }
          }
          $findIp = $this->db->query( "SELECT ip FROM BAD_IPS WHERE ip LIKE '$visitor' " );
          if ( $findIp->num_rows() > 0 ) {
          redirect( $AG_URL );
          exit;
          } else {
          $findIp->free_result();
          }
          $time9 = date( 'His', time() );
          $current_date = mdate( '%Y-%m-%d %H:%i:%s', time() );
          ///phone
          $unix_current_date = time();
          $phone_expiration_secs = ($have_campaign->correlation_time * 60 * 60);
          $newTime = gmt_to_local( ($phone_expiration_secs + $unix_current_date ), 'UM1', TRUE );
          $expired_phone = mdate( '%Y-%m-%d  %H:%i:%s', $newTime );
          $newTime2 = gmt_to_local( ($unix_current_date - $phone_expiration_secs ), 'UM1', TRUE );
          $time_before_current = mdate( '%Y-%m-%d  %H:%i:%s', $newTime2 );
          //$update_phones = $this->db->query("UPDATE phone_number_inventory SET active='0' WHERE timestamp < '$time_before_current' and campaign_id='$campaign_id'");
          //echo "SELECT * FROM phone_time_use WHERE ip = '$visitor' and campaign_id='$campaign_id' and time_stamp < '$expired_phone' and active='1' order by id desc";
          $time10 = '';
          $time11 = date( 'His', time() );
          //$expQry = "UPDATE phone_time_use SET tracking_active='0' WHERE ip='$visitor' and campaign_id='$campaign_id'";
          //$update_ip = $this->db->query($expQry);
          $time12 = date( 'His', time() );
          $sql_check_phone = "SELECT * FROM multi_tracking_inventory WHERE campaign_id='$campaign_id' and active='0' ORDER BY id LIMIT " . $have_campaign->multi_phone;
          //echo $sql_check_phone;
          $check_phone_numbers = $this->db->query( $sql_check_phone );
          $phone_number_to_assign = array();
          $forward_to = array();
          $multi_numbers = '';
          $cust_replace = '';
          foreach ( $check_phone_numbers->result() as $number ) {
          $phone_number_to_assign[] = $number->track_phone;
          $forward_to[] = $number->forward_to;
          $multi_numbers .= $number->track_phone . ',';
          $cust_replace .= $number->cust_phone . ',';
          $def = 0;
          }
          if ( $multi_numbers != '' ) {
          foreach ( $phone_number_to_assign as $key => $phone_sep ) {
          if ( $phone_sep != "" ) {
          $update_phone_inventory = "UPDATE multi_tracking_inventory SET active='1',time_stamp='$current_date',ip='$visitor' WHERE track_phone='$phone_sep' and campaign_id='$campaign_id' and order_id='" . ($key + 1) . "'";
          }
          }
          }
          if ( $check_phone_numbers->num_rows() == 0 ) {
          $phone_number_to_assign[] = $have_campaign->default_number;
          $forward_to[] = $number->default_number;
          $multi_numbers = $have_campaign->default_number;
          $cust_replace = $have_campaign->number_to_replace;
          $def = 1;
          }
          $time13 = date( 'His', time() );
          $def = 0;
          $time14 = '';
          $time15 = '';
          $page_time = mdate( '%Y-%m-%d %H:%i:%s', time() );
          $last_page = sprintf( '%s : %s;', $FWD, $page_time );
          $goalPg1 = $have_campaign->goal1;
          $goalPg2 = $have_campaign->goal2;
          $goalPg3 = $have_campaign->goal3;
          $goalPg4 = $have_campaign->goal4;
          $goal1_hit = 0;
          $goal2_hit = 0;
          $goal3_hit = 0;
          $goal4_hit = 0;
          if ( $goalPg1 == '' ) {
          $goalPg1 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg2 == '' ) {
          $goalPg2 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg3 == '' ) {
          $goalPg3 = 'NO_PAGE_EXISTS';
          }
          if ( $goalPg4 == '' ) {
          $goalPg4 = 'NO_PAGE_EXISTS';
          }
          if ( $have_campaign->country_tracking == 'keyword' || $have_campaign->country_tracking == NULL ) {
          $keywordField = 'keyword';
          } else {
          if ( $have_campaign->country_tracking == 'j_keyword' ) {
          $keywordField = 'j_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'ch_keyword' ) {
          $keywordField = 'ch_keyword';
          } else {
          if ( $have_campaign->country_tracking == 'k_keyword' ) {
          $keywordField = 'k_keyword';
          }
          }
          }
          }
          if ( stristr( $FWD, $goalPg1 ) ) {
          $goal1_hit = 1;
          }
          if ( stristr( $FWD, $goalPg2 ) ) {
          $goal2_hit = 1;
          }
          if ( stristr( $FWD, $goalPg3 ) ) {
          $goal3_hit = 1;
          }
          if ( stristr( $FWD, $goalPg4 ) ) {
          $goal4_hit = 1;
          }
          if ( $this->agent->is_mobile() ) {
          $mobile = checkmobile();
          $mobile = sprintf( 'Yes %s %s %s %s', $mobile[ 1 ], $mobile[ 2 ], $mobile[ 3 ], $this->agent->mobile() );
          } else {
          $mobile = 'No';
          }
          $city = $this->Client_model->scrubSQL( $city );
          $country = $this->Client_model->scrubSQL( $country );
          $keyword = $this->db->escape_str( $keyword );
          $keyword = fuzzy_decode( $keyword );
          $time16 = date( 'His', time() );
          $sql_insert = "INSERT INTO phone_time_use
          (phone_number,
          number_type,
          account_id,
          campaign_id,
          visitor_city_state,
          visitor_country,
          visitor_country_code,
          $keywordField,
          matchtype,
          network,
          searchTerm,
          gclid,
          msclkid,
          ip,
          lat,
          lng,
          session_id,
          source,
          mobile,
          platform,
          traffic_type,
          entry_type,
          tracking_active,
          visits,
          clicks,
          page_views,
          last_page,
          goal1_hit,
          goal2_hit,
          goal3_hit,
          goal4_hit,
          display
          )
          VALUES ('$multi_numbers',
          '$def',
          '" . $have_campaign->account_id . "',
          '$campaign_id',
          '$city',
          '$country',
          '$country_code',
          '$keyword',
          '$matchtype',
          '$network',
          '$searchTerm',
          '$gclid',
          '$msclkid',
          '$visitor',
          '$lat',
          '$lng',
          '$session_id',
          '$source',
          '$mobile',
          '$platform',
          '$type',
          '$type',
          '1',
          '0',
          '1',
          '0',
          '',
          '$goal1_hit',
          '$goal2_hit',
          '$goal3_hit',
          '$goal4_hit',
          '$display')";
          $this->db->query( $sql_insert );
          $time17 = date( "His", time() );
          }
          }
          redirect( $FWD . '&server=1' ); */
    }

    public function updatePPC_history()
    {
        exit;
    }

    public function trackConversions()
    {
        /* $this->load->model( 'Campaign_model' );
          $this->load->model( 'Login_model' );
          $config = get_config();
          $campaign_id = $this->input->get( 'ag_campaign_id' );
          $code_type = $this->input->get( 'code_type' );
          $code_sent = $this->input->get( 'code_sent' );
          if ( $code_sent != '' ) {
          $utm_source = $this->input->get( 'utm_source' );
          $utm_medium = $this->input->get( 'utm_medium' );
          $utm_campaign = $this->input->get( 'utm_campaign' );
          $utm_term = $this->input->get( 'utm_term' );
          $run = "../../phantomjs/phantomjs/bin/phantomjs ../../phantomjs/phantomjs/examples/loadspeed.js 'http://adgainersolutions.com/" . $this->controller_url . "/index.php/incomingdata/GA_codePage?code=" . $code_sent . "&utm_term=" . urlencode( $utm_term ) . "&utm_source=" . urlencode( $utm_source ) . "&utm_medium=" . urlencode( $utm_medium ) . "&utm_campaign=" . urlencode( $utm_campaign ) . "'";
          $result = shell_exec( $run );
          echo $result;
          //mail("hayashi@adgainer.co.jp","PHANTOM 1", "$result $run" );
          } else {
          if ( $campaign_id == '' || $code_type == '' ) {
          exit;
          }
          $campaign_id = $this->Login_model->scrubSQL( $campaign_id );
          $code_type = $this->Login_model->scrubSQL( $code_type );
          $keyword = $this->input->get( 'keyword' );
          $gclid = $this->input->get( 'gclid' );
          $source = $this->input->get( 'source' );
          $q = $this->input->get( 'q' );
          $code_row = $this->Campaign_model->getGA_codes( $campaign_id, $code_type );
          if ( $code_row ) {
          $camp_info = $this->Campaign_model->getCampaignById( $campaign_id );
          if ( isset( $code_row->code ) && $code_row->code != "" ) {
          $ag_url = sprintf(
          "%s %sloadspeed.js '%sincomingdata/GA_codePage?code=%s&utm_term=%s&utm_source=%s_[Phone_Call]&utm_medium=cpc&q=%s&keyword=%s&utm_campaign=%s&gclid=%s'", $config[ 'phantomjs_bin_path' ], $config[ 'phantomjs_examples_path' ], base_url(), $code_row->code, urlencode( $keyword ), urlencode( $source ), urlencode( $q ), urlencode( $keyword ), urlencode( $camp_info->campaign_name ), $gclid
          );
          $result = shell_exec( $ag_url );
          echo $result;
          mail( 'hayashi@adgainer.co.jp', 'PHANTOM 2', "$result $ag_url" );
          }
          }
          } */
    }

    public function trackGoals()
    {
//        $config = get_config();
//        $text = '?';
//        foreach ( $_GET as $key => $value ) {
//            $text .= sprintf( '%s=%s&', $key, urlencode( $value ) );
//        }
//        if ( stristr( $text, 'gclid' ) ) {
//            shell_exec(
//                sprintf(
//                    "%s %sloadspeed.js '%sincomingdata/postPHPGoal%s'", $config[ 'phantomjs_bin_path' ], $config[ 'phantomjs_examples_path' ], base_url(), $text
//                )
//            );
//        }
    }

    public function trackEmails()
    {
        /* $config = get_config();
          $text = '?';
          foreach ( $_GET as $key => $value ) {
          $text .= sprintf( '%s=%s&', $key, urlencode( $value ) );
          }
          mail( 'hayashi@adgainer.co.jp', 'POST PHP E', $text );
          //$result =
          if ( stristr( $text, 'gclid' ) ) {
          shell_exec(
          sprintf(
          "%s %sloadspeed.js '%sincomingdata/postPHPEmail%s'", $config[ 'phantomjs_bin_path' ], $config[ 'phantomjs_examples_path' ], base_url(), $text
          )
          );
          } */
    }

    public function postPHP()
    {
        /* header( 'Access-Control-Allow-Origin: *' );
          $gclid = $this->input->get( 'gclid' );
          $keyword = $this->input->get( 'utm_term' );
          $msclkid = $this->input->get( 'msclkid' );
          $source = $this->input->get( 'utm_source' );
          $utm_medium = $this->input->get( 'utm_medium' );
          $q = $this->input->get( 'q' );
          if ( $gclid != '' ) {
          echo "


          <script type='text/javascript'>

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-30142014-2']);
          _gaq.push(['_trackPageview']);
          _gaq.push(['_setCampTermKey', '$keyword']);
          _gaq.push(['_setCampSourceKey', '$source']);
          _gaq.push(['_setCampMediumKey', 'cpc']);

          (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

          </script>";
          printf(
          '<script type="text/javascript" src="%sincomingdata/testJS?gclid=%s&keyword=%s&source=%s&q=%s&utm_medium=%s"></script>', base_url(), $gclid, $keyword, $source, $q, $utm_medium
          );
          echo "<h2>GCLID TRACKED</h2>";
          }
          if ( $msclkid != '' ) {
          echo '<script type="text/javascript">
          if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};
          </script>
          <script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/e5d0aba6-092e-4f31-a64e-1fa108384317/mstag.js"></script>
          <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1372013",type:"1",actionid:"139907"})
          </script>
          <noscript>
          <iframe src="//flex.atdmt.com/mstag/tag/e5d0aba6-092e-4f31-a64e-1fa108384317/analytics.html?dedup=1&domainId=1372013&type=1&actionid=139907" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none">
          </iframe> </noscript>';
          } */
    }

    public function postPHPGoal()
    {
        /* header( 'Access-Control-Allow-Origin: *' );
          $gclid = $this->input->get( 'gclid' );
          $msclkid = $this->input->get( 'msclkid' );
          exit;
          $text = "$gclid $msclkid ";
          foreach ( $_GET as $key => $value ) {
          $text .= $key . " : " . urlencode( $value ) . "&
          ";
          }
          if ( $gclid != '' ) {
          echo "<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-30142014-4', 'adgainersolutions.com');
          ga('send', 'pageview');

          </script>";
          }
          if ( $msclkid != '' ) {
          mail( 'hayashi@adgainer.co.jp', 'msclkid 2', $text );
          echo '<script type="text/javascript">
          if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};
          </script>
          <script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/e5d0aba6-092e-4f31-a64e-1fa108384317/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1372013",type:"1",actionid:"139907"})
          </script>
          <noscript>
          <iframe src="//flex.atdmt.com/mstag/tag/e5d0aba6-092e-4f31-a64e-1fa108384317/analytics.html?dedup=1&domainId=1372013&type=1&actionid=139907" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none">
          </iframe> </noscript>';
          } */
    }

    public function postPHPEmail()
    {
        /* header( 'Access-Control-Allow-Origin: *' );
          mail( 'hayashi@adgainer.co.jp', 'POST PHP E', 'TEST' );
          $gclid = $this->input->get( 'gclid' );
          $msclkid = $this->input->get( 'msclkid' );
          exit;
          $text = "$gclid $msclkid ";
          foreach ( $_GET as $key => $value ) {
          $text .= $key . " : " . urlencode( $value ) . "&
          ";
          }
          if ( $gclid != '' ) {
          echo "<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-30142014-3', 'adgainersolutions.com');
          ga('send', 'pageview');

          </script>";
          }
          if ( $msclkid != '' ) {
          mail( 'hayashi@adgainer.co.jp', 'msclkid 2', $text );
          echo '<script type="text/javascript">
          if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};
          </script>
          <script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/e5d0aba6-092e-4f31-a64e-1fa108384317/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"1372013",type:"1",actionid:"139907"})
          </script>
          <noscript>
          <iframe src="//flex.atdmt.com/mstag/tag/e5d0aba6-092e-4f31-a64e-1fa108384317/analytics.html?dedup=1&domainId=1372013&type=1&actionid=139907" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none">
          </iframe> </noscript>';
          } */
    }

    public function testJS()
    {
        /* header( 'content-type: application/x-javascript' );
          $gclid = $this->input->get( 'gclid' );
          $keyword = $this->input->get( 'keyword' );
          $source = $this->input->get( 'source' );
          $q = $this->input->get( 'q' );
          $utm_medium = $this->input->get( 'utm_medium' );
          //mail("hayashi@adgainer.co.jp","TEST JS", "SENT $gclid $source $keyword $q $utm_medium" ); */
    }

    public function saveCookie()
    {
//        header( 'Access-Control-Allow-Origin: *' );
//        header( 'content-type: application/x-javascript' );
        exit;
    }

    public function updateAdwordsConversions()
    {
        /* $SEND = $this->input->get( 'SEND' );
          if ( $SEND == '' ) {
          exit;
          }
          $time1 = $this->input->get( 'time1' );
          $time2 = $this->input->get( 'time2' );
          $date = " AND (time_stamp >= '" . date( "Y-m-d", strtotime( "YESTERDAY" ) ) . "' AND time_stamp < '" . date( "Y-m-d", strtotime( "TOMORROW" ) ) . "') ";
          if ( $time1 != "" && $time2 != "" ) {
          $date = " AND ( time_stamp >= '$time1' AND time_stamp < '$time2' ) ";
          }
          $q = $this->db->query( "SELECT gclid,keyword,j_keyword,ch_keyword,k_keyword,source,searchTerm FROM `phone_time_use` WHERE gclid != '' and caller_phone != '' GROUP BY caller_phone,date $date order by id desc" );
          $rows = $q->num_rows();
          echo "TOTAL $rows";
          echo '<br/>';
          $count = 0;
          foreach ( $q->result() as $data ) {
          if ( $data->keyword != '' ) {
          $keyword = $data->keyword;
          } else {
          if ( $data->j_keyword != '' ) {
          $keyword = $data->j_keyword;
          } else {
          $keyword = $data->keyword;
          }
          }
          if ( $data->gclid != '' ) {
          $ch = curl_init();
          curl_setopt( $ch, CURLOPT_URL, sprintf(
          '%sincomingdata/trackConversions?gclid=%s&keyword=%s&source=%s&q=%s', base_url(), $data->gclid, $keyword, $data->source, $data->searchTerm
          )
          ); // set url to post to
          curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
          curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
          curl_setopt( $ch, CURLOPT_POST, 1 );
          curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/xml' ) );
          curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
          $output = curl_exec( $ch );
          curl_close( $ch );
          printf(
          '%sincomingdata/trackConversions?gclid=%s&keyword=%s&source=%s&q=%s', base_url(), $data->gclid, $keyword, $data->source, $data->searchTerm
          );
          echo "<br/>";
          }
          $count++;
          }
          mail( "hayashi@adgainer.co.jp", "CONV CRON DONE", date( "Y-m-d H:m", time() ) . " ROWS: $rows  $date" ); */
    }

    public function send_call_email()
    {
        /* if ( !isset( $_GET[ 'SEND' ] ) ) {
          exit;
          }
          $id = $this->input->get( 'id' );
          $type = $this->input->get( 'type' );
          $campaign_id = $this->input->get( 'campaign_id' );
          $this->load->model( 'Campaign_model' );
          $this->load->model( 'Webtracking_model' );
          $have_campaign = $this->Campaign_model->getCampaignById( $campaign_id );
          if ( $have_campaign->email_to_notify_user == "" ) {
          exit;
          }
          $campTZ = $have_campaign->timeZone;
          $qry = "SELECT phone_time_use.* FROM phone_time_use JOIN campaigns on (campaigns.campaign_id = phone_time_use.campaign_id) WHERE phone_time_use.id='$id'";
          $c = $this->db->query( $qry );
          $c_rows = $c->num_rows();
          $c_fields = explode( ",", $have_campaign->call_notification );
          $first_click = $this->db->query(
          "SELECT phone_time_use.*
          FROM phone_time_use JOIN campaigns ON (campaigns.campaign_id = phone_time_use.campaign_id)
          WHERE phone_time_use.campaign_id = '" . $c->row()->campaign_id . "'
          and caller_phone='" . $c->row()->caller_phone . "' and phone_number='" . $c->row()->phone_number . "'
          and ip != '' ORDER BY phone_time_use.id DESC LIMIT 1"
          );
          $www_rows = $first_click->num_rows();
          $www = $first_click;
          $c_message = "";
          foreach ( $c_fields as $c_key => $c_val ) {
          $val = "";
          if ( $c_val == 'call_duration' && $c->row()->$c_val > 0 ) {
          $val = ceil( ($c->row()->$c_val / 60 ) ) . ' min';
          } else {
          if ( $c_val == 'time_on_site' && $c->row()->$c_val > 0 ) {
          if ( $www_rows > 0 ) {
          $val = ceil( ($www->row()->$c_val / 60 ) ) . ' min';
          } else {
          $val = ceil( ($c->row()->$c_val / 60 ) ) . ' min';
          }
          } else {
          if ( $c_val == 'last_page' ) {
          if ( $www_rows > 0 ) {
          $history_pages = explode( ';', $www->row()->$c_val );
          foreach ( $history_pages as $key => $page_val ) {
          $m = $key + 1;
          if ( $page_val ) {
          $timeInMins = '';
          if ( isset( $history_pages[ $key - 1 ] ) ) {
          $page_valTimeOld = explode( ' : ', $history_pages[ $key - 1 ] );
          $page_valTimeNew = explode( ' : ', $page_val );
          if ( isset( $page_valTimeNew[ 1 ] ) && isset( $page_valTimeOld[ 1 ] ) ) {
          $time = human_to_unix( $page_valTimeOld[ 1 ] ) - human_to_unix( $page_valTimeNew[ 1 ] );
          $timeInMins = sprintf( ' (%s)', date( 'H:i:s', mktime( 0, 0, $time, 0, 0, 0 ) ) );
          }
          }
          $timeThere = explode( ':', $page_val );
          $pageShow = @$timeThere[ 1 ];
          $val .= "$m. $pageShow $timeInMins
          ";
          }
          }
          } else {
          $history_pages = explode( ';', $c->row()->$c_val );
          foreach ( $history_pages as $key => $page_val ) {
          $m = $key + 1;
          if ( $page_val ) {
          $timeInMins = "";
          if ( isset( $history_pages[ $key - 1 ] ) ) {
          $page_valTimeOld = explode( ' : ', $history_pages[ $key - 1 ] );
          $page_valTimeNew = explode( ' : ', $page_val );
          if ( isset( $page_valTimeNew[ 1 ] ) && isset( $page_valTimeOld[ 1 ] ) ) {
          $time = human_to_unix( $page_valTimeOld[ 1 ] ) - human_to_unix( $page_valTimeNew[ 1 ] );
          $timeInMins = sprintf( ' (%s)', date( 'H:i:s', mktime( 0, 0, $time, 0, 0, 0 ) ) );
          }
          }
          $timeThere = explode( ":", $page_val );
          $pageShow = @$timeThere[ 1 ];
          $val .= "$m. $pageShow $timeInMins
          ";
          }
          }
          }
          } else {
          if ( $c_val == 'keyword' ) {
          if ( $www_rows > 0 ) {
          if ( $www->row()->keyword != '' ) {
          $val = $www->row()->keyword;
          } else {
          if ( $www->row()->j_keyword != '' ) {
          $val = $www->row()->j_keyword;
          } else {
          if ( $www->row()->k_keyword != '' ) {
          $val = $www->row()->k_keyword;
          } else {
          if ( $www->row()->ch_keyword != '' ) {
          $val = $www->row()->ch_keyword;
          }
          }
          }
          }
          } else {
          if ( $c->row()->keyword != '' ) {
          $val = $c->row()->keyword;
          } else {
          if ( $c->row()->j_keyword != '' ) {
          $val = $c->row()->j_keyword;
          } else {
          if ( $c->row()->k_keyword != '' ) {
          $val = $c->row()->k_keyword;
          } else {
          if ( $c->row()->ch_keyword != '' ) {
          $val = $c->row()->ch_keyword;
          }
          }
          }
          }
          }
          } else {
          if ( $c_val == 'goal_pages' ) {
          if ( $www_rows > 0 ) {
          $g1 = 'No';
          $g2 = 'No';
          $g3 = 'No';
          $g4 = 'No';
          $g5 = 'No';
          $g6 = 'No';
          $g7 = 'No';
          $g8 = 'No';
          $g9 = 'No';
          $g10 = 'No';
          if ( $www->row()->goal1_hit == 1 ) {
          $g1 = $www->row()->goal1_time;
          }
          if ( $www->row()->goal2_hit == 1 ) {
          $g2 = $www->row()->goal2_time;
          }
          if ( $www->row()->goal3_hit == 1 ) {
          $g3 = $www->row()->goal3_time;
          }
          if ( $www->row()->goal4_hit == 1 ) {
          $g4 = $www->row()->goal4_time;
          }
          if ( $www->row()->goal5_hit == 1 ) {
          $g5 = $www->row()->goal5_time;
          }
          if ( $www->row()->goal6_hit == 1 ) {
          $g6 = $www->row()->goal6_time;
          }
          if ( $www->row()->goal7_hit == 1 ) {
          $g7 = $www->row()->goal7_time;
          }
          if ( $www->row()->goal8_hit == 1 ) {
          $g8 = $www->row()->goal8_time;
          }
          if ( $www->row()->goal9_hit == 1 ) {
          $g9 = $www->row()->goal9_time;
          }
          if ( $www->row()->goal10_hit == 1 ) {
          $g10 = $www->row()->goal10_time;
          }
          $val = "Goal 1: $g1   |   Goal 2: $g2   |   Goal 3: $g3   |   Goal 4: $g4   |   Goal 5: $g5   |   Goal 6: $g6   |   Goal 7: $g7   |   Goal 8: $g8   |   Goal 9: $g9   |   Goal 10: $g10 ";
          } else {
          $g1 = 'No';
          $g2 = 'No';
          $g3 = 'No';
          $g4 = 'No';
          $g5 = 'No';
          $g6 = 'No';
          $g7 = 'No';
          $g8 = 'No';
          $g9 = 'No';
          $g10 = 'No';
          if ( $c->row()->goal1_hit == 1 ) {
          $g1 = $c->row()->goal1_time;
          }
          if ( $c->row()->goal2_hit == 1 ) {
          $g2 = $c->row()->goal2_time;
          }
          if ( $c->row()->goal3_hit == 1 ) {
          $g3 = $c->row()->goal3_time;
          }
          if ( $c->row()->goal4_hit == 1 ) {
          $g4 = $c->row()->goal4_time;
          }
          if ( $c->row()->goal5_hit == 1 ) {
          $g5 = $c->row()->goal5_time;
          }
          if ( $c->row()->goal6_hit == 1 ) {
          $g6 = $c->row()->goal6_time;
          }
          if ( $c->row()->goal7_hit == 1 ) {
          $g7 = $c->row()->goal7_time;
          }
          if ( $c->row()->goal8_hit == 1 ) {
          $g8 = $c->row()->goal8_time;
          }
          if ( $c->row()->goal9_hit == 1 ) {
          $g9 = $c->row()->goal9_time;
          }
          if ( $c->row()->goal10_hit == 1 ) {
          $g10 = $c->row()->goal10_time;
          }
          $val = "Goal 1: $g1   |   Goal 2: $g2   |   Goal 3: $g3   |   Goal 4: $g4   |   Goal 5: $g5   |   Goal 6: $g6   |   Goal 7: $g7   |   Goal 8: $g8   |   Goal 9: $g9   |   Goal 10: $g10 ";
          }
          } elseif ( strstr( $c_val, 'goal' ) && strstr( $c_val, '_hit' ) ) {
          $goal = str_replace( 'hit', 'time', $c_val );
          if ( $www_rows > 0 ) {
          $val = $www->$goal;
          } else {
          $val = $p_data->$goal;
          }
          } else {
          if ( $c_val == 'time_stamp' ) {
          if ( $www_rows > 0 ) {
          $TZ_offset = $this->Webtracking_model->get_timezone_offset(
          'America/Los_Angeles', $campTZ, $www->row()->$c_val
          );
          $val = date(
          'm/d/Y H:i:s', strtotime( $www->row()->$c_val ) + $TZ_offset
          ) . ' | ' . $have_campaign->timeZone;
          } else {
          $TZ_offset = $this->Webtracking_model->get_timezone_offset(
          'America/Los_Angeles', $campTZ, $c->row()->$c_val
          );
          $val = date(
          'm/d/Y H:i:s', strtotime( $c->row()->$c_val ) + $TZ_offset
          ) . ' | ' . $have_campaign->timeZone;
          }
          } else {
          if ( $c_val == 'time_of_call' ) {
          $val = date( 'Y-m-d H:i:s', strtotime( $c->row()->$c_val ) );
          } else {
          if ( isset( $c->row()->$c_val ) ) {
          $val = $c->row()->$c_val;
          }
          }
          }
          }
          }
          }
          }
          }
          if ( $val != '' ) {
          $c_message .= ucfirst( str_replace( "_", " ", $c_val ) ) . " : " . $val . "
          ";
          }
          }
          $total = "Client Service Solutions

          いつもご利用頂きありがとうございます。
          広告からの着信がありました。

          $c_message

          このメールは配信専用アドレスから自動送信されています。
          本メールに対する返信はお受けできませんので、あらかじめご了承ください。

          ";
          $subject = 'CALL TRACKING [ ' . $have_campaign->campaign_name . ' ] ';
          try {
          ////$config['protocol'] = 'sendmail';
          ////$config['mailpath'] = '/usr/sbin/sendmail';
          $config[ 'charset' ] = 'UTF-8';
          $config[ 'wordwrap' ] = TRUE;
          $this->email->initialize( $config );
          $this->email->from( 'noreply@clientservicesolutions.com', 'Client Service Solutions' );
          $this->email->to( $have_campaign->email_to_notify_user );
          //$this->email->bcc('hayashi@adgainer.co.jp');
          $this->email->subject( $subject );
          $this->email->message( $total );
          if ( !$this->email->send() ) {
          echo 'ERROR';    //echo $this->email->print_debugger();
          $email_data_arr = array(
          's_unique_call_id' => $c->row()->unique_call_id,
          'email_sent_to'    => $have_campaign->email_to_notify_user,
          'email_subject'    => $subject,
          'success'          => 0,
          'email_content'    => $total
          );
          $this->db->insert( 'sent_conversions', $email_data_arr );
          } else {
          $email_data_arr = array(
          's_unique_call_id' => $c->row()->unique_call_id,
          'email_sent_to'    => $have_campaign->email_to_notify_user,
          'email_subject'    => $subject,
          'success'          => 1,
          'email_content'    => $total
          );
          $this->db->insert( 'sent_conversions', $email_data_arr );
          echo 'SENT';
          }
          $this->Campaign_model->checkDB( __FUNCTION__, __LINE__, __FILE__ );
          //mail('hayashi@adgainer.co.jp','EMAIL SENT',$have_campaign->campaign_name.' '.$id);
          } catch ( Exception $e ) {
          echo 'NOT SEND';
          //echo $e->getMessage();
          mail( 'hayashi@adgainer.co.jp', 'EMAIL NOT SENT', $e->getMessage() );
          $email_data_arr = array(
          's_unique_call_id' => $c->row()->unique_call_id,
          'email_sent_to'    => $have_campaign->email_to_notify_user,
          'email_subject'    => $subject,
          'success'          => 0,
          'email_content'    => $total
          );
          $this->db->insert( 'sent_conversions', $email_data_arr );
          $this->Campaign_model->checkDB( __FUNCTION__, __LINE__, __FILE__ );
          }
          //echo $have_campaign->email_to_notify_user."<br>";
          //echo $total; */
    }

    public function getGoalAction()
    {
        /* header( 'content-type: application/x-javascript' );
          header( 'Access-Control-Allow-Origin: *' );
          header( 'Access-Control-Allow-Headers: X-Requested-With' );
          header( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
          $ip = $this->input->get( 'ip' );
          $campaign_id = $this->input->get( 'campaign_id' );
          $email = $this->input->get( 'email' );
          $goal = $this->input->get( 'goal' );
          $url = $this->input->get( 'url' );
          $key = $this->input->get( 'key' );
          $key_ = md5( $ip . $campaign_id );
          if ( $key != $key_ || $ip == '' || $campaign_id == '' ) {
          exit;
          }
          $eQ = '';
          if ( $email == 1 ) {
          $eQ = ", email_data_sent='1' ";
          }
          $this->load->model( 'Login_model' );
          $goal_hit = $this->Login_model->scrubSQL( 'goal' . $goal . '_hit' );
          $campaign_id = $this->Login_model->scrubSQL( $campaign_id );
          $ip = $this->Login_model->scrubSQL( $ip );
          $this->db->query( "UPDATE phone_time_use SET $goal_hit='1', goal_pg_actions=CONCAT(goal_pg_actions,'$url') $eQ   WHERE campaign_id='$campaign_id' AND ip='$ip' AND tracking_active='1' " ); */
    }

    public function GA_codePage()
    {
        /* $code = $this->input->get( 'code' );
          $utm_source = $this->input->get( 'utm_source' );
          $utm_medium = $this->input->get( 'utm_medium' );
          $utm_campaign = $this->input->get( 'utm_campaign' );
          $utm_term = $this->input->get( 'utm_term' );
          if ( $code == '' ) {
          exit;
          }
          $gen_code = "<script type='text/javascript'>
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', '$code']);
          _gaq.push(['_setCustomVar', 1, 'utm_source', '$utm_source', 3]);
          _gaq.push(['_setCustomVar', 2, 'utm_medium', '$utm_medium', 3]);
          _gaq.push(['_setCustomVar', 3, 'utm_campaign', '$utm_campaign', 3]);
          _gaq.push(['_setCustomVar', 4, 'utm_term', '$utm_term', 3]);
          _gaq.push(['_trackPageview']);

          (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
          </script>";
          echo $gen_code;
          //mail("hayashi@adgainer.co.jp","GA CODE",$gen_code); */
    }

    public function testGA()
    {
//        $code = $this->input->get( 'code' );
//        //mail("hayashi@adgainer.co.jp","CODE JS WORK","$code");
    }

    public function acceptPost()
    {
//        $inputSocket = fopen( 'php://input', 'rb' );
//        $contents = stream_get_contents( $inputSocket );
//        fclose( $inputSocket );
//        mail( 'hayashi@adgainer.co.jp', 'POST BACK', $contents );
    }

    public function checkTracking( $v_id = null, $ip = null, $campaign_id = null, $page = null )
    {
        ///happens 3rd
        /* $this->load->model( 'Webtracking_model', 'WEB' );
          if ( $this->agent->is_robot() ) {
          exit;
          }
          if ( is_null( $v_id ) ) {
          $v_id = $this->input->get_post( 'v_id' );
          }
          if ( is_null( $ip ) ) {
          $ip = $this->input->get_post( 'ip' );
          }
          if ( is_null( $campaign_id ) ) {
          $campaign_id = $this->input->get_post( 'campaign_id' );
          }
          if ( is_null( $page ) ) {
          $page = $this->input->get_post( 'page' );
          }
          $page = urldecode( $page );
          $page = preg_replace( '/\s+/', '', $page );
          $result = $this->WEB->checkTracking( $v_id, $ip, $campaign_id );
          $errorFound = $this->WEB->findExistingError( $campaign_id );
          if ( $errorFound < 2 && $result == 0 ) {
          $this->db->where( 'campaign_id', $campaign_id );
          $this->db->join( 'accounts', 'accounts.account_id = campaigns.account_id' );
          $q = $this->db->get( 'campaigns' );
          $data = $q->row();
          $click = $this->WEB->getTracking( $v_id );
          $msg = "Account " . $data->accountName . "

          JS Tracking failed

          Page : $page

          IP : $ip

          Campaign : " . $data->campaign_name . "

          Campaign ID : $campaign_id

          Visit ID : $v_id

          Keyword : " . $click->keyword . "

          Traffic : " . $click->traffic . "

          Result : $result

          ";
          mail( 'hayashi@adgainer.co.jp,ad@adgainer.co.jp', '**ALERT** JS Tracking FAILED - ' . $data->accountName, $msg );
          } */
    }

    public function updateTracking()
    {
//        header( 'Access-Control-Allow-Origin: *' );
//        header( 'Access-Control-Allow-Headers: X-Requested-With' );
//        header( 'Access-Control-Allow-Methods: GET,POST' );
//        header( 'content-type: application/x-javascript' );
//        ////happens 2nd
//        $this->load->model( 'Webtracking_model', 'WEB' );
//        $ip = $this->input->get_post( 'ip' );
//        $v_id = $this->input->get_post( 'v_id' );
//        $campaign_id = $this->input->get_post( 'campaign_id' );
//        echo $this->WEB->updateTracking( $v_id, $ip, $campaign_id );
    }

}
