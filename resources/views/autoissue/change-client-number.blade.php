@extends('layouts.app')
@section('title',' ')

@section('style')
<style>
    ::-webkit-scrollbar-thumb{
        background: rgba(113, 102, 102, 0.83);
        border: none;
    }
    .panel-heading{
        padding-top: 15px;
    }
    .panel-title{
        font-size: 16px;
        font-weight: 600;
    }
    .table-overflow{
        height: 250px;
        overflow-y: auto;
    }
    .table-fixed-head-header{
        width: calc(100% - 7px);
    }
    .table-fixed-head-header > thead > tr > th{
        padding-left: 10px;
    }
    .table .table-fixed-head-shadow{
        visibility: hidden;
    }
    .table .table-fixed-head-shadow tr th{
        height: 0;
        padding-top: 0;
        padding-bottom: 0;
        border: none;
    }
    .table-responsive.table-responsive-fixed-head{
        white-space: normal;
    }
    .table-responsive.table-responsive-fixed-head .table,
    .table-responsive.table-responsive-fixed-head .table-overflow{
        min-width: 700px;
    }
    .table-responsive.table-responsive-fixed-head .table-overflow{
        overflow-x: hidden;
    }
</style>

@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading" style="margin-bottom: 30px;">
    <h1 class="module_heading">
        <span>Change Client Number</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/autoissue')}}">Autoissue</a></li>
        <li class="active"><strong>Change Client Number</strong></li>
    </ol>
</div>

