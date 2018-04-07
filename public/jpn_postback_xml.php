<?php
/**
 * This program will receive call conversion by HTTP request from CallNotes.
 *
 */
define( 'START_TIME', microtime( TRUE ) );
session_start();

function put_log( $message, $level = 'ERROR' )
{
    $back_trace = debug_backtrace();
    // Format is "DATETIME [ERROR_LEVEL] UNIQUE_CALL_ID: MESSAGE at LINE (EXEC_TIME)"
    error_log(
        sprintf(
            '[%- 6s] %s: %s at %d (%s)', $level, (defined( 'UNIQUE_CALL_ID' ) ? UNIQUE_CALL_ID : NULL ), $message, $back_trace[ 0 ][ 'line' ], microtime( TRUE ) - START_TIME
        )
    );
}

/**
 * To get XML from request body.
 */
$contents = file_get_contents( 'php://input' );
if ( empty( $contents ) ) {
    put_log( 'Request body was wrong.' );
    header( 'HTTP/1.1 400 Bad Request' );
    exit;
}

$xml = simplexml_load_string( $contents );
if ( empty( $xml ) ) {
    put_log( 'Request body was wrong as XML.' );
    header( 'HTTP/1.1 400 Bad Request' );
    exit;
}

put_log( 'Began the program by:', 'NOTICE' );
put_log( $contents, 'NOTICE' );

/**
 * Include configuration of database connection at here,
 * but this approach can't work on AWS.
 * @todo improve management approach.
 */
include '../includes/connect.php';
ini_set( 'default_charset', 'utf-8' );
mysqli_set_charset( $conn, 'utf8' );
$callstart = $xml->start_timestamp_a;
$phonenumber = trim( $xml->cnt_number );
$disposition = $xml->disposition;
$duration = $xml->calc_billsec_a;
$callid = $xml->cnt_caller_number;
$recordings = '';
$recording_name = '';
$unique_call_id = $xml->uuid_a;
define( 'UNIQUE_CALL_ID', $unique_call_id );

/**
 * This variable isn't used on this file.
 * However other included files are using the variable for some test.
 */
$time5 = '';

/**
 * This procedure is needed to something for Christian.
 */
try {
    mail( 'hayashi@adgainer.co.jp', 'JPN XML', $contents );
} catch ( Exception $e ) {
    put_log( 'Mail function fail. - ' . $e->getMessage() );
}

try {
    $json_xml = @json_encode( $xml );
    mysqli_query( $conn, "INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','initial save','$json_xml','cn') " );
    $call_save_id = mysqli_insert_id( $conn );
    $mysql_error_ = mysqli_error( $conn );    
    put_log( 'mysql error : ' . $mysql_error_ . $call_save_id );
    echo "INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','initial save','$json_xml','cn')";
    echo 'mysql error : ' . $mysql_error_ . $call_save_id;
} catch ( Exception $e ) {
    put_log( 'Initial call save failure. - ' . $e->getMessage() . ' - ' . mysqli_error( $conn ) );
    $call_save_id = '';
}
if ( empty( $unique_call_id ) || empty( $phonenumber ) ) {
    put_log( 'Unique call ID or phone number was not included.' );
    header( 'HTTP/1.1 400 Bad Request' );
    exit;
}
$send_test_data = isset( $_GET[ 'send_data' ] ) && $_GET[ 'send_data' ];
/**
 * The below will be perform when unique_call_id is already stored in database.
 */
$findID = mysqli_query( $conn, "SELECT unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id'" );
if ( mysqli_num_rows( $findID ) > 0 ) {
    if ( isset( $_GET[ 'remove_call_id' ] ) ) {
        put_log( 'Has remove_call_id in request parameter.', 'NOTICE' );
        run_query( "DELETE FROM phone_time_use WHERE unique_call_id='$unique_call_id' and unique_call_id != '' " );
        mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=1 WHERE unique_call_id='$unique_call_id'" );
        header( 'HTTP/1.1 200 OK' );
    } elseif ( !empty( $send_test_data ) ) {
        put_log( 'Has send_data in request parameter.', 'NOTICE' );
        mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=1 WHERE unique_call_id='$unique_call_id'" );
        header( 'HTTP/1.1 400 Bad Request' );
    } else {
        header( 'HTTP/1.1 200 OK' );
        put_log( 'The call CV is already processed.', 'NOTICE' );
    }
    exit;
}
put_log( 'Pass through at find unique_call_id.', 'NOTICE' );

