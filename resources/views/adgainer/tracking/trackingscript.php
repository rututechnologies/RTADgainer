<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Thytanium\Agent\Facades\Agent;
use function Monolog\Handler\mail;

session_start();

if ( isset( $_GET[ 'currentURL' ] ) ) {
    $REF = $_GET[ 'currentURL' ];
    $inc = 1;
} else {
    $REF = Agent::referrer();
    $inc = 2;
}

if ( $REF == '' ) {
    $REF = Request::server( 'HTTP_HOST' );
    $inc = 1;
}

$URLINFO = parse_url( $REF );
$HOST_ = parse_url( $REF, PHP_URL_HOST );
if ( !isset( $URLINFO[ 'host' ] ) ) {
    exit;
}

$DOMAIN = getDomain( $HOST_ );
echo " // DOMAIN: " . $DOMAIN . "
";

$REF_TEST = Agent::referrer();

echo " // REF: " . $REF . " $inc
";

$sessID = session_id();

$session_id = md5( $sessID . $DOMAIN );
if ( !isset( $_SESSION[ 'SESSID' ] ) || $_SESSION[ 'SESSID' ] == "" ) {
    $_SESSION[ 'SESSID' ] = $session_id;
} else {
    $session_id = $_SESSION[ 'SESSID' ];
}

$mobile = checkmobile();

$platform = Agent::platform() . " / " . Agent::browser() . " / " . Agent::version();

if ( Agent::isMobile() ) {
    $mobile = "Yes " . $mobile[ 1 ] . " " . $mobile[ 2 ] . " " . $mobile[ 3 ] . " " . Agent::mobile();
    $isMobile = 1;
} else {
    $mobile = "No";
    $isMobile = 0;
}

$visitor = get_ip_address();
$server_name = $_SERVER[ 'SERVER_NAME' ];
$campaign_id = "";

$city = "";
$state = "";
$country = "";
$country_code = "";
$lat = "";
$lng = "";

$row_id = "";
$type = '';
$ppc = '';
$org = '';
$dsp = '';
$keyword = '';
$display = '';
$keywordField = 'keyword';
$source = '';
$utm_term = '';
$referer = '';
$matchtype = '';
$network = '';
$searchTerm = '';
$gclid = '';
$utm_content = '';
$banner_id = '';
$device_id = '';
$landing_page_id = '';

if ( isset( $_GET[ 'banner_id' ] ) ) {
    $banner_id = $_GET[ 'banner_id' ];
}
if ( isset( $_GET[ 'landing_page_id' ] ) ) {
    $landing_page_id = $_GET[ 'landing_page_id' ];
}
if ( isset( $_GET[ 'device_id' ] ) ) {
    $device_id = $_GET[ 'device_id' ];
}

if ( !isset( $_SESSION[ 'number_of_numbers' ] ) ) {
    $_SESSION[ 'number_of_numbers' ] = 0;
}

// TODO: geo location
//include 'geo_location.php';
//
//if ( $city == "" && isset( $_SESSION[ 'location' ] ) && $_SESSION[ 'location' ] == "" ) {
//    $city = $_SESSION[ 'location' ];
//}

$values = "";

$setFirstTime = 0;

$getVal = "";
foreach ( $_GET as $key => $val ) {

    if ( is_string( $val ) ) {
        $getVal .= $key . "=" . urldecode( $val ) . "&";
    }

    if ( is_array( $val ) ) {
        foreach ( $val as $key2 => $val2 ) {

            if ( is_array( $val2 ) ) {

                foreach ( $val2 as $key3 => $val3 ) {

                    $getVal .= $key3 . "=" . urldecode( $val3 ) . "&";
                }
            }

            if ( is_string( $val2 ) ) {
                $getVal .= $key2 . "=" . urldecode( $val2 ) . "&";
            }
        }
    }
}

$currGet = "";
foreach ( $_GET as $key => $val ) {

    $getVal_ = $val;

    if ( is_array( $val ) ) {
        $getVal_ = "";
        foreach ( $val as $key2 => $val2 ) {

            if ( $key2 == "q" ) {
                $searchTerm = $val2;
            }
            if ( $key2 == "p" ) {
                $searchTerm = $val2;
            }
            if ( $key2 == "okw" ) {
                $searchTerm = $val2;
            }

            if ( is_array( $val2 ) ) {

                foreach ( $val2 as $key3 => $val3 ) {

                    if ( $key3 == "q" ) {
                        $searchTerm = $val3;
                    }
                    if ( $key3 == "p" ) {
                        $searchTerm = $val3;
                    }
                    if ( $key3 == "okw" ) {
                        $searchTerm = $val3;
                    }

                    $currGet .= $key3 . "=" . urldecode( $val3 ) . "&";
                }
            }

            if ( is_string( $val2 ) ) {
                $currGet .= $key2 . "=" . urldecode( $val2 ) . "&";
            }
        }
    } else {
        if ( $key == "q" ) {
            $searchTerm = $val;
        }
        if ( $key == "p" ) {
            $searchTerm = $val;
        }
        if ( $key == "okw" ) {
            $searchTerm = $val;
        }

        $currGet .= "&" . $key . "=" . urldecode( $getVal_ );
    }
}

$values = "";

//$pageViewsCount = $this->session->userdata( "page_views" );
$pageViewsCount = isset( $_SESSION[ 'page_views' ] ) ? $_SESSION[ 'page_views' ] : '';

if ( isset( $_SESSION[ 'page_views' ] ) ) {
    $_SESSION[ 'page_views_' . $DOMAIN ] = $_SESSION[ 'page_views' ];
}

$entry = 0;
if ( !isset( $_SESSION[ 'page_views_' . $DOMAIN ] ) ) {
    $_SESSION[ 'page_views_' . $DOMAIN ] = 1;

    foreach ( $_GET as $key => $val ) {

        $getVal = $val;

        if ( is_array( $val ) ) {
            $getVal = "";
            foreach ( $val as $key2 => $val2 ) {
                $getVal .= $val2;
            }
        }

        $values .= "$key : " . urldecode( $getVal ) . "
			";
    }

    $entry = 1;
} else {

    $_SESSION[ 'page_views_' . $DOMAIN ] = 1 + $_SESSION[ 'page_views_' . $DOMAIN ];
}

if ( isset( $_GET[ 'AG_NEW_SESSION' ] ) ) {
    $entry = 1;
    $_SESSION[ 'page_views_' . $DOMAIN ] = 1;
}

echo "
//VIEWS: " . $_SESSION[ 'page_views_' . $DOMAIN ];

$ppcURL = 0;

include 'collect_keyword.php';

if ( isset( $_GET[ 'utm_source' ] ) ) {
    $source = $_GET[ 'utm_source' ];
}

if ( isset( $_GET[ 'source' ] ) ) {
    $source = $_GET[ 'source' ];
}

if ( is_array( $keyword ) ) {
    $keyword = join( " ", $keyword );
}

$keyword = urldecode( $keyword );
$source = urldecode( $source );

$values .= "type : $type";

echo "
// TYPE: " . $type . "
//KEY: $keyword
";

$write_divs = 0;

echo "// VISITOR: $visitor ";

if ( $source == "" ) {
    $source = Agent::referrer();
}

$newRef = Agent::referrer();

$sourcePre = $source;

if ( isset( $_GET[ 'url' ] ) ) {
    $url = $_GET[ 'url' ];
} elseif ( isset( $_GET[ 'adurl' ] ) ) {
    $url = $_GET[ 'adurl' ];
} else {
    $url = $sourcePre;
}

$actualRef = Agent::referrer();

if ( stristr( $newRef, "keyword=" ) || stristr( $newRef, "j_keyword=" ) || stristr( $newRef, "k_keyword=" ) || stristr( $newRef, "ch_keyword=" ) ) {
    $ppc = 1;
    $entry = 1;
}

$ppcCamp = 0;
$ppcCampID = "";
$dspCampID = "";
if ( isset( $_GET[ 'display_ad_id' ] ) ) {
    $dsp = 1;
    $ppc = 0;
    $dspCampID = $_GET[ 'display_ad_id' ];
    echo "
			// DISPLAY CAMP $dspCampID
			";
}

