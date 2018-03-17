<?php
if ( ! function_exists( 'isActiveNav' ) ) {

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

