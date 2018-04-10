<?php

function updatePhonesMulti( $campaign_id, $time_before_current )
{
    $query = "UPDATE multi_tracking_inventory SET active='0' 
		WHERE (campaign_id='$campaign_id' and time_stamp < '$time_before_current')";
    if ( isset( $this ) ) {
        $this->db->query( $query );
    } else {
        global $conn;
        mysqli_query( $conn, $query );
    }
}

function updatePhonesStandard( $campaign_id, $time_before_current )
{
    $query = "UPDATE phone_number_inventory SET active='0' 
		WHERE (campaign_id='$campaign_id' and timestamp < '$time_before_current')";
    if ( isset( $this ) ) {
        $this->db->query( $query );
    } else {
        global $conn;
        mysqli_query( $conn, $query );
    }
}

function getPhoneAndCaller(
 $campaign_id, $phonenumber, $callid, $time_of_call, $corr_time, $jpn_call_time_pst, $jpn_time_out, $VISIT_ID = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    if ( $jpn_call_time_pst ) {
        $time_of_call = $jpn_call_time_pst;
    }
    if ( $corr_time ) {
        $time_out = $corr_time;
    }
    if ( $jpn_time_out ) {
        $time_out = $jpn_time_out;
    }
    $q = "phone_number LIKE '%$phonenumber%'
		and
		caller_phone = '$callid'
		and time_stamp > '" . date( 'Y-m-d', strtotime( '-2 MONTHS' ) ) . "'
		and campaign_id='$campaign_id'
		ORDER BY id DESC
		LIMIT 1 ";
    if ( $VISIT_ID ) {
        $q = " id='$VISIT_ID' ";
    }
    $qry = "SELECT * FROM phone_time_use WHERE $q";
    if ( isset( $this ) ) {
        $get_last_row = $this->db->query( $qry );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        $rows = $get_last_row->num_rows();
        $data = $get_last_row->result( 'object' );
    } else {
        global $conn;
        $get_last_row = mysqli_query( $conn, $qry );
        $rows = mysqli_num_rows( $get_last_row );
        $data = $get_last_row->fetch_object();
    }
    if ( $rows > 0 ) {
        return $data;
    } else {
        return FALSE;
    }
}

function getLastPhoneRow(
 $campaign_id, $phone, $time_of_call, $jpn_call_time_pst = '', $corr_time = '', $jpn_time_out = '', $VISIT_ID = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    $pre_time = $time_of_call;
    if ( $jpn_call_time_pst ) {
        $time_of_call = $jpn_call_time_pst;
    }
    if ( $corr_time ) {
        $time_out = $corr_time;
    }
    if ( $jpn_time_out ) {
        $time_out = $jpn_time_out;
    }
    $corr_time_hour = date( "H", strtotime( $time_out ) );
    $before_time = date( "Y-m-d H:i:s", strtotime( "-$corr_time_hour HOURS", strtotime( $time_of_call ) ) );
    $q = "phone_number LIKE '%" . $phone . "%'
		and TIMEDIFF( '$time_of_call', time_stamp ) <  '$time_out'
		and time_stamp < '$time_of_call'
		and campaign_id='$campaign_id'
		and ip != ''
		ORDER BY id DESC LIMIT 1";
    if ( $VISIT_ID ) {
        $q = " id='$VISIT_ID' ";
    }
    $qry = "SELECT * FROM phone_time_use WHERE $q";
    //echo $qry;
    if ( isset( $this ) ) {
        $get_recent_phone = $this->db->query( $qry );
        $rows = $get_recent_phone->num_rows();
        showFunction( __LINE__, __FUNCTION__, __FILE__, $qry );
        $data = $get_recent_phone->result( 'object' );
    } else {
        global $conn;
        $get_recent_phone = mysqli_query( $conn, $qry );
        $rows = mysqli_num_rows( $get_recent_phone );
        $data = $get_recent_phone->fetch_object();
    }
    if ( $rows > 0 ) {
        return $data;
    } else {
        collectCallPath( __FUNCTION__, __LINE__ );
        $q = "phone_number LIKE '%" . $phone . "%'
			and time_stamp < '$time_of_call'
			and campaign_id='$campaign_id'
			and ip != ''
			ORDER BY id DESC LIMIT 1";
        $qry = "SELECT * FROM phone_time_use WHERE $q";
        //echo $qry;
        if ( isset( $this ) ) {
            $get_recent_phone = $this->db->query( $qry );
            $rows = $get_recent_phone->num_rows();
            $data = $get_recent_phone->result( 'object' );
        } else {
            $get_recent_phone = mysqli_query( $conn, $qry );
            $rows = mysqli_num_rows( $get_recent_phone );
            $data = $get_recent_phone->fetch_object();
        }
        $subject = "";
        if ( $rows == 0 ) {
            $subject = " NO LAST ROW";
        }
        if ( $rows > 0 ) {
            return $data;
        } else {
            return FALSE;
        }
    }
}