// 計測番号（先頭が0出ない場合は0をつける
$client_number = trim( $xml->cnt_number );
if ( strpos( $client_number, '0' ) !== 0 ) {
    $client_number = '0' . $client_number;
}

// 音声テキスト化サービスとの連携
if ( getenv( 'STT_URL' ) ) {
    // 録音可能な計測番号かどうか調べる
    $stmt = mysqli_prepare(
        $conn, sprintf(
            "SELECT `campaign_id` FROM `intec_clients` WHERE `client_number` = ? AND `service_cd` IN ('%s')", implode( "', '", [ '0120rec', '050rec', '0800rec' ] )
        )
    );
    mysqli_stmt_bind_param( $stmt, 's', $client_number );
    mysqli_stmt_execute( $stmt );
    mysqli_stmt_bind_result( $stmt, $campaignId );
    mysqli_stmt_fetch( $stmt );
    mysqli_stmt_close( $stmt );

    if ( !empty( $campaignId ) ) {
        // 録音可能な計測番号ならば、通話 CV を STT に転送する
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, sprintf( '%s?campaign_id=%s', getenv( 'STT_URL' ), $campaignId ) );
        curl_setopt( $ch, CURLOPT_HEADER, TRUE );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
        curl_setopt( $ch, CURLOPT_POST, TRUE );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $contents );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/xml',
            'Content-length: ' . strlen( $contents )
        ] );
        $res = curl_exec( $ch );
        $status_code = ( int ) curl_getinfo( $ch, CURLINFO_HTTP_CODE );

        if ( 200 === $status_code ) {
            // 成功
            put_log( 'Succeed to send XML to STT', 'NOTICE' );
            mail( 'hayashi@adgainer.co.jp', 'Succeed to send XML to STT', $res );
        } else {
            // 失敗: とりあえずメールで通知されるので手動で対応するように
            put_log( sprintf( 'Failed to send to STT: %d', $status_code ), 'ERROR' );
            mail( 'hayashi@adgainer.co.jp', sprintf( 'Failed to send to STT: %d', $status_code ), $res );
        }
        put_log( $res, 'NOTICE' );
    }
}

$url_params = '?';
$total = array();
$type = 'XML';
$xml_data = '<?xml version="1.0" encoding="utf-8"?><calldata>';
foreach ( $xml as $key => $value ) {
    $total[] = sprintf( 'X %s - %s', $key, $value );
    $xml_data .= "<$key>$value</$key>";
}
if ( empty( $total ) ) {
    foreach ( $_POST as $key => $value ) {
        $total[] = sprintf( 'P %s - %s', $key, $value );
    }
    if ( !empty( $total ) ) {
        $type = 'post';
    }
}
if ( empty( $total ) ) {
    foreach ( $_GET as $key => $value ) {
        $total[] = sprintf( 'G %s - %s', $key, $value );
    }
    if ( !empty( $total ) ) {
        $type = 'get';
    }
}
if ( empty( $total ) ) {
    put_log( 'Any data not found.' );
    header( 'HTTP/1.1 400 Bad Request' );
    exit;
}
$total = implode( "\n", $total );
put_log( sprintf( 'Data got from %s', $type ), 'NOTICE' );
$xmlArray = array();
$x = 1;
$caller_state = "NON US";
$caller_country = "NON US";

/**
 * Find campaign: standard, source, or multi
 */
$qry_ = "SELECT phone.phone_number,
	phone.campaign_id AS phone_campaign_id,
	phone.account_id,
	campaigns.campaign_id AS campaign_id,
	campaigns.account_id,
	campaigns.campaign_name,
	campaigns.correlation_time,
	campaigns.email_notify_user,
	campaigns.call_notification,
	campaigns.email_to_notify_user,
	campaigns.text_notify,
	campaigns.postback_page,
	campaigns.postback_fields,
	campaigns.cell_provider,
	campaigns.cell_to_text,
	campaigns.tracking_campaign_type,
	campaigns.campaign_name,
	campaigns.timeZone,
	campaigns.post_back_type,
	campaigns.country_tracking
	FROM phone_number_inventory AS phone
	JOIN campaigns AS campaigns ON (phone.campaign_id = campaigns.campaign_id )
	WHERE phone.phone_number LIKE '%" . $phonenumber . "%' AND phone.campaign_id != '' ORDER BY phone.id DESC LIMIT 1 ";
