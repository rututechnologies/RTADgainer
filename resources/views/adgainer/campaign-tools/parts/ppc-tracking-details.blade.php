<?php
$acctTotalVisits = 0;
$acctTotalClicks = 0;
$acctTotalPPC = 0;
$acctTotalCalls = 0;
$acctTotalGoals = 0;
$acctTotalEmails = 0;
$totalUniqueCalls = 0;


$count = 0;

$onePagers = 0;
$ppcOnePagers = 0;
$orgOnePagers = 0;
$dirOnePagers = 0;
?>

<div class="table-responsive">

    <table class="table table-bordered table-hovered table-stripped table-condensed">
        <thead>
            <tr>
                <th>Campaign Name</th>
                <th class="text-center">Visits</th>
                <th class="text-center">Clicks</th>
                <th class="text-center">PPC Calls | Unique</th>
                <th class="text-center">Call Conv %</th>
                <th class="text-center">PPC Goals</th>
                <th class="text-center">PPC Emails</th>
                <th class="text-center">All PPC Conv %</th>
                <th class="text-center">Bounce Rate</th>
                <th class="text-center">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campaigns as $campaign)
            <?php
            $conv = 0;
            $ppcConv = 0;
            $goals = 0;
            $ppcGoals = 0;
            $calls = 0;
            $ppcCalls = 0;
            $callConv = 0;
            $emails = 0;
            $ppcEmails = 0;
            $clicks = 0;
            $org = 0;
            $display = 0;
            $ppc = 0;
            $direct = 0;
            $visits = 0;
            $convPer = 0;

            $unique_calls = array();
            foreach ( $all_ppc[ $campaign->campaign_id ] as $campPPC ) {
//                if ( strtotime( $campPPC->time_stamp ) > strtotime( $date1 ) && strtotime( $campPPC->time_stamp ) < strtotime( $date2 ) ) {
                if ( true ) {
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

                    if ( $campPPC->visits == 1 && stristr( $campPPC->traffic_type, 'PPC' ) ) {
                        $ppcOnePagers++;
                    }

                    if ( $campPPC->visits == 1 && stristr( $campPPC->traffic_type, 'direct' ) ) {
                        $dirOnePagers++;
                    }

                    if ( $campPPC->visits == 1 && $campPPC->traffic_type == 'ORG' ) {
                        $orgOnePagers++;
                    }
                    if ( $campPPC->ip != "" ) {
                        $visits++;
                    }
                    if ( $campPPC->ip != "" && (stristr( $campPPC->traffic_type, "PPC" ) || stristr( $campPPC->traffic_type, "DISPLAY" )) ) {
                        $clicks++;
                    }
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "DIRECT" ) ) {
                        $direct++;
                    }
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "ORG" ) ) {
                        $org++;
                    }

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
                    if ( $campPPC->goal1_hit == 1 || $campPPC->goal2_hit || $campPPC->goal3_hit || $campPPC->goal4_hit ) {
                        $goals++;
                    }

                    if ( ($campPPC->goal1_hit == 1 || $campPPC->goal2_hit || $campPPC->goal3_hit || $campPPC->goal4_hit) && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcGoals++;
                    }

                    if ( $campPPC->email_data_sent == 1 ) {
                        $emails++;
                        if ( !isset( $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] ) ) {
                            $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] = 0;
                        }
                        $sourceTraffic[ 'CONVTYPE' ][ 'Emails ' . $tType ] ++;
                    }
                    if ( $campPPC->email_data_sent == 1 && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcEmails++;
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

                    if ( $campPPC->caller_phone != "" ) {
                        $calls++;
                    }
                    if ( $campPPC->caller_phone != "" && (stristr( $campPPC->traffic_type, "PPC" ) || stristr( $campPPC->traffic_type, "DISPLAY" )) ) {
                        $ppcCalls++;
                        $unique_calls[ $campPPC->caller_phone . $campPPC->phone_number ] = 1;
                    }
                }

                $conv = $goals + $calls + $emails;
                $ppcConv = $ppcGoals + count( $unique_calls ) + $ppcEmails;

                $cost_traffic = ($clicks);

                $callConv = 0;
                if ( $cost_traffic > 0 ) {
                    $callConv = number_format( ((count( $unique_calls ) / $cost_traffic) * 100 ), 2, '.', '' );
                }

                $convPer = 0;
                if ( $clicks > 0 ) {
                    $convPer = number_format( (($ppcConv / $clicks) * 100 ), 2, '.', '' );
                }

                $acctTotalVisits = $acctTotalVisits + $visits;
                $acctTotalClicks = $acctTotalClicks + $clicks;
                $acctTotalPPC = $acctTotalPPC + $ppc;
                $acctTotalCalls = $acctTotalCalls + $ppcCalls;
                $acctTotalGoals = $acctTotalGoals + $ppcGoals;
                $acctTotalEmails = $acctTotalEmails + $ppcEmails;
                $totalUniqueCalls = $totalUniqueCalls + count( $unique_calls );
            }
            ?>
            <tr class="text-center">
                <td class="text-left">{{$campaign->campaign_name}}</td>
                <td>
                    <a href="#" target="_blank">
                        {!! $visits !!}
                    </a>
                </td>
                <td>
                    <a href="#" target="_blank">
                        {!! $clicks !!}
                    </a>
                </td>
                <td>
                    <a href="#" target="_blank">
                        {!! $ppcCalls . " | " . count($unique_calls) !!}
                    </a>
                </td>
                <td>
                    <a href="#" target="_blank">
                        {!! $callConv !!}
                    </a>
                </td>
                <td>
                    <a href="#" target="_blank">
                        {!! $ppcGoals !!}
                    </a>
                </td>
                <td>
                    {!! $ppcEmails !!}
                </td>
                <td>
                    <a href="#" target="_blank">
                        {!! $convPer !!}
                    </a>
                </td>
                <td>
                    {!! ( $clicks > 0 )? number_format( ($ppcOnePagers / $clicks ), 2 ) : 0 !!}
                </td>
                <?php
                $urlDetail = "campaign/details/$campaign->campaign_id/$account_id";
                $urlEdit = "campaign/edit/$campaign->campaign_id/$account_id";
                $urlDelete = "campaign/delete/$campaign->campaign_id/$account_id";
                ?>
                <td>
                    <a href="<?php echo $urlDetail; ?>" class=""><i class="fa fa-info-circle"></i></a>&nbsp;
                    <a href="<?php echo $urlEdit; ?>" class=""><i class="fa fa-pencil"></i></a>&nbsp;
                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr class="text-center">
                <th class="text-center">--</th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalVisits !!}
                    </a>
                </th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalClicks !!}
                    </a>
                </th>
                <th class="text-center">

                    <a href="#" target="_blank">
                        {!! $acctTotalCalls . " | " . $totalUniqueCalls !!}
                    </a>
                </th>
                <th class="text-center">{{ $callConv }}</th>
                <th class="text-center">{{ $acctTotalGoals }}</th>
                <th class="text-center">{{ $acctTotalEmails }}</th>
                <th class="text-center">{{ $convPer }}</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>