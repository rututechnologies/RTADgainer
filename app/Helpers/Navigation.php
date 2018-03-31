<?php
if ( !function_exists( 'isActiveNav' ) ) {

    function isActiveNav( $path, $output = 'active' )
    {
        if ( is_array( $path ) ) {
            foreach ( $path as $u ) {
                if ( \Request::is( $u . '*' ) ) {
                    return $output;
                }
            }
        } else {
            if ( \Request::is( $path . '*' ) ) {
                return $output;
            }
        }
    }

}
if ( !function_exists( 'human_to_unix' ) ) {

    function human_to_unix( $datestr = '' )
    {
        if ( $datestr === '' ) {
            return FALSE;
        }

        $datestr = preg_replace( '/\040+/', ' ', trim( $datestr ) );

        if ( !preg_match( '/^(\d{2}|\d{4})\-[0-9]{1,2}\-[0-9]{1,2}\s[0-9]{1,2}:[0-9]{1,2}(?::[0-9]{1,2})?(?:\s[AP]M)?$/i', $datestr ) ) {
            return FALSE;
        }

        sscanf( $datestr, '%d-%d-%d %s %s', $year, $month, $day, $time, $ampm );
        sscanf( $time, '%d:%d:%d', $hour, $min, $sec );
        isset( $sec ) OR $sec = 0;

        if ( isset( $ampm ) ) {
            $ampm = strtolower( $ampm );

            if ( $ampm[ 0 ] === 'p' && $hour < 12 ) {
                $hour += 12;
            } elseif ( $ampm[ 0 ] === 'a' && $hour === 12 ) {
                $hour = 0;
            }
        }

        return mktime( $hour, $min, $sec, $month, $day, $year );
    }

}