$check_campaign = mysqli_query( $conn, $qry_ );
$err = mysqli_error( $conn );
$time4 = date( "H:i:s", time() );
$source = 0;
$ROWS_ = mysqli_num_rows( $check_campaign );
if ( $ROWS_ > 0 ) {
    put_log( 'Campaign: Standard', 'NOTICE' );
}
if ( $ROWS_ == 0 ) {
    $qry_ = "SELECT phone.phone_number,
		phone.campaign_id AS phone_campaign_id,
		phone.account_id,
		campaigns.campaign_id AS campaign_id,
		campaigns.account_id,
		campaigns.correlation_time,
		campaigns.call_notification,
		campaigns.email_notify_user,
		campaigns.email_to_notify_user,
		campaigns.text_notify,
		campaigns.postback_page,
		campaigns.postback_fields,
		campaigns.cell_provider,
		campaigns.cell_to_text,
		campaigns.tracking_campaign_type,
		campaigns.country_tracking,
		campaigns.timeZone,
		campaigns.post_back_type,
		campaigns.campaign_name
		FROM
		source_number_inventory AS phone
		JOIN campaigns ON (phone.campaign_id = campaigns.campaign_id)
		WHERE phone.phone_number LIKE '%" . $phonenumber . "%'  AND phone.campaign_id != '' ORDER BY phone.id DESC LIMIT 1 ";
    $check_campaign = mysqli_query( $conn, $qry_ );
    $err = mysqli_error( $conn );
    $ROWS_ = mysqli_num_rows( $check_campaign );
    if ( $ROWS_ > 0 ) {
        put_log( 'Campaign: Source', 'NOTICE' );
        $source = 1;
    }
}
$multi = 0;
if ( $ROWS_ == 0 ) {
    $qry_ = "SELECT phone.track_phone,
		phone.campaign_id AS phone_campaign_id,
		phone.account_id,
		campaigns.campaign_id AS campaign_id,
		campaigns.account_id,
		campaigns.correlation_time,
		campaigns.email_notify_user,
		campaigns.call_notification,
		campaigns.email_to_notify_user,
		campaigns.text_notify,
		campaigns.postback_page,
		campaigns.postback_fields,
		campaigns.cell_provider,
		campaigns.cell_to_text,
		campaigns.tracking_campaign_type,
		campaigns.country_tracking,
		campaigns.timeZone,
		campaigns.post_back_type,
		campaigns.campaign_name
		FROM
		multi_tracking_inventory AS phone
		JOIN campaigns ON (phone.campaign_id = campaigns.campaign_id)
		WHERE phone.track_phone LIKE '%" . $phonenumber . "%' AND phone.campaign_id != '' ORDER BY phone.id DESC LIMIT 1";
    $check_campaign = mysqli_query( $conn, $qry_ );
    $err = mysqli_error( $conn );
    $ROWS_ = mysqli_num_rows( $check_campaign );
    if ( $ROWS_ > 0 ) {
        put_log( 'Campaign: Multi', 'NOTICE' );
        $multi = 1;
    }
}
$have_campaign = mysqli_fetch_object( $check_campaign );
$json_xml = @json_encode( $xml );
put_log( sprintf( 'Rouws found in the campaign: %d', $ROWS_ ), 'NOTICE' );
if ( !isset( $have_campaign->phone_campaign_id ) || $ROWS_ == 0 ) {
    put_log( 'No campaign' );
    echo 'CAMPAIGN NOT FOUND';
    $qry_ = mysqli_real_escape_string( $conn, $qry_ );
    $mysql_error = "";
    $u_id = mysqli_query( $conn, "SELECT * FROM unsaved_calls WHERE unique_call_id='$unique_call_id'" );
    $stop = FALSE;
    if ( mysqli_num_rows( $u_id ) == 0 ) {
        mysqli_query( $conn, "INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','$qry_','$json_xml','cn') " );
        $mysql_error = mysqli_error( $conn );
    } else {
        mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=0 WHERE unique_call_id='$unique_call_id'" );
    }
    /*
     * 
     */
    $ignore = "";
    if ( !empty( $send_test_data ) ) {
        mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=1 WHERE unique_call_id='$unique_call_id'" );
        put_log( 'Data sent1' );
        $ignore = " IGNORE ";
    }
    mail(
        'hayashi@adgainer.co.jp', "JPN PHONE CALL NO CAMPAIGN $ignore", "PHONE: $phonenumber CALL DATA SAVED
		INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','$qry_','$json_xml','cn')"
    );
    put_log( sprintf( 'JPN PHONE CALL NO CAMPAIGN %s', $ignore ) );
    put_log(
        sprintf(
            "PHONE: %s CALL DATA SAVED: INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('%s','%s','%s','%s','cn')", $phonenumber, $phonenumber, $unique_call_id, $qry_, $json_xml
        )
    );
    if ( empty( $send_test_data ) ) {
        put_log( 'Will send email to sales', 'NOTICE' );
        mail( 'jpnsales@adgainer.co.jp', "JPN CALL NOT RECORDED $ignore", " PHONE: $phonenumber  -  $json_xml  " );
        put_log( 'Sent email to sales', 'NOTICE' );
    }
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, "http://callrecordings.calltracking.jp/?KEY=Xfewpow__po&UUID=$unique_call_id" ); // set url to post to
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/xml' ) );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    $output = curl_exec( $ch );
    curl_close( $ch );
    exit;
}
// campaign exist
else {
    if ( ! empty( $send_test_data ) ) {
        mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=1 WHERE unique_call_id='$unique_call_id'" );
        put_log( 'Data sent2', 'NOTICE' );
    }
}
put_log( 'Pass through at find campaign.', 'NOTICE' );
/*
 * =============================================
 * End Find Campaign
 * =============================================
 */