if ( stristr( $newRef, "display_ad_id=" ) ) {
    $type = "DISPLAY";
    $camp_split = explode( "display_ad_id=", $newRef );
    $camp_id_split = explode( "&", $camp_split[ 1 ] );
    $campaign_id = urldecode( $camp_id_split[ 0 ] );
    $dsp = 1;
    $dspCamp = 1;
    $dspCampID = $campaign_id;

    $entry = 1;
}

if ( stristr( $REF, "display_ad_id=" ) ) {
    $type = "DISPLAY";
    $camp_split = explode( "display_ad_id=", $REF );
    $camp_id_split = explode( "&", $camp_split[ 1 ] );
    $campaign_id = urldecode( $camp_id_split[ 0 ] );
    $dsp = 1;
    $dspCamp = 1;
    $dspCampID = $campaign_id;

    $entry = 1;
}

if ( stristr( $newRef, "url_campaign_id=" ) ) {
    $type = "PPC";
    $camp_split = explode( "url_campaign_id=", $newRef );
    $camp_id_split = explode( "&", $camp_split[ 1 ] );
    $campaign_id = urldecode( $camp_id_split[ 0 ] );
    $ppc = 1;
    $ppcCamp = 1;
    $ppcCampID = $campaign_id;

    $ppcURL = 1;
    $entry = 1;
}

if ( stristr( $getVal, "url_campaign_id=" ) ) {
    $type = "PPC";
    $camp_split = explode( "url_campaign_id=", $getVal );
    $camp_id_split = explode( "&", $camp_split[ 1 ] );
    $campaign_id = urldecode( $camp_id_split[ 0 ] );
    $ppc = 1;
    $ppcCamp = 1;
    $ppcCampID = $campaign_id;

    $ppcURL = 1;
    $entry = 1;
}

$combReferrer = Agent::referrer();
if ( stristr( $combReferrer, "url_campaign_id=" ) ) {
    $type = "PPC";
    $camp_split = explode( "url_campaign_id=", $combReferrer );
    $camp_id_split = explode( "&", $camp_split[ 1 ] );
    $campaign_id = urldecode( $camp_id_split[ 0 ] );
    $ppc = 1;
    $ppcCamp = 1;
    $ppcCampID = $campaign_id;

    $ppcURL = 1;
    $entry = 1;
}

$entry = stristr( $newRef, $DOMAIN ) ? 0 : 1;
$http_Accept = "";
if ( isset( $_SERVER[ 'HTTP_ACCEPT' ] ) ) {
    $http_Accept = $_SERVER[ 'HTTP_ACCEPT' ];
}

if ( $keyword == '' ) {
    $keyword = urlencode( $newRef );
}

$keyword = htmlspecialchars_decode( $keyword );
$keyword = urldecode( $keyword );

if ( $type == "PPC" ) {
    $ppc = 1;
}

$keyword_ = "";
if ( isset( $_GET[ 'keyword' ] ) ) {
    $keyword_ = urldecode( $_GET[ 'keyword' ] );
}

$j_keyword_ = "";
if ( isset( $_GET[ 'j_keyword' ] ) ) {
    $j_keyword_ = urldecode( $_GET[ 'j_keyword' ] );
}

$ch_keyword_ = "";
if ( isset( $_GET[ 'ch_keyword' ] ) ) {
    $ch_keyword_ = urldecode( $_GET[ 'ch_keyword' ] );
}

$k_keyword_ = "";
if ( isset( $_GET[ 'k_keyword' ] ) ) {
    $k_keyword_ = urldecode( $_GET[ 'k_keyword' ] );
}

echo "// $keyword_ /  $j_keyword_ / $ch_keyword_ / $k_keyword_ ";

$date = date( "%Y-%m-%d", time() );

echo "
// SOURCE : " . $source;

$page_campaign = "";
if ( isset( $_GET[ 'campaign_id' ] ) && $_GET[ 'campaign_id' ] != "" ) {
    $page_campaign = $_GET[ 'campaign_id' ];
}

include 'get_campaign_id.php';

if ( isset( $_SESSION[ 'campaign_id' ] ) && $_SESSION[ 'campaign_id' ] != '' ) {
    $campaign_id = $_SESSION[ 'campaign_id' ];
}

if ( isset( $_SESSION[ 'campaign_id_domain_' . $DOMAIN ] ) ) {
    $campaign_id = $_SESSION[ 'campaign_id_domain_' . $DOMAIN ];
}

if ( !isset( $campaign_id ) ) {
    $campaign_id = "";
}
$pgCampaign_id = $campaign_id;

