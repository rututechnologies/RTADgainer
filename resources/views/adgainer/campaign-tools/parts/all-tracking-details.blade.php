<?php
$acctTotalVisits = 0;
$acctTotalClicks = 0;
$acctTotalPPC = 0;
$acctTotalCalls = 0;
$acctTotalGoals = 0;
$acctTotalEmails = 0;
$acctTotalOrganic = 0;
$acctTotalDisplay = 0;
$acctTotalDirect = 0;
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
                <th class="text-center">All Visits</th>
                <th class="text-center">Clicks</th>
                <th class="text-center">PPC</th>
                <th class="text-center">Display</th>
                <th class="text-center">Organic</th>
                <th class="text-center">Direct</th>
                <th class="text-center">Calls | Unique</th>
                <th class="text-center">Call Conv %</th>
                <th class="text-center">Goals</th>
                <th class="text-center">Emails</th>
                <th class="text-center">All Convs</th>
                <th class="text-center">All Conv %</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campaigns as $campaign)
            <?php
            $url_params = [
                'account_id'  => $campaign->account_id,
                'campaign_id' => $campaign->campaign_id,
                'rType'       => '0',
                'date1'       => $date1_show,
                'date2'       => $date2_show,
                'archive'     => $archive,
                'time_zone'  => $time_zone,
            ];

            if ( !isset( $camp_goals[ $campaign->campaign_id ][ 1 ] ) ) {
                $camp_goals[ $campaign->campaign_id ][ 1 ] = 0;
            }
            if ( !isset( $camp_goals[ $campaign->campaign_id ][ 2 ] ) ) {
                $camp_goals[ $campaign->campaign_id ][ 2 ] = 0;
            }
            if ( !isset( $camp_goals[ $campaign->campaign_id ][ 3 ] ) ) {
                $camp_goals[ $campaign->campaign_id ][ 3 ] = 0;
            }
            if ( !isset( $camp_goals[ $campaign->campaign_id ][ 4 ] ) ) {
                $camp_goals[ $campaign->campaign_id ][ 4 ] = 0;
            }

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
            $direct = 0;
            $visits = 0;
            $convPer = 0;
            $display = 0;
            $ppc = 0;
            $unique_calls = array();

            foreach ( $all_ppc[ $campaign->campaign_id ] as $campPPC ):

                if ( strtotime( $campPPC->time_stamp ) > strtotime( $date1 ) && strtotime( $campPPC->time_stamp ) < strtotime( $date2 ) ) {

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
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppc++;
                    }
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "DIRECT" ) ) {
                        $direct++;
                    }
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "ORG" ) ) {
                        $org++;
                    }
                    if ( $campPPC->ip != "" && stristr( $campPPC->traffic_type, "DISPLAY" ) ) {
                        $display++;
                    }

                    if ( $campPPC->goal1_hit == 1 ) {
                        $goals++;
                        $camp_goals[ $campaign->campaign_id ][ 1 ] ++;
                    }
                    if ( $campPPC->goal2_hit == 1 ) {
                        $goals++;
                        $camp_goals[ $campaign->campaign_id ][ 2 ] ++;
                    }
                    if ( $campPPC->goal3_hit == 1 ) {
                        $goals++;
                        $camp_goals[ $campaign->campaign_id ][ 3 ] ++;
                    }
                    if ( $campPPC->goal4_hit == 1 ) {
                        $goals++;
                        $camp_goals[ $campaign->campaign_id ][ 4 ] ++;
                    }

                    if ( ($campPPC->goal1_hit == 1) && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcGoals++;
                    }
                    if ( ($campPPC->goal2_hit == 1) && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcGoals++;
                    }
                    if ( ($campPPC->goal3_hit == 1) && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcGoals++;
                    }
                    if ( ($campPPC->goal4_hit == 1) && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcGoals++;
                    }
                    
                    if ( $campPPC->email_data_sent == 1 && stristr( $campPPC->traffic_type, "PPC" ) ) {
                        $ppcEmails++;
                    }
                }

                if ( strtotime( $campPPC->time_of_call ) > strtotime( $date1_show ) && strtotime( $campPPC->time_of_call ) < strtotime( $date2_show_ ) ) {
                    $tType = $campPPC->traffic_type;
                    if ( $campPPC->caller_phone != "" ) {
                        $calls++;
                        $unique_calls[ $campPPC->caller_phone . $campPPC->phone_number ] = 1;
                    }
                    if ( $campPPC->caller_phone != "" && (stristr( $campPPC->traffic_type, "PPC" ) || stristr( $campPPC->traffic_type, "DISPLAY" )) ) {
                        $ppcCalls++;
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
                if ( $visits > 0 ) {
                    $convPer = number_format( (($conv / $visits) * 100 ), 2, '.', '' );
                }

                ///COLLECT KEYWORDS

                if ( $campPPC->keyword ) {
                    $keyword = $campPPC->keyword;
                } elseif ( $campPPC->k_keyword ) {
                    $keyword = $campPPC->k_keyword;
                } elseif ( $campPPC->j_keyword ) {
                    $keyword = $campPPC->j_keyword;
                } elseif ( $campPPC->ch_keyword ) {
                    $keyword = $campPPC->ch_keyword;
                } else {
                    $keyword = "";
                }

                $keyword = str_replace( "(ppc)", "", $keyword );
                $keyword = str_replace( "(org)", "", $keyword );
                $keyword = str_replace( "direct", "", $keyword );
                $keyword = trim( $keyword );

                // REVIEW: ref: application/models/Webtacking_model.php | 1266
//                $matchType = $this->Webtracking_model->getMatchType( $campPPC->matchtype );
                $type = $campPPC->matchtype;
                switch ( $type ) {
                    case 'p':
                        $matchType = "Phrase";
                        break;
                    case 'e':
                        $matchType = "Exact";
                        break;
                    case 'b':
                        $matchType = "Board";
                        break;
                    default:
                        $matchType = $type;
                        break;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CLICKS' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CLICKS' ] = array();
                }

                if ( $campPPC->traffic_type == 'PPC' && $campPPC->visits > 0 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CLICKS' ][] = $keyword;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL1' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL1' ] = array();
                }
                if ( $campPPC->goal1_hit == 1 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL1' ][] = $keyword;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL2' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL2' ] = array();
                }
                if ( $campPPC->goal2_hit == 1 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL2' ][] = $keyword;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL3' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL3' ] = array();
                }
                if ( $campPPC->goal3_hit == 1 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL3' ][] = $keyword;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL4' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL4' ] = array();
                }
                if ( $campPPC->goal4_hit == 1 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'GOAL4' ][] = $keyword;
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CALLS' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CALLS' ] = array();
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNIQUE_CALLS' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNIQUE_CALLS' ] = array();
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'OVER' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'OVER' ] = array();
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNDER' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNDER' ] = array();
                }

                if ( $campPPC->caller_phone != '' ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'CALLS' ][] = $keyword;
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNIQUE_CALLS' ][ $campPPC->caller_phone . $campPPC->caller_phone ] = $keyword;
                    if ( $campPPC->call_duration > 60 ) {
                        $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'OVER' ][ $campPPC->caller_phone ] = 1;
                    } else {
                        $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'UNDER' ][ $campPPC->caller_phone ] = 1;
                    }
                }

                if ( !isset( $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'EMAILS' ] ) ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'EMAILS' ] = array();
                }
                if ( $campPPC->email_data_sent == 1 ) {
                    $allKeywords[ $keyword . " _ " . $campPPC->traffic_type . " _ " . $matchType ][ 'EMAILS' ][] = $keyword;
                }

            endforeach;

            $acctTotalVisits = $acctTotalVisits + $visits;
            $acctTotalClicks = $acctTotalClicks + $clicks;
            $acctTotalPPC = $acctTotalPPC + $ppc;
            $acctTotalOrganic = $acctTotalOrganic + $org;
            $acctTotalDisplay = $acctTotalDisplay + $display;
            $acctTotalDirect = $acctTotalDirect + $direct;
            $acctTotalCalls = $acctTotalCalls + $calls;
            $acctTotalGoals = $acctTotalGoals + $goals;
            $acctTotalEmails = $acctTotalEmails + $emails;
            $totalUniqueCalls = $totalUniqueCalls + count( $unique_calls );

            $campConv = ($goals + $calls + $emails);

            $urlVisit = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic' ] ) );
            $urlClicks = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'PPC Traffic', 'traffic' => 'PPC|DISPLAY' ] ) );
            $urlPPC = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'traffic' => 'PPC' ] ) );
            $urlDisplay = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'traffic' => 'DISPLAY' ] ) );
            $urlOrg = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'rType' => '1', 'traffic' => 'ORG' ] ) );
            $urlDirect = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'rType' => '1', 'traffic' => 'DIRECT' ] ) );
            $urlCalls = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Call Records', 'rType' => '1', 'traffic' => '' ] ) );
            $urlCallConv = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Call Records', 'rType' => '1', 'traffic' => '' ] ) );
            $urlPPC_goals = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Goal Records', 'rType' => '3', 'traffic' => '' ] ) );
            $urlCampConv = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Conversion Records', 'rType' => '2', 'traffic' => '' ] ) );
            ?>
            <tr class="text-center">
                <td class="text-left">{{$campaign->campaign_name}}</td>
                <td>
                    <a href="{{$urlVisit}}" target="_blank">
                        {!! $visits !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlClicks}}" target="_blank">
                        {!! $clicks !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlPPC}}" target="_blank">
                        {!! $ppc !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlDisplay}}" target="_blank">
                        {!! $display !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlOrg}}" target="_blank">
                        {!! $org !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlDirect}}" target="_blank">
                        {!! $direct !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlCalls}}" target="_blank">
                        {!! $calls . " | " . count($unique_calls) !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlCallConv}}" target="_blank">
                        {!! $callConv !!}
                    </a>
                </td>
                <td>
                    <a href="{{$urlPPC_goals}}" target="_blank">
                        {!! $goals !!}
                    </a>
                </td>
                <td>
                    {!! $emails !!}
                </td>
                <td>
                    <a href="{{$urlCampConv}}" target="_blank">
                        {!! $campConv !!}
                    </a>
                </td>
                <td>
                    {!! $convPer !!}
                </td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <?php 
            
            $url_params = [
                'account_id'  => $account_id,
                'rType'       => '0',
                'date1'       => $date1_show,
                'date2'       => $date2_show,
                'archive'     => $archive,
                'time_zone'  => $time_zone,
            ];
            
            $urlVisit = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic' ] ) );
            $urlClicks = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'PPC Traffic', 'traffic' => 'PPC|DISPLAY' ] ) );
            $urlPPC = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'traffic' => 'PPC' ] ) );
            $urlDisplay = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'traffic' => 'DISPLAY' ] ) );
            $urlOrg = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'rType' => '1', 'traffic' => 'ORG' ] ) );
            $urlDirect = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Web Traffic', 'rType' => '1', 'traffic' => 'DIRECT' ] ) );
            $urlCalls = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Call Records', 'rType' => '1', 'traffic' => '' ] ) );
            $urlCallConv = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Call Records', 'rType' => '1', 'traffic' => '' ] ) );
            $urlPPC_goals = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Goal Records', 'rType' => '3', 'traffic' => '' ] ) );
            $urlCampConv = route( 'campaign-reports', array_merge( $url_params, [ 'report' => 'Conversion Records', 'rType' => '2', 'traffic' => '' ] ) );
            ?>
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
                        {!! $acctTotalPPC !!}
                    </a>
                </th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalDisplay !!}
                    </a>
                </th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalOrganic !!}
                    </a>
                </th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalDirect !!}
                    </a>
                </th>
                <th class="text-center">

                    <a href="#" target="_blank">
                        {!! $acctTotalCalls . " | " . $totalUniqueCalls !!}
                    </a>
                </th>
                <th class="text-center">{{ $callConv }}</th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $acctTotalGoals !!}
                    </a>
                </th>
                <th class="text-center">{{ $acctTotalEmails }}</th>
                <th class="text-center">
                    <a href="#" target="_blank">
                        {!! $conv !!}
                    </a>
                </th>
                <th class="text-center">{{ $convPer }}</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>