function getActivePhone(
 $phone, $time_of_call, $corr_time = '', $jpn_call_time_pst = '', $jpn_time_out = '', $VISIT_ID = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    $pre_time = $time_of_call;
    if ( $jpn_call_time_pst ) {
        $time_of_call = $jpn_call_time_pst;
    }
    if ( $corr_time ) {
        $corr_time_hour = date( "H", strtotime( $corr_time ) );
    }
    if ( $jpn_time_out ) {
        $corr_time_hour = date( "H", strtotime( $jpn_time_out ) );
    }
    $before_time = date( "Y-m-d H:i:s", strtotime( "-$corr_time_hour HOURS", strtotime( $time_of_call ) ) );
    $q = "phone_number LIKE '%" . $phone . "%'
		and ( caller_phone is NULL OR caller_phone = '' )
		and time_stamp < '$time_of_call'
		and tracking_active='1'
		and '$time_of_call' < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND)
		ORDER BY id DESC LIMIT 1";
    $qr_ = 1;
    if ( $VISIT_ID ) {
        $q = " id='$VISIT_ID' ";
    }
    if ( $jpn_time_out ) {
        collectCallPath( __FUNCTION__, __LINE__ );
        $corr_time_hour = date( "H", strtotime( $jpn_time_out ) );
        $before_time = date( "Y-m-d H:i:s", strtotime( "-$corr_time_hour HOURS", strtotime( $time_of_call ) ) );
        $q = "phone_number LIKE '%" . $phone . "%'
			and ( caller_phone is NULL OR caller_phone = '' )
			and TIMEDIFF( '$time_of_call', time_stamp ) <  '$jpn_time_out'
			and time_stamp < '$time_of_call'
			and tracking_active='1'
			and '$time_of_call' < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND)
			ORDER BY id DESC LIMIT 1";
        $qr_ = 2;
    }
    if ( $corr_time ) {
        collectCallPath( __FUNCTION__, __LINE__ );
        $corr_time_hour = date( "H", strtotime( $corr_time ) );
        $before_time = date( "Y-m-d H:i:s", strtotime( "-$corr_time_hour HOURS", strtotime( $time_of_call ) ) );
        $q = "phone_time_use.phone_number LIKE '%" . $phone . "%'
			and ( caller_phone is NULL OR caller_phone = '' )
			and TIMEDIFF( '$time_of_call', time_stamp ) <  '$corr_time'
			and time_stamp < '$time_of_call'
			and tracking_active='1'
			and '$time_of_call' < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND)
			ORDER BY id DESC LIMIT 1";
        $qr_ = 3;
    }
    $qry = "SELECT * FROM phone_time_use WHERE $q";
    if ( isset( $this ) ) {
        $active_phone = $this->db->query( $qry );
        $rows = $active_phone->num_rows();
    } else {
        global $conn;
        $active_phone = mysqli_query( $conn, $qry );
        $rows = mysqli_num_rows( $active_phone );
    }
    $subject = "";
    if ( $rows == 0 ) {
        $subject = " NO CORREL";
    }
    echo $qry . ' - ROWS ' . $rows . ' | ';
    if ( $rows > 0 ) {
        if ( isset( $this ) ) {
            $data = $active_phone->result( 'object' );
        } else {
            $data = $active_phone->fetch_object();
        }

        return $data;
    } else {
        return FALSE;
    }
}

