@extends('layouts.app')
@section('title','Account Details ')

@section('style')
<style>
/*    .table th, .table td {
        min-width: 200px;
    }*/

    .mainNav {
        height: 160px !important;
    }

    .box\_title {
        clear: both;
        height: 20px;
        width: auto;
        border-bottom: 1px lightGrey solid;
    }

    .colorBox-holder {
        float: left;
        margin-right: 20px;
    }

    .colorBox {
        width: 135px;
        height: auto;
        float: left;
        clear: both;
        margin: 3px;
        padding: 3px;
        text-align: left;
        border-radius: 5px;
        border-bottom: 1px lightGrey solid;

    }

    .colorBox span {
        float: right;
        text-align: right;
    }

    #repeat\_calls {
        color: black;
        cursor: pointer;
    }

    #repeat\_calls:hover {
        background: orange !important;
    }

    .bgOrange {
        background: #fbd38a !important;
    }
    .bgYellow {
        background: #FFF288 !important
    }

    .bgMatched {
    }

    #single\_track {
        color: green;
        cursor: pointer;
    }

    #single\_track:hover {
        background: #4cb9dc !important;
    }

    .bgCorr, .bgCorr td {
    }

    #corr\_call {
        font-weight: bold !important;
        color: blue;
        cursor: pointer;
    }

    #corr\_call:hover {
        background: lightGreen !important;
    }

    .opaque {
        opacity: .5;
    }

    .left-id-data {
        float: right;
    }
</style>

@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        Reports
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong>Reports</strong></li>
    </ol>
