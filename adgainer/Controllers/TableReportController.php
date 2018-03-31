<?php
namespace Adgainer\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use stdClass;

class TableReportController extends Controller
{
    public function getReportType( $name, $reportType, $account_id, $username, $have_id = 0, $build = 0, $gen = 0 )
    {
        $name = urldecode( $name );
        $data[ 'TYPE' ] = "User";
        // $qry = "SELECT * FROM profile_report_settings WHERE username='$username' AND report_name='$name' AND $reportType='1'";
        $qry = DB::table( 'profile_report_settings' )
            ->where( [ 'username' => $username, 'report_name' => $name, $reportType => '1' ] )
            ->get();
        if ( $qry->count() == 0 ) {
            $data[ 'TYPE' ] = "Account";
            // $reportFields = $this->db->query( "SELECT * FROM profile_report_settings WHERE account_id='$account_id' AND report_name='$name' AND $reportType='1'" );
            $qry = DB::table( 'profile_report_settings' )
                ->where( [ 'account_id' => $account_id, 'report_name' => $name, $reportType => '1' ] )
                ->get();
        }
        if ( $qry->count() == 0 ) {
            $data[ 'TYPE' ] = "Default";
            // $qry = "SELECT * FROM profile_report_settings WHERE account_id='default' AND report_name='$name' AND $reportType='1'";
            $qry = DB::table( 'profile_report_settings' )
                ->where( [ 'account_id' => 'default', 'report_name' => $name, $reportType => '1' ] )
                ->get();
        }
        if ( $have_id == 1 ) {
            $data[ 'TYPE' ] = "User";
//            $qry = "SELECT * FROM profile_report_settings WHERE id='$name'";
            $qry = DB::table( 'profile_report_settings' )
                ->where( [ 'id' => $name ] )
                ->get();
        }
        if ( $build == 1 ) {
            $data[ 'TYPE' ] = "User";
//            $qry = "SELECT * FROM profile_report_settings WHERE username='$username' AND report_name='$name'";
            $qry = DB::table( 'profile_report_settings' )
                ->where( [ 'username' => $username, 'report_name' => $name ] )
                ->get();
        }
        if ( $gen == 1 ) {
            $data[ 'TYPE' ] = "User";
//            $qry = "SELECT * FROM profile_report_settings WHERE  report_name = '" . $name . "' and report=1 and username='$username' ";
            $qry = DB::table( 'profile_report_settings' )
                ->where( [ 'report_name' => $name, 'report' => 1, 'username' => $username ] )
                ->get();
            if ( $qry->count() == 0 ) {
                $name_ = explode( " ", $name );
//                $qry = "SELECT * FROM profile_report_settings WHERE report_name LIKE '%" . $name_[ 0 ] . "%' and report=1 and username='default'  ";
                $qry = DB::table( 'profile_report_settings' )
                    ->where( 'report_name', 'LIKE', '%' . $name_[ 0 ] )
                    ->where( [ 'report' => 1, 'username' => 'default' ] )
                    ->get();
            }
        }
//        $send = "";
//        if ( !isset( $reportFields->row()->id ) ) {
//            $send = $qry;
//        }
//        $this->checkDB( __FUNCTION__, __LINE__, __FILE__, $send );
        $qry_data = $qry->toArray();
        $data[ 'ID' ] = $qry_data[ 0 ]->id;
        $data[ 'TRAFFIC' ] = $qry_data[ 0 ]->traffic;
        $data[ 'FIELDS' ] = $qry_data[ 0 ]->fields;

        return $data;
    }