/**
 * ==========================
 * include postback program
 * ==========================
 */
$corr_time = "";
include '../includes/tracking/postback_functions.php';

$campTZ = $have_campaign->timeZone;
$TZ_offset = get_timezone_offset( 'America/Los_Angeles', $campTZ );
$jpn_call_time_pst = date( 'Y-m-d H:i:s', strtotime( "-$TZ_offset SECONDS", strtotime( $callstart ) ) );
echo $jpn_call_time_pst;
$jpn_time_stamp = date( 'Y-m-d H:i:s', strtotime( '-1 MINUTES' ) );
if ( !empty( $send_test_data ) ) {
    $jpn_time_stamp = date( 'Y-m-d H:i:s', strtotime( '-1 MINUTES', strtotime( $jpn_call_time_pst ) ) );
}
$jpn_time_out = date( 'H:i:s', mktime( 0, 0, ($have_campaign->correlation_time * 60 * 60 ), 0, 0, 0 ) );
$campaign_id = $have_campaign->phone_campaign_id;
echo "<br> CAMPAIGN ID: $campaign_id <br>";
$unix_current_date = time();
$get_id = 0;
$callstart = date( 'Y-m-d H:i:s', strtotime( $callstart ) );
if ( $have_campaign->tracking_campaign_type == 'offline' ) {
    $caller_state = '';
    $caller_country = 'Japan';
    include '../includes/tracking/phone_tracking_postback.php';
} else {
    $jpn = 1;
    if ( $multi == 1 ) {
        include '../includes/tracking/web_multi_tracking_postback.php';
    } elseif ( $source == 1 ) {
        include '../includes/tracking/web_source_tracking_postback.php';
    } else {
        include '../includes/tracking/web_tracking_postback.php';
    }
}
put_log( 'Pass through at include postback program.', 'NOTICE' );