</div>
<!-- Main Content Wrapper -->
<div class="container-fluid">
    <!-- Content Area -->
    <div id="da-content-area">

        <div class="panel">
            <div class="panel-body">

                <?php
                $TZ = $accountData->account_time_zone;
                $all_data = $accountData;
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <h4>
                            <?php
                            //get time zone
                            if ( isset( $campaignData->campaign_name ) ) {
                                echo $campaignData->campaign_name;
                                $TZ = $campaignData->timeZone;
                                $all_data = $campaignData;
                            }
                            ?>
                        </h4>

                        <h4><?php echo $reportType . " Created Reports : " . $report; ?> (<?php echo count( $records ); ?>) Total</h4>
                        <form method="GET">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>From :</label>
                                        <input type="text" name="date1" class="form-control" data-provide="datepicker" value="{!! $date1 !!}" placeholder="mm/dd/yyyy" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>To :</label>
                                        <input type="text" name="date2" class="form-control" data-provide="datepicker" value="{!! $date2 !!}" placeholder="mm/dd/yyyy" required>
                                    </div>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">Update</button>

                            <input type="hidden" name="account_id" value="{{ $account_id_acct }}"/>
                            <input type="hidden" name="campaign_id" value="{{ $campaign_id_acct }}"/>
                            <input type="hidden" name="rType" value="{{ $rType }}"/>
                            <input type="hidden" name="dir" value="{{ $dir }}"/>
                            <input type="hidden" name="order" value="{{ $order }}"/>
                            <input type="hidden" name="start" value="{{ $start }}"/>
                            <input type="hidden" name="end" value="{{ $end }}"/>
                            <input type="hidden" name="report" value="{{ $report }}"/>
                            <input type="hidden" name="archive" value="{{ $archive }}" />
                        </form>
                        <br><br>
                        <p>
                            <label>Showing
                                @if( count( $records ) >= $end )
                                {!! $start . " - <span id='cur_show'>" . $end . "</span>" !!}
                                @else
                                {!! $start . " - <span id='cur_show'>" . count( $records ) . "</span>" !!}
                                @endif
                            </label>
                        </p>

                        Page
                        <?php
                        $div = (count( $records ) / 200);
                        $pCount = (($start - 1) / 200);
                        echo "<!-- $pCount -->";
                        $font = "";

                        $single_tracking_calls = 0;
                        $corr_calls = 0;

                        if ( $start > 1000 ) {
                            echo " &nbsp;&nbsp; <a style='$font' href='" . url( "app/account/get-table?report=$report&account_id=$account_id_acct&rType=$rType&start=" . ($start - 1000) . "&end=" . ($start - 800) . "&order=$order&dir=$dir&date1=$date1&date2=$date2&campaign_id=$campaign_id_acct&time_zone=$actual_time_zone" ) . "'> << </a> &nbsp;";
                        }

                        if ( $start > 200 ) {
                            echo " &nbsp;&nbsp; <a style='$font' href='" . url( "app/account/get-table?report=$report&account_id=$account_id_acct&rType=$rType&start=" . ($start - 200) . "&end=" . (($start) - 1) . "&order=$order&dir=$dir&date1=$date1&date2=$date2&campaign_id=$campaign_id_acct&time_zone=$actual_time_zone" ) . "'> < </a> &nbsp;";
                        }

                        $count = 1;

                        for ( $x = $start; $x <= (count( $records ) + 200); $x += 200 ) {
                            if ( (($x - 1) / 200) == 0 ) {
                                $pCount++;
                                continue;
                            }

                            $font = "";
                            if ( ((($pCount * 200) - 200) + 1) == $start ) {
                                $font = "font-weight:bold;text-decoration:underline;";
                            }

                            echo " &nbsp; <a style='$font' href='" . url( "app/account/get-table?report=$report&account_id=$account_id_acct&rType=$rType&start=" . ((($pCount * 200) - 200) + 1) . "&end=" . ($pCount * 200) . "&order=$order&dir=$dir&date1=$date1&date2=$date2&campaign_id=$campaign_id_acct&time_zone=$actual_time_zone'>" . (($x - 1) / 200) ) . "</a> &nbsp;";

                            $pCount++;
                            $count++;
                            if ( $count > 5 ) {
                                break;
                            }
                        }

                        $next = ((($pCount * 200) - 200) + 1);
                        if ( $next < count( $records ) ) {
                            echo " &nbsp;&nbsp; <a href='" . url( "app/account/get-table?report=$report&account_id=$account_id_acct&rType=$rType&start=$next&end=" . (($pCount * 200)) . "&order=$order&dir=$dir&date1=$date1&date2=$date2&campaign_id=$campaign_id_acct&time_zone=$actual_time_zone" ) . "'> > </a> &nbsp;";
                        }

                        if ( (($pCount * 200) + 801) < count( $records ) ) {
                            echo " &nbsp;&nbsp; <a href='" . url( "app/account/get-table?report=$report&account_id=$account_id_acct&rType=$rType&start=" . (($pCount * 200) + 801) . "&end=" . (($pCount * 200) + 1000) . "&order=$order&dir=$dir&date1=$date1&date2=$date2&campaign_id=$campaign_id_acct&time_zone=$actual_time_zone" ) . "'> >> </a> &nbsp;";
                        }
                        ?>

                    </div>
                    <div class="col-md-8">
                        <!-- ALL PAGE DATA -->
                        <div class="row">
                            <div class="col-sm-5 col-lg-3">
                                <h4>Page (<?php echo((($start - 1) / 200) + 1); ?>) Call Data</h4>
                                <ul class="list-group">
                                    <li class="list-group-item bgYellow" style="font-weight: bold;">
                                        Unique <span class="badge bg-primary" id="u_c_count"></span>
                                    </li>
                                    <li class="list-group-item bgOrange"  id="repeat_calls" style="font-weight: bold;">
                                        Repeat Calls <span class="badge bg-primary" id="r_c_count"></span>
                                    </li>
                                    <li class="list-group-item" id="corr_call" style="font-weight: bold;">
                                        Correlated <span class="badge bg-primary" id="corr_calls"></span>
                                    </li>
                                    <li class="list-group-item" id="missed_call" style="font-weight: bold;">
                                        Missed <span class="badge bg-primary" id="missed_calls"></span>
                                    </li>
                                    <li class="list-group-item" style="font-weight: bold;">
                                        All on Page <span class="badge bg-primary" id="page_calls"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-lg-9">
                                <h4>Total Call Data</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="list-group list-group-sm">
                                            <li class="list-group-item" >
                                                Unique <span class="badge bg-primary" id="a_u_count">{{ $all_total_calls->all_unique_callers }}</span>
                                            </li>
                                            <li class="list-group-item" >
                                                Correlated <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->all_corr_calls }}</span>
                                            </li>
                                            <li class="list-group-item" >
                                                Repeat Calls <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->repeat_calls }}</span>
                                            </li>
                                            <li class="list-group-item">
                                                Missed <span class="badge bg-primary" id="all_calls_">{{ $all_total_calls->missed_calls }}</span>
                                            </li>
                                            <li class="list-group-item" >
                                                All <span class="badge bg-primary" id="all_calls_">{{ $all_total_calls->all_calls }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <li class="list-group-item" >
                                            Repeat Unq. Callers <span class="badge bg-primary" id="a_u_count">{{ $all_total_calls->all_repeat_callers }}</span>
                                        </li>
                                        <li class="list-group-item" >
                                            Under 1 Min <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->under_one }}</span>
                                        </li>
                                        <li class="list-group-item" >
                                            Over 1 Min <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->over_one }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            Over 5 Min <span class="badge bg-primary" id="all_calls_">{{ $all_total_calls->missed_calls }}</span>
                                        </li>
                                    </div>
                                    <div class="col-sm-4">
                                        <li class="list-group-item" >
                                            Over 10 Min <span class="badge bg-primary" id="a_u_count">{{ $all_total_calls->over_ten }}</span>
                                        </li>
                                        <li class="list-group-item" >
                                            Under 15 Min <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->over_fifteen }}</span>
                                        </li>
                                        <li class="list-group-item" >
                                            Over 20 Min <span class="badge bg-primary" id="a_corr_calls">{{ $all_total_calls->over_twenty }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            Avg Time <span class="badge bg-primary" id="all_calls_">{{ $all_total_calls->avg_time }}</span>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--.panel-->.

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{$report}}</h3>
            </div>
            <div class="table-responsive" style="min-height: 200px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Row</th>
                            <th>ID</th>
                            <?php
                            $campaign_goal_pgs = array();
                            if ( isset( $reportFields[ 'goal_pages' ] ) ) {
                                unset( $reportFields[ 'goal_pages' ] );
                            }
                            foreach ( $reportFields as $key => $fieldName ) {
                                // TODO: goal page memo
//                                if ( isset( $campaignData->campaign_id ) && stristr( $fieldName, 'goal' ) ) {
//                                    $fieldName = $tableReportController->getGoalPageMemo( $campaignData->campaign_id, $fieldName, $campaign_goal_pgs );
//                                }
                                echo "<th>" . substr( $fieldName, 0, 19 ) . "</th>";
                            }
                            //". str_replace("_"," ",ucfirst($fieldName)) ."
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ( count( $reportFields ) == 1 ) {
                            echo "No fields have been chosen";
                        } else {
                            //print_r($reportFields);

                            $count = 1;
                            $callers = array();
                            $all_unique_calls = array();
                            $all_calls = 0;
                            $page_calls = 0;
                            $all_corr_calls = 0;
                            $all_single_tracking_calls = 0;
                            $missed = 0;

                            foreach ( $records as $row ) {
                                //ALL DATA
                                ////////
                                // PAGE DATA
                                ///////////

                                if ( $count >= $start && $count <= $end ) {
                                    if ( $row->call_duration == 0 && $row->caller_phone != "" ) {
                                        $missed++;
                                    }

                                    $sngl = "";
                                    $matched_class = "";
                                    if ( $row->matched_called != "" ) {
                                        $sngl = "<li>SINGLE</li>";
                                        $matched_class = "bgMatched";
                                        $single_tracking_calls += 1;
                                    }

                                    $corr = "";
                                    $corr_class = "";
//                                    if ( $row->caller_phone != "" && strtotime( $row->time_of_call ) > 0 && $this->Report_model->getTimeDifferenceCallClick( $row->time_of_call, $row->time_stamp, $row->timeZone, $row->correlation_time ) == TRUE ) {
//                                        $corr = "<li>CORR</li>";
//                                        $corr_class = "bgCorr";
//                                        $corr_calls += 1;
//                                    }

                                    echo "<tr id='tr_" . $count . "' class='$matched_class $corr_class' data-id='" . $row->rowID . "'>";

                                    $rowColor = "";
                                    if ( isset( $row->caller_phone ) && $row->caller_phone != "" ) {
                                        $rowColor = "bgYellow";
                                        $callers[ $count ] = $row->phone_number . $row->caller_phone;
                                    }

                                    foreach ( $reportFields as $key => $fieldData ) {

                                        // if(!isset($row->$fieldData)) continue;

                                        if ( $key == 0 ) {
                                            //echo "<td class=' '><input type='checkbox' class='select_row' value='".$row->rowID."'></td>";
                                            echo "<td class='$rowColor' id='td_id_" . $count . "'>" . ($count) . " <div class='left-id-data'><ul>$sngl $corr</ul></div></td>";
                                            echo "<td class='$rowColor'>" . $row->rowID . "</td>";
                                        }

                                        $column = property_exists( $row, $fieldData ) ? $row->$fieldData : NULL;
                                        $value = $tableReportController->reportFieldTableValue( $fieldData, $column, $row->campaign_id, $row, $all_data, $TZ );
//                                        if ( $fieldData === 'keyword' ) {
//                                            $value = preg_replace( '!^\s!', '+', $value );
//                                        }
                                        $bgClass = $rowColor;
                                        if ( stristr( $fieldData, "goal" ) ) {
                                            if ( $value != "" ) {
                                                $bgClass = "bgGreen";
                                            }
                                        }
                                        echo "<td class=' $bgClass'>" . $value . "</td>";
                                    }
                                    echo "</tr>";
                                }
                                $count++;

                                if ( $count > $end ) {
                                    break;
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>
@endsection

@section('scripts')
<script>
    $(function(){
<?php
krsort( $callers );
array_unique( $callers );
$found = array();
foreach ( $callers as $rowId => $call_info ) {
    if ( in_array( $call_info, $found ) ) {
        $row_id = array_search( $call_info, $found );
        $rowColor = "bgOrange";
        $parent_call = " ( " . $row_id . " )";
        echo "$('#td_id_$rowId').html( $('#td_id_$rowId').html()+'$parent_call' ); $('#tr_$rowId').addClass('rep_call');
                                                ";
        echo "$('#tr_$rowId td').addClass('bgOrange').removeClass('bgYellow');
                                                ";
    } else {
        $found[ $rowId ] = $call_info;
    }
}
echo
"$('#u_c_count').html('(" . count( $found ) . ")');
                                       $('#r_c_count').html('(" . (count( $callers ) - count( $found )) . ")');
                                       $('#page_calls').html('(" . (count( $callers )) . ")');
                                       $('#corr_calls').html('($corr_calls)');
                                       //$('#single_tracking').html('($single_tracking_calls)');
                                       $('#missed_calls').html('($missed)');
                                       ";
?>
    });


    $(function(){
        //$('#reportTable').jScrollPane();
        //$("#reportTable").tablesorter();

        $('#repeat_calls').click(function(){

            $('#gen_report_view').toggleClass('send_repeat');
            $('.rep_call').toggle();
            $(this).toggleClass('opaque');

        });

        $('#single_track').click(function(){

            //$('#gen_report_view').toggleClass('send_repeat');
            $('.bgMatched').toggle();
            $(this).toggleClass('opaque');

        });

        $('#corr_call').click(function(){

            //$('#gen_report_view').toggleClass('send_repeat');
            $('.bgCorr').toggle();
            $(this).toggleClass('opaque');

        });
    });
</script>
@endsection