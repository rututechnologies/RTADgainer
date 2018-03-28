@extends('layouts.app')
@section('title','Accounts List ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Accounts</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong>Accounts</strong></li>
    </ol>
</div>

<div class="container-fluid">
    <!-- account list -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title" style="margin-bottom: 10px;">Accounts List</h3>
            <input id="filter_account" type="text" class="form-control" placeholder="Search...">
        </div>
        <table class="table table-condensed table-hover table-striped table-fixed-head-header">
            <thead>
                <tr>
                    <th style="width: 40%;">Account</th>
                    <th class="text-center" style="width: 10%;">Active</th>
                    <th class="text-center" style="width: 25%;">Campaigns</th>
                    <th class="text-center" style="width: 25%;">View /Edit</th>
                </tr>
            </thead>
        </table>
        <div class="table-overflow">
            <table class="table table-condensed table-hover table-striped table-fixed-head">
                <thead class="table-fixed-head-shadow">
                    <tr>
                        <th style="width: 40%;"></th>
                        <th class="text-center" style="width: 10%;"></th>
                        <th class="text-center" style="width: 25%;"></th>
                        <th class="text-center" style="width: 25%;"></th>
                    </tr>
                </thead>
                <tbody id="account_list">
                    <?php
                    foreach ( $accounts as $account ) {
                        ?>
                        <tr class="account-item">
                            <td class="account-name">{{$account->accountName}}</td>
                            <td class="text-center">
                                {!! ($account->active)?'<i class="fa fa-check text-success"></i>':'<i class="fa fa-close text-danger"></i>' !!}
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-default btn-sm show-account-campaigns" data-account-id="{!! $account->account_id !!}">
                                    View
                                </button>
                                <a href="#" class="btn btn-default btn-sm">
                                    Create
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-default btn-sm">
                                    View
                                </a>
                                <!-- TODO: Edit by level = 1 | (application/views/account/accounts.php|225)--> 
                                <a href="#" class="btn btn-default btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end account list -->

    <!-- campaign list -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title" style="margin-bottom: 10px;">Campaigns List <span id="selectedAccountName"></span></h3>
            <input id="filter_campaign" class="form-control" placeholder="Search...">
        </div>
        <div class="table-responsive" style="min-height: 250px;">
            <table class="table table-condensed table-hover table-striped">
                <thead>
                    <tr>
                        <th>Campaign</th>
                        <th>Budget</th>
                        <th>Tracking </th>
                        <th>Corr. Time</th>
                        <th>Def. Number</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">PPC</th>
                        <th class="text-center">Record Calls</th>
                        <th class="text-center">Active</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <!--data reference : application/controllers/Account|2453-->
                <tbody id="campaign_list">

                </tbody>
            </table>
        </div>
    </div>
    <!-- end campaign list -->

</div>

@endsection

@section('scripts')

<script>
    (function($){
        $(function( ){

            // get campaign list
            var filterCampaignInput = $('#filter_campaign');
            var campaignList = $('#campaign_list');
            $('.show-account-campaigns').click(function(){
                var accountID = $(this).data('account-id');
                if (!accountID) {
                    return false;
                }
                // remove filter
                filterCampaignInput.val('');
                // send request
                var url = '/api/campaign-rows/' + accountID;
                campaignList.html('');
                $.get(url).done(function(res){
                    if (res) {
                        campaignList.html(res);
                        // animate
                        $('html, body').animate({ scrollTop: campaignList.offset().top }, 600);
                    }
                }).fail(function(err){
                    console.error(err);
                });
            });
            // end - get campaign list

        });
    }(jQuery));
</script>

@endsection