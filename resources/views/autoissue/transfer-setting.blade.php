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
        max-height: 250px;
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
        <span>Transfer Setting</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/autoissue')}}">Autoissue</a></li>
        <li class="active"><strong>Transfer Setting</strong></li>
    </ol>
</div>

<div class="container-fluid w3-container">

    <div class="row">
        <!--left column-->
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label>番号</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="corp" value="050" checked="checked">050</label>
                            <label class="radio-inline"><input type="radio" name="corp" value="0800">0800</label>
                            <label class="radio-inline"><input type="radio" name="corp" value="any">ANY</label>
                        </div>
                    </div>
                    <hr />
                    <div class="form-group">
                        <label>機能</label>
                        <div class="checkbox"><label><input type="checkbox" name="func" value="func1" checked="checked">時間外転送機能</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="func" value="func2">通話録音機能</label></div>
                        <div class="checkbox"><label><input type="checkbox" id="func3" name="func" value="func3">コールキューイング</label></div>
                        <div class="checkbox"><label><input type="checkbox" id="func4" name="func" value="func4">音声ガイダンス機能（IVR）</label></div>
                        <div class="checkbox"><label><input type="checkbox" id="func5" name="func" value="func5">音声合成機能</label></div>
                        <div class="checkbox"><label><input type="checkbox" id="func6" name="func" value="func6">SMS連携機能（Twilio）</label></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end left column-->

        <!--right column-->
        <div class="col-lg-8">
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
            <div id="campaigns_panel" class="panel" style="display: none;">
                <div class="panel-heading">
                    <h3 class="panel-title" style="margin-bottom: 10px;">Campaigns List</h3>
                    <input id="filter_campaign" class="form-control" placeholder="Search...">
                </div>
                <table class="table table-condensed table-hover table-striped table-fixed-head-header">
                    <thead>
                        <tr>
                            <th style="width: 35%;">Campaign</th>
                            <th style="width: 35%;">Def. Number</th>
                            <th class="text-center" style="width: 30%;">List</th>
                        </tr>
                    </thead>
                </table>
                <div class="table-overflow">
                    <table class="table table-condensed table-hover table-striped table-fixed-head">
                        <thead class="table-fixed-head-shadow">
                            <tr>
                                <th style="width: 35%;"></th>
                                <th style="width: 35%;"></th>
                                <th class="text-center" style="width: 30%;"></th>
                            </tr>
                        </thead>
                        <tbody id="campaign_list">
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end campaign list -->
            <!-- clients number list -->
            <div id="client_numbers_panel" class="panel" style="display: none; min-height: 150px;">
                <div class="panel-heading">
                    <h3 class="panel-title" style="margin-bottom: 10px;">Campaign Name: <span id="selected_campaign_name"></span></h3>
                </div>
                <div class="table-responsive table-responsive-fixed-head">

                    <table class="table table-condensed table-hover table-striped table-fixed-head-header">
                        <thead>
                            <tr>
                                <th style="width: 5%;"></th>
                                <th style="width: 50%;">クライアント番号</th>
                                <th style="width: 40%;">計測番号</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="table-overflow">
                        <table class="table table-condensed table-hover table-striped table-fixed-head">
                            <thead class="table-fixed-head-shadow">
                                <tr>
                                    <th style="width: 5%;"></th>
                                    <th style="width: 50%;"></th>
                                    <th style="width: 40%;"></th>
                                </tr>
                            </thead>
                            <tbody id="client_list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end clients number list -->

            <button type="button" id="btnAcquirePhoneNumbers" class="btn btn-primary btn-lg">　登録　</button>
            <hr>
        </div>
        <!--end right column-->

    </div>

</div>

@endsection