<div class="container-fluid w3-container">

    <div class="row">
        <div class="col-lg-4">
            <!-- account list -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title" style="margin-bottom: 10px;">Accounts List</h3>
                    <input id="filter_account" type="text" class="form-control" placeholder="Search...">
                </div>
                <table class="table table-condensed table-hover table-striped table-fixed-head-header">
                    <thead>
                        <tr>
                            <th style="width: 70%;">Account</th>
                            <th class="text-center" style="width: 30%;">Campaigns</th>
                        </tr>
                    </thead>
                </table>
                <div class="table-overflow">
                    <table class="table table-condensed table-hover table-striped table-fixed-head">
                        <thead class="table-fixed-head-shadow">
                            <tr>
                                <th style="width: 70%;"></th>
                                <th class="text-center" style="width: 30%;"></th>
                            </tr>
                        </thead>
                        <tbody id="account_list">
                            <?php
                            foreach ( $account_list as $account ) {
                                ?>
                                <tr class="account-item">
                                    <td class="account-name">{{$account->accountName}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm show-account-campaigns" data-account-id="{!! $account->account_id !!}">
                                            View
                                        </button>
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
                    <h3 class="panel-title" style="margin-bottom: 10px;">Campaigns List</h3>
                    <input id="filter_campaign" class="form-control" placeholder="Search...">
                </div>
                <table class="table table-condensed table-hover table-striped table-fixed-head-header">
                    <thead>
                        <tr>
                            <th style="width: 50%;">Campaign</th>
                            <th class="text-center" style="width: 50%;">List</th>
                        </tr>
                    </thead>
                </table>
                <div class="table-overflow">
                    <table class="table table-condensed table-hover table-striped table-fixed-head">
                        <thead class="table-fixed-head-shadow">
                            <tr>
                                <th style="width: 50%;"></th>
                                <th class="text-center" style="width: 50%;"></th>
                            </tr>
                        </thead>
                        <tbody id="campaign_list">
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end campaign list -->
        </div>

        <div class="col-lg-8">
            <!-- clients number list -->
            <div class="panel" style="min-height: 150px;">
                <div class="panel-heading">
                    <h3 class="panel-title" style="margin-bottom: 10px;">Clients Number List</h3>
                    <input id="filter_client" class="form-control" placeholder="Search...">
                </div>
                <div class="table-responsive table-responsive-fixed-head">

                    <table class="table table-condensed table-hover table-striped table-fixed-head-header">
                        <thead>
                            <tr>
                                <!-- TODO: with level = 2-->
                                <th style="width: 10%;">クライアントCD</th>
                                <th style="width: 20%;">クライアント名</th>
                                <th style="width: 15%;">前クライアント電話番号</th>
                                <th style="width: 20%;">クライアント電話番号</th>
                                <th style="width: 15%;">計測番号</th>
                                <th style="width: 10%;">状態</th>
                                <th style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="table-overflow">
                        <table class="table table-condensed table-hover table-striped table-fixed-head">
                            <thead class="table-fixed-head-shadow">
                                <tr>
                                    <!-- TODO: with level = 2-->
                                    <th style="width: 10%;"></th>
                                    <th style="width: 20%;"></th>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 20%;"></th>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 10%;"></th>
                                </tr>
                            </thead>
                            <tbody id="client_list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end clients number list -->
        </div>

    </div>

</div>

@endsection

@section('scripts')
<script>
    (function($){
        $(function(){

            // filter account 
            var filterAccountInput = $('#filter_account');
            var accountList = $('#account_list .account-item');
            filterAccountInput.keyup(function(){
                var term = $(this).val().trim().toLowerCase();
                accountList.each(function(){
                    var name = $(this).children('.account-name').text().toLowerCase();
                    if (name.search(term) === -1) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });

            // filter campaign
            var filterCampaignInput = $('#filter_campaign');
            var campaignList = $('#campaign_list');
            filterCampaignInput.keyup(function(){
                var term = $(this).val().trim().toLowerCase();
                var items = campaignList.find('.campaign-item');
                items.each(function(){
                    var name = $(this).children('.campaign-name').text().toLowerCase();
                    if (name.search(term) === -1) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });

            // filter clients
            var filterClientInput = $('#filter_client');
            var clientList = $('#client_list');
            filterClientInput.keyup(function(){
                var term = $(this).val().trim().toLowerCase();
                var items = clientList.find('.client-item');
                items.each(function(){
                    var $client_number = $(this).find('.input-client-number-old').first();
                    var client_number = $client_number.val().toLowerCase();
                    if (client_number.search(term) === -1) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });

            // get campaign list
            $('.show-account-campaigns').click(function(){
                var accountID = $(this).data('account-id');
                if (!accountID) {
                    return false;
                }
                // remove filter
                filterCampaignInput.val('');
                // send request
                var url = '/api/campaigns/' + accountID;
                campaignList.html('');
                $.get(url).done(function(res){
                    if (res) {
                        $(res).each(function(ind, campaign){
                            var html_ = '<tr class="campaign-item">';
                            html_ = html_ + '<td class="campaign-name">' + campaign.campaign_name + '</td>';
                            html_ = html_ + '<td class="text-center small"><a href="#" class="show-client-list" data-campaign-id="' + campaign.campaign_id + '">クライアント番号表示</a></td>';
                            html_ = html_ + '</tr>';
                            campaignList.append(html_);
                        });
                    }
                }).fail(function(err){
                    console.error(err);
                });
            });
            // end - get campaign list

            // get client list
            campaignList.on('click', '.show-client-list', function(ev){
                ev.preventDefault();
                var campaignID = $(this).data('campaign-id');
                if (!campaignID) {
                    return false;
                }

                // send request
                clientList.html('');
                var url = '/api/intec-clients/' + campaignID;
//                url = '/api/intec-clients/' + 'de63817c7e403c9e9235942cdcae60d2';
                $.get(url).done(function(res){
                    if (res) {
                        $(res).each(function(ind, client){
                            var html_ = getClientItemHTML(client, campaignID);
                            clientList.append(html_);
                        });
                    }
                }).fail(function(err){
                    console.error(err);
                    alert("クライアント番号が取得できませんでした");
                });

                return false;
            });
            // end get client list

            // update phone number
            $('#client_list').on('click', '.update-client-number-button', function(){
                // get client id and new number
                var item = $(this).closest('.client-item');
                var client_id = item.find('input.input-client-id').val();
                var client_number = item.find('input.input-client-number').val();
                var campaign_id = item.find('input.input-campaign-id').val();

                if (!client_id) {
                    alert("id が見つかりません。\nシステム管理者にご連絡ください。");
                    return;
                }
                if (!client_number) {
                    alert("client_number が入力されていません。");
                    return;
                }

                var url = '/api/update-client-number';
                var params = {
                    id: client_id,
                    client_number: client_number,
                }
                $.post(url, params).done(function(res){
                    // parsing new client data
                    if (res) {
                        var clientHTML = getClientItemHTML(res, campaign_id);
                        item.replaceWith(clientHTML);
                    }
                    alert("更新成功！");
                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                    alert("更新失敗！. " + err.responseText);
                });


            });
            // end update phone number

            function getClientItemHTML(client, campaign_id){
                var html_ = '<tr class="client-item">';
                // TODO: with level = 2
                html_ = html_ + '<td>' + client.client_cd + '</td>';
                html_ = html_ + '<td>' + client.client_name + '</td>';
                html_ = html_ + '<td>' + client.last_time_number + '</td>';
                html_ = html_ + '<td><input type="text" class="form-control input-client-number" value="' + client.client_number + '" /></td>';
                html_ = html_ + '<td>' + client.cnt_number + '</td>';
                html_ = html_ + '<td>' + client.inuse + '</td>';
                html_ = html_ + '<td><button class="btn btn-sm btn-primary update-client-number-button">変更</button>';
                // hidden input
                html_ = html_ + '<input type="hidden" class="input-client-number-old" value="' + client.client_number + '" />';
                html_ = html_ + '<input type="hidden" class="input-campaign-id" value="' + campaign_id + '" />';
                html_ = html_ + '<input type="hidden" class="input-client-id" value="' + client.id + '" />';
                html_ = html_ + '</td>';
                html_ = html_ + '</tr>';
                return html_;
            }

        });
    }
    (jQuery));
</script>
@endsection