    function checkCampaignGoalSet( $fields, $account_id, $campaign_id = '' )
    {
        $cQ = "";
        if ( $campaign_id ) {
            $cQ = " AND campaign_id='$campaign_id' ";
        }
//        $q = $this->db->query(
//            "SELECT goal1, goal2, goal3, goal4, goal5, goal6, goal7, goal8, goal9, goal10, goal1Memo, goal2Memo,
//			goal3Memo, goal4Memo, goal5Memo, goal6Memo, goal7Memo, goal8Memo, goal9Memo, goal10Memo, camp_custom1,
//			camp_custom2, camp_custom3, camp_custom4, camp_custom5, camp_custom6, camp_custom7, camp_custom8,
//			camp_custom9, camp_custom10 FROM campaigns WHERE account_id='$account_id' $cQ "
//        );
        $q = DB::table( 'campaigns' )
            ->selectRaw( 'goal1, goal2, goal3, goal4, goal5, goal6, goal7, goal8, goal9, goal10, goal1Memo, goal2Memo,
			goal3Memo, goal4Memo, goal5Memo, goal6Memo, goal7Memo, goal8Memo, goal9Memo, goal10Memo, camp_custom1,
			camp_custom2, camp_custom3, camp_custom4, camp_custom5, camp_custom6, camp_custom7, camp_custom8,
			camp_custom9, camp_custom10' )
            ->where( 'account_id', $account_id );
        if ( $campaign_id ) {
            $q = $q->where( 'campaign_id', $campaign_id );
        }
        $res = $q->get();
        $goals = array( 1  => array( 0 ), 2  => array( 0 ), 3  => array( 0 ), 4  => array( 0 ), 5  => array( 0 ), 6  => array( 0 ), 7  => array( 0 ), 8  => array( 0 ), 9  => array( 0 ), 10 => array( 0 ),
            11 => array( 0 ), 12 => array( 0 ), 13 => array( 0 ), 14 => array( 0 ), 15 => array( 0 ), 16 => array( 0 ), 17 => array( 0 ), 18 => array( 0 ), 19 => array( 0 ), 20 => array( 0 )
        );
        foreach ( $res as $row ) {
            if ( $row->goal1 != "" || $row->goal1Memo != "" ) {
                $goals[ 1 ][] = 1;
            }
            if ( $row->goal2 != "" || $row->goal2Memo != "" ) {
                $goals[ 2 ][] = 1;
            }
            if ( $row->goal3 != "" || $row->goal3Memo != "" ) {
                $goals[ 3 ][] = 1;
            }
            if ( $row->goal4 != "" || $row->goal4Memo != "" ) {
                $goals[ 4 ][] = 1;
            }
            if ( $row->goal5 != "" || $row->goal5Memo != "" ) {
                $goals[ 5 ][] = 1;
            }
            if ( $row->goal6 != "" || $row->goal6Memo != "" ) {
                $goals[ 6 ][] = 1;
            }
            if ( $row->goal7 != "" || $row->goal7Memo != "" ) {
                $goals[ 7 ][] = 1;
            }
            if ( $row->goal8 != "" || $row->goal8Memo != "" ) {
                $goals[ 8 ][] = 1;
            }
            if ( $row->goal9 != "" || $row->goal9Memo != "" ) {
                $goals[ 9 ][] = 1;
            }
            if ( $row->goal10 != "" || $row->goal10Memo != "" ) {
                $goals[ 10 ][] = 1;
            }
            if ( $row->camp_custom1 != "" || $row->camp_custom1 != "" ) {
                $goals[ 11 ][] = 1;
            }
            if ( $row->camp_custom2 != "" || $row->camp_custom2 != "" ) {
                $goals[ 12 ][] = 1;
            }
            if ( $row->camp_custom3 != "" || $row->camp_custom3 != "" ) {
                $goals[ 13 ][] = 1;
            }
            if ( $row->camp_custom4 != "" || $row->camp_custom4 != "" ) {
                $goals[ 14 ][] = 1;
            }
            if ( $row->camp_custom5 != "" || $row->camp_custom5 != "" ) {
                $goals[ 15 ][] = 1;
            }
            if ( $row->camp_custom6 != "" || $row->camp_custom6 != "" ) {
                $goals[ 16 ][] = 1;
            }
            if ( $row->camp_custom7 != "" || $row->camp_custom7 != "" ) {
                $goals[ 17 ][] = 1;
            }
            if ( $row->camp_custom8 != "" || $row->camp_custom8 != "" ) {
                $goals[ 18 ][] = 1;
            }
            if ( $row->camp_custom9 != "" || $row->camp_custom9 != "" ) {
                $goals[ 19 ][] = 1;
            }
            if ( $row->camp_custom10 != "" || $row->camp_custom10 != "" ) {
                $goals[ 20 ][] = 1;
            }
        }
        if ( array_sum( $goals[ 1 ] ) == 0 ) {
            if ( ($key = array_search( "goal1_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 2 ] ) == 0 ) {
            if ( ($key = array_search( "goal2_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 3 ] ) == 0 ) {
            if ( ($key = array_search( "goal3_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 4 ] ) == 0 ) {
            if ( ($key = array_search( "goal4_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 5 ] ) == 0 ) {
            if ( ($key = array_search( "goal5_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 6 ] ) == 0 ) {
            if ( ($key = array_search( "goal6_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 7 ] ) == 0 ) {
            if ( ($key = array_search( "goal7_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 8 ] ) == 0 ) {
            if ( ($key = array_search( "goal8_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 9 ] ) == 0 ) {
            if ( ($key = array_search( "goal9_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 10 ] ) == 0 ) {
            if ( ($key = array_search( "goal10_hit", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 11 ] ) == 0 ) {
            if ( ($key = array_search( "custom1", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 12 ] ) == 0 ) {
            if ( ($key = array_search( "custom2", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 13 ] ) == 0 ) {
            if ( ($key = array_search( "custom3", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 14 ] ) == 0 ) {
            if ( ($key = array_search( "custom4", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 15 ] ) == 0 ) {
            if ( ($key = array_search( "custom5", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 16 ] ) == 0 ) {
            if ( ($key = array_search( "custom6", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 17 ] ) == 0 ) {
            if ( ($key = array_search( "custom7", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 18 ] ) == 0 ) {
            if ( ($key = array_search( "custom8", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 19 ] ) == 0 ) {
            if ( ($key = array_search( "custom9", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        if ( array_sum( $goals[ 20 ] ) == 0 ) {
            if ( ($key = array_search( "custom10", $fields )) !== FALSE ) {
                unset( $fields[ $key ] );
            }
        }
        return $fields;
    }

    function setDataFields( $headingFields, $dataFields )
    {
        $dataFields = explode( ",", $dataFields );
        if ( in_array( 'goal1_hit', $headingFields ) ) {
            $dataFields[] = 'goal1_time';
        }
        if ( in_array( 'goal2_hit', $headingFields ) ) {
            $dataFields[] = 'goal2_time';
        }
        if ( in_array( 'goal3_hit', $headingFields ) ) {
            $dataFields[] = 'goal3_time';
        }
        if ( in_array( 'goal4_hit', $headingFields ) ) {
            $dataFields[] = 'goal4_time';
        }
        if ( in_array( 'goal5_hit', $headingFields ) ) {
            $dataFields[] = 'goal5_time';
        }
        if ( in_array( 'goal6_hit', $headingFields ) ) {
            $dataFields[] = 'goal6_time';
        }
        if ( in_array( 'goal7_hit', $headingFields ) ) {
            $dataFields[] = 'goal7_time';
        }
        if ( in_array( 'goal8_hit', $headingFields ) ) {
            $dataFields[] = 'goal8_time';
        }
        if ( in_array( 'goal9_hit', $headingFields ) ) {
            $dataFields[] = 'goal9_time';
        }
        if ( in_array( 'goal10_hit', $headingFields ) ) {
            $dataFields[] = 'goal10_time';
        }

        return implode( ",", $dataFields );
    }

    public function getReportRecords( $fields, $date1, $date2, $rType, $order, $dir, $start, $end, $traffic, $account_id, $campaign_id = '', $archive = '', $date1_TZ = '', $date2_TZ = '', $report = '', $type = '', $user_account_id = '' )
    {
        $table = "phone_time_use";
        if ( $archive == 1 ) {
            $table = "phone_time_use_archive";
            $fields = explode( ',', $fields );
            $availableFields = [
                'id', 'unique_call_id', 'pre_call_id', 'ag_server', 'phone_number', 'number_type', 'caller_phone',
                'account_id', 'campaign_id', 'dblclick_name_calls', 'dblclick_name_goals', 'dblclick_agency_id',
                'dblclick_advertiser_id', 'dblclick_conv_id_calls', 'dblclick_conv_id_goals', 'visitor_city_state',
                'visitor_country', 'visitor_country_codecaller_name', 'caller_state', 'caller_country', 'caller_city',
                'caller_zip', 'keyword', 'ch_keyword', 'j_keyword', 'k_keyword', 'typed_keyword', 'matchtype',
                'network', 'searchTerm', 'gclid', 'banner_id', 'landing_page_id', 'msclkid', 'mkwid', 'pcrid', 'pkw',
                'pmt', 'pdv', 'm_rev', 'ip', 'whois', 'lat', 'lng', 'geoError', 'session_id', 'visit_id', 'device_id',
                'location', 'source', 'utm_content', 'utm_campaign', 'mobile', 'platform', 'browser', 'traffic_type',
                'entry_type', 'chat_session', 'email_data', 'j_email_data', 'ch_email_data', 'k_email_data',
                'email_data_sent', 'email_rating', 'email_comment', 'call_duration', 'call_status', 'call_rate',
                'call_comment', 'call_data', 'call_recording', 'calls_placed', 'calls_placed_after_correlation',
                'time_of_call', 'time_assigned', 'last_page', 'tracking_active', 'visits', 'clicks', 'page_views',
                'time_on_site', 'time_stamp', 'time_out_duration', 'goal1_hit', 'goal1_time', 'goal2_hit',
                'goal2_time', 'goal3_hit', 'goal3_time', 'goal4_hit', 'goal4_time', 'goal5_hit', 'goal5_time',
                'goal6_hit', 'goal6_time', 'goal7_hit', 'goal7_time', 'goal8_hit', 'goal8_time', 'goal9_hit',
                'goal9_time', 'goal10_hit', 'goal10_time', 'custom1', 'custom2', 'custom3', 'custom4', 'custom5',
                'custom6', 'custom7', 'custom8', 'custom9', 'custom10', 'display', 'from_acct', 'from_camp',
                'goal_pg_actions', 'dblclick_conversion_sent', 'adw_conversion_sent', 'update_key'
            ];
            $rows = [];
            foreach ( $fields as &$field ) {
                $field = trim( $field );
                if ( in_array( $field, $availableFields ) ) {
                    $rows[] = $field;
                }
            }
            $fields = implode( ',', $rows );
            unset( $rows );
        }
        $aQ = " $table.account_id='$account_id' ";
        $cQ = "";
        if ( $campaign_id ) {
            $cQ = " $table.campaign_id='$campaign_id' ";
            $aQ = "";
        }
        $dQ = "";
        if ( $date1 && $date2 ) {
            $date1 = date( "Y-m-d H:i:s", strtotime( $date1 ) );
            $date2 = date( "Y-m-d H:i:s", (strtotime( $date2 ) ) );
            $dQ = " AND time_stamp >= '$date1' AND time_stamp <= '$date2' ";
            if ( $date1_TZ && $date2_TZ ) {
                $date1_TZ = date( "Y-m-d H:i:s", strtotime( $date1_TZ ) );
                $date2_TZ = date( "Y-m-d H:i:s", (strtotime( $date2_TZ ) ) );
                $dQ = " AND time_stamp >= '$date1_TZ' AND time_stamp <= '$date2_TZ' ";
            }
            $order = " time_stamp ";
        }
        $rQ = " AND ip!=''  ";
        if ( $rType == 0 ) {  //web
            $rQ = " AND ip!='' ";
        } else {
            if ( $rType == 1 ) { //calls
                $rQ = " AND ( $table.caller_phone != '' OR $table.caller_phone IS NOT NULL )";
                $date1 = date( "Y-m-d H:i:s", strtotime( $date1 ) );
                $date2 = date( "Y-m-d H:i:s", (strtotime( $date2 . " +1 DAYS " ) ) );
                $dQ = " AND time_of_call >= '$date1' AND time_of_call <= '$date2' ";
                $order = " time_of_call ";
            } else {
                if ( $rType == 2 ) {  ///convs
                    $rQ = " AND ( goal1_hit='1' OR goal2_hit='1' OR goal3_hit='1' OR goal4_hit='1' OR goal5_hit='1' OR goal6_hit='1' OR goal7_hit='1' OR goal8_hit='1' OR goal9_hit='1' OR goal10_hit='1' OR $table.caller_phone!='' OR email_data_sent='1') ";
                } else {
                    if ( $rType == 3 ) {  ///goals
                        $rQ = " AND ( goal1_hit='1' OR goal2_hit='1' OR goal3_hit='1' OR goal4_hit='1' OR goal5_hit='1' OR goal6_hit='1' OR goal7_hit='1' OR goal8_hit='1' OR goal9_hit='1' OR goal10_hit='1' ) ";
                    } else {
                        if ( $rType == 4 ) {
                            $rQ = "AND ip!='' AND traffic_type='PPC' ";
                        }
                    }
                }
            }
        }
        if ( $order == "" ) {
            $order = "$table.id";
        }
        if ( $dir == "" && $order == "$table.id" ) {
            $dir = "DESC";
        }
        $defField = "$table.account_id,$table.campaign_id,$table.id as rowID,visits,page_views,ip,last_page";
        if ( $fields != "" ) {
            $defField = "$table.account_id,$table.campaign_id,$table.id as rowID,visits,page_views,ip,last_page,";
        }
        if ( stristr( $order, "goal" ) || stristr( $order, "email" ) ) {
            $order = "$table.id $dir,$order ";
        }
        $lim = "LIMIT $start,$end";
        if ( $start == 0 && $end == 0 ) {
            $lim = "";
        }
        $trQ = "";
        if ( $traffic ) {
            $trQ = " AND ( ";
            $tr_exp = explode( "|", $traffic );
            foreach ( $tr_exp as $kt => $traffic ) {
                $trQ .= " upper(traffic_type)='" . strtoupper( $traffic ) . "' OR";
            }
            $trQ = substr( $trQ, 0, -2 );
            $trQ .= " ) ";
        }
        $fields = str_replace( "keyword", "keyword,j_keyword,k_keyword,ch_keyword", $fields );
        $fields = str_replace( 'goal_pages,', '', $fields );
        $fields = str_replace( 'goal_pages', '', $fields );
        $defField = str_replace( 'goal_pages,', '', $defField );
        $defField = str_replace( 'goal_pages', '', $defField );
        $fields = $this->removeChar( $fields, "," );
        $hide_repeat = "  INNER JOIN phone_time_use as p ON ( p.phone_number = $table.phone_number and p.caller_phone = $table.caller_phone and p.id != $table.id )  ";

        $fields = str_replace( 'caller_phone', "$table.caller_phone", $fields );
        $qry = "SELECT" . PHP_EOL;
        $qry .= $defField . PHP_EOL;
        $qry .= $fields . PHP_EOL;
        $qry .= ", click_calls.c_unique_call_id as matched_called" . PHP_EOL;
        $qry .= ", campaigns.timeZone" . PHP_EOL;
        $qry .= ", campaigns.correlation_time" . PHP_EOL;
        $qry .= ", $table.id" . PHP_EOL;
        $qry .= "FROM " . $table . PHP_EOL;
        $qry .= "  JOIN campaigns" . PHP_EOL;
        // DEBUG: =
//        $qry .= "    ON (campaigns.campaign_id <> $table.campaign_id)" . PHP_EOL;
        $qry .= "    ON (campaigns.campaign_id = $table.campaign_id)" . PHP_EOL;
        $qry .= "  LEFT JOIN click_calls" . PHP_EOL;
        $qry .= "    ON (click_calls.v_id = $table.id)" . PHP_EOL;
        $qry .= "  LEFT JOIN phone_time_use_salesforce" . PHP_EOL;
        $qry .= "    ON (phone_time_use_salesforce.phone_time_use_id = $table.id)" . PHP_EOL;
        $qry .= "WHERE $aQ $cQ $rQ $trQ $dQ" . PHP_EOL;
//        $qry .= "GROUP BY $table.id ORDER BY $order $dir $lim";
        $qry .= "ORDER BY $order $dir $lim";

        $all = DB::select( $qry );
        $rows = count( $all );
        $first = @$all[ 0 ]->rowID;
        $last = @$all[ ($rows - 1) ]->rowID;
        $str = $qry;
        $send = "";
        $str = "FIRST $first LAST $last ROWS $rows -  $qry ";
        if ( $rows > 10000 ) {
            $send = 1;
        }
//        if ( $v !== TRUE ) {
//            $str .= $qry;
//            $send = 1;
//        }
//        $this->checkDB( __FUNCTION__, __LINE__, __FILE__, $send, $str );
//        $q->free_result();
//        foreach ( $all as &$row ) {
//            $row->j_keyword = preg_replace( '!^\s!', '+', $row->j_keyword );
//        }
        return $all;
    }

    function getAllCallsData( $account_id, $campaign_id, $date1, $date2, $archive = '' )
    {
        $table = "phone_time_use";
        if ( $archive == 1 ) {
            $table = "phone_time_use_archive";
        }
        $aQ = " $table.account_id='$account_id' ";
        $cQ = "";
        if ( $campaign_id ) {
            $cQ = " $table.campaign_id='$campaign_id' ";
            $aQ = "";
        }
        $rQ = " AND ( caller_phone != '' OR caller_phone IS NOT NULL ) ";
        $date1 = date( "Y-m-d H:i:s", strtotime( $date1 ) );
        $date2 = date( "Y-m-d H:i:s", (strtotime( $date2 . " +1 DAYS " ) ) );
        $dQ = " AND time_of_call >= '$date1' AND time_of_call <= '$date2' ";
        $order = " time_of_call ";
//        $qry = "SELECT $table.id,click_calls.c_unique_call_id as matched_called,caller_phone,phone_number,time_of_call,time_stamp,timeZone,correlation_time,call_duration FROM $table
//		JOIN  campaigns on ($table.campaign_id = campaigns.campaign_id)
//		LEFT JOIN click_calls ON (click_calls.v_id = $table.id  )
//		WHERE $aQ $cQ $rQ $dQ group by $table.id order by $table.id DESC";
        // DEBUG: <>
//        $qry = "SELECT $table.id,click_calls.c_unique_call_id as matched_called,caller_phone,phone_number,time_of_call,time_stamp,timeZone,correlation_time,call_duration FROM $table
//		JOIN  campaigns on ($table.campaign_id <> campaigns.campaign_id)
//		LEFT JOIN click_calls ON (click_calls.v_id = $table.id  )
//		WHERE $aQ $cQ $rQ $dQ order by $table.id DESC";
        $qry = "SELECT $table.id,click_calls.c_unique_call_id as matched_called,caller_phone,phone_number,time_of_call,time_stamp,timeZone,correlation_time,call_duration FROM $table
		JOIN  campaigns on ($table.campaign_id = campaigns.campaign_id)
		LEFT JOIN click_calls ON (click_calls.v_id = $table.id  )
		WHERE $aQ $cQ $rQ $dQ order by $table.id DESC";
        $all = DB::select( $qry );
        $rows = count( $all );
        $call_data = new stdClass();
        $call_data->all_unique_callers = 0;
        $call_data->all_calls = 0;
        $call_data->all_corr_calls = 0;
        $call_data->missed_calls = 0;
        $call_data->repeat_calls = 0;
        $call_data->under_one = 0;
        $call_data->over_one = 0;
        $call_data->over_five = 0;
        $call_data->over_ten = 0;
        $call_data->over_fifteen = 0;
        $call_data->over_twenty = 0;
        $call_data->single_tracking = 0;
        $call_data->avg_time = "0:00";
        $all_unique_callers = array();
        $all_repeat_callers = array();
        $all_repeat_callers = array();
        $call_times = array();
        foreach ( $all as $row ) {
            $call_times[] = $row->call_duration;
            if ( $row->matched_called != "" ) {
                $call_data->single_tracking++;
            }
            if ( $row->call_duration == 0 ) {
                $call_data->missed_calls++;
            }
            if ( $row->call_duration < 60 && $row->call_duration > 0 ) {
                $call_data->under_one++;
            }
            if ( $row->call_duration > 60 ) {
                $call_data->over_one++;
            }
            if ( $row->call_duration > 300 ) {
                $call_data->over_five++;
            }
            if ( $row->call_duration > 600 ) {
                $call_data->over_ten++;
            }
            if ( $row->call_duration > 900 ) {
                $call_data->over_fifteen++;
            }
            if ( $row->call_duration > 1200 ) {
                $call_data->over_twenty++;
            }
            if ( $row->caller_phone != "" ) {
                if ( !isset( $all_repeat_callers[ $row->caller_phone ] ) ) {
                    $all_repeat_callers[ $row->caller_phone ] = 0;
                } else {
                    $all_repeat_callers[ $row->caller_phone ] = 1;
                }
            }
            if ( $row->caller_phone != "" ) {
                if ( !isset( $all_repeat_calls[ $row->caller_phone . $row->phone_number ] ) ) {
                    $all_repeat_calls[ $row->caller_phone . $row->phone_number ] = 0;
                } else {
                    $call_data->repeat_calls++;
                }
            }
            if ( isset( $row->caller_phone ) && $row->caller_phone != "" ) {
                $all_unique_callers[ $row->phone_number . $row->caller_phone ] = $row->phone_number . $row->caller_phone;
                $call_data->all_calls++;
            }
            if ( $row->caller_phone != "" && strtotime( $row->time_of_call ) > 0 && $this->getTimeDifferenceCallClick( $row->time_of_call, $row->time_stamp, $row->timeZone, $row->correlation_time ) == TRUE ) {
                $call_data->all_corr_calls++;
            }
        }
        if ( count( $call_times ) > 0 ) {
            $avg_time = array_sum( $call_times ) / count( $call_times );
            $time = $this->secondsToTime( $avg_time );
            $call_data->avg_time = $time[ 'm' ] . ":" . $time[ 's' ];
        }
        $call_data->all_unique_callers = count( $all_unique_callers );
        $call_data->all_repeat_callers = array_sum( $all_repeat_callers );

        return $call_data;
    }

    public function removeChar( $string, $find )
    {
        $i = substr( $string, -1 );
        if ( $i == $find ) {
            return substr( $string, 0, -1 );
        } else {
            return $string;
        }
    }

    function getTimeDifferenceCallClick( $call_time, $click_time, $time_zone, $corr_window )
    {
        $tz = $this->get_timezone_offset( 'America/Los_Angeles', $time_zone, $click_time, 1 );
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

    function get_timezone_offset( $remote_tz, $origin_tz = NULL, $datetime = 'now', $use_arr = 0 )
    {
        if ( $origin_tz === NULL || $origin_tz == '' ) {
            if ( !is_string( $origin_tz = date_default_timezone_get() ) ) {
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

    function secondsToTime( $seconds )
    {
        // extract hours
        $hours = floor( $seconds / (60 * 60) );
        // extract minutes
        $divisor_for_minutes = $seconds % (60 * 60);
        $minutes = floor( $divisor_for_minutes / 60 );
        // extract the remaining seconds
        $divisor_for_seconds = $divisor_for_minutes % 60;
        $seconds = ceil( $divisor_for_seconds );
        // return the final array
        if ( strlen( $seconds ) == 1 ) {
            $seconds = "0$seconds";
        } else {
            $seconds = ( int ) $seconds;
        }
        $obj = array(
            "h" => ( int ) $hours,
            "m" => ( int ) $minutes,
            "s" => $seconds,
        );

        return $obj;
    }

    function getGoalPageMemo( $campaign_id, $goal_page, array &$campaign_goal_pgs )
    {
        $goal_page = str_replace( "_hit", "Memo", $goal_page );
        if ( !isset( $campaign_goal_pgs[ $campaign_id ] ) ) {
            $campaign_goal_pgs[ $campaign_id ] = array();
        }
        if ( in_array( $goal_page, $campaign_goal_pgs[ $campaign_id ] ) ) {
            return $campaign_goal_pgs[ $campaign_id ];
        }
        $res = DB::table('campaigns')
            ->select(DB::raw($goal_page))
            ->where('campaign_id', $campaign_id)
            ->first();
        $campaign_goal_pgs[ $campaign_id ][] = $res->$goal_page;

        return $res->$goal_page;
    }

    function reportFieldTableValue( $fieldName, $value, $campaign_id, $row, $all_info, $TZ )
    {
        if ( $fieldName == "time_stamp" && strlen( $value ) > 0 ) {
            if ( $TZ == "" ) {
                $campTZ = $this->getCampaignTZId( $campaign_id );
                $TZ = $campTZ;
            } else {
                $campTZ = $TZ;
            }
            $TZ_offset = $this->get_timezone_offset( 'America/Los_Angeles', $campTZ, $value );

            return date( "Y-m-d H:i:s", strtotime( "+$TZ_offset SECONDS " . $value ) );
        } else {
            if ( $fieldName == "time_of_call" && strlen( $value ) > 0 ) {
                return date( "Y-m-d H:i:s", strtotime( $value ) );
            } else {
                if ( $fieldName == "matchtype" ) {
                    $matchType = $this->getMatchType( $value );

                    return $matchType;
                } else {
                    if ( $fieldName == "keyword" ) {
                        $keyword = $row->keyword;
                        if ( $row->keyword ) {
                            $keyword = $row->keyword;
                        } elseif ( $row->k_keyword ) {
                            $keyword = $row->k_keyword;
                        } elseif ( $row->j_keyword ) {
                            $keyword = $row->j_keyword;
                        } elseif ( $row->ch_keyword ) {
                            $keyword = $row->ch_keyword;
                        }

                        return $keyword;
                    } else {
                        if ( $fieldName == "caller_phone" ) {
                            if ( !is_numeric( $value ) ) {
                                return $value;
                            }
                            if ( $all_info->show_number == 0 ) {
                                $l = strlen( $value );
                                $num = substr( $value, 0, ($l - 4 ) ) . "XXXX";

                                return $num;
                            } else {
                                return $value;
                            }
                        } else {
                            if ( $fieldName == "network" ) {
                                if ( $value == "s" ) {
                                    return "Search Partner";
                                } else {
                                    if ( $value == "g" ) {
                                        return "Google";
                                    } else {
                                        if ( $value == "d" ) {
                                            return "Display";
                                        } else {
                                            return $value;
                                        }
                                    }
                                }
                            } else {
                                if ( $fieldName == "call_duration" ) {
                                    $time = $this->secondsToTime( $value );

                                    return $time[ 'm' ] . ":" . $time[ 's' ];
                                } else {
                                    if ( $fieldName == "time_on_site" ) {
                                        if ( $value > 60 ) {
                                            return ceil( number_format( ($value / 60 ), 2, '.', '' ) ) . " min";
                                        } elseif ( $value > 0 && $value < 60 ) {
                                            return "$value sec";
                                        } else {
                                            $timeInMins = 0;
                                            $history_pages = explode( ";", $row->last_page );
                                            foreach ( $history_pages as $key => $page_val ) {
                                                $m = $key + 1;
                                                if ( $page_val ) {
                                                    if ( isset( $history_pages[ $key - 1 ] ) ) {
                                                        $page_valTimeOld = explode( " : ", $history_pages[ $key - 1 ] );
                                                        $page_valTimeNew = explode( " : ", $page_val );
                                                        if ( isset( $page_valTimeNew[ 1 ] ) && isset( $page_valTimeOld[ 1 ] ) ) {
                                                            $time = human_to_unix( $page_valTimeOld[ 1 ] ) - human_to_unix( $page_valTimeNew[ 1 ] );
                                                            $timeInMins = $time + $timeInMins;
                                                        }
                                                    }
                                                }
                                            }
                                            if ( $timeInMins > 0 ) {
                                                return ceil( number_format( ($timeInMins / 60 ), 2, '.', '' ) ) . " min";
                                            } else {
                                                return "< 10 sec";
                                            }
                                        }
                                    } else {
                                        if ( $fieldName == "call_recording" ) {
                                            if ( $value ) {
                                                $fileName = "";
                                                $playLink = "";
                                                if ( file_exists( sprintf( "%saudio/mp3/%s", VIEWPATH, $value ) ) ) {
                                                    $playLink = sprintf( '<a href="%sapplication/views/audio/mp3/%s">Download</a><br>', URL::to('/'), $value );
                                                    $fileName = sprintf( '%sapplication/views/audio/mp3/%s', URL::to('/'), $value );
                                                }
                                                $playLink .= '
				<object style="margin:0 auto 0 auto;" type="application/x-shockwave-flash" data="' . URL::to('/') . 'application/swf/player.swf" id="audioplayer' . $row->rowID . '" height="24" width="130">
				<param name="movie" value="' . URL::to('/') . 'application/swf/player.swf">
				<param name="FlashVars" value="playerID=audioplayer' . $row->rowID . '&soundFile=' . $fileName . '">
				<param name="quality" value="high">
				<param name="menu" value="false">
				<param name="wmode" value="transparent">
				</object>';
                                            } else {
                                                if ( isset( $row->country_tracking ) && $row->country_tracking == "j_keyword" ) {
                                                    $url = "http://callrecordings.calltracking.jp/audio/" . $row->unique_call_id . ".mp3";
                                                    $playLink = "<a href='$url' download='{$row->unique_call_id}.mp3'>Download</a><br>";
                                                    $playLink .= '
				<object style="margin:0 auto 0 auto;" type="application/x-shockwave-flash" data="' . URL::to('/') . 'application/swf/player.swf" id="audioplayer' . $row->rowID . '" height="24" width="130">
				<param name="movie" value="' . URL::to('/') . 'application/swf/player.swf">
				<param name="FlashVars" value="playerID=audioplayer' . $row->rowID . '&soundFile=' . $url . '">
				<param name="quality" value="high">
				<param name="menu" value="false">
				<param name="wmode" value="transparent">
				</object>';
                                                } else {
                                                    $playLink = 'N/A';
                                                }
                                            }

                                            return $playLink;
                                        } else {
                                            if ( $fieldName == "call_rate" ) {
                                                if ( $value == '' ) {
                                                    $rating = "<option value=''>Not Rated</option>";
                                                } else {
                                                    $rating = "<option value=''>" . $value . "</option>";
                                                }
                                                $rateSelect = "";
                                                if ( $row->caller_phone != "" ) {
                                                    $rateSelect = "<select name='call_rate' id='call_rate_" . $row->rowID . "'>
							$rating
							<option value='Sale'>Sale</option>
							<option value='Lead'>Lead</option>
							<option value='Info'>Info</option>
							<option value='Other'>Other</option>
							</select><br>
							<input type='submit' id='update_call_rate_" . $row->rowID . "' class='update_rating' value='Update' />
							";
                                                }

                                                return $rateSelect;
                                            } else {
                                                if ( stristr( $fieldName, "goal" ) ) {
                                                    $return = 'Yes';
                                                    if ( $fieldName == 'goal1_hit' ) {
                                                        if ( isset( $row->goal1_time ) ) {
                                                            $return = $row->goal1_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal2_hit' ) {
                                                        if ( isset( $row->goal2_time ) ) {
                                                            $return = $row->goal2_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal3_hit' ) {
                                                        if ( isset( $row->goal3_time ) ) {
                                                            $return = $row->goal3_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal4_hit' ) {
                                                        if ( isset( $row->goal4_time ) ) {
                                                            $return = $row->goal4_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal5_hit' ) {
                                                        if ( isset( $row->goal5_time ) ) {
                                                            $return = $row->goal5_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal6_hit' ) {
                                                        if ( isset( $row->goal6_time ) ) {
                                                            $return = $row->goal6_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal7_hit' ) {
                                                        if ( isset( $row->goal7_time ) ) {
                                                            $return = $row->goal7_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal8_hit' ) {
                                                        if ( isset( $row->goal8_time ) ) {
                                                            $return = $row->goal8_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal9_hit' ) {
                                                        if ( isset( $row->goal9_time ) ) {
                                                            $return = $row->goal9_time;
                                                        }
                                                    } elseif ( $fieldName == 'goal10_hit' ) {
                                                        if ( isset( $row->goal10_time ) ) {
                                                            $return = $row->goal10_time;
                                                        }
                                                    }
                                                    if ( $return != "Yes" ) {
                                                        if ( $TZ == "" ) {
                                                            $campTZ = $this->getCampaignTZId( $campaign_id );
                                                            $TZ = $campTZ;
                                                        } else {
                                                            $campTZ = $TZ;
                                                        }
                                                        $TZ_offset = $this->get_timezone_offset( 'America/Los_Angeles', $campTZ, $return );
                                                        $return = date( "Y-m-d H:i:s", strtotime( "+$TZ_offset SECONDS " . $return ) );
                                                    }
                                                    if ( $value == 1 ) {
                                                        return $return;
                                                    } else {
                                                        return "";
                                                    }
                                                } else {
                                                    if ( $fieldName == "last_page" ) {
                                                        $history = $value;
                                                        $history .= "";
                                                        if ( $value != '' ) {
                                                            $history = "<div id='hidden_History_" . $row->rowID . "' class='allHistoryHidden'>
									&nbsp;&nbsp;&nbsp;&nbsp; <b>Most Recent First</b>
									<div class='close_history' id='close_history_" . $row->rowID . "'> <button>Close</button> &nbsp;&nbsp;&nbsp;&nbsp;</div>
									<div class='hiddenHistory'>";
                                                            $history_pages = explode( ";", $value );
                                                            foreach ( $history_pages as $key => $page_val ) {
                                                                $m = $key + 1;
                                                                if ( $page_val ) {
                                                                    $timeInMins = "";
                                                                    if ( isset( $history_pages[ $key - 1 ] ) ) {
                                                                        $page_valTimeOld = explode( " : ", $history_pages[ $key - 1 ] );
                                                                        $page_valTimeNew = explode( " : ", $page_val );
                                                                        if ( isset( $page_valTimeNew[ 1 ] ) && isset( $page_valTimeOld[ 1 ] ) ) {
                                                                            $time = human_to_unix( $page_valTimeOld[ 1 ] ) - human_to_unix( $page_valTimeNew[ 1 ] );
                                                                            $timeInMins = " (" . date( "H:i:s", mktime( 0, 0, $time, 0, 0, 0 ) ) . ")";
                                                                        }
                                                                    }
                                                                    $timeThere = explode( ":", $page_val );
                                                                    $pageShow = @$timeThere[ 1 ];
                                                                    $history .= "$m. $pageShow $timeInMins<br/>";
                                                                }
                                                            }
                                                            $history .= "</div></div>";
                                                            $history .= "<button class='viewHistory' id='view_history_" . $row->rowID . "' >History</button>";
                                                        }

                                                        return $history;
                                                    } else {
                                                        return $value;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    function getMatchType( $type )
    {
        if ( $type == "p" ) {
            return "Phrase";
        } else {
            if ( $type == "e" ) {
                return "Exact";
            } else {
                if ( $type == "b" ) {
                    return "Broad";
                } else {
                    return $type;
                }
            }
        }
    }

}