@section('scripts')
<script>
    (function($){
        $(function( ){

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

            // get campaign list
            var campaignsPanel = $('#campaigns_panel');
            var clientNumbersPanel = $('#client_numbers_panel');
            var selectedCampaignsName = $('#selected_campaign_name');
            var selectedAccountID = null;
            var clientList = $('#client_list');
            $('.show-account-campaigns').click(function(){
                var accountID = $(this).data('account-id');
                if (!accountID) {
                    return false;
                }
                // hide panels
                campaignsPanel.hide();
                clientNumbersPanel.hide();
                selectedCampaignsName.html('');
                clientList.html('');
                // remove filter
                filterCampaignInput.val('');
                // send request
                var url = '/api/campaigns/' + accountID;
                campaignList.html('');
                $.get(url).done(function(res){
                    if (res) {
                        campaignsPanel.show();
                        $(res).each(function(ind, campaign){
                            var html_ = '<tr class="campaign-item">';
                            html_ = html_ + '<td class="campaign-name">' + campaign.campaign_name + '</td>';
                            html_ = html_ + '<td>' + campaign.default_number + '</td>';
                            html_ = html_ + '<td class="text-center small"><a href="#" class="show-client-list" data-campaign-id="' + campaign.campaign_id + '" data-campaign-name="' + campaign.campaign_name + '">クライアント番号表示</a></td>';
                            html_ = html_ + '</tr>';
                            campaignList.append(html_);
                        });
                        selectedAccountID = accountID;
                    }
                }).fail(function(err){
                    console.error(err);
                });
            });
            // end - get campaign list

            // get client list
            var selectedCampaignID = null;
            campaignList.on('click', '.show-client-list', function(ev){
                ev.preventDefault();
                var campaignID = $(this).data('campaign-id');
                if (!campaignID) {
                    return false;
                }
                selectedCampaignID = campaignID;
                clientNumbersPanel.hide();
                clientList.html('');
                selectedCampaignsName.html($(this).data('campaign-name'));
                // send request
                var url = '/api/intec-clients/' + campaignID;
//                url = '/api/intec-clients/' + 'de63817c7e403c9e9235942cdcae60d2';
                $.get(url).done(function(res){
                    if (res) {
                        clientNumbersPanel.show();
                        $(res).each(function(ind, client){
                            var html_ = getClientItemHTML(client, ind);
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

            function getClientItemHTML(client, ind){
                var html_ = '<tr class="client-item">';
                html_ = html_ + '<td><input type="checkbox" name="client-no" value="' + ind + '" ';
                html_ = (client.phone_number) ? html_ + 'disabled ' : html_;
                html_ = html_ + '/></td>';
                html_ = html_ + '<td><input type="text" name="client-source" class="form-control input-client-number" value="' + client.client_number + '" ';
                html_ = html_ + 'placeholder="ex. クライアント番号を入力してください" ';
                html_ = (client.phone_number) ? html_ + 'disabled ' : html_;
                html_ = html_ + '/></td>';
                html_ = html_ + '<td>' + client.client_cd + '</td>';
                html_ = html_ + '</tr>';
                return html_;
            }

            /**
             * Submit
             */
            $('#btnAcquirePhoneNumbers').click(function(){
                // get selected rows
                var selectedRows = clientList.find("input[name=client-no]").map(function(i, o){
                    return { "index": i, "checked": $(o).prop("checked") }
                }).filter(function(i, o){
                    return o.checked;
                }).map(function(i, o){
                    return o.index;
                });
                // get selected sources
                var selectedSourceValues = clientList.find("input[name=client-source]").filter(function(i, o){
                    return ($.inArray(i, selectedRows) != -1);
                }).map(function(){
                    return $(this).val();
                });

                var url = '/api/acquire-phone-numbers';
                var params = {
                    account_id: selectedAccountID,
                    campaign_id: selectedCampaignID,
                    corp: $("input[name=corp]:checked").val(),
                    funcs: $("input[name=func]").filter(function(){
                        return $(this).prop("checked");
                    }).map(function(){
                        return $(this).val();
                    }).toArray(),
                    row_sources: selectedSourceValues.toArray()
                };
                $.post(url, params).done(function(res){
                    console.log(res);
                    if (res) {
                        clientList.html('');
                        $(res).each(function(ind, client){
                            var html_ = getClientItemHTML(client, ind);
                            clientList.append(html_);
                        });
                    }
                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                });

            });

        });
    }(jQuery));
</script>
@endsection