$email_id = "";
$c_rows = 0;
$c_message = "";
if ( !empty( $have_campaign->call_notification ) ) {
    $qry = "SELECT  phone_time_use.id FROM phone_time_use JOIN campaigns on (campaigns.campaign_id = phone_time_use.campaign_id) WHERE unique_call_id='$unique_call_id' ORDER BY phone_time_use.id DESC LIMIT 1";
    $c = mysqli_query( $conn, $qry );
    $c_data = mysqli_fetch_object( $c );
    $email_id = $c_data->id;
    if ( !isset( $c_data->id ) ) {
        $send = " RECORD NOT FOUND ";
        echo 'CALL RECORD NOT FOUND';
        $qry_ = mysqli_real_escape_string( $conn, $qry_ );
        $find_record = "SELECT * FROM unsaved_calls WHERE unique_call_id='$unique_call_id'";
        $u_id = mysqli_query( $conn, $find_record );
        if ( mysqli_num_rows( $u_id ) == 0 ) {
            mysqli_query( $conn, "INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','$qry_','$json_xml','cn') " );
            $mysql_error = mysqli_error( $conn );
        } else {
            mysqli_query( $conn, "UPDATE unsaved_calls SET data_sent=0 WHERE unique_call_id='$unique_call_id'" );
            echo "RECORD NOT FOUND ";
            exit;
        }
        $mysql_error = mysqli_error( $conn );
        $ignore = "";
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        mail(
            'hayashi@adgainer.co.jp', "jpn call record not found $ignore", "PHONE: $phonenumber $qry_
			INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('$phonenumber','$unique_call_id','$qry_','$json_xml','cn')
			$err $mysql_error  $find_record $qry "
        );
        put_log( sprintf( 'jpn call record not found %s', $ignore ) );
        put_log(
            sprintf(
                "PHONE: %s %s
				 INSERT IGNORE INTO unsaved_calls (`phone_number`,`unique_call_id`,`query`,`call_data`,`vendor`) VALUES ('%s','%s','%s','%s','cn')
				 %s %s  %s %s ", $phonenumber, $qry_, $phonenumber, $unique_call_id, $qry_, $json_xml, $err, $mysql_error, $find_record, $qry
            )
        );
    }
}
$p_rows = 0;
$p_message = '?';
$fields = '';
$_post_keyword = "CALL%20ONLY";
$xml_data = "<?xml version='1.0'?><calldata>";
if ( !empty( $have_campaign->postback_fields ) ) {
    $fields = $have_campaign->postback_fields;
    $first_click = mysqli_query( $conn, "SELECT phone_time_use.* FROM phone_time_use JOIN campaigns ON (campaigns.campaign_id = phone_time_use.campaign_id) WHERE phone_time_use.campaign_id = '" . $have_campaign->campaign_id . "' and caller_phone='$callid' and phone_number='$phonenumber' and ip != '' ORDER BY phone_time_use.id LIMIT 1" );
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    $click_rows = mysqli_num_rows( $first_click );
    $click_data = mysqli_fetch_object( $first_click );
    $p = mysqli_query( $conn, "SELECT phone_time_use.* FROM phone_time_use JOIN campaigns ON (campaigns.campaign_id = phone_time_use.campaign_id) WHERE phone_time_use.campaign_id = '" . $have_campaign->campaign_id . "' and unique_call_id='$unique_call_id' ORDER BY phone_time_use.id DESC LIMIT 1" );
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    $p_rows = mysqli_num_rows( $p );
    $p_data = mysqli_fetch_object( $p );
    $p_fields = explode( ",", $fields );
    $val = "";
    put_log( 'Began compute track data.', 'NOTICE' );
    foreach ( $p_fields as $p_key => $p_val ) {
        $val = "";
        if ( $p_val == "call_duration" && $p_data->$p_val > 0 ) {
            $val = ceil( ($p_data->$p_val / 60 ) );
            $p_message .= "$p_val=" . urlencode( $val ) . "&";
        } elseif ( $p_val == "time_on_site" && $p_data->$p_val > 0 ) {
            if ( $click_rows > 0 ) {
                $val = ceil( ($click_data->$p_val / 60 ) );
                $p_message .= "$p_val=" . urlencode( $val ) . "&";
            } else {
                $val = ceil( ($p_data->$p_val / 60 ) );
                $p_message .= "$p_val=" . urlencode( $val ) . "&";
            }
        } elseif ( stristr( $p_val, "keyword" ) ) {
            if ( $click_rows > 0 ) {
                if ( isset( $click_data->keyword ) && $click_data->keyword != "" ) {
                    $val = $click_data->keyword;
                } elseif ( isset( $click_data->j_keyword ) && $click_data->j_keyword != "" ) {
                    $val = $click_data->j_keyword;
                } elseif ( isset( $click_data->ch_keyword ) && $click_data->ch_keyword != "" ) {
                    $val = $click_data->ch_keyword;
                } elseif ( isset( $click_data->k_keyword ) && $click_data->k_keyword != "" ) {
                    $val = $click_data->k_keyword;
                }
            } else {
                if ( isset( $p_data->keyword ) && $p_data->keyword != "" ) {
                    $val = $p_data->keyword;
                } elseif ( isset( $p_data->j_keyword ) && $p_data->j_keyword != "" ) {
                    $val = $p_data->j_keyword;
                } elseif ( isset( $p_data->ch_keyword ) && $p_data->ch_keyword != "" ) {
                    $val = $p_data->ch_keyword;
                } elseif ( isset( $p_data->k_keyword ) && $p_data->k_keyword != "" ) {
                    $val = $p_data->k_keyword;
                }
            }
            $p_message .= "$p_val=" . urlencode( $val ) . "&";
            $_post_keyword = urlencode( $val );
        } elseif ( $p_val == "goal_pages" ) {
            if ( $click_rows > 0 ) {
                $val = $click_data->goal1_time . " | " . $click_data->goal2_time . " | " . $click_data->goal3_time
                    . " | " . $click_data->goal4_time . " | " . $click_data->goal5_time . " | "
                    . $click_data->goal6_time . " | " . $click_data->goal7_time . " | " . $click_data->goal8_time
                    . " | " . $click_data->goal9_time . " | " . $click_data->goal10_time;
            } else {
                $val = $p_data->goal1_time . " | " . $p_data->goal2_time . " | " . $p_data->goal3_time . " | "
                    . $p_data->goal4_time . " | " . $p_data->goal5_time . " | " . $p_data->goal6_time . " | "
                    . $p_data->goal7_time . " | " . $p_data->goal8_time . " | " . $p_data->goal9_time . " | "
                    . $p_data->goal10_time;
            }
        } elseif ( strstr( $p_val, "goal" ) && strstr( $p_val, "_hit" ) ) {
            $goal = str_replace( "hit", "time", $p_val );
            $val = $click_rows > 0 ? $click_data->$goal : $p_data->$goal;
        } elseif ( $p_val == "time_stamp" ) {
            if ( $click_rows > 0 ) {
                $val = date( "Y-m-d H:i:s", strtotime( "+$TZ_offset SECONDS " . $click_data->$p_val ) );
                $p_message .= "$p_val=" . urlencode( $val ) . "&";
            } else {
                $val = date( "Y-m-d H:i:s", strtotime( "+$TZ_offset SECONDS " . $p_data->$p_val ) );
                $p_message .= "$p_val=" . urlencode( $val ) . "&";
            }
        } elseif ( $p_val == "time_of_call" ) {
            $val = $p_data->$p_val;
            $p_message .= "$p_val=" . urlencode( $val ) . "&";
        } else {
            $val = "N/A";
            if ( $click_rows > 0 ) {
                if ( isset( $click_data->$p_val ) ) {
                    $val = $click_data->$p_val;
                    if ( $p_val == 'source' ) {
                        $p_message .= "$p_val=" . urlencode( $val ) . "&";
                        $val = htmlspecialchars( $val );
                    } else {
                        $val = str_replace( "/", "", $val );
                        $val = str_replace( "<", "", $val );
                        $val = str_replace( ">", "", $val );
                        $p_message .= "$p_val=" . urlencode( $val ) . "&";
                    }
                }
            } else {
                if ( isset( $p_data->$p_val ) ) {
                    $val = $p_data->$p_val;
                    if ( $p_val == 'source' ) {
                        $p_message .= "$p_val=" . urlencode( $val ) . "&";
                        $val = htmlspecialchars( $val );
                    } else {
                        $val = str_replace( "/", "", $val );
                        $val = str_replace( "<", "", $val );
                        $val = str_replace( ">", "", $val );
                        $p_message .= "$p_val=" . urlencode( $val ) . "&";
                    }
                }
            }
        }
        $xml_data .= "<$p_val>$val</$p_val>";
    }
    put_log( 'Finished compute track data.', 'NOTICE' );
}

