@extends('layouts.app')
@section('title','Campaign Tool ')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Campaign
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Campaign</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<div id="da-content-area" style="margin-left:30px">         
                    <h5>Default Created Reports : </h5>
                    <br>
                    <div class="rowValue" style="width:500px;height:35px;">
                        From:
                        <input type="date" id="date1" style="width:120px" value="03/01/2018" class="hasDatepicker"> To:
                        <input type="date" id="date2" style="width:120px" value="03/10/2018" class="hasDatepicker">
                        <button id="setTableDate">Update</button>
                        <input type="hidden" id="account_id" value="24c9e15e52afc47c225b757e7bee1f9d">
                        <input type="hidden" id="campaign_id" value="">
                        <input type="hidden" id="rType" value="1">
                        <input type="hidden" id="dir" value="">
                        <input type="hidden" id="order" value="">
                        <input type="hidden" id="start" value="1">
                        <input type="hidden" id="end" value="200">
                        <input type="hidden" id="report" value="Call Records">
                        <input type="hidden" id="archive" value="0">

                        <!-- ALL PAGE DATA -->
                        <div style="position:absolute;top:60px;left:400px;width:168px;height:200px;border:1px grey solid;padding:5px;">
                            <div class="box_title">
                                <span><b>Page (1) Call Data</b></span></div>
                            <div class="colorBox bgYellow"><b>Unique <span id="u_c_count">(0)</span></b></div>
                            <div class="colorBox bgOrange" id="repeat_calls"><b>Repeat Calls<span id="r_c_count">(0)</span></b>
                            </div>
                            <!--
                            <div class="colorBox " id="single_track">Single Tracking <span id="single_tracking"></span></div>
                            -->
                            <div class="colorBox " id="corr_call"><b>Correlated <span id="corr_calls">(0)</span></b></div>
                            <div class="colorBox " id="missed_call"><b>Missed <span id="missed_calls">(0)</span></b></div>
                            <div class="colorBox " id=""><b>All on Page <span id="page_calls">(0)</span></b></div><br>
                        </div>

                        <!-- ALL CALL DATA -->
                        <div style="position:absolute;top:60px;left:570px;width:550px;height:200px;border:1px grey solid;padding:5px;">
                            <div class="box_title"><span><b>Total Call Data</b></span></div>
                            <div class="colorBox-holder">
                                <div class="colorBox ">Unique
                                    <span id="a_u_count">(0)</span>
                                </div>
                                
                                <div class="colorBox " id="a_corr_call">Correlated
                                    <span id="a_corr_calls">(0)</span>
                                </div>
                                <div class="colorBox " id="a_corr_call">Repeat Calls
                                    <span id="a_corr_calls">(0)</span></div>
                                <div class="colorBox " id="a_corr_call">Missed
                                    <span id="all_calls_">(0)</span></div>
                                <div class="colorBox " id="a_corr_call"><b>All</b>
                                    <span id="all_calls_">(0)</span></div>
                            </div>
                            <div class="colorBox-holder">
                                <div class="colorBox " id="a_corr_call">Repeat Unq. Callers
                                    <span id="">(0)</span></div>
                                <div class="colorBox ">Under 1 Min
                                    <span id="">(0)</span></div>
                                
                                <div class="colorBox " id="a_corr_call">Over 1 Min
                                    <span id="">(0)</span></div>
                                <div class="colorBox " id="a_corr_call">Over 5 Min
                                    <span id="">(0)</span></div>
                            </div>
                            <div class="colorBox-holder">
                                <div class="colorBox " id="a_corr_call">Over 10 Min
                                    <span id="">(0)</span></div>
                                <div class="colorBox " id="a_corr_call">Over 15 Min
                                    <span id="">(0)</span></div>
                                <div class="colorBox " id="a_corr_call">Over 20 Min
                                    <span id="">(0)</span></div>
                                <div class="colorBox " id="a_corr_call">Avg Time
                                    <span id="">(0:00)</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <label>Showing
                        1 - <span id="cur_show">0</span>                    </label>
                    <br><br>
                    Page
                    <!-- 0 -->
                    <div class="clear"></div>
                    <br>
                    <input type="hidden" id="rType" value="1">
                    <input type="hidden" id="report" value="Call Records">
                    <input type="hidden" id="report_id" value="6">
                    <input type="hidden" id="traffic" value="All">
                    <input type="hidden" id="group_by" value="Row">
                    <input type="hidden" id="account_account_id" value="24c9e15e52afc47c225b757e7bee1f9d">
                    <input type="hidden" id="campaign_account_id" value="">
                    <input type="hidden" id="archive" value="0">
                    <input type="hidden" id="time_zone" value="America/Los_Angeles">

                    <button id="gen_report_view" class="send_repeat">CSV</button>
                    <br> <br>
                    <div class="clear"></div>

                    <div class="clear"></div>
<br>
<br>
                    <div class="panel panel-default" style="width: 8201.99px;">
                        <div class="panel-heading">Call Records</div>
                        <table class="table table-bordered">

                            <thead>
                            <tr>
                                <!-- <th>Select</th> -->
                                <th>Row</th>
                                <th>ID</th>
                                <th>time_stamp</th><th>time_of_call</th><th>call_status</th><th>keyword</th><th>searchTerm</th><th>matchtype</th><th>source</th><th>traffic_type</th><th>entry_type</th><th>phone_number</th><th>number_dialed</th><th>caller_phone</th><th>call_recording</th><th>call_rate</th><th>caller_state</th><th>caller_country</th><th>call_duration</th><th>calls_placed</th><th>calls_placed_after_</th><th>clicks</th><th>page_views</th><th>mobile</th><th>time_on_site</th><th>visitor_city_state</th><th>ip</th><th>last_page</th><th>country_tracking</th><th>unique_call_id</th><th>gclid</th><th>inquiry_date</th><th>target_status</th><th>oppfee</th><th>plancharge</th><th>stage</th><th>entrance</th><th>pref</th><th>city</th><th>plan</th><th>oppid</th>                           </tr>
                            </thead>
                            <tbody>
                                                        </tbody>
                        </table>
                    </div>

                    <script>
                        $(function () {
                            $('#u_c_count').html('(0)');
                                       $('#r_c_count').html('(0)');
                                       $('#page_calls').html('(0)');
                                       $('#corr_calls').html('(0)');
                                       //$('#single_tracking').html('(0)');
                                       $('#missed_calls').html('(0)');
                                                               });
                    </script>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    </div></div>

</div>
@endsection
<style>
    .table th, .table td {
        min-width: 200px;
    }

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
        width: 152px;
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
@section('scripts')


@endsection