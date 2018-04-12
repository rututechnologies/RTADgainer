<?php
if ( !function_exists( 'base_url' ) ) {

    function base_url( $url )
    {
        return url( '/' ) . '/' . $url;
    }

}
if ( !function_exists( 'site_url' ) ) {

    function site_url( $url )
    {
        return base_url( $url );
    }

}

if ( !function_exists( 'getDomain' ) ) {
    function getDomain( $domain )
    {

        $sep = explode( ".", $domain );

        $domain_ = $domain;

        if ( count( $sep ) == 2 ) {
            $domain_ = $sep[ 0 ];
        }
        if ( count( $sep ) == 3 ) {
            $domain_ = $sep[ 1 ];
        }
        if ( count( $sep ) > 3 && stristr( $domain, ".com" ) == TRUE ) {
            $domain_ = $sep[ (count( $sep ) - 2) ];
        }
        if ( count( $sep ) > 3 && stristr( $domain, ".com" ) == FALSE ) {
            $domain_ = $sep[ (count( $sep ) - 3) ];
        }

        return $domain_;
    }

}

if ( !function_exists( 'checkmobile' ) ) {

    function checkmobile()
    {


        $mobile = "";

        $user_profile = array();

        if ( isset( $_SERVER[ "HTTP_X_WAP_PROFILE" ] ) ) {
            $mobile = 1;
        }

        if ( isset( $_SERVER[ "HTTP_USER_AGENT" ] ) ) {

            // Quick Array to kill out matches in the user agent
            // that might cause false positives

            $badmatches = array( "OfficeLiveConnector", "MSIE\ 8\.0", "OptimizedIE8", "MSN\ Optimized", "Creative\ AutoUpdate", "Swapper" );

            foreach ( $badmatches as $badstring ) {
                if ( preg_match( "/" . $badstring . "/i", $_SERVER[ "HTTP_USER_AGENT" ] ) )
                    $mobile = 0;
            }

            // Now we'll go for positive matches


            $uamatches = array( "midp", "Android", "android", "blackberry", "iphone", "mobile", "j2me", "avantg", "docomo", "novarra", "palmos", "palmsource", "240x320", "opwv", "chtml", "pda", "windows ce", "mmp", "blackberry", "mib", "symbian", "wireless", "nokia", "hand", "mobi", "phone", "cdm", "up\.b", "audio", "SIE\-", "SEC\-", "samsung", "HTC", "mot", "mitsu", "sagem", "sony", "alcatel", "lg", "erics", "vx", "NEC", "philips", "mmm", "xx", "panasonic", "sharp", "wap", "sch", "rover", "pocket", "benq", "java", "pt", "pg", "vox", "amoi", "bird", "compal", "kg", "voda", "sany", "kdd", "dbt", "sendo", "sgh", "gradi", "jb", "\d\d\di", "moto", "webos" );

            ///check mobile
            foreach ( $uamatches as $uastring => $value ) {
                //echo $value;
                if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], $value ) ) {
                    $mobile_platform = $value;
                    $mobile = 1;
                    break;
                } else {
                    $mobile_platform = 0;
                    $mobile = 0;
                }
            }

            ///get platform os
            $platform = "";

            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Windows" ) ) {
                $platform = "Windows";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Linux" ) ) {
                $platform = "Linux";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Mac" ) ) {
                $platform = "Mac";
            }

            $browser = "";

            ///get browser
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Safari" ) ) {
                $browser = "Safari";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Firefox" ) ) {
                $browser = "Firefox";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Explorer" ) ) {
                $browser = "Internet Explorer";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Chrome" ) ) {
                $browser = "Google Chrome";
            }
            if ( stristr( $_SERVER[ "HTTP_USER_AGENT" ], "Opera" ) ) {
                $browser = "Opera";
            }



            $user_profile = array( 0 => $mobile, "mobile" => $mobile, 1 => $platform, "platform" => $platform, 2 => $mobile_platform, "mobile_platform" => $mobile_platform, 3 => $browser, "browser" => $browser );

            return $user_profile;
        }
    }

}

if ( !function_exists( 'get_ip_address' ) ) {
    function get_ip_address()
    {
        $ip_address = getenv( 'HTTP_X_FORWARDED_FOR' ) ? getenv( 'HTTP_X_FORWARDED_FOR' ) : getenv( 'REMOTE_ADDR' );
        sscanf( $ip_address, '%[^,]', $ip_address );
        return $ip_address;
    }

}