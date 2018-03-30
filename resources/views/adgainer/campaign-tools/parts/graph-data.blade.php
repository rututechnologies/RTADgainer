<!--<div class="alert alert-info">Under Construction</div>-->

<?php
$sourceTraffic[ 'SOURCE' ] = [];
$sourceTraffic[ 'CALLSOURCE' ] = [];
$sourceTraffic[ 'CONVSOURCE' ] = [];
$sourceTraffic[ 'CONVTYPE' ] = [];

foreach ( $campaigns as $campaign ) {
    foreach ( $all_ppc[ $campaign->campaign_id ] as $campPPC ) {
        if ( strtotime( $campPPC->time_stamp ) > strtotime( $date1 ) && strtotime( $campPPC->time_stamp ) < strtotime( $date2 ) ) {
            $tType = $campPPC->traffic_type;
            if ( $tType == "" ) {
                $tType = "Unknown";
            }
            if ( stristr( $campPPC->traffic_type, "direct" ) ) {
                $tType = "DIRECT";
            }

            if ( !isset( $sourceTraffic[ 'SOURCE' ][ $tType ] ) ) {
                $sourceTraffic[ 'SOURCE' ][ $tType ] = 0;
            }
            $sourceTraffic[ 'SOURCE' ][ $tType ] ++;
            if ( $campPPC->goal1_hit == 1 || $campPPC->goal2_hit == 1 || $campPPC->goal3_hit == 1 || $campPPC->goal4_hit == 1 ) {
                if ( !isset( $sourceTraffic[ 'CONVTYPE' ][ 'Goals ' . $tType ] ) ) {
                    $sourceTraffic[ 'CONVTYPE' ][ 'Goals ' . $tType ] = 0;
                }
                $sourceTraffic[ 'CONVTYPE' ][ 'Goals ' . $tType ] ++;

                if ( !isset( $sourceTraffic[ 'CONVSOURCE' ][ $tType ] ) ) {
                    $sourceTraffic[ 'CONVSOURCE' ][ $tType ] = 0;
                }
                $sourceTraffic[ 'CONVSOURCE' ][ $tType ] ++;
            }

            if ( $campPPC->email_data_sent == 1 ) {
                if ( !isset( $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] ) ) {
                    $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] = 0;
                }
                $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] ++;
            }
        }
        if ( strtotime( $campPPC->time_of_call ) > strtotime( $date1_show ) && strtotime( $campPPC->time_of_call ) < strtotime( $date2_show_ ) ) {
            $tType = $campPPC->traffic_type;
            if ( $campPPC->caller_phone != "" ) {
                if ( !isset( $sourceTraffic[ 'CALLSOURCE' ][ $tType ] ) ) {
                    $sourceTraffic[ 'CALLSOURCE' ][ $tType ] = 0;
                }

                if ( !isset( $sourceTraffic[ 'CONVTYPE' ][ 'Calls ' . $tType ] ) ) {
                    $sourceTraffic[ 'CONVTYPE' ][ 'Calls ' . $tType ] = 0;
                }
                $sourceTraffic[ 'CONVTYPE' ][ 'Calls ' . $tType ] ++;
                $sourceTraffic[ 'CALLSOURCE' ][ $tType ] ++;
            }
        }
    }
}
?>

<div class="row">
    <div class="col-md-6">
        <div id="chart_div1"></div>
    </div>
    <div class="col-md-6">
        <div id="chart_div2"></div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <div id="chart_div3"></div>
    </div>
    <div class="col-md-6">
        <div id="chart_div4"></div>
    </div>
</div>

<?php
$dataSource_ = "";
foreach ( $sourceTraffic[ 'SOURCE' ] as $source => $count ) {
    $dataSource_ .= "['$source ($count)', $count],";
}
$dataSource = substr( $dataSource_, 0, -1 );
// =========
$dataCallSource_ = "";
foreach ( $sourceTraffic[ 'CALLSOURCE' ] as $source => $count ) {
    $dataCallSource_ .= "['$source ($count)', $count],";
}
$dataCallSource = substr( $dataCallSource_, 0, -1 );
// =========
$dataConvType_ = "";
foreach ( $sourceTraffic[ 'CONVTYPE' ] as $source => $count ) {
    $dataConvType_ .= "['$source ($count)', $count],";
}
$dataConvType = substr( $dataConvType_, 0, -1 );
// =========
$dataConvSource_ = "";
foreach ( $sourceTraffic[ 'CONVSOURCE' ] as $source => $count ) {
    $dataConvSource_ .= "['$source ($count)', $count],";
}
$dataConvSource = substr( $dataConvSource_, 0, -1 );
?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", { packages: [ "corechart" ] });
    google.setOnLoadCallback(drawChart);
    function drawChart(){
    var dataSource = google.visualization.arrayToDataTable([[ 'Source', 'Visits per Source' ], {!! $dataSource !!}]);
    var optionsSource = {
    title: 'Account Traffic Source',
        width: 500,
        height: 300,
    };
    var chartSource = new google.visualization.PieChart(document.getElementById('chart_div1'));
    chartSource.draw(dataSource, optionsSource);
    // ============
    var dataCallSource = google.visualization.arrayToDataTable([[ 'Source', 'Calls per Source' ], {!! $dataCallSource !!}]);
    var optionsCallSource = {
    title: 'Account Call Source',
        width: 500,
        height: 300,
    };
    var chartCallSource = new google.visualization.PieChart(document.getElementById('chart_div2'));
    chartCallSource.draw(dataCallSource, optionsCallSource);
    // ============
    var dataConvType = google.visualization.arrayToDataTable([[ 'Source', 'Conversion Traffic' ], {!! $dataConvType !!}]);
    var optionsConvType = {
    title: 'Account Conversion Types',
        width: 500,
        height: 300,
    };
    var chartConvType = new google.visualization.PieChart(document.getElementById('chart_div3'));
    chartConvType.draw(dataConvType, optionsConvType);
    // ============
    var dataConvSource = google.visualization.arrayToDataTable([[ 'Source', 'Conversion Source' ], {!! $dataConvSource !!}]);
    var optionsConvSource = {
    title: 'Account Conversion Referrals',
        width: 500,
        height: 300,
    };
    var chartConvSource = new google.visualization.PieChart(document.getElementById('chart_div4'));
    chartConvSource.draw(dataConvSource, optionsConvSource);
    }
</script>