function checkVisitorActive( $phone, $visitor, $time, $VISIT_ID = '' )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    $q = "phone_number LIKE '%" . $phone . "%'
		AND ip='" . $visitor . "'
		AND time_stamp < DATE_ADD(time_stamp,INTERVAL time_out_duration SECOND)
		ORDER BY id DESC LIMIT 1";
    if ( $VISIT_ID ) {
        $q = " id='$VISIT_ID' ";
    }
    $qry = "SELECT * FROM phone_time_use WHERE $q";
    $active_visitor = $this->db->query( $qry );
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    if ( $active_visitor->num_rows() > 0 ) {
        $data = $active_visitor->result( 'object' );

        return $data;
    } else {
        return FALSE;
    }
}

function getCallTime( $duration )
{
    
}

function getTotalActiveCallsMade( $from, $phone, $ip )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    if ( isset( $this ) ) {
        $active_visitor = $this->db->query(
            "SELECT * FROM phone_time_use WHERE phone_number LIKE '%$phone%'
		AND caller_phone='$from' AND time_stamp > '" . date( "Y-m-d", strtotime( "-2 MONTHS" ) ) . "'"
        );
        $rows = $active_visitor->num_rows();
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
    } else {
        global $conn;
        $active_visitor = mysqli_query(
            $conn, "SELECT * FROM phone_time_use WHERE phone_number LIKE '%$phone%'
			AND caller_phone='$from' AND time_stamp > '" . date( "Y-m-d", strtotime( "-2 MONTHS" ) ) . "'"
        );
        $rows = mysqli_num_rows( $active_visitor );
    }
    if ( $rows > 0 ) {
        return $rows;
    } else {
        return 0;
    }
}

function getCallTimeAndRecording( $calls, $recordings = '', $duration )
{
    ///mdate("%Y",time());  "Year: %Y Month: %m Day: %d - %h:%i %a";
    $mp3_name = "";
    if ( $recordings != '' ) {
        $recording_name_explode = explode( "/", $recordings );
        $totalSlash = count( $recording_name_explode );
        $recording_name = $recording_name_explode[ $totalSlash - 1 ];
        $mp3_name = str_ireplace( "wav", "mp3", $recording_name );
        shell_exec( "wget --directory-prefix=application/views/audio " . $recordings
            . " && lame -V5 -b 96 application/views/audio/$recording_name application/views/audio/mp3/$mp3_name" );
        shell_exec( "rm application/views/audio/$recording_name" );
    }
    if ( $duration > 0 ) {
        $call_status = "ANSWER";
    } else {
        $call_status = "MISSED";
    }
    $call_status = "($calls) " . $call_status;

    return $call_status;
}