$total = "Client Service Solutions

いつもご利用頂きありがとうございます。
広告からの着信がありました。

$c_message

このメールは配信専用アドレスから自動送信されています。
本メールに対する返信はお受けできませんので、あらかじめご了承ください。

";
$cellMSG = "いつもご利用頂きありがとうございます。
広告からの着信がありました。

" . $have_campaign->campaign_name . "
$callid
" . date( "n j Y H:i:s", strtotime( $callstart ) ) . "

";
$url_params = "?";
if ( !is_array( $xml ) ) {
    $xml = array();
}
foreach ( $xml as $key => $value ) {
    $url_params .= $key . "=" . $value . "&";
}
if ( $have_campaign->email_notify_user == 1 && $have_campaign->email_to_notify_user != "" ) {
    if ( $email_id != "" ) {
        if ( detect_email_sent( $unique_call_id ) == FALSE && $send_test_data == '' ) {
            put_log( 'Began request send_call_email', 'NOTICE' );
            $send_url = sprintf(
                'http://adgainersolutions.com/adgainer/incomingdata/send_call_email?id=%s&campaign_id=%s&SEND=1', $email_id, $have_campaign->campaign_id
            );
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_URL, $send_url ); // set url to post to
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            $output = curl_exec( $ch );
            curl_close( $ch );
            put_log( 'Finished request send_call_email', 'NOTICE' );
        }
    }
}
if ( $have_campaign->cell_to_text != 1 ) {
    put_log( 'Began send call cv as text.', 'NOTICE' );
    $carrier = $have_campaign->cell_provider;
    $to = $have_campaign->cell_to_text;
    $message = $cellMSG;
    $formatted_number = "";
    $to = $formatted_number;
    $subject = 'CALL TRACKING';
    $headers = 'From: noreply@clientservicesolutions.com' . "\r\n" .
        'Reply-To: noreply@clientservicesolutions.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail( $to, $subject, $message, $headers );
    put_log( 'Finished send call cv as text.', 'NOTICE' );
}
$send_url_params = "?";
$qry = mysqli_query(
    $conn, "SELECT  msclkid,gclid,source,j_keyword,searchTerm,ip,campaign_name 
	FROM phone_time_use as p JOIN campaigns as c on (c.campaign_id = p.campaign_id) 
	WHERE unique_call_id = '$unique_call_id' and p.campaign_id='" . $campaign_id . "' order by p.id desc limit 1"
);
showFunction( __LINE__, __FUNCTION__, __FILE__ );
if ( mysqli_num_rows( $qry ) == 1 ) {
    $result = mysqli_fetch_object( $qry );
    $xml_data .= "<gclid>" . $result->gclid . "</gclid>";
    $xml_data .= "<msclkid>" . $result->msclkid . "</msclkid>";
    $url_params .= http_build_query(
        array(
            'msclkid'      => $result->msclkid, 'gclid'        => $result->gclid, 'ip'           => $result->ip,
            'utm_campaign' => $result->campaign_name, 'utm_term'     => $result->j_keyword,
            'utm_source'   => $result->source, 'source'       => $result->source, 'keyword'      => $result->j_keyword,
            'utm_medium'   => 'cpc', 'q'            => $result->searchTerm
        )
    );
    $send_url_params .= http_build_query(
        array(
            'msclkid'      => $result->msclkid, 'gclid'        => $result->gclid, 'ip'           => $result->ip,
            'utm_campaign' => $result->campaign_name, 'utm_term'     => $result->j_keyword,
            'utm_source'   => $result->source, 'source'       => $result->source, 'keyword'      => $result->j_keyword,
            'utm_medium'   => 'cpc', 'q'            => $result->searchTerm
        )
    );
}
$xml_data .= "</calldata>";
if ( $have_campaign->postback_page && detect_post_sent( $unique_call_id ) == FALSE && $send_test_data == '' ) {
    // ポストバック URL を分解して追加の情報を統合した上で再構成する
    parse_str( substr( $p_message, 1 ), $params );
    $parsed_url = htmlspecialchars_decode( $have_campaign->postback_page );
    $parsed_url = str_ireplace( "{keyword}", $_post_keyword, $parsed_url );
    $parsed_url = parse_url( $parsed_url );
    if ( isset( $parsed_url[ 'query' ] ) ) {
        parse_str( $parsed_url[ 'query' ], $parsed_url[ 'query' ] );
        $parsed_url[ 'query' ] = array_merge( $params, $parsed_url[ 'query' ] );
    } else {
        $parsed_url[ 'query' ] = $params;
    }
    $URL = sprintf( '%s://%s', $parsed_url[ 'scheme' ], $parsed_url[ 'host' ] );
    if ( isset( $parsed_url[ 'path' ] ) ) {
        $URL .= $parsed_url[ 'path' ];
    }
    if ( !empty( $parsed_url[ 'query' ] ) ) {
        $URL .= '?' . http_build_query( $parsed_url[ 'query' ] );
    }

    $arr = array(
        'dc0b7ae8c3ef4174837888ab2e3afaae',
        '75e33ed0c9c975b534379219d97e01ce',
        '6840c2098b2f2b56e3a8bdfd32941bd0',
        'c365b1565be6626a60119b87106f4577',
        '09c57986be2639fda849facf29945582',
        '6840c2098b2f2b56e3a8bdfd32941bd0'
    );
    $attempts = 0;
    $responses = "";
    $send_method = $have_campaign->post_back_type;
    put_log( sprintf( 'Began send call CV to postback URL: %s', $URL ), 'NOTICE' );
    do {
        if ( $have_campaign->post_back_type == "POST" ) {
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_URL, $URL ); // set url to post to
            curl_setopt( $ch, CURLOPT_HEADER, 1 );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
            curl_setopt( $ch, CURLOPT_POST, 1 );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $xml_data );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                'Content-type: application/xml',
                'Content-length: ' . strlen( $xml_data )
            ) );
            $output = curl_exec( $ch );
            $httpcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
            $error = "";
        } else {
            $ch = curl_init( $URL );
            curl_setopt( $ch, CURLOPT_HEADER, TRUE );
            curl_setopt( $ch, CURLOPT_ENCODING, 'UTF-8' );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            $output = curl_exec( $ch );
            $httpcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
            $error = "";
        }
        $attempts++;
        put_log( sprintf( 'Sent call CV to %s is %s in %s times.', $URL, $httpcode, $attempts ), 'NOTICE' );
        if ( $output === FALSE ) {
            // HTTP request failed.
            continue;
        }
        put_log( $xml_data, 'NOTICE' );
        put_log( json_encode( curl_getinfo( $ch ) ), 'NOTICE' );
        curl_close( $ch );
        $responses .= $httpcode . " ";
        if ( $httpcode == 200 ) {
            break;
        }
    } while ( $attempts < 3 );
    if ( $httpcode != 200 ) {
        put_log( 'Failed send call CV to postback URL.' );
    }
    $xml_data_ins = mysqli_real_escape_string( $conn, $xml_data );
    $fields_ins = mysqli_real_escape_string( $conn, $fields );
    $qry = "INSERT IGNORE INTO postback_responses (account_id,campaign_id,attempts,responses,send_method,URL,query_string,response_code,response_html,variables,XML,try_error)
			VALUES
			('" . $have_campaign->account_id . "','" . $have_campaign->campaign_id . "','$attempts','$responses','$send_method','$URL','$p_message','$httpcode','$output','$fields_ins','$xml_data_ins','$error')";
    mysqli_query( $conn, $qry );
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    $send_msg = $URL . '

