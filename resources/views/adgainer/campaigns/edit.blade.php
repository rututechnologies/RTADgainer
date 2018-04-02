@extends('layouts.app')
@section('title','Edit Campaign ')

@section('style')

<style>
    table.table-form, table.table-form table{
        table-layout: fixed;
        width: 100%;
    }
    table.table-form >tbody td{
        padding: 5px 10px;
        width: 100%;
        vertical-align: top;
    }
    table.table-form td{
        vertical-align: top;
    }
    table.table-form.table-form-single-col >tbody td:first-child{
        width: 40%;
    }
    table.table-form td{
        vertical-align: top;
    }
    .checkbox-inline{
        padding-left: 0 !important;
    }
</style>

@endsection

@section('content')
<?php
$disable = "";
if ( $level == 3 ) {
    $disable = "disabled";
}
?>
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Edit Campaign - {{$accountData->accountName}} - {{$campaignDetails->campaign_name}}</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Edit Campaign</strong></li>
    </ol>
</div>

<div class="container-fluid">
    
    @if (session('success_msg'))
    <div class="alert alert-success">
        {{ session('success_msg') }}
    </div>
    @endif
    
    @if (session('error_msg'))
    <div class="alert alert-danger">
        {{ session('error_msg') }}
    </div>
    @endif

    <div class="panel">

        <ul class="nav nav-tabs" id="navtab">

            <li role="presentation" class="active">
                <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab" aria-expanded="true">General Settings</a>
            </li>
            <li>
                <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">Conversions</a>
            </li>
            <li>
                <a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Call Tracking</a>
            </li>
            <li>
                <a href="#notification" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Notifications</a>
            </li>
            <li>
                <a href="#filering" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Filtering</a>
            </li>

        </ul>
        <div class="panel-body" style="padding-left: 0;padding-right: 0;">
            <form action='{{url('app/campaign/submit-edit')}}' method='post'>
                {{ csrf_field() }}
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="billing">
                        @include('adgainer.campaigns.edit.general-settings', ['accountData' => $accountData, 'level' => $level, 'disabled' => $disable])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="shipping">
                        @include('adgainer.campaigns.edit.conversions', ['accountData' => $accountData, 'disabled' => $disable ])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        @include('adgainer.campaigns.edit.call-tracking', ['accountData' => $accountData, 'disabled' => $disable ])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notification">
                        @include('adgainer.campaigns.edit.notifications', ['accountData' => $accountData, 'disabled' => $disable ])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="filering">
                        @include('adgainer.campaigns.edit.filtering', ['accountData' => $accountData, 'disabled' => $disable ])
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script>
    (function($){
        $(function( ){

            $('#language').val('<?php echo $campaignDetails->language; ?>');
            $('#campaign_currency').val('<?php echo $campaignDetails->campaign_currency; ?>');
            $('#show_number').val('<?php echo $campaignDetails->show_number; ?>');
            $('#phone_format').val('<?php echo $campaignDetails->phone_format; ?>');
            $('#default_phone_format').val('<?php echo $campaignDetails->default_phone_format; ?>');
            $('#tracking_campaign_type').val('<?php echo $campaignDetails->tracking_campaign_type; ?>');
            $('#country_tracking').val('<?php echo $campaignDetails->country_tracking; ?>');
            $('#tracking_type').val('<?php echo $campaignDetails->tracking_type; ?>');
            $('#timeZone').val('<?php echo $campaignDetails->timeZone; ?>');
            $('#number_serve_active').val('<?php echo $campaignDetails->number_serve_active; ?>');
            $('#correlation_time').val('<?php echo $campaignDetails->correlation_time; ?>');
            $('#single_to_many_numbers').val('<?php echo $campaignDetails->single_to_many_numbers; ?>');
            $('#post_back_type').val('<?php echo $campaignDetails->post_back_type; ?>');

<?php
if ( $campaignDetails->multi_code == 1 ) {
    $camp_type = "multi_code";
} elseif ( $campaignDetails->source_code == 1 ) {
    $camp_type = "source_code";
} else {
    $camp_type = "tracking_code";
}
?>
            $('#camp_type').val('<?php echo $camp_type; ?>');


        });
    }(jQuery));

    $(function(){

        $('#continue1').click(function(e){
            if (validate()) {
                $('#navtab a[href="#shipping"]').tab('show');
            }
            e.preventDefault();
        });

        $('#continue2').click(function(e){
            e.preventDefault();
            $('#navtab a[href="#review"]').tab('show');
        });
        $('#continue3').click(function(e){
            e.preventDefault();
            $('#navtab a[href="#notification"]').tab('show');
        });
        $('#continue4').click(function(e){

            e.preventDefault();
            $('#navtab a[href="#filering"]').tab('show');
        });

        $('#back4').click(function(e){
            e.preventDefault();
            $('#navtab a[href="#notification"]').tab('show');
        });

        $('#back3').click(function(e){
            e.preventDefault();
            $('#navtab a[href="#review"]').tab('show');
        });
        $('#back2').click(function(e){
            e.preventDefault();
            $('#navtab a[href="#shipping"]').tab('show');
        });

        $('#back1').click(function(e){

            e.preventDefault();
            $('#navtab a[href="#billing"]').tab('show');
        });

        $('#camp_type').change(function(){
            if ($(this).val() === 'multi_code') {
                $('#multi_tracking_row').show();
            } else {
                $('#multi_tracking_row').hide();
            }
        });

        $('a[data-toggle="tab"]').on('click', function(e){
            e.preventDefault();
            return validate();
        });
    });

    function confirmSubmit()
    {
        var agree = confirm("Are you sure these settings are accurate?");
        if (agree) {
            return validate();
        } else
            return false;
    }


    function validate(){
        var user = document.getElementById("campaign_name").value;
        var exuser = /[a-zA-Z|0-9]{1,25}$/;
        if (user.length == 0)
        {
            alert("Please fill in all required values. campaign_name");
            $('#navtab a[href="#billing"]').tab('show');
            return false;

        } else if (exuser.test(user) == false)
        {
            alert("Invalid campaign name");
            $('#navtab a[href="#billing"]').tab('show');
            return false;
        }
        return true;
    }

</script>
@endsection