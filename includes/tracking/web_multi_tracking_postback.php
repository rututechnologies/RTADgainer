<?php
$db = array(
    'hostname' => getenv( 'DB_HOST' ),
    'username' => getenv( 'DB_USERNAME' ),
    'password' => getenv( 'DB_PASSWORD' ),
//	'database' => getenv('DB_NAME'),
    'database' => 'adgainer_db_test',
);
$conn = mysqli_connect( $db[ 'hostname' ], $db[ 'username' ], $db[ 'password' ] );
mysqli_set_charset( $conn, 'utf8' );
mysqli_select_db( $conn, $db[ 'database' ] );
if ( ! isset( $visitor ) ) {
    $visitor = get_ip_address();
}
//current time
$unix_current_date = time();
//experation time in secs
$phone_expiration_secs = ($have_campaign->correlation_time * 60 * 60);
//beginning window
$newTime2 = $unix_current_date - $phone_expiration_secs;
//beginning window in actual time
$jpnTime = 0;
if ( isset( $jpn ) ) {
    $jpnTime = "54000";
}
$time_before_current = date( "Y-m-d  H:i:s", $newTime2 - $jpnTime );
//set old numbers to 0
updatePhonesMulti( $campaign_id, $time_before_current );
$time5 .= " 1 ";
$have_active_visitor_data = getActivePhone( $phonenumber, $callstart, $corr_time, $jpn_call_time_pst, $jpn_time_out );
$time5 .= " 2 ";
if ( ! $have_active_visitor_data ) {
    ////////////////////////
    ////////////visitor not active
    ///get last row for caller and tracking number
    $time5 .= " 3 ";
    $have_last_id_query = getPhoneAndCaller( $campaign_id, $phonenumber, $callid, $callstart, $corr_time, $jpn_call_time_pst, $jpn_time_out );
    $TID = "no id";
    if ( isset( $have_last_id_query->id ) ) {
        $TID = $have_last_id_query->id;
    }
    $time5 .= " 4 ";
    if ( $have_last_id_query ) {
        ////////////////////////
        ////////////has last row id, phone number exist
        $last_row = $have_last_id_query->id;
        $campaignData = $have_campaign;
        $time5 .= " 5 ";
        if ( $have_last_id_query->calls_placed < 1 ) {
            $calls = 1;
            $time_of_call = $callstart;
            $call_status = getCallTimeAndRecording( $calls, $recordings, $duration );
            $time5 .= " 6 ";
        } else {
            $calls = 1 + getTotalActiveCallsMade( $callid, $phonenumber, $visitor );
            $time_of_call = $callstart;
            $call_status = getCallTimeAndRecording( $calls, $recordings, $duration );
            $time5 .= " 7 ";
        }
        $time5 .= " 8 ";
        if ( $calls > 1 ) {
            ///called more than once after correlation
            $time5 .= " 9 ";
            $keywordType = $have_campaign->country_tracking;
            $keyword = getKeywordType( $have_campaign->country_tracking, $have_last_id_query->$keywordType );
            $mp3_name = getMP3name( $recordings );
            $time_stamp = date( "Y-m-d H:i:s", (time() - 20 ) );
            $matchtype = $have_last_id_query->matchtype;
            $source = $have_last_id_query->source;
            $keyword = $have_last_id_query->$keywordType;
            $gclid = $have_last_id_query->gclid;
            $msclkid = $have_last_id_query->msclkid;
            addNewCall( $have_campaign->account_id, $duration, $phonenumber, $keywordType, $keyword, $matchtype, $have_last_id_query->traffic_type, $mp3_name, $callid, $caller_state, $caller_country, $have_last_id_query->source, $calls, $call_status, $time_of_call, $campaign_id, $time_stamp, $unique_call_id, $jpn_time_stamp );
        } else {
            $time5 .= " 10 ";
            $mp3_name = getMP3name( $recordings );
            $v_id = getPreCallID( $unique_call_id );
            if ( $v_id == FALSE || ! is_numeric( $v_id ) ) {
                $last_phone_data = getLastPhoneRow( $campaign_id, $phonenumber, $callstart, $jpn_call_time_pst, $corr_time, $jpn_time_out );
                if ( isset( $last_phone_data->id ) ) {
                    $v_id_ = $last_phone_data->id;
                }
            }
            $last_row_ = $v_id_;
            if ( $v_id_ != FALSE && is_numeric( $v_id_ ) ) {
                $updateRow = updateVisitorRow( $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $last_row_, $unique_call_id, $v_id_ );
            } else {
                $keyword = getKeywordType( $have_campaign->country_tracking, $have_last_id_query->$keywordType );
                $mp3_name = getMP3name( $recordings );
                $time_stamp = date( "Y-m-d H:i:s", (time() - 20 ) );
                $matchtype = $have_last_id_query->matchtype;
                $source = $have_last_id_query->source;
                $keyword = $have_last_id_query->$keywordType;
                $gclid = $have_last_id_query->gclid;
                $msclkid = $have_last_id_query->msclkid;
                addNewCall( $have_campaign->account_id, $duration, $phonenumber, $keywordType, $keyword, $matchtype, $have_last_id_query->traffic_type, $mp3_name, $callid, $caller_state, $caller_country, $have_last_id_query->source, $calls, $call_status, $time_of_call, $campaign_id, $time_stamp, $unique_call_id, $jpn_time_stamp );
            }
        }
        ////end match found for caller and phone number
    } else {
        $time5 .= " 11 ";
        ////////////////////////
        ////////////caller and phone no match
        $mp3_name = "";
        if ( $recordings ) {
            $mp3_name = getMP3name( $recordings );
        }
        $last_phone_data = getLastPhoneRow( $campaign_id, $phonenumber, $callstart, $jpn_call_time_pst, $corr_time, $jpn_time_out );
        if ( isset( $last_phone_data->campaign_id ) ) {
            $campaignData = getCampainData( $last_phone_data->campaign_id );
            $LASTTYPE = $last_phone_data->traffic_type;
            $LASTSOURCE = $last_phone_data->source;
            $source = $last_phone_data->source;
            $key_type = $campaignData->country_tracking;
            $keyword = $last_phone_data->$key_type;
            $gclid = $last_phone_data->gclid;
            $msclkid = $last_phone_data->msclkid;
            $matchtype = $last_phone_data->matchtype;
            $time_stamp = $last_phone_data->time_stamp;
            $time5 .= " 12 ";
        } else {
            $time5 .= " 13 ";
            $campaign_PH = getCampaignIdWithPhone( $phonenumber, 'multi_tracking_inventory', 'track_phone' );
            $campaignData = getCampainData( $campaign_PH->campaign_id );
            $LASTTYPE = "CALL ONLY";
            $LASTSOURCE = "CALL ONLY";
            $source = "CALL ONLY";
            $keyword = "NONE";
            $matchtype = "CALL";
            $time_stamp = date( "Y-m-d H:i:s" );
        }
        ///caller does not exist in db history
        $calls = 1;
        $time_of_call = $callstart;
        $call_status = getCallTimeAndRecording( $calls, $recordings, $duration );
        $keywordType = $have_campaign->country_tracking;
        if ( isset( $last_phone_data->$keywordType ) ) {
            $LASTKW = $last_phone_data->$keywordType;
        } else {
            $LASTKW = "CALL ONLY";
        }
        $keyword = getKeywordType( $have_campaign->country_tracking, $LASTKW );
        if ( isset( $last_phone_data->id ) && $last_phone_data->caller_phone == "" ) {
            $updateRow = updateVisitorRow( $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $last_phone_data->id, $unique_call_id, '', __LINE__ );
        } else {
            addNewCall( $have_campaign->account_id, $duration, $phonenumber, $keywordType, $LASTKW, $matchtype, $LASTTYPE, $mp3_name, $callid, $caller_state, $caller_country, $LASTSOURCE, $calls, $call_status, $time_of_call, $campaign_id, $time_stamp, $unique_call_id, $jpn_time_stamp );
        }
    }
    ////////////////////////
    /////////////visitor active
    $time5 .= " 14 ";
} else {
    $time5 .= " 15 ";
    $city = $have_active_visitor_data->visitor_city_state;
    $call_duration = $have_active_visitor_data->call_duration;
    $campaignData = getCampainData( $have_active_visitor_data->campaign_id );
    $keywordType = $campaignData->country_tracking;
    $matchtype = $have_active_visitor_data->matchtype;
    $keyword = $have_active_visitor_data->$keywordType;
    $source = $have_active_visitor_data->source;
    $gclid = $have_active_visitor_data->gclid;
    $msclkid = $have_active_visitor_data->msclkid;
    if ( $have_active_visitor_data->calls_placed < 1 ) {
        $calls = 1;
        $time_of_call = $callstart;
        $call_status = getCallTimeAndRecording( $calls, $recordings, $duration );
        $time5 .= " 16 ";
    } else {
        $calls = 1 + getTotalActiveCallsMade( $callid, $phonenumber, $visitor );
        $time_of_call = $callstart;
        $keywordType = $have_campaign->country_tracking;
        $call_status = getCallTimeAndRecording( $calls, $recordings, $duration );
        $calls_placed = $have_active_visitor_data->calls_placed + 1;
        $keyword = $have_active_visitor_data->$keywordType;
        $time5 .= " 17 ";
    }
    $mp3_name = getMP3name( $recordings );
    if ( $calls == 1 ) {
        $time5 .= " 18 ";
        $updateRow = updateVisitorCallsRow( $duration, $mp3_name, $callid, $caller_state, $caller_country, $calls, $call_status, $time_of_call, $phonenumber, $campaign_id, $have_active_visitor_data->id, $unique_call_id );
    } else {
        $time5 .= " 19 ";
        $LASTKW = $have_active_visitor_data->$keywordType;
        $updateRow = addNewCallActive( $have_campaign->account_id, $duration, $phonenumber, $keywordType, $LASTKW, $matchtype, $have_active_visitor_data->traffic_type, $mp3_name, $callid, $caller_state, $caller_country, $have_active_visitor_data->source, 1, $call_status, $time_of_call, $campaign_id, $unique_call_id, $jpn_time_stamp );
    }
    if ( $updateRow === TRUE || is_numeric( $updateRow ) ) {
        $time5 .= " ADD ";
    } else {
        mail( "hayashi@adgainer.co.jp", "NOT ADDED CALL", $unique_call_id . ' ' . $time_of_call . ' ' . $callid . ' ' . $phonenumber . ' ' . $updateRow );
    }
}
$time5 .= " 20 ";
