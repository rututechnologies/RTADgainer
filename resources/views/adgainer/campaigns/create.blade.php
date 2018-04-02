@extends('layouts.app')
@section('title','Create Campaign')

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
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Create Campaign</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Create Campaign</strong></li>
    </ol>
</div>

<div class="container-fluid">

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
            <form action='{{url('app/campaign/submit-create')}}' method='post'>
                {{ csrf_field() }}
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="billing">
                        @include('adgainer.campaigns.form.general-settings', ['accountData' => $accountData, 'level' => $level])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="shipping">
                        @include('adgainer.campaigns.form.conversions', ['accountData' => $accountData])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        @include('adgainer.campaigns.form.call-tracking', ['accountData' => $accountData])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notification">
                        @include('adgainer.campaigns.form.notifications', ['accountData' => $accountData])
                    </div>
                    <div role="tabpanel" class="tab-pane" id="filering">
                        @include('adgainer.campaigns.form.filtering', ['accountData' => $accountData])
                    </div>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection

@section('scripts')
<script>
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