function addNewCall(
 $account_id, $duration, $phonenumber, $keywordType, $keyword, $matchtype, $trafficType, $mp3_name, $callid, $caller_state, $caller_country, $source, $calls, $call_status, $time_of_call, $campaign_id, $time_stamp, $unique_call_id, $jpn_time_stamp = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    if ( isset( $this ) ) {
        $findID = $this->db->query(
            "SELECT id,unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id' and campaign_id='$campaign_id'"
        );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        $rows = $findID->num_rows();
        $row = $findID->result( 'object' );
    } else {
        global $conn;
        $findID = mysqli_query(
            $conn, "SELECT id,unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id' and campaign_id='$campaign_id'"
        );
        $rows = mysqli_num_rows( $findID );
        $row = $findID->fetch_object();
    }
    if ( $rows > 0 ) {
        return $row->id;
    }
    if ( ! $jpn_time_stamp ) {
        $time_stamp = $time_of_call;
    }
    if ( in_array( $caller_country, array( 'Japan', 'JP', 'NON US', 'CALL ONLY' ) ) ) {
        $tz = get_timezone_offset( 'America/Los_Angeles', 'Asia/Tokyo', $time_of_call, 1 );
        $tz_dif = $tz[ 'HR' ];
        $time_stamp = date( "Y-m-d H:i:s", strtotime( "-" . $tz_dif . " HOURS", strtotime( $time_of_call ) ) );
    }
    $keyword = fuzzy_decode( $keyword );
//    $qry = "INSERT  INTO phone_time_use 
    $qry = "INSERT IGNORE INTO phone_time_use 
		(unique_call_id,
		account_id,
		call_duration,
		number_dialed,
		phone_number,
		$keywordType,
		matchtype,
		traffic_type,
		call_recording, 
		caller_phone,
		caller_state,
		caller_country,
		source,
		calls_placed,
		call_status, 
		time_of_call,
		campaign_id,
		time_stamp)
		VALUES 
		('" . $unique_call_id . "',
		'" . $account_id . "',
		'" . $duration . "',	
		'" . $phonenumber . "',
		'" . $phonenumber . "',
		'" . $keyword . "',	
		'" . $matchtype . "',	
		'" . $trafficType . "',										
		'" . $mp3_name . "',
		'" . $callid . "',
		'" . $caller_state . "',
		'" . $caller_country . "',
		'" . $source . "',
		'" . $calls . "',
		'" . $call_status . "',
		'" . $time_of_call . "',
		'" . $campaign_id . "',
		'" . $time_stamp . "')";
    echo $qry;
    try {
        if ( isset( $this ) ) {
            $this->db->query( $qry );
            showFunction( __LINE__, __FUNCTION__, __FILE__ );
            $id = $this->db->insert_id();
        } else {
            mysqli_query( $conn, $qry );
            $id = mysqli_insert_id( $conn );
        }
        $error = FALSE;
    } catch ( Exception $e ) {
        $error = $e->getMessage();
        $id = FALSE;
    }
    if ( ! $id ) {
        mail( 'hayashi@adgainer.co.jp', 'call offline', 'offline QRY 2 ' . $qry . ' ERROR: ' . $error . ' ' . __FILE__ );
    }

    return $id;
}

function get_timezone_offset( $remote_tz, $origin_tz = NULL, $datetime = 'now', $use_arr = 0 )
{
    if ( $origin_tz === NULL || $origin_tz == '' ) {
        if ( ! is_string( $origin_tz = date_default_timezone_get() ) ) {
            return FALSE; // A UTC timestamp was returned -- bail out!
        }
    }
    $origin_dtz = new DateTimeZone( $origin_tz );
    $remote_dtz = new DateTimeZone( $remote_tz );
    $origin_dt = new DateTime( $datetime, $origin_dtz );
    $remote_dt = new DateTime( $datetime, $remote_dtz );
    $offset = $origin_dtz->getOffset( $origin_dt ) - $remote_dtz->getOffset( $remote_dt );
    if ( $use_arr == 1 ) {
        return array( 'SEC' => $offset, 'HR' => (($offset / 60) / 60) );
    } else {
        return $offset;
    }
}