' . $p_message . "

" . $xml_data . $fields . '

CODE: ' . $httpcode . ' --

' . $output . '

' . $error . '


' . $qry;
    if ( in_array( $have_campaign->account_id, $arr ) ) {
        put_log( $send_msg, 'NOTICE' );
    }
}
put_log( 'Pass through at send call CV to postback URL.', 'NOTICE' );
/**
 * This procedure is needed to something for Christian.
 */
if ( isset( $call_save_id ) && is_numeric( $call_save_id ) ) {
    mysqli_query( $conn, "UPDATE unsaved_calls set data_sent = 1 WHERE id='$call_save_id' " );
}
if ( isset( $conn ) && is_resource( $conn ) ) {
    mysqli_close( $conn );
}
if ( isset( $link ) && is_resource( $link ) ) {
    mysqli_close( $link );
}
$send_url_params .= "&ag_campaign_id=" . $have_campaign->campaign_id . "&code_type=call";
if ( empty( $send_test_data ) ) {
    put_log( 'Began send conversion.', 'NOTICE' );
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, "http://adgainersolutions.com/adgainer/index.php/incomingdata/trackConversions" . $send_url_params ); // set url to post to
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/xml' ) );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $xml_data );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    $output = curl_exec( $ch );
    curl_close( $ch );
}
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "http://callrecordings.calltracking.jp/?KEY=Xfewpow__po&UUID=$unique_call_id" ); // set url to post to
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
curl_setopt( $ch, CURLOPT_POST, 1 );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/xml' ) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $xml_data );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
$output = curl_exec( $ch );
curl_close( $ch );
put_log( 'Finished send conversion.', 'NOTICE' );

//check email sent
function detect_post_sent( $unique_call_id )
{
    global $conn;
    $p = mysqli_query( $conn, "SELECT * FROM postback_responses WHERE p_unique_call_id ='$unique_call_id' " );
    if ( mysqli_num_rows( $p ) > 0 ) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//check postback sent
function detect_email_sent( $unique_call_id )
{
    global $conn;
    $p = mysqli_query( $conn, "SELECT * FROM sent_conversions WHERE s_unique_call_id ='$unique_call_id' " );
    if ( mysqli_num_rows( $p ) > 0 ) {
        return TRUE;
    } else {
        return FALSE;
    }
}
