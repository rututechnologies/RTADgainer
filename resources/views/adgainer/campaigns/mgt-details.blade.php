@extends('layouts.app')
@section('title','Campaign Detail ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Campaign Management - {{$accountData->accountName}}</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Campaign Details</strong></li>
    </ol>
</div>

<div class="container-fluid">

    @if (session('success_msg'))
    <div class="alert alert-success">
        {{ session('success_msg') }}
    </div>
    @endif

    <div class="buttons clearfix" style="margin-bottom: 20px;">
        <a href="{{url('app/campaign/createCampaign', ['account_id' => $accountData->account_id])}}" class="btn btn-primary">
            Create New Campaign
        </a>&nbsp;&nbsp;
        <a href="{{url('app/campaign/myCampainsMgt', ['account_id' => $accountData->account_id])}}" class="btn btn-primary">
            View All Campaigns
        </a>
        <div class="pull-right">
            <?php
            if ( ((!stristr( $campaign->tracking_type, "P" ) && $campaign->tracking_type != "A") && $level == 3) || $level != 3 ) {
                ?>
                <a href="{{url('app/campaign/edit', ['campaign_id' => $campaign->campaign_id , 'account_id' => $accountData->account_id])}}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> &nbsp;&nbsp;
                <?php
            }
            if ( $level != 3 ) {
                ?>
                <a href="{{url('app/campaign/delete', ['campaign_id' => $campaign->campaign_id , 'account_id' => $accountData->account_id])}}" class="btn btn-default"><i class="fa fa-trash"></i> Edit</a> &nbsp;&nbsp;
                <?php
            }
            ?>

        </div>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3>{{$campaign->campaign_name}}</h3>
            <?php
            $unassignedPhoneNumbers = $campaignController->getUnassignedPhoneNumbers( $accountData->account_id );
            if ( $campaign->multi_code == 1 ) {
                echo "<i>Multi-Tracking Campaign</i>";
                if ( $level != 3 ) {
                    $MULTI_ARR = $campaignController->getMultiTrackingNumberSets( $campaign->account_id, $campaign->campaign_id, $campaign->multi_phone );
                    $multiPhoneAssigned = $campaignController->countMultiPhoneAssigned( $campaign->account_id, $campaign->campaign_id );
                    if ( ((!stristr( $campaign->tracking_type, "P" ) && $campaign->tracking_type != "A") && $level == 3) || $level != 3 ) {
                        echo "<br/><a href='" . url( 'app/campaign/edit', [ 'campaign_id' => $campaign->campaign_id ] ) . "'>Edit Campaign </a> <br/>";
                    }
                    echo "<br/>Multi-Tracking numbers assigned ($multiPhoneAssigned) <br/> Max. Possible Tracked Sessions ( " . $MULTI_ARR[ 'MIN' ] . " ) ";
                    echo "<br/>";
                    // TODO: multi_add
//                    echo $this->session->flashdata( 'multi_add' );
                    echo "<br/> <h4>Phone Numbers</h4> <a href='" . url( 'app/campaign/addMultiPhoneNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >Add</a> ";
                    echo "<br> <a href='" . url( 'app/campaign/viewCampaignMulti?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >View Applied</a> <br/>";
                }
            } else {
                if ( $campaign->source_code == 1 ) {
                    echo "<i> Source Tracking Campaign</i>";
                    $serveNumbers = $campaignController->getCampaignSourcePhoneNumbers( $campaign->campaign_id );
                    $serveNumbersCount = $serveNumbers->count();
                    $phoneNumbers = $campaignController->getAllCampaignSourcePhoneNumbers( $campaign->campaign_id );
                    $phoneNumbersCount = $phoneNumbers->count();
                    if ( ((!stristr( $campaign->tracking_type, "P" ) && $campaign->tracking_type != "A") && $level == 3) || $level != 3 ) {
                        echo "<br/> <a href='" . url( 'app/campaign/edit?campaign_id=' . $campaign->campaign_id . '&account_id=' . $accountData->account_id ) . "'>Edit Campaign</a> ";
                    }
                    echo "<br/><br/> <h4>Phone Numbers</h4> <a href='" . url( 'app/campaign/addCampaignSourceNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >Add</a> ";
                    echo "<br> <a href='" . url( 'app/campaign/campaignSourcePhoneNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' style='color:#999'>Serving (" . $serveNumbersCount . ") | Total (" . $phoneNumbersCount . ")</a> ";
                    if ( $level == 1 ) {
                        echo " <br/><br/> <a href='" . url( 'app/twilio/searchSourceNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >Search Phone Numbers</a> ";
                    }
                } else {
                    $serveNumbers = $campaignController->getCampaignPhoneNumbers( $campaign->campaign_id );
                    $serveNumbersCount = $serveNumbers->count();
                    $phoneNumbers = $campaignController->getAllCampaignPhoneNumbers( $campaign->campaign_id );
                    $phoneNumbersCount = $phoneNumbers->count();
                    echo " <br/> <b>Phone Numbers</b> ";
                    echo "<br> <a href='" . url( 'app/campaign/addCampaignNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >Add</a> ";
                    echo "<br> <a href='" . url( 'app/campaign/campaignPhoneNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' style='color:#999'>Serving (" . $serveNumbersCount . ") | Total (" . $phoneNumbersCount . ")</a> ";
                    echo "<br> <a href='" . url( 'app/campaign/viewunassignednumbers?account_id=' . $campaign->account_id ) . "' style='color:#999'>Available (" . $unassignedPhoneNumbers->count() . ")</a> <br/> ";
                    if ( $level == 1 ) {
                        echo " <br/><a href='" . url( 'twilio/searchNumbers?campaign_id=' . $campaign->campaign_id . '&account_id=' . $campaign->account_id ) . "' >Search Phone Numbers</a> ";
                    }
                }
            }
            echo '<br/><br/>';
            $eChecked = "";
            if ( $campaign->email_code == 1 ) {
                $eChecked = "checked";
            }
            if ( $accountData->status == "FULL" ) {
                echo '<div class="checkbox"><label><input type="checkbox" class="tagMgr"  value="1" ' . $eChecked . ' rel="' . $campaign->campaign_id . '" /> EMAIL TRACKING </label></div>';
            } else {
                echo '<p>Not for use in Trial Accounts</p>';
            }
            ?>
        </div>
    </div>

    <div class="panel" style="margin-top: 20px;">
        <div class="panel-heading">
            <h4 class="panel-title">CODES</h4>
        </div>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tabs-5" role="tab" data-toggle="tab">TAGS Manager</a></li>
            <li role="presentation"><a href="#tabs-2" role="tab" data-toggle="tab">Email Code</a></li>
            <li role="presentation"><a href="#tabs-3" role="tab" data-toggle="tab">PPC URL</a></li>
            <li role="presentation"><a href="#tabs-4" role="tab" data-toggle="tab">DISPLAY URL</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="tabs-2">
                <textarea cols="50" rows="10" class="form-control">
                    <?php
                    if ( $accountData->status == "FULL" ) {
                        printf( '<script type="text/javascript" src="%s/incomingdata/email_tracking_js_code/?formId=&class=&campaignId=%s"></script>', url( '/' ), $campaign->campaign_id );
                    } else {
                        echo "ONLY FOR FULL LEVEL ACCOUNTS";
                    }
                    ?>
                </textarea>
            </div>
            <div role="tabpanel" class="tab-pane" id="tabs-3">
                <div class="row">
                    <div class="col-lg-6 col-md-8">

                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4"></label>
                                <div class="col-md-8"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">URL :</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_URL_{{$campaign->campaign_id}}_P' value='http://' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Source :</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_SOURCE_{{$campaign->campaign_id}}_P'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Campaign:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_SOURCE_{{$campaign->campaign_id}}_P' value='{{$campaign->campaign_name}}' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Medium:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_MEDIUM_{{$campaign->campaign_id}}_P' value='cpc' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Content:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_CONTENT_{{$campaign->campaign_id}}_P' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 1 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM1N_{{$campaign->campaign_id}}_P' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM1V_{{$campaign->campaign_id}}_P' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 2 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM2N_{{$campaign->campaign_id}}_P' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM2V_{{$campaign->campaign_id}}_P' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 3 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM3N_{{$campaign->campaign_id}}_P' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM3V_{{$campaign->campaign_id}}_P' /> 
                                </div>
                            </div>
                            <?php
                            if ( $campaign->country_tracking == "ch_keyword" ) {
                                $ktype = "ch_keyword";
                            }
                            if ( $campaign->country_tracking == "k_keyword" ) {
                                $ktype = "k_keyword";
                            }
                            if ( $campaign->country_tracking == "j_keyword" ) {
                                $ktype = "j_keyword";
                            }
                            if ( $campaign->country_tracking == "keyword" or $campaign->country_tracking == '' ) {
                                $ktype = "keyword";
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-md-4">YAHOO ?</label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label><input type='checkbox' id='yahoo_P' /> YES</label>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class='genURL btn btn-primary btn-lg' id='generateURL_{{$campaign->campaign_id}}' rel='_P' ktype='{{$ktype}}'>Generate</button>
                            </p>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class='form-control ppc_result' rows="8" id='PPC_RESULT_{{$campaign->campaign_id}}_P' onclick="this.focus();this.select()"></textarea>
                                </div>
                            </div>
                            <div id='QRCODE_{{$campaign->campaign_id}}_P'></div>
                        </div>

                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tabs-4">
                <div class="row">
                    <div class="col-lg-6 col-md-8">

                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4"></label>
                                <div class="col-md-8"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">URL :</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_URL_{{$campaign->campaign_id}}_D' value='http://' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Source :</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_SOURCE_{{$campaign->campaign_id}}_D'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Campaign:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_SOURCE_{{$campaign->campaign_id}}_D' value='{{$campaign->campaign_name}}' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Medium:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_MEDIUM_{{$campaign->campaign_id}}_D' value='PPC' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Content:</label>
                                <div class="col-md-8">
                                    <input type='text' class="form-control" id='PPC_CONTENT_{{$campaign->campaign_id}}_D' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 1 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM1N_{{$campaign->campaign_id}}_D' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM1V_{{$campaign->campaign_id}}_D' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 2 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM2N_{{$campaign->campaign_id}}_D' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM2V_{{$campaign->campaign_id}}_D' /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4">Custom 3 :</label>
                                <div class="col-md-8">
                                    <label>Name:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM3N_{{$campaign->campaign_id}}_D' /> 
                                    <label>Value:</label>
                                    <input type='text' class="form-control" id='PPC_CUSTOM3V_{{$campaign->campaign_id}}_D' /> 
                                </div>
                            </div>
                            <?php
                            if ( $campaign->country_tracking == "ch_keyword" ) {
                                $ktype = "ch_keyword";
                            }
                            if ( $campaign->country_tracking == "k_keyword" ) {
                                $ktype = "k_keyword";
                            }
                            if ( $campaign->country_tracking == "j_keyword" ) {
                                $ktype = "j_keyword";
                            }
                            if ( $campaign->country_tracking == "keyword" or $campaign->country_tracking == '' ) {
                                $ktype = "keyword";
                            }
                            ?>
                            <div class="form-group">
                                <label class="col-md-4">YAHOO ?</label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label><input type='checkbox' id='yahoo_D' /> YES</label>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class='genURL btn btn-primary btn-lg' id='generateURL_{{$campaign->campaign_id}}' rel='_D' ktype='{{$ktype}}'>Generate</button>
                            </p>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class='form-control ppc_result' rows="8" id='PPC_RESULT_{{$campaign->campaign_id}}_D' onclick="this.focus();this.select()"></textarea>
                                </div>
                            </div>
                            <div id='QRCODE_{{$campaign->campaign_id}}_D'></div>
                        </div>

                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane active" id="tabs-5">
                <?php
                echo '<div>';
                echo '<span id="loadingCODE"></span><textarea class="form-control" rows="10"><!-- 
INSTALL JQUERY IF NEEDED 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

-->

<script type="text/javascript" src="' . url( '/' ) . '/tracking/getURLvars.js"></script> 
<script>
	document.write(unescape(\'<script type="text/javascript" src="' . url( '/' ) . '/incomingdata/getCode/?campaign_id=' . $campaign->campaign_id . '&\'+ vars +\'&referrer=\'+ referrer +\'"></scr\'+\'ipt>\')); 
</script>
<div id="tagManager_DIV" style="display:none"></div></textarea></div>'
                ?>
            </div>
        </div>
    </div>


</div>

@endsection

@section('scripts')

@endsection