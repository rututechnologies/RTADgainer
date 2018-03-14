<?php
$mp3_name = "";
if ( $duration > 0 ) {
    $call_status = "ANSWER";
} else {
    $call_status = "MISSED";
}
if ( isset( $this ) ) {
    $findID = $this->db->query( "SELECT unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id'" );
    if ( $findID->num_rows() > 0 ) {
        exit();
    }
} else {
    $findID = mysqli_query( $conn, "SELECT unique_call_id FROM phone_time_use WHERE unique_call_id='$unique_call_id'" );
    if ( mysqli_num_rows( $findID ) > 0 ) {
        exit();
    }
}

/**
 * time_of_call を Asia/Tokyo とした場合に 120 秒差し引いた日時を America/Los_Angeles で返す
 */
$time_stamp = (
(new DateTime($callstart, new DateTimeZone('Asia/Tokyo')))->sub(new DateInterval('PT120S'))
)->setTimezone( new DateTimeZone( 'America/Los_Angeles' ) )->format( 'Y-m-d H:i:s' );

echo " <br> CALL ONLY OFFLINE $time_stamp  | $jpn_time_stamp ";
$qry = "INSERT INTO phone_time_use 
	(unique_call_id,
	call_duration,
	call_recording,
	j_keyword,										 
	phone_number,	
	number_dialed,	
	caller_phone,
	caller_state,
	caller_country,
	source,
	call_status, 
	time_of_call,
	calls_placed,
	account_id,
	campaign_id,
	time_stamp)
	VALUES 
	('" . $unique_call_id . "',
	'" . $duration . "',											
	'$mp3_name',
	'CALL ONLY',
	'" . $phonenumber . "',	
	'" . $phonenumber . "',	
	'" . $callid . "',
	'$caller_state',
	'$caller_country',
	'" . $have_campaign->campaign_name . "',
	'$call_status',
	'$callstart',
	'1',
	'" . $have_campaign->account_id . "',
	'$campaign_id',
	'" . $time_stamp . "')";
try {
    if ( isset( $this ) ) {
        $this->db->query( $qry );
        $id = $this->db->insert_id();
        showFunction( __LINE__, __FUNCTION__, __FILE__ );
    } else {
        $mysql = mysqli_query( $conn, $qry );
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