if ( isset( $_GET[ 'campaign_id' ] ) || isset( $_GET[ 'url_campaign_id' ] ) || $campaign_id != "" ) {
    if ( isset( $_GET[ 'campaign_id' ] ) ) {
        if ( $campaign_id == "" ) {
            $campaign_id = $_GET[ 'campaign_id' ];
        }
        $pgCampaign_id = $_GET[ 'campaign_id' ];
    }

    if ( isset( $_GET[ 'url_campaign_id' ] ) ) {
        $ppcCampID = $_GET[ 'url_campaign_id' ];
    }

    include 'get_url_campaign.php';

    if ( isset( $_SESSION[ 'campaign_id' ] ) && is_array( $_SESSION[ 'campaign_id' ] ) ) {

        foreach ( $_SESSION[ 'campaign_id' ] as $key_ => $camp_ ) {
            if ( $camp_ != "" ) {
                $campaign_id = $camp_;
                break;
            }
        }
    }

    $_SESSION[ 'campaign_id_domain_' . $DOMAIN ] = $campaign_id;

    if ( $entry == 1 ) {
        $_SESSION[ 'page_views_' . $DOMAIN ] = 1;
    }

    $source = urldecode( $source );

    $sourcePre = $source;

    echo "
		// ENTRY $entry";

    if ( $entry == 1 ) {
        $_SESSION[ 'ENTRYURL' ] = "";
        foreach ( $_GET as $key => $val ) {
            if ( is_string( $val ) ) {
                $_SESSION[ 'ENTRYURL' ] .= $key . "=" . urldecode( $val ) . "&";
            }

            if ( is_array( $val ) ) {
                foreach ( $val as $keyVal => $valVal ) {
                    $_SESSION[ 'ENTRYURL' ] .= $keyVal . "=" . urldecode( $valVal ) . "&";
                }
            }
        }
    }

    if ( $pgCampaign_id == "" && $campaign_id == "" ) {
        exit;
    }

    $have_campaign = "";

    $check_campaign = DB::select( "SELECT *,a.status as a_status,a.active as a_active FROM campaigns as c JOIN accounts as a ON (c.account_id = a.account_id) WHERE campaign_id='$campaign_id' and a.active='1' and c.active='1'" );
    if ( $check_campaign ) {
        $have_campaign = $check_campaign[ 0 ];
        $account_id = $have_campaign->account_id;
    }

    $check_campaign_ = DB::select( "SELECT *,a.status as a_status,a.active as a_active FROM campaigns as c JOIN accounts as a ON (c.account_id = a.account_id) WHERE campaign_id='$pgCampaign_id' and a.active='1' and c.active='1'" );
    if ( $check_campaign_ ) {
        $have_Pgcampaign = $check_campaign_[ 0 ];
    }

    if ( count( $check_campaign_ ) == 1 && count( $check_campaign ) == 1 ) {
        if ( $have_campaign->account_id != $have_Pgcampaign->account_id ) {
            $_SESSION[ 'campaign_id_domain_' . $DOMAIN ] = $pgCampaign_id;
            $campaign_id = $pgCampaign_id;
            $_SESSION[ 'campaign_id' ] = $campaign_id;
            $account_id = $have_Pgcampaign->account_id;
            $check_campaign = $check_campaign_;
            $have_campaign = $check_campaign_->row();
            echo "// MIX ACCOUNT -- ";
            exit;
        }
    }

    if ( !is_object( $have_campaign ) ) {
        exit;
    }

    require('tracking_php_functions.php');

    include 'collect_custom.php';

    $keyword = urldecode( $keyword );
    $keyword = getRefKeyword( $combReferrer, $have_campaign->country_tracking, $keyword );

    if ( $campaign_id == "" || $account_id == "" ) {
        mail( "hayashi@adgainer.co.jp", "ACCT $account_id CAMP $campaign_id BLANK", $visitor . " " . $values );
    }

    $status = $have_campaign->a_status;
    $active = $have_campaign->a_active;
    if ( $active == 1 ) {
        echo "// ACTIVE ";
    } else {
        echo "// INACTIVE ";
    }
    echo $have_campaign->tracking_type;

    if ( ($status == "TEMP" && ($type == "PPC" || $type == "DISPLAY")) || $active != 1 || $have_campaign->tracking_type == "0" ) {
        echo " // stop - $status - " . $have_campaign->account_id;
        exit;
    }

    if ( $ppcCampID ) {
        $pgCampaign_id = $ppcCampID;
    }
    if ( $dspCampID ) {
        $pgCampaign_id = $dspCampID;
    }

    if ( $ppcCampID == "" && $ppc == 1 && $dspCampID == "" ) {
        echo "//
			//NOT AG PPC
			";
        exit;
    }

    if ( $dspCampID == "" && $dsp == 1 && $ppcCampID == "" ) {
        echo "//
			//NOT AG DSP
			";
        exit;
    }

    echo "// " . __LINE__;
    $date = date( "%m-%d-%Y %H:%i:%s", time() );

    if ( count( $check_campaign ) > 0 ) {
        if ( $have_campaign->device_tracking != 2 ) {
            if ( $isMobile == 1 && $have_campaign->device_tracking != 1 ) {
                echo "//ONLY TRACK DESKTOP";
                exit;
            }
            if ( $isMobile == 0 && $have_campaign->device_tracking != 0 ) {
                echo "//ONLY TRACK MOBILE";
                exit;
            }
        }

        $_SESSION[ 'campaign_id_domain_' . $DOMAIN ] = $campaign_id;

        $goalPg1 = $have_campaign->goal1;
        $goalPg2 = $have_campaign->goal2;
        $goalPg3 = $have_campaign->goal3;
        $goalPg4 = $have_campaign->goal4;
        $goalPg5 = $have_campaign->goal5;
        $goalPg6 = $have_campaign->goal6;
        $goalPg7 = $have_campaign->goal7;
        $goalPg8 = $have_campaign->goal8;
        $goalPg9 = $have_campaign->goal9;
        $goalPg10 = $have_campaign->goal10;

        $goal1_hit = 0;
        $goal2_hit = 0;
        $goal3_hit = 0;
        $goal4_hit = 0;
        $goal5_hit = 0;
        $goal6_hit = 0;
        $goal7_hit = 0;
        $goal8_hit = 0;
        $goal9_hit = 0;
        $goal10_hit = 0;

        if ( $goalPg1 == "" ) {
            $goalPg1 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg2 == "" ) {
            $goalPg2 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg3 == "" ) {
            $goalPg3 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg4 == "" ) {
            $goalPg4 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg5 == "" ) {
            $goalPg5 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg6 == "" ) {
            $goalPg6 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg7 == "" ) {
            $goalPg7 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg8 == "" ) {
            $goalPg8 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg9 == "" ) {
            $goalPg9 = "NO_PAGE_EXISTS";
        }
        if ( $goalPg10 == "" ) {
            $goalPg10 = "NO_PAGE_EXISTS";
        }

        if ( $have_campaign->country_tracking == "keyword" || $have_campaign->country_tracking == NULL ) {
            $keywordField = "keyword";
        } elseif ( $have_campaign->country_tracking == "j_keyword" ) {
            $keywordField = "j_keyword";
        } elseif ( $have_campaign->country_tracking == "ch_keyword" ) {
            $keywordField = "ch_keyword";
        } elseif ( $have_campaign->country_tracking == "k_keyword" ) {
            $keywordField = "k_keyword";
        }

        // TODO: visitor
//        if ( $visitor ) {
        if ( false ) {

            echo "// CAMP $campaign_id\n";
            echo "// HAV CAMP " . $have_campaign->campaign_id . "\n\n//PPC CAMP $ppcCampID\n\n// T $type\n";

            //check blacklist words
            $blacklist_words_array = explode( ",", $have_campaign->blacklist_words );
            if ( count( $blacklist_words_array ) > 0 && !empty( $keyword ) && in_array( $keyword, $blacklist_words_array ) ) {
                echo "// blacklist keyword";
                exit;
            }

            $exp_ip = explode( ".", $visitor );
            $findIp = $this->db->query( "SELECT ip FROM BAD_IPS WHERE ip LIKE '$visitor%' OR ip LIKE '" . $exp_ip[ 0 ] . "." . $exp_ip[ 1 ] . "." . $exp_ip[ 2 ] . "%' " );

            if ( $findIp->num_rows() > 0 ) {
                echo "// bad ip";
                exit;
            }

            //check blacklist ips
            $blacklist_ips_array = explode( ",", $have_campaign->blacklist_ips );
            if ( count( $blacklist_ips_array ) > 0 ) {
                foreach ( $blacklist_ips_array as $key => $val ) {
                    if ( !empty( $val ) && strpos( $visitor, $val ) == 0 && strpos( $visitor, $val ) !== FALSE ) {
                        echo "//  $visitor $val blacklist ip";
                        exit;
                    }
                }
            }

            $current_date = mdate( "%Y-%m-%d %H:%i:%s", time() );

            ///phone
            $unix_current_date = time(); // today

            $phone_expiration_secs = ($have_campaign->correlation_time * 60 * 60);    // 3600

            $newTime = gmt_to_local( ($phone_expiration_secs + $unix_current_date ), 'UM1', TRUE );
            $expired_phone = mdate( '%Y-%m-%d  %H:%i:%s', $newTime );     //time ahead - expire time

            $newTime2 = gmt_to_local( ($unix_current_date - $phone_expiration_secs ), 'UM1', TRUE );
            $time_before_current = mdate( '%Y-%m-%d  %H:%i:%s', $newTime2 ); // time before entry

            $update_visit_records = "UPDATE phone_time_use SET tracking_active='0' WHERE time_stamp < '$time_before_current' and campaign_id='$campaign_id' and ip = '$visitor' ORDER BY id LIMIT 1";

            $expQry = "UPDATE phone_number_inventory SET active='0' WHERE timestamp < '$time_before_current' and campaign_id='$campaign_id'";
            $qry = "SELECT * FROM phone_time_use WHERE ip = '$visitor' and campaign_id='$campaign_id' and time_stamp < '$expired_phone' AND time_stamp >= '$time_before_current' order by id desc LIMIT 1";

            $_SESSION[ 'campaign_id_domain_' . $DOMAIN ] = $campaign_id;

            if ( !isset( $_SESSION[ 'SESSION_DATA_' . $DOMAIN ] ) ) {
                $update_phones = $this->db->query( $expQry );

                $_SESSION[ 'SESSION_DATA_' . $DOMAIN ] = new stdClass();
                $check_ip = $this->db->query( $qry );
                $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->data = $have_ip = $check_ip->row();
                $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->num_rows = $num_rows = $check_ip->num_rows();
                echo " //RUN QRY1 ";
            } else {

                if ( $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->num_rows > 0 ) {
                    $tm = strtotime( $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->data->time_stamp );
                    $current_time = time();
                    if ( $current_time < ($phone_expiration_secs + $tm) ) {
                        $have_ip = $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->data;
                        $num_rows = $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->num_rows;
                        echo " //NOT RUN QRY1 ";
                    } else {
                        $update_phones = $this->db->query( $expQry );

                        $_SESSION[ 'SESSION_DATA_' . $DOMAIN ] = new stdClass();
                        $check_ip = $this->db->query( $qry );
                        $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->data = $have_ip = $check_ip->row();
                        $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->num_rows = $num_rows = $check_ip->num_rows();
                        echo " //RUN QRY2 ";
                    }
                } else {
                    $update_phones = $this->db->query( $expQry );

                    $_SESSION[ 'SESSION_DATA_' . $DOMAIN ] = new stdClass();
                    $check_ip = $this->db->query( $qry );
                    $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->data = $have_ip = $check_ip->row();
                    $_SESSION[ 'SESSION_DATA_' . $DOMAIN ]->num_rows = $num_rows = $check_ip->num_rows();
                    echo " //RUN QRY3 ";
                }
            }

            if ( isset( $_GET[ 'tracking_active' ] ) && $_GET[ 'tracking_active' ] == 1 ) {
                if ( $num_rows > 0 ) {
                    $entry = 0;
                    if ( $source != $have_ip->source ) {
                        $entry = 1;
                    }
                } else {
                    $entry = 1;
                }
            }

            if ( isset( $_GET[ 'server' ] ) ) {
                $entry = 0;
                $_SESSION[ 'page_views_' . $DOMAIN ] = 0;
            }

            ///CAPTURE ALL TRAFFIC

            if ( $num_rows > 0 ) {
                $row_id = $have_ip->id;

                if ( $type == "" ) {
                    $type = $have_ip->traffic_type;
                }

                if ( $type == "" ) {
                    $type = "ORG";
                    $org = 1;
                }

                $time_stamp = strtotime( $have_ip->time_stamp );
                $corr_time_length = strtotime( $have_ip->time_out_duration );
                if ( $corr_time_length == 0 ) {
                    $corr_time_length = $have_campaign->correlation_time;
                }

                $expire_visit = mdate( "%Y-%m-%d %H:%i:%s", $time_stamp + $phone_expiration_secs );

                $check_visit = "SELECT u.phone_number
				FROM phone_time_use as u
				LEFT JOIN phone_number_inventory as p
				ON (u.campaign_id = p.campaign_id AND u.phone_number = p.phone_number)
				WHERE u.ip = '$visitor' and u.campaign_id='$campaign_id'
				and '" . date( "Y-m-d H:i:s" ) . "' < DATE_ADD(u.time_stamp,INTERVAL u.time_out_duration SECOND)
				order by u.id desc";

                $check_ip_time = $this->db->query( $check_visit );

                $have_ip_time = $check_ip_time->row();

                $ip_rows = $check_ip_time->num_rows();

                if ( $ip_rows < 1 ) {

                    echo "\n// NEW " . __LINE__ . " $type\n";

                    include 'check_traffic_type.php';

                    $sql_check_phone = "SELECT phone_number,campaign_id FROM phone_number_inventory WHERE campaign_id='$campaign_id' and active='0' and useable='1' LIMIT 1";

                    $check_phone_numbers = $this->db->query( $sql_check_phone );
                    $have_phone_number = $check_phone_numbers->row();

                    if ( !isset( $have_phone_number->phone_number ) || (isset( $have_phone_number->phone_number ) && $have_phone_number->phone_number == "") ) {
                        $phone_number_to_assign = $have_campaign->default_number;
                        $def = 1;
                    } else {
                        $phone_number_to_assign = $have_phone_number->phone_number;
                        $def = 0;
                    }

                    //no numbers left

                    $page_time = mdate( "%Y-%m-%d %H:%i:%s", time() );

                    if ( $have_campaign->number_serve_active == 0 ) {
                        echo " // NOT SERVE ";
                        $phone_number_to_assign = "";
                        $def = 0;
                    }

                    $page_time = mdate( "%Y-%m-%d %H:%i:%s", time() );
                    $last_page = Agent::referrer() . " : " . $page_time . ";";

                    $ref = Agent::referrer();

                    $goal1_hit = checkGoalPage( $ref, $goalPg1, $gclid );
                    $goal2_hit = checkGoalPage( $ref, $goalPg2, $gclid );
                    $goal3_hit = checkGoalPage( $ref, $goalPg3, $gclid );
                    $goal4_hit = checkGoalPage( $ref, $goalPg4, $gclid );
                    $goal5_hit = checkGoalPage( $ref, $goalPg5, $gclid );
                    $goal6_hit = checkGoalPage( $ref, $goalPg6, $gclid );
                    $goal7_hit = checkGoalPage( $ref, $goalPg7, $gclid );
                    $goal8_hit = checkGoalPage( $ref, $goalPg8, $gclid );
                    $goal9_hit = checkGoalPage( $ref, $goalPg9, $gclid );
                    $goal10_hit = checkGoalPage( $ref, $goalPg10, $gclid );

                    $getLastVisit = $this->db->query( "SELECT * FROM phone_time_use WHERE id = (SELECT MIN(id) as id FROM phone_time_use WHERE ip='$visitor' and campaign_id='$campaign_id'   )" );

                    $entry_type = $type;
                    if ( $getLastVisit->num_rows() > 0 ) {
                        $lastVisitData = $getLastVisit->row();
                        $entry_type = $lastVisitData->traffic_type;
                    }

                    $phone_time_use_insert_params = array(
                        'phone_number'           => $phone_number_to_assign, 'number_type'            => $def,
                        'account_id'             => $have_campaign->account_id, 'campaign_id'            => $campaign_id,
                        'dblclick_name_calls'    => $dblclick_name_calls, 'dblclick_name_goals'    => $dblclick_name_goals,
                        'dblclick_agency_id'     => $dblclick_agency_id,
                        'dblclick_advertiser_id' => $dblclick_advertiser_id, 'visitor_city_state'     => $city,
                        'visitor_country'        => $country, 'visitor_country_code'   => $country_code,
                        $keywordField            => $keyword, 'matchtype'              => $matchtype, 'network'                => $network,
                        'searchTerm'             => $searchTerm, 'gclid'                  => $gclid, 'banner_id'              => $banner_id,
                        'landing_page_id'        => $landing_page_id, 'mkwid'                  => $mkwid, 'pcrid'                  => $pcrid, 'pkw'                    => $pkw,
                        'pmt'                    => $pmt, 'pdv'                    => $pdv, 'ip'                     => $visitor, 'lat'                    => $lat, 'lng'                    => $lng,
                        'session_id'             => $session_id, 'device_id'              => $device_id, 'source'                 => $source,
                        'utm_content'            => $utm_content, 'mobile'                 => $mobile, 'platform'               => $platform,
                        'traffic_type'           => $type, 'entry_type'             => $entry_type, 'tracking_active'        => 1, 'visits'                 => 1,
                        'clicks'                 => 1, 'page_views'             => 1, 'time_out_duration'      => $phone_expiration_secs,
                        'last_page'              => $last_page, 'goal1_hit'              => $goal1_hit, 'goal2_hit'              => $goal2_hit,
                        'goal3_hit'              => $goal3_hit, 'goal4_hit'              => $goal4_hit, 'goal5_hit'              => $goal5_hit,
                        'goal6_hit'              => $goal6_hit, 'goal7_hit'              => $goal7_hit, 'goal8_hit'              => $goal8_hit,
                        'goal9_hit'              => $goal9_hit, 'goal10_hit'             => $goal10_hit, 'custom1'                => $custom1Val,
                        'custom2'                => $custom2Val, 'custom3'                => $custom3Val, 'custom4'                => $custom4Val,
                        'custom5'                => $custom5Val, 'custom6'                => $custom6Val, 'custom7'                => $custom7Val,
                        'custom8'                => $custom8Val, 'custom9'                => $custom9Val, 'custom10'               => $custom10Val,
                        'display'                => $display
                    );

                    if ( $this->db->insert( 'phone_time_use', $phone_time_use_insert_params ) ) {
                        $row_id = $this->db->insert_id();

                        if ( isset( $have_phone_number->phone_number ) && $phone_number_to_assign != "" ) {
                            $make_phone_active = $this->db->set( 'active', 1 )->set( 'timestamp', $current_date, TRUE )
                                    ->set( 'ip', $visitor, TRUE )->set( 'session_id', $session_id, TRUE )
                                    ->where( 'phone_number', $phone_number_to_assign, TRUE )
                                    ->where( 'campaign_id', $campaign_id )->update( 'phone_number_inventory' );
                        }

                        $ga_tracking_id = $this->input->get( 'ga_tracking_id' );
                        $ga_client_id = $this->input->get( 'ga_client_id' );
                        if ( !empty( $ga_tracking_id ) && !empty( $ga_client_id ) ) {
                            $CI = & get_instance();
                            $CI->load->model( 'Ga_client_model' );
                            $CI->Ga_client_model->insert( $row_id, $ga_tracking_id, $ga_client_id );
                        }

                        $vwo = array(
                            'account_id'    => $this->input->get( 'vwo_account_id' ),
                            'experiment_id' => $this->input->get( 'vwo_experiment_id' ),
                            'goal_id'       => $this->input->get( 'vwo_goal_id' ),
                            'combination'   => $this->input->get( 'vwo_combination' ),
                            'uuid'          => $this->input->get( 'vwo_uuid' ),
                            'uuid_v2'       => $this->input->get( 'vwo_uuid_v2' ),
                        );
                        if ( !empty( $vwo[ 'account_id' ] ) && !empty( $vwo[ 'experiment_id' ] ) && !empty( $vwo[ 'goal_id' ] ) && !empty( $vwo[ 'combination' ] )
                        ) {
                            $CI = & get_instance();
                            $CI->load->model( 'Phone_time_use_options_model' );
                            $CI->Phone_time_use_options_model->insert( $row_id, 'vwo', $vwo );
                        }
                    }

                    $write_divs = 1;
                } else {
                    $row_id = $have_ip->id;
                    echo "\n// OLD 1210 $type ";
                    if ( $type == "" ) {
                        $type = $have_ip->traffic_type;
                        $entry = 1;
                    }

                    $ref = Agent::referrer();

                    $goal1_hit = $have_ip->goal1_hit;
                    if ( $goal1_hit == 0 ) {
                        $goal1_hit = checkGoalPage( $ref, $goalPg1, $gclid );
                    }

                    $goal2_hit = $have_ip->goal2_hit;
                    if ( $goal2_hit == 0 ) {
                        $goal2_hit = checkGoalPage( $ref, $goalPg2, $gclid );
                    }

                    $goal3_hit = $have_ip->goal3_hit;
                    if ( $goal3_hit == 0 ) {
                        $goal3_hit = checkGoalPage( $ref, $goalPg3, $gclid );
                    }

                    $goal4_hit = $have_ip->goal4_hit;
                    if ( $goal4_hit == 0 ) {
                        $goal4_hit = checkGoalPage( $ref, $goalPg4, $gclid );
                    }

                    $goal5_hit = $have_ip->goal5_hit;
                    if ( $goal5_hit == 0 ) {
                        $goal5_hit = checkGoalPage( $ref, $goalPg5, $gclid );
                    }

                    $goal6_hit = $have_ip->goal6_hit;
                    if ( $goal6_hit == 0 ) {
                        $goal6_hit = checkGoalPage( $ref, $goalPg6, $gclid );
                    }

                    $goal7_hit = $have_ip->goal7_hit;
                    if ( $goal7_hit == 0 ) {
                        $goal7_hit = checkGoalPage( $ref, $goalPg7, $gclid );
                    }

                    $goal8_hit = $have_ip->goal8_hit;
                    if ( $goal8_hit == 0 ) {
                        $goal8_hit = checkGoalPage( $ref, $goalPg8, $gclid );
                    }

                    $goal9_hit = $have_ip->goal9_hit;
                    if ( $goal9_hit == 0 ) {
                        $goal9_hit = checkGoalPage( $ref, $goalPg9, $gclid );
                    }

                    $goal10_hit = $have_ip->goal10_hit;
                    if ( $goal10_hit == 0 ) {
                        $goal10_hit = checkGoalPage( $ref, $goalPg10, $gclid );
                    }

                    $def = 0;

                    $last_visit_time = $have_ip->time_stamp;
                    $phone_number_to_assign = $have_ip->phone_number;

                    if ( $phone_number_to_assign == "" ) {
                        $phone_number_to_assign = $have_campaign->default_number;
                        $def = 1;
                    }
                    if ( $have_campaign->number_serve_active == 0 ) {
                        echo " // NOT SERVE ";
                        $phone_number_to_assign = "";
                        $def = 0;
                    }

                    if ( $entry == 0 ) {
                        $entry_type = $type;
                        $getLastVisit = $this->db->query( "SELECT * FROM phone_time_use WHERE id = (SELECT MIN(id) as id FROM phone_time_use WHERE ip='$visitor' and campaign_id='$campaign_id'   )" );

                        if ( $getLastVisit->num_rows() > 0 ) {
                            $lastVisitData = $getLastVisit->row();
                            $entry_type = $lastVisitData->traffic_type;
                        }

                        $page_time = mdate( "%Y-%m-%d %H:%i:%s", time() );
                        $last_page = Agent::referrer() . " : " . $page_time . ";" . $have_ip->last_page;
                        $visits = 1 + $have_ip->visits;

                        $last_page = $this->db->escape_str( $last_page );

                        $update_visit_keyword = $this->db->query( "UPDATE phone_time_use SET
																 entry_type='$entry_type',
																 visits='$visits',
																 page_views = (page_views + 1),
																 last_page='$last_page',
																 goal1_hit='$goal1_hit',
																 goal2_hit='$goal2_hit',
																 goal3_hit='$goal3_hit',
																 goal4_hit='$goal4_hit',
																 goal5_hit='$goal5_hit',
																 goal6_hit='$goal6_hit',
																 goal7_hit='$goal7_hit',
																 goal9_hit='$goal8_hit',
																 goal9_hit='$goal9_hit',
																 goal10_hit='$goal10_hit'
																 WHERE id='" . $have_ip->id . "'" );

                        $def = $have_ip->number_type;
                    } else {
                        echo "\n// NEW: " . __LINE__;
                        ///count clicks
                        $clicks = $num_rows + 1;

                        $page_time = mdate( "%Y-%m-%d %H:%i:%s", time() );
                        $last_page = Agent::referrer() . " : " . $page_time . ";";
                        $entry_type = $type;
                        $getLastVisit = $this->db->query( "SELECT * FROM phone_time_use WHERE id = (SELECT MIN(id) as id FROM phone_time_use WHERE ip='$visitor' and campaign_id='$campaign_id' )" );

                        if ( $getLastVisit->num_rows() > 0 ) {
                            $lastVisitData = $getLastVisit->row();
                            echo " // FIRST VISIT " . $lastVisitData->id . " // type $type " . $lastVisitData->traffic_type;
                            $entry_type = $lastVisitData->traffic_type;
                        }

                        $phone_time_use_insert_params = array(
                            'phone_number'           => $phone_number_to_assign, 'number_type'            => $def,
                            'account_id'             => $have_campaign->account_id, 'campaign_id'            => $campaign_id,
                            'dblclick_name_calls'    => $dblclick_name_calls, 'dblclick_name_goals'    => $dblclick_name_goals,
                            'dblclick_agency_id'     => $dblclick_agency_id,
                            'dblclick_advertiser_id' => $dblclick_advertiser_id, 'visitor_city_state'     => $city,
                            'visitor_country'        => $country, 'visitor_country_code'   => $country_code,
                            $keywordField            => $keyword, 'matchtype'              => $matchtype, 'network'                => $network,
                            'searchTerm'             => $searchTerm, 'gclid'                  => $gclid, 'banner_id'              => $banner_id,
                            'landing_page_id'        => $landing_page_id, 'mkwid'                  => $mkwid, 'pcrid'                  => $pcrid, 'pkw'                    => $pkw,
                            'pmt'                    => $pmt, 'pdv'                    => $pdv, 'ip'                     => $visitor, 'lat'                    => $lat, 'lng'                    => $lng,
                            'session_id'             => $session_id, 'device_id'              => $device_id, 'source'                 => $source,
                            'utm_content'            => $utm_content, 'mobile'                 => $mobile, 'platform'               => $platform,
                            'traffic_type'           => $type, 'entry_type'             => $entry_type, 'tracking_active'        => 1, 'visits'                 => 1,
                            'clicks'                 => 1, 'page_views'             => 1, 'time_out_duration'      => $phone_expiration_secs,
                            'last_page'              => $last_page, 'goal1_hit'              => $goal1_hit, 'goal2_hit'              => $goal2_hit,
                            'goal3_hit'              => $goal3_hit, 'goal4_hit'              => $goal4_hit, 'goal5_hit'              => $goal5_hit,
                            'goal6_hit'              => $goal6_hit, 'goal7_hit'              => $goal7_hit, 'goal8_hit'              => $goal8_hit,
                            'goal9_hit'              => $goal9_hit, 'goal10_hit'             => $goal10_hit, 'custom1'                => $custom1Val,
                            'custom2'                => $custom2Val, 'custom3'                => $custom3Val, 'custom4'                => $custom4Val,
                            'custom5'                => $custom5Val, 'custom6'                => $custom6Val, 'custom7'                => $custom7Val,
                            'custom8'                => $custom8Val, 'custom9'                => $custom9Val, 'custom10'               => $custom10Val,
                            'display'                => $display
                        );

                        echo "\n// " . __LINE__ . "\n";
                        if ( $this->db->insert( 'phone_time_use', $phone_time_use_insert_params ) ) {
                            $row_id = $this->db->insert_id();
                            $ga_tracking_id = $this->input->get( 'ga_tracking_id' );
                            $ga_client_id = $this->input->get( 'ga_client_id' );
                            if ( !empty( $ga_tracking_id ) && !empty( $ga_client_id ) ) {
                                $CI = & get_instance();
                                $CI->load->model( 'Ga_client_model' );
                                $CI->Ga_client_model->insert( $row_id, $ga_tracking_id, $ga_client_id );
                            }

                            $vwo = array(
                                'account_id'    => $this->input->get( 'vwo_account_id' ),
                                'experiment_id' => $this->input->get( 'vwo_experiment_id' ),
                                'goal_id'       => $this->input->get( 'vwo_goal_id' ),
                                'combination'   => $this->input->get( 'vwo_combination' ),
                                'uuid'          => $this->input->get( 'vwo_uuid' ),
                                'uuid_v2'       => $this->input->get( 'vwo_uuid_v2' ),
                            );
                            if ( !empty( $vwo[ 'account_id' ] ) && !empty( $vwo[ 'experiment_id' ] ) && !empty( $vwo[ 'goal_id' ] ) && !empty( $vwo[ 'combination' ] )
                            ) {
                                $CI = & get_instance();
                                $CI->load->model( 'Phone_time_use_options_model' );
                                $CI->Phone_time_use_options_model->insert( $row_id, 'vwo', $vwo );
                            }
                        }
                    }

                    $write_divs = 1;
                }
            } elseif ( $num_rows < 1 ) {
                echo " // " . __LINE__;
                $_SESSION[ 'page_views_' . $DOMAIN ] = 1;

                echo "\n// $type " . __LINE__ . "\n";

                include 'check_traffic_type.php';

                echo "\n// " . __LINE__ . "\n";

                /////////////////////////////////
                ///////////////////////////////

                $sql_check_phone = "SELECT phone_number,campaign_id FROM phone_number_inventory WHERE campaign_id='$campaign_id' and active='0' and useable='1' LIMIT 1";

                $check_phone_numbers = $this->db->query( $sql_check_phone );

                $have_phone_number = $check_phone_numbers->row();

                if ( isset( $have_phone_number->phone_number ) && $have_phone_number->phone_number != "" ) {
                    $def = 0;
                    $phone_number_to_assign = $have_phone_number->phone_number;
                } else {
                    $phone_number_to_assign = $have_campaign->default_number;
                    $def = 1;
                }

                echo "\n// " . __LINE__ . "\n";

                if ( !isset( $phone_number_to_assign ) ) {
                    $phone_number_to_assign = $have_campaign->default_number;
                    $def = 1;
                }
                if ( $have_campaign->number_serve_active == 0 ) {
                    echo " // NOT SERVE ";
                    $phone_number_to_assign = "";
                    $def = 0;
                }

                $page_time = mdate( "%Y-%m-%d %H:%i:%s", time() );
                $last_page = Agent::referrer() . " : " . $page_time . ";";

                $ref = Agent::referrer();

                $goal1_hit = checkGoalPage( $ref, $goalPg1, $gclid );
                $goal2_hit = checkGoalPage( $ref, $goalPg2, $gclid );
                $goal3_hit = checkGoalPage( $ref, $goalPg3, $gclid );
                $goal4_hit = checkGoalPage( $ref, $goalPg4, $gclid );
                $goal5_hit = checkGoalPage( $ref, $goalPg5, $gclid );
                $goal6_hit = checkGoalPage( $ref, $goalPg6, $gclid );
                $goal7_hit = checkGoalPage( $ref, $goalPg7, $gclid );
                $goal8_hit = checkGoalPage( $ref, $goalPg8, $gclid );
                $goal9_hit = checkGoalPage( $ref, $goalPg9, $gclid );
                $goal10_hit = checkGoalPage( $ref, $goalPg10, $gclid );

                echo "\n// " . __LINE__ . "\n";

                $entry_type = $type;
                $getLastVisit = $this->db->query( "SELECT * FROM phone_time_use WHERE id = (SELECT MIN(id) as id FROM phone_time_use WHERE ip='$visitor' and campaign_id='$campaign_id' )" );

                if ( $getLastVisit->num_rows() > 0 ) {
                    $lastVisitData = $getLastVisit->row();
                    echo " // FIRST VISIT " . $lastVisitData->id . " // type " . $lastVisitData->traffic_type;
                    $entry_type = $lastVisitData->traffic_type;
                }

                echo "\n// " . __LINE__ . "\n";

                $phone_time_use_insert_params = array(
                    'phone_number'           => $phone_number_to_assign, 'number_type'            => $def,
                    'account_id'             => $have_campaign->account_id, 'campaign_id'            => $campaign_id,
                    'dblclick_name_calls'    => $dblclick_name_calls, 'dblclick_name_goals'    => $dblclick_name_goals,
                    'dblclick_agency_id'     => $dblclick_agency_id,
                    'dblclick_advertiser_id' => $dblclick_advertiser_id, 'visitor_city_state'     => $city,
                    'visitor_country'        => $country, 'visitor_country_code'   => $country_code,
                    $keywordField            => $keyword, 'matchtype'              => $matchtype, 'network'                => $network,
                    'searchTerm'             => $searchTerm, 'gclid'                  => $gclid, 'banner_id'              => $banner_id,
                    'landing_page_id'        => $landing_page_id, 'mkwid'                  => $mkwid, 'pcrid'                  => $pcrid, 'pkw'                    => $pkw,
                    'pmt'                    => $pmt, 'pdv'                    => $pdv, 'ip'                     => $visitor, 'lat'                    => $lat, 'lng'                    => $lng,
                    'session_id'             => $session_id, 'device_id'              => $device_id, 'source'                 => $source,
                    'utm_content'            => $utm_content, 'mobile'                 => $mobile, 'platform'               => $platform,
                    'traffic_type'           => $type, 'entry_type'             => $entry_type, 'tracking_active'        => 1, 'visits'                 => 1,
                    'clicks'                 => 1, 'page_views'             => 1, 'time_out_duration'      => $phone_expiration_secs,
                    'last_page'              => $last_page, 'goal1_hit'              => $goal1_hit, 'goal2_hit'              => $goal2_hit,
                    'goal3_hit'              => $goal3_hit, 'goal4_hit'              => $goal4_hit, 'goal5_hit'              => $goal5_hit,
                    'goal6_hit'              => $goal6_hit, 'goal7_hit'              => $goal7_hit, 'goal8_hit'              => $goal8_hit,
                    'goal9_hit'              => $goal9_hit, 'goal10_hit'             => $goal10_hit, 'custom1'                => $custom1Val,
                    'custom2'                => $custom2Val, 'custom3'                => $custom3Val, 'custom4'                => $custom4Val,
                    'custom5'                => $custom5Val, 'custom6'                => $custom6Val, 'custom7'                => $custom7Val,
                    'custom8'                => $custom8Val, 'custom9'                => $custom9Val, 'custom10'               => $custom10Val,
                    'display'                => $display
                );

                echo "\n// " . __LINE__ . "\n";
                if ( $this->db->insert( 'phone_time_use', $phone_time_use_insert_params ) ) {
                    $row_id = $this->db->insert_id();
                    echo "\n// L " . __LINE__ . " ROW ID $row_id\n";
                    if ( isset( $have_phone_number->phone_number ) && $phone_number_to_assign != "" ) {
                        $make_phone_active = $this->db->set( 'active', 1 )->set( 'timestamp', $current_date, TRUE )
                                ->set( 'ip', $visitor, TRUE )->set( 'session_id', $session_id, TRUE )
                                ->where( 'phone_number', $phone_number_to_assign, TRUE )
                                ->where( 'campaign_id', $campaign_id )->update( 'phone_number_inventory' );
                    }
                    $ga_tracking_id = $this->input->get( 'ga_tracking_id' );
                    $ga_client_id = $this->input->get( 'ga_client_id' );
                    if ( !empty( $ga_tracking_id ) && !empty( $ga_client_id ) ) {
                        $CI = & get_instance();
                        $CI->load->model( 'Ga_client_model' );
                        $CI->Ga_client_model->insert( $row_id, $ga_tracking_id, $ga_client_id );
                    }

                    $vwo = array(
                        'account_id'    => $this->input->get( 'vwo_account_id' ),
                        'experiment_id' => $this->input->get( 'vwo_experiment_id' ),
                        'goal_id'       => $this->input->get( 'vwo_goal_id' ),
                        'combination'   => $this->input->get( 'vwo_combination' ),
                        'uuid'          => $this->input->get( 'vwo_uuid' ),
                        'uuid_v2'       => $this->input->get( 'vwo_uuid_v2' ),
                    );
                    if ( !empty( $vwo[ 'account_id' ] ) && !empty( $vwo[ 'experiment_id' ] ) && !empty( $vwo[ 'goal_id' ] ) && !empty( $vwo[ 'combination' ] )
                    ) {
                        $CI = & get_instance();
                        $CI->load->model( 'Phone_time_use_options_model' );
                        $CI->Phone_time_use_options_model->insert( $row_id, 'vwo', $vwo );
                    }
                }

                $write_divs = 1;
            }
        }
    }
}

/*
 * CUSTOM ==========================
 */
$sql_check_phone = "SELECT phone_number,campaign_id FROM phone_number_inventory WHERE campaign_id='$campaign_id' and active='0' and useable='1' LIMIT 1";
$write_divs = 0;

$check_phone_numbers = DB::select( $sql_check_phone );
if ( $check_phone_numbers ) {
    $have_phone_number = $check_phone_numbers[ 0 ];
    if ( !isset( $have_phone_number->phone_number ) || (isset( $have_phone_number->phone_number ) && $have_phone_number->phone_number == "") ) {
        $phone_number_to_assign = $have_campaign->default_number;
        $def = 0;
    } else {
        $phone_number_to_assign = $have_phone_number->phone_number;
        $def = 1;
        $write_divs = 1;
    }
}
/*
 * ==========================
 */

echo "//TYPE: $type\n\n";

if ( $write_divs == 1 ) {
    $user_data = "";
    if ( isset( $have_ip ) ) {
        $user_data = $have_ip;
    }

    updateGoalTime( $this, $goal1_hit, 'goal1_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal2_hit, 'goal2_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal3_hit, 'goal3_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal4_hit, 'goal4_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal5_hit, 'goal5_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal6_hit, 'goal6_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal7_hit, 'goal7_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal8_hit, 'goal8_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal9_hit, 'goal9_time', $visitor, $campaign_id, $user_data );
    updateGoalTime( $this, $goal10_hit, 'goal10_time', $visitor, $campaign_id, $user_data );

    echo "// WRITE\n";

    if ( $def == 1 || $have_campaign->default_number == $phone_number_to_assign ) {
        $today = date( "Y-m-d", time() );
        $secsTo = strtotime( $today );

        $lastDay = date( "Y-m-d", strtotime( $have_campaign->notified_date ) );
        $secsLs = strtotime( $lastDay );

        $notified = $have_campaign->notified;

        if ( $secsTo > $secsLs ) {
//            TODO: update campaigns
//            $this->db->query( "UPDATE campaigns SET notified='0', notified_date='$today' WHERE campaign_id='$campaign_id' " );
            $notified = 0;
        }

        if ( $have_campaign->email_to_notify != "" && $type == "PPC" && $notified < 3 && $secsTo >= $secsLs && $_SESSION[ 'page_views_' . $DOMAIN ] <= 1 ) {
            if ( $notified < 3 ) {
//                TODO: update campaigns
//                $this->db->query( "UPDATE campaigns SET notified=notified+1 WHERE campaign_id='$campaign_id' " );
            }
            $TRAFFIC = getTodaysPPC( $campaign_id, $this );
            $numbersTotal = getCampaignNumbers( $campaign_id, $_SESSION[ 'number_of_numbers' ], $this );

            echo "// PASS $today\n";

            $numbersNeeded = "N/A";
            if ( $have_campaign->correlation_time > 0 ) {
                $div = (24 / $have_campaign->correlation_time);
                $numbersNeeded = ($TRAFFIC[ 'ALL' ] / $div);
                $numbersNeeded = ceil( $numbersNeeded );
                if ( $numbersNeeded < 3 ) {
                    $numbersNeeded = 3;
                }

                if ( $numbersNeeded <= $numbersTotal ) {
                    $numbersNeeded = $numbersTotal + 1;
                }

                if ( $numbersNeeded <= $TRAFFIC[ 'ACTIVE' ] ) {
                    $numbersNeeded = $TRAFFIC[ 'ACTIVE' ] + 1;
                }
            }

            $showNumbers = $phone_number_to_assign;

            if ( $have_campaign->country_tracking == "j_keyword" ) {
                include 'jp_low.php';
            } else {
                include 'us_low.php';
            }

            $this->email->from( 'noreply@clientservicesolutions.com', 'Client Service Solutions' );
            $this->email->to( $have_campaign->email_to_notify );
            $this->email->subject( 'WARNING Phone Numbers Low - ' . $have_campaign->campaign_name );
            $this->email->message( $msg );
            $this->email->send();
            echo "// NOTIFY\n";
        }
    }

    $last = strlen( $phone_number_to_assign );

    if ( isset( $_GET[ 'do_alert_cg' ] ) ) {
        $TRACK_PHONE = "";
        if ( isset( $_GET[ 'trackingNumber' ] ) ) {
            $TRACK_PHONE = $_GET[ 'trackingNumber' ];
        }

        $alert = 'alert(area+" "+exc+" "+last4);';
        $alert2 = 'alert(phoneNumberPattern[i]+" "+i+" "+trackingNumber+" BL "+bodyLength);';
        $newBody = 'alert(newBody);';
        $alert_now = 'alert(1);';
        $alert3 = 'alert(phoneNumberPattern[i]);';
        $showNEW = 'alert(newText+" "+oldText); alert(node.nodeType);';
        $alertNode = 'if (node.textContent.search("425") >= 0){ alert(node.nodeType+" "+node.textContent+" "+oldText+" "+newText); }';
        $changeTrack = "trackingNumber = '$TRACK_PHONE';";
    } else {
        $alert = '';
        $alert2 = '';
        $newBody = '';
        $alert_now = '';
        $alert3 = '';
        $showNEW = '';
        $alertNode = '';
        $changeTrack = "";
    }

    echo "
		if (typeof jQuery === 'undefined') {
			console.log('No jQuery');
		}\n\n";

    if ( isset( $have_phone_number->phone_number ) ) {
        echo "// PHONE: " . $have_phone_number->phone_number;
    }

    echo "//DEF: $def\n";
    $post_num = "";

    if ( isset( $phone_number_to_assign ) && $phone_number_to_assign != "" ) {

        $post_num = $phone_number_to_assign;
        $phone_format = $def == 0 ? 'phone_format' : 'default_phone_format';

        include 'phone_format.php';

        if ( isset( $have_campaign->$phone_format ) ) {
            echo "\n// PF " . $have_campaign->$phone_format . "\n";
        }

        echo '
		jQuery(document).ready(function(){
			jQuery(window).ready(function(){';
        if ( $have_campaign->int_merger == 1 && isset( $row_id ) ) {
            printf( "jQuery.get('//sync.im-apps.net/imid/set?cid=10081&tid=aid&uid=%d');\n", $row_id );
        }

        if ( $phone_number_to_assign != "" ) {
            echo '
				replacePhoneNumbers("' . $have_campaign->numbers_to_replace . '","' . $phone_number_to_assign . '");
				var all_HTML_AG_ORIG = jQuery("body").html().length;
				jQuery(document).ajaxComplete(function() {
					var all_HTML_AG = jQuery("body").html().length;
					if(all_HTML_AG != all_HTML_AG_ORIG) {
						replacePhoneNumbers("' . $have_campaign->numbers_to_replace . '","' . $phone_number_to_assign . '");
						all_HTML_AG_ORIG = jQuery("body").html().length;
					}
				});
				if (typeof adg_callback === "function") {
					adg_callback();
				}';
        }

        echo '
				function replacePhoneNumbers(elementValue,trackingNumber) {
					' . $changeTrack . '
					var children = jQuery("body").find("*");
					var phoneNumberPattern = new Array();
					var replaceNumbers = elementValue.split(",");
					var allReplaceNumbers = replaceNumbers.length;
					var limit = allReplaceNumbers-1;
                                        
					if( limit == -1 && replaceNumbers[0] != "") {
						limit = 0;
					}

					for(x=0;x<=limit;x++) {
						findNum = replaceNumbers[x];
						var bodyText = jQuery("body").html();
						var charLength = replaceNumbers[x].length;

						if (charLength > 5) {
							jQuery.each(children,function(x,y) {
								var name = jQuery(this).attr("name");
								var href = jQuery(this).attr("href");
								var title = jQuery(this).attr("title");
								var src = jQuery(this).attr("src");
								var onclick = jQuery(this).attr("onclick");
                                                                // REVIEW: trim
								var text_ = jQuery(this).text().trim();

								//replace vanity
								var vanityFind = "' . $have_campaign->vanity_to_replace . '";
                                                                    // REVIEW: replace text
								if (text_.length > 0 && text_ == findNum) {
									jQuery(this).text(trackingNumber);
								}
								//if (text_.length > 0 && vanityFind == text_ && vanityFind.length > 0) {
								//	jQuery(this).text(trackingNumber);
								//}
								if (name != undefined && name != "") {
									if (name.replace != undefined) {
										var newName = replaceAttributes(trackingNumber,name,findNum);
										if (newName != false) {
											try {
												jQuery(this).attr("name",newName).addClass("track_ag_click");
											} catch(e) {
												 console.log(e.message);
											}
										}
									}
								}

								if (href != undefined && href != "") {
									if (href.replace != undefined) {
										var newHref = replaceAttributes(trackingNumber,href,findNum);
										if (newHref != false) {
											try {
												jQuery(this).attr("href",newHref).addClass("track_ag_click");
											} catch(e) {
												console.log(e.message);
											}
										}
									}
								}

								if (title != undefined && title != "") {
									if (title.replace != undefined) {
										var newTitle = replaceAttributes(trackingNumber,title,findNum);
										if (newTitle != false) {
											try {
												jQuery(this).attr("title",newTitle).addClass("track_ag_click");
											} catch(e) {
												console.log(e.message);
											}
										}
									}
								}

								if (src != undefined && src != "") {
									if (src.replace != undefined) {
										var srcTrackingNumber = trackingNumber.replace(/[_\s().-]/g,"");
										var newSrc = src.replace(findNum,srcTrackingNumber);
										var is_rep = newSrc.search(srcTrackingNumber);
										if (newSrc != false && is_rep > -1 ) {
											try {
												jQuery(this).attr("src",newSrc).addClass("track_ag_click");
											} catch(e) {
												console.log(e.message);
											}
										}
									}
								}

								if (onclick != undefined && onclick != "") {
									if (onclick.replace != undefined) {
										var newOnclick = replaceAttributes(trackingNumber,onclick,findNum);
										if (newOnclick != false) {
											try {
												jQuery(this).attr("onclick",newOnclick).addClass("track_ag_click");
											} catch(e) {
												console.log(e.message);
											}
										}
									}
								}
							});

							jQuery.each(children,function(x) {
								var result = replaceText(findNum, trackingNumber, this, this);
								if (result === true) {
									try {
										jQuery(this).addClass("track_ag_click");
									} catch(e) {
										console.log(e.message);
									}
								}
							});
						}
					}
					//' . $newBody . '
					
					if (typeof agCallback === "function") {
						agCallback(trackingNumber);
					}
					
				}
			});
		});';
    }

    $showAlert = '';
    if ( isset( $_GET[ 'cgibbs' ] ) ) {
        $showAlert = 'alert(oldText+" "+text_);';
    }

    include 'format_array.php';
}

$ID = "";
if ( isset( $have_ip->id ) ) {
    $ID = $have_ip->id;
} else {
    $ID = $row_id;
}

//START TRIGGER CODE
echo "
	// Start Trigger
	jQuery(document).ready(function() {";

$url = Agent::referrer();
echo "
		var url_ = '" . $url . "';";

if ( !isset( $_SESSION[ 'GOAL_TRIGGERS' ] ) ) {
    $t = DB::select( "SELECT * FROM campaign_triggers WHERE campaign_id='$campaign_id' AND active='1' AND (click_id != '' OR click_class != '' OR click_tag != '') " );

    $_SESSION[ 'GOAL_TRIGGERS' ] = array();
    foreach ( $t as $trigger ) {
        $_SESSION[ 'GOAL_TRIGGERS' ][ $trigger->goal_count ] = $trigger;

        $type = "#" . $trigger->click_id;
        if ( $trigger->click_class != "" ) {
            $type = "." . $trigger->click_class;
        } else {
            if ( $trigger->click_tag != "" ) {
                $type = $trigger->click_tag;
            }
        }

        $action = "click";
        if ( $trigger->is_form == 1 ) {
            $action = "submit";
        }

        echo "
		if (jQuery('$type').length > 0) {
			console.log('$type exists');
		} else {
			console.log('$type not found');
		}

		jQuery('" . $type . "').$action(function() {
			jQuery.post('" . site_url( "incomingdata/getGoalAction" ) . "?ip=" . $visitor . "&campaign_id=" . $campaign_id . "&key=" . md5( $visitor . $campaign_id ) . "&goal=" . $trigger->goal_count . "&email=" . $trigger->email_send . "',{url:url_},function(data){},'jsonp');
		});

		var iframes_ = jQuery('body').contents().find('iframe');
		jQuery.each(iframes_,function(x,y) {
			var frameURL = this.src;
			if (frameURL.search('https:') == -1) {
				var iframeControl = jQuery(this).contents().find('$type');
				jQuery('" . $type . "').$action(function() {
					jQuery.post('" . site_url( "incomingdata/getGoalAction" ) . "?ip=" . $visitor . "&campaign_id=" . $campaign_id . "&key=" . md5( $visitor . $campaign_id ) . "&goal=" . $trigger->goal_count . "&email=" . $trigger->email_send . "',{url:url_},function(data){},'jsonp');
				});
			}
		});";
    }
} else {
    foreach ( $_SESSION[ 'GOAL_TRIGGERS' ] as $trigger ) {
        $type = "#" . $trigger->click_id;
        if ( $trigger->click_class != "" ) {
            $type = "." . $trigger->click_class;
        } elseif ( $trigger->click_tag != "" ) {
            $type = $trigger->click_tag;
        }

        $action = "click";
        if ( $trigger->is_form == 1 ) {
            $action = "submit";
        }

        echo "
		jQuery('" . $type . "').$action(function() {
			jQuery.post('" . site_url( "incomingdata/getGoalAction" ) . "?ip=" . $visitor . "&campaign_id=" . $campaign_id . "&key=" . md5( $visitor . $campaign_id ) . "&goal=" . $trigger->goal_count . "&email=" . $trigger->email_send . "',{url:url_},function(data){},'jsonp');
		});

		var iframes_ = jQuery('body').contents().find('iframe');
		jQuery.each(iframes_,function(x,y) {
			var frameURL = this.src;
			if (frameURL.search('https:') == -1) {
				var iframeControl = jQuery(this).contents().find('$type');
				jQuery('" . $type . "').$action(function() {
					jQuery.post('" . site_url( "incomingdata/getGoalAction" ) . "?ip=" . $visitor . "&campaign_id=" . $campaign_id . "&key=" . md5( $visitor . $campaign_id ) . "&goal=" . $trigger->goal_count . "&email=" . $trigger->email_send . "',{url:url_},function(data){},'jsonp');
				});
			}
		});";
    }
}

//END TRIGGER CODE
echo "\n});\n\t// End Trigger\n\n";

if ( !isset( $phone_number_to_assign ) ) {
    $phone_number_to_assign = "";
}

echo "\njQuery(document).ready(function() {
	var phone = '$phone_number_to_assign';";

for ( $i = 0; $i <= 15; $i++ ) {
    echo "\n\tif (jQuery('#phone_number_holder_$i').length > 0 && phone != '') {
		jQuery('#phone_number_holder_$i').html(phone);
	}";
}

echo "\n\tif (jQuery('.phone_number_holder').length > 0 && phone != '') {
		jQuery('.phone_number_holder').html(phone);
	}";

echo "\n});";

if ( !isset( $phone_number_to_assign ) ) {
    $phone_number_to_assign = "";
}
//require('tracking_functions.php');
//if ( $_SESSION[ 'page_views_' . $DOMAIN ] == 1 ) {
//    create_session_time( $row_id, $session_id, $visitor, $device_id, $campaign_id, $combReferrer, $type, $keyword, $post_num, $this );
//}