function getCorrDifferenceCallClick( $call_time, $click_time, $time_zone, $corr_window )
{
    $tz = get_timezone_offset( 'America/Los_Angeles', $time_zone, $click_time, 1 );
    $tz_dif = $tz[ 'HR' ];
    $call_secs = strtotime( $call_time );
    $click_secs = strtotime( "+" . $tz_dif . " HOURS", strtotime( $click_time ) );
    $dif = ($click_secs - $call_secs);
    if ( $dif < $corr_window ) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getTimeDifferenceCallClick( $call_time, $click_time, $time_zone, $duration )
{
    $tz = get_timezone_offset( 'America/Los_Angeles', $time_zone, $click_time, 1 );
    $tz_dif = $tz[ 'HR' ];
    $call_secs = strtotime( $call_time );
    $click_secs = strtotime( "+" . $tz_dif . " HOURS", strtotime( $click_time ) );
    $dif = ($click_secs - $call_secs);
    if ( $diff >= 0 ) {
        $diff = $diff * -1;
        $click_time = date( "Y-m-d H:i:s", ($click_secs - $diff ) );
    } else {
        return $click_time;
    }
}

//ini_set('track_errors', '1');
function addNewCallActive(
 $account_id, $duration, $phonenumber, $keywordType, $keyword, $matchtype, $trafficType, $mp3_name, $callid, $caller_state, $caller_country, $source, $calls, $call_status, $time_of_call, $campaign_id, $unique_call_id, $jpn_time_stamp = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    $qry = "SELECT id,unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id' and campaign_id='$campaign_id'";
    if ( isset( $this ) ) {
        $findID = $this->db->query( $qry );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        $rows = $findID->num_rows();
        $row = $findID->result( 'object' );
    } else {
        global $conn;
        $findID = mysqli_query( $conn, $qry );
        $rows = mysqli_num_rows( $findID );
        $row = $findID->fetch_object();
    }
    if ( $rows > 0 ) {
        echo "<br> ID FOUND " . __LINE__;

        return $row->id;
    }
    if ( ! $jpn_time_stamp ) {
        $time_stamp = $time_of_call;
    } else {
        $tz = get_timezone_offset( 'America/Los_Angeles', 'Asia/Tokyo', $time_of_call, 1 );
        $tz_dif = $tz[ 'HR' ];
        $time_stamp = date( "Y-m-d H:i:s", strtotime( "-" . $tz_dif . " HOURS", strtotime( $time_of_call ) ) );
    }
    $keyword = fuzzy_decode( $keyword );
//    $insert_new_call = "INSERT INTO phone_time_use 
    $insert_new_call = "INSERT IGNORE INTO phone_time_use 
		(unique_call_id,
		account_id,
		call_duration,
		number_dialed,
		phone_number,
		$keywordType,
		matchtype,
		traffic_type,
		call_recording, 
		caller_phone,
		caller_state,
		caller_country,
		source,
		calls_placed,
		call_status, 
		time_of_call,
		campaign_id,
		time_stamp)
		VALUES 
		('" . $unique_call_id . "',
		'" . $account_id . "',
		'" . $duration . "',	
		'" . $phonenumber . "',
		'" . $phonenumber . "',
		'" . $keyword . "',	
		'" . $matchtype . "',	
		'" . $trafficType . "',										
		'" . $mp3_name . "',
		'" . $callid . "',
		'" . $caller_state . "',
		'" . $caller_country . "',
		'" . $source . "',
		'" . $calls . "',
		'" . $call_status . "',
		'" . $time_of_call . "',
		'" . $campaign_id . "',
		'" . $time_stamp . "')";
    echo $insert_new_call;
    try {
        if ( isset( $this ) ) {
            $this->db->query( $insert_new_call );
            showFunction( __LINE__, __FUNCTION__, __FILE__ );
            $error = $this->db->error();
        } else {
            mysqli_query( $conn, $insert_new_call );
            $error = mysqli_error( $conn );
        }
        if ( ! $error ) {
            if ( isset( $this ) ) {
                return $this->db->insert_id();
            } else {
                return mysqli_insert_id( $conn );
            }
        } else {
            return $error . ' ' . $insert_new_call;
        }
    } catch ( Exception $e ) {
        showFunction( __LINE__, __FUNCTION__, __FILE__ );

        return $e->getMessage() . ' ' . $insert_new_call;
    }
}

function getKeywordType( $keywordType, $actualKeyword )
{
    if ( $keywordType == "keyword" ) {
        $keyword = "$actualKeyword";
    } elseif ( $keywordType == "k_keyword" ) {
        $keyword = "$actualKeyword";
    } elseif ( $keywordType == "j_keyword" ) {
        $keyword = "$actualKeyword";
    } elseif ( $keywordType == "ch_keyword" ) {
        $keyword = "$actualKeyword";
    } else {
        return 'keyword';
    }

    return $keyword;
}

function getMP3name( $recordings = '' )
{
    if ( $recordings != '' ) {
        $recording_name_explode = explode( "/", $recordings );
        $totalSlash = count( $recording_name_explode );
        $recording_name = $recording_name_explode[ $totalSlash - 1 ];
        $mp3_name = str_ireplace( "wav", "mp3", $recording_name );

        return $mp3_name;
    } else {
        return "";
    }
}

function getRecodingName( $recordings = '' )
{
    showFunction( __LINE__, __FUNCTION__, __FILE__ );
    if ( $recordings != '' ) {
        $recording_name_explode = explode( "/", $recordings );
        $totalSlash = count( $recording_name_explode );
        $recording_name = $recording_name_explode[ $totalSlash - 1 ];

        return $recording_name;
    } else {
        return "";
    }
}

function updateVisitorRow(
 $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $last_row, $unique_call_id, $VISIT_ID = '', $LINE = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    $w = " phone_number LIKE '%" . $phonenumber . "%' 
					AND 
					campaign_id='" . $campaign_id . "' and id='" . $last_row . "'";
    if ( $VISIT_ID ) {
        $w = " campaign_id='" . $campaign_id . "'AND id='$VISIT_ID'";
    }
    $qry = "UPDATE 
		phone_time_use 
		SET 
		unique_call_id='$unique_call_id',
		number_dialed='$phonenumber',
		call_duration='" . $duration . "',
		call_recording='" . $mp3_name . "', 
		caller_phone='" . $callid . "',
		caller_state='" . $caller_state . "', 
		caller_country='" . $caller_country . "', 
		calls_placed='" . $calls . "', 
		call_status='" . $call_status . "', 
		time_of_call='" . $time_of_call . "' 
		WHERE $w";
    echo $qry;
    printf(
        " LINE %s updateVisitorRow(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s='') ", $LINE, $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $last_row, $unique_call_id, $VISIT_ID
    );
    if ( isset( $this ) ) {
        $update_visit_data = $this->db->query( $qry );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
    } else {
        global $conn;
        $update_visit_data = mysqli_query( $conn, $qry );
    }

    return $update_visit_data;
}

function updateVisitorCallsRow(
 $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $id, $unique_call_id, $VISIT_ID = ''
 )
{
    collectCallPath( __FUNCTION__, __LINE__ );
    $qry = "UPDATE phone_time_use SET 
		number_dialed='$phonenumber',
		unique_call_id='$unique_call_id',
		call_duration='" . $duration . "',
		call_recording='" . $mp3_name . "', 
		caller_phone='" . $callid . "',
		caller_state='" . $caller_state . "', 
		caller_country='" . $caller_country . "', 
		calls_placed='" . $calls . "', 
		call_status='" . $call_status . "', 
		time_of_call='" . $time_of_call . "' 
		WHERE 
		phone_number LIKE '%" . $phonenumber . "%' 
		AND 
		campaign_id='" . $campaign_id . "' and id='" . $id . "'";
    if ( isset( $this ) ) {
        $update_visit_data = $this->db->query( $qry );
        showFunction( __LINE__, __FUNCTION__, __FILE__, $qry );
    } else {
//        require_once '/var/www/html/vendor/autoload.php';
        global $conn;
        $update_visit_data = mysqli_query( $conn, $qry );
    }

    $result = mysqli_query(
        $conn, sprintf(
            'SELECT * FROM `phone_time_use` WHERE `id` = %s', mysqli_real_escape_string( $conn, $id )
        )
    );
    $phone_time_use = $result->fetch_assoc();

    $result = mysqli_query(
        $conn, sprintf(
            'SELECT * FROM `ga_clients` WHERE `phone_time_use_id` = %s', mysqli_real_escape_string( $conn, $id )
        )
    );
    if ( mysqli_num_rows( $result ) ) {
        $ga_client = $result->fetch_assoc();
        if ( ! empty( $ga_client ) && ! empty( $phone_time_use ) ) {
            $result = mysqli_query(
                $conn, sprintf(
                    "SELECT * FROM `campaigns` WHERE `campaign_id` = '%s'", mysqli_real_escape_string( $conn, $campaign_id )
                )
            );
            $campaign = $result->fetch_assoc();

            $analytics = new \TheIconic\Tracking\GoogleAnalytics\Analytics( TRUE );
            $analytics
                ->setProtocolVersion( '1' )
                ->setTrackingId( $ga_client[ 'ga_tracking_id' ] )
                ->setClientId( $ga_client[ 'ga_client_id' ] )
                ->setIpOverride( $phone_time_use[ 'ip' ] )
                ->setUserAgentOverride( $phone_time_use[ 'platform' ] )
                ->setCampaignId( $campaign_id )
                ->setCampaignName( $campaign[ 'campaign_name' ] )
                ->setCampaignSource( $phone_time_use[ 'source' ] )
                ->setCampaignMedium( 'cpc' )
                ->setEventCategory( 'phone' )
                ->setEventAction( 'call' )
                ->setHitType( 'event' );
            if ( ! empty( $phone_time_use[ 'j_keyword' ] ) && $phone_time_use[ 'j_keyword' ] !== 'CALL ONLY' ) {
                $analytics->setCampaignKeyword( $phone_time_use[ 'j_keyword' ] );
            }
            if ( ! empty( $phone_time_use[ 'gclid' ] ) ) {
                $analytics->setGoogleAdwordsId( $phone_time_use[ 'gclid' ] );
            }
            if ( ! empty( $phone_time_use[ 'last_page' ] ) ) {
                $phone_time_use[ 'last_page' ] = explode( ';', $phone_time_use[ 'last_page' ] );
                if ( isset( $phone_time_use[ 'last_page' ][ 0 ] ) ) {
                    $phone_time_use[ 'last_page' ][ 0 ] = explode( ' : ', $phone_time_use[ 'last_page' ][ 0 ] );
                    $analytics
                        ->setUserLanguage( $campaign[ 'country_tracking' ] === 'j_keyword' ? 'ja' : 'en'  )
                        ->setDocumentHostName( parse_url( $phone_time_use[ 'last_page' ][ 0 ][ 0 ], PHP_URL_HOST ) );
                }
            }
            $response = $analytics->sendEvent();
            $log = compact( 'response', 'ga_client', 'phone_time_use', 'analytics' );
            error_log( json_encode( $log ) );
            mail( 'hayashi@adgainer.co.jp', 'Call CV to Client of GA', var_export( $log, TRUE ) );
        }
    }

    /**
     * VWO に通話 CV を通知する
     *
     * @see https://vwo.com/knowledge/track-offline-calls/
     * @see #370
     */
    $result = mysqli_query(
        $conn, sprintf(
            'SELECT * FROM `phone_time_use_options` WHERE `phone_time_use_id` = %s AND `name` = "vwo"', mysqli_real_escape_string( $conn, $id )
        )
    );
    if ( mysqli_num_rows( $result ) ) {
        $phone_time_use_options = $result->fetch_assoc();
        if ( ! empty( $phone_time_use_options ) && ! empty( $phone_time_use ) ) {
            $client = new GuzzleHttp\Client();
            $res = $client->request( 'GET', 'http://dev.visualwebsiteoptimizer.com/c.gif', array(
                'query' => json_decode( $phone_time_use_options[ 'value' ], TRUE )
                ) );
            error_log( 'SENT CV TO VWO: ' . json_encode( $res ) );
            mail( 'hayashi@adgainer.co.jp', 'Call CV to VWO', var_export( compact( 'phone_time_use_options', 'res' ), TRUE ) );
        }
    }

    return $update_visit_data;
}

function getCampainData( $campaign_id )
{
    if ( isset( $this ) ) {
        $getCampaign = $this->db->query( "SELECT * FROM campaigns WHERE campaign_id='$campaign_id'" );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        $data = $getCampaign->result( 'object' );
    } else {
        global $conn;
        $getCampaign = mysqli_query( $conn, "SELECT * FROM campaigns WHERE campaign_id='$campaign_id'" );
        $data = $getCampaign->fetch_object();
    }

    return $data;
}

function getCampaignIdWithPhone( $phone, $table, $field )
{
    if ( isset( $this ) ) {
        $getCampaign = $this->db->query( "SELECT * FROM $table WHERE $field='$phone'" );
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
        $data = $getCampaign->result( 'object' );
    } else {
        global $conn;
        $getCampaign = mysqli_query( $conn, "SELECT * FROM $table WHERE $field='$phone'" );
        $data = $getCampaign->fetch_object();
    }

    return $data;
}

function getPreCallID( $unique_call_id )
{
    if ( isset( $this ) ) {
        $q = $this->db->query(
            "SELECT v_id FROM click_calls as a JOIN phone_time_use as b ON (a.v_id = b.id )
		 WHERE click_calls.unique_call_id='$unique_call_id' AND matched = 0 limit 1"
        );
        $rows = $q->num_rows();
    } else {
        global $conn;
        $q = mysqli_query(
            $conn, "SELECT v_id FROM click_calls as a JOIN phone_time_use as b ON (a.v_id = b.id )
		 	WHERE click_calls.unique_call_id='$unique_call_id' AND matched = 0 limit 1"
        );
        $rows = mysqli_num_rows( $q );
    }
    if ( $rows == 1 ) {
        echo "
					getPreCallID LINE - " . __LINE__;
        if ( isset( $this ) ) {
            $id = $q->result( 'object' );
            $this->db->query( "UPDATE click_calls SET matched=1 WHERE v_id='" . $id->v_id . "' " );
        } else {
            $id = $q->fetch_object();
            mysqli_query( $conn, "UPDATE click_calls SET matched=1 WHERE v_id='" . $id->v_id . "' " );
        }

        return $id->v_id;
    } else {
        echo "
					getPreCallID LINE - " . __LINE__;

        return FALSE;
    }
}

function showFunction( $line, $function, $file, $qry = '', $subject = '' )
{
    if ( ! isset( $this ) ) {
        return;
    }
    echo "<br>";
    $msg = "LINE: " . $line . "		
		";
    echo "<br>";
    echo "<br>";
    $msg .= "FUNCTION: " . $function . "<br>
		";
    echo "<br>";
    echo "<br>";
    $msg .= "FILE: " . $file . "<br><br>		
		";
    echo "<br>";
    echo "<br>";
    $msg .= "AFFECTED ROWS: " . $this->db->affected_rows() . "<br><br>		
		";
    echo "<br>";
    echo "<br>";
    $msg .= "ERROR: " . $this->db->error() . "<br><br>		
		";
    echo "<br>";
    echo "<br>";
    echo $msg;
    if ( $this->db->error() != "" || $qry ) {
        if ( $qry ) {
            $sub = "NOTICE";
        } else {
            $sub = "";
        }
        if ( $this->db->error() != "" ) {
            $sub = "**REAL** ";
        }
        $mgr = "";
        //if($subject == " NO LAST ROW" || $subject == " NO CORREL") $mgr = ",manager@adgainer.co.jp";
        $sub .= $subject;
        mail( 'hayashi@adgainer.co.jp' . $mgr, $sub . " " . $_SERVER[ 'REQUEST_URI' ] . ' SQL ERROR', $msg . ' ' . $qry );
        echo $qry;
    }
}

function collectCallPath( $function, $line )
{
    /*
      if(!isset($_SESSION['CALL_PATH']))
      $_SESSION['CALL_PATH'] = "";
      if(isset($_SESSION['CALL_PATH']))
      $_SESSION['CALL_PATH'] .= "
      | ". $function ."  ". $line ." |

      ";
     */
}

function convertUTCtoLocal( $utc, $tz )
{
    $dt = new DateTime( $utc );
    $tz = new DateTimeZone( $tz ); // or whatever zone you're after
    $dt->setTimezone( $tz );

    return $dt->format( 'Y-m-d H:i:s' );
}

if ( ! function_exists( 'get_ip_address' ) ) {

    function get_ip_address()
    {
        $ip_address = getenv( 'HTTP_X_FORWARDED_FOR' ) ? getenv( 'HTTP_X_FORWARDED_FOR' ) : getenv( 'REMOTE_ADDR' );
        sscanf( $ip_address, '%[^,]', $ip_address );

        return $ip_address;
    }

}

if ( ! function_exists( 'fuzzy_decode' ) ) {

    /**
     * 渡された文字列をとにかく URL デコードする
     *
     * - 文字列が URL エンコードされたパラメータを含む URL っぽかったらデコードしないでそのまま返す
     *
     * @param $string
     * @return string
     */
    function fuzzy_decode( $string )
    {
        if ( ! preg_match( '!http.*%!', $string ) ) {
            $string = urldecode( $string );
        }
        return $string;
    }

}
