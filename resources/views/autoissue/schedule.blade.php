@extends('layouts.app')
@section('title',' ')

@section('style')
<style>
    #schedule_list .form-inline .form-control{
        display: inline-block;
    }

</style>

@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading" style="margin-bottom: 30px;">
    <h1 class="module_heading">
        <span>Schedule</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/autoissue')}}">Autoissue</a></li>
        <li class="active"><strong>Schedule</strong></li>
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
            <div id="client_numbers_panel" class="panel" style="display: none;min-height: 150px;">
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
                <!--./table responsive-->

            </div>
            <!-- end clients number list -->

            <!-- schedule panel -->
            <div class="panel" id="schedule_panel" style="display: none;">
                <div class="panel-body">
                    <h3 id="schedule_transfer_title">{<span>050XXXXXXXX</span>} の時間外転送番号</h3>
                    <div class="form-group">
                        <label>時間外転送番号</label>
                        <input id="transfer_number" class="form-control" placeholder="時間外転送番号を入力してください" />
                    </div>

                    <hr />

                    <h3 id="schedule_list_title">{<span>050XXXXXXXX</span>} の時間外転送スケジュール</h3>
                    <div>
                        <!--begin schedule template-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">曜日</th>
                                        <th style="width: 1%;">時間</th>
                                        <th>動作</th>
                                        <th>動作</th>
                                    </tr>
                                </thead>
                                <tbody id="schedule_list"></tbody>
                            </table>
                        </div>
                        <!--end schedule template-->
                    </div>
                    <div style="margin-top: 1.5em; margin-bottom: 2em;">
                        <input type="button" class="btn btn-primary schedule_add" value=" 追加 " />&nbsp;
                        <input type="button" class="btn btn-info schedule_register" value=" スケジュールの登録 " />
                    </div>
                    <input type="hidden" id="selected_client_id" value="">
                </div>
            </div>
            <!-- end schedule panel -->

        </div>

    </div>

</div>

@endsection

@section('scripts')
<script>
    (function($){
        $(function(){

            // campaign
            var filterCampaignInput = $('#filter_campaign');
            var campaignList = $('#campaign_list');
            // filter clients
            var clientNumbersPanel = $('#client_numbers_panel');
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
                // reset clients
                resetClientsArea();
                // remove filter
                filterCampaignInput.val('');
                // send request
                var url = '/api/adgainer/campaigns/' + accountID;
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
                // reset clients
                resetClientsArea();
                // send request
                clientList.html('');
                var url = '/api/intec-clients/' + campaignID;
//                url = '/api/intec-clients/' + 'de63817c7e403c9e9235942cdcae60d2';
                $.get(url).done(function(res){
                    if (res) {
                        clientNumbersPanel.show();
                        $(res).each(function(ind, client){
                            var html_ = getClientItemHTML(client, campaignID);
                            clientList.append(html_);
                        });
                    }
                }).fail(function(err, res){
                    console.error(err);
                    alert("クライアント番号が取得できませんでした");
                });
                return false;
            });
//            var url = '/api/intec-clients/' + 'de63817c7e403c9e9235942cdcae60d2';
//            $.get(url).done(function(res){
//                if (res) {
//                    $(res).each(function(ind, client){
//                        var html_ = getClientItemHTML(client, 'de63817c7e403c9e9235942cdcae60d2');
//                        clientList.append(html_);
//                    });
//                }
//            }).fail(function(err, res){
//                console.error(err);
//                alert("クライアント番号が取得できませんでした");
//            });
            // end get client list

            /**
             * get html template of client list
             */
            function getClientItemHTML(client, campaign_id){
                var html_ = '<tr class="client-item">';
                // TODO: with level = 2
                html_ = html_ + '<td>' + client.client_cd + '</td>';
                html_ = html_ + '<td>' + client.client_name + '</td>';
                html_ = html_ + '<td>' + client.last_time_number + '</td>';
                html_ = html_ + '<td>' + client.client_number + '</td>';
                html_ = html_ + '<td>' + client.cnt_number + '</td>';
                html_ = html_ + '<td>' + client.inuse + '</td>';
                html_ = html_ + '<td><button class="btn btn-sm btn-primary client-info-button" ';
                html_ = html_ + 'data-client-number="' + client.client_number + '" ';
                html_ = html_ + 'data-cnt-number="' + client.cnt_number + '" ';
                html_ = html_ + 'data-id="' + client.id + '" ';
                html_ = html_ + '>時間外転送情報</button>';
                // hidden input
                html_ = html_ + '<input type="hidden" class="input-client-number-old" value="' + client.client_number + '" />';
                html_ = html_ + '<input type="hidden" class="input-campaign-id" value="' + campaign_id + '" />';
                html_ = html_ + '<input type="hidden" class="input-client-id" value="' + client.id + '" />';
                html_ = html_ + '</td>';
                html_ = html_ + '</tr>';
                return html_;
            }

            var schedulePanel = $('#schedule_panel');
            var scheduleList = $('#schedule_list');
            var selectedClientID = $('#selected_client_id');
            var scheduleTransferTitle = $('#schedule_transfer_title > span');
            var scheduleListTitle = $('#schedule_list_title > span');
            var transferNumber = $('#transfer_number');
            /**
             * get schedule list, Client info button clicked
             */
            clientList.on('click', '.client-info-button', function(){
                // reset schedules
                resetSchedules();
                // set selected id
                var id = $(this).data("id");
                if (!id) {
                    alert("ID が見つかりません。\nシステム管理者にご連絡ください。");
                    return;
                }
                selectedClientID.val(id);
                var client_number = $(this).data('client-number');
                var cnt_number = $(this).data('cnt-number');
                // set title
                scheduleTransferTitle.text(cnt_number);
                scheduleListTitle.text(cnt_number);
                var url = '/api/schedule-list/' + id;
                $.get(url).done(function(res){
                    schedulePanel.show();
                    console.log(res);
                    // schedule available
                    if (res.hasOwnProperty('schedule_list')) {
                        renderScheduleList(res.schedule_list);
                    } else {
                        alert("スケジュールプランを新規登録しますか？");
                    }

                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                    alert("スケジュールプランの取得に失敗しました。");
                });

            });

            /**
             * Add schedules
             */
            $('.schedule_add').on('click', function(){
                var id = selectedClientID.val();
                if (!id) {
                    alert('時間外転送情報を取得してからプランの追加を行ってください。');
                    return;
                }
                scheduleList.append(tmpl('schedule_tmpl', { schedule: { } }));
            });

            /**
             * Register schedule
             */
            $('.schedule_register').on('click', function(){
                var id = selectedClientID.val();
                var transfer_number = transferNumber.val();
                var transfer_number_flag = false;
                transferNumber.closest('.form-group').removeClass('has-error');

                // scheduleList
                var rows = scheduleList.find('.schedule-item');

                if (rows.length === 0) {
                    alert('登録するスケジュールがありません');
                    return;
                }

                // iterate rows to get act = 1
                rows.each(function(i, o){
                    var act = $(o).find('select[name=act]').val();
                    if (act == 1) {
                        transfer_number_flag = true;
                    }
                });

                // validate transfer number
                if (transfer_number_flag) {
                    if (!transfer_number) {
                        alert("時間外転送番号を入力してください。");
                        transferNumber.closest('.form-group').addClass('has-error');
                        return false;
                    }
                }

                var args = [ ];

                // iterate all rows
                var isAllValid = true;
                rows.each(function(i, o){
                    var isValid = true;
                    var dow = $(o).find('select[name=dow]').val();
                    var act = $(o).find('select[name=act]').val();
                    var plan_cd = $(o).find('.schedule-stop').data('plan_cd');

                    var start_hour_input = $(o).find('input[name=start_hour]');
                    var start_minute_input = $(o).find('input[name=start_minute]');
                    var end_hour_input = $(o).find('input[name=end_hour]');
                    var end_minute_input = $(o).find('input[name=end_minute]');
                    var start_time_int = parseInt(start_hour_input.val() + start_minute_input.val());
                    var start_time = start_hour_input.val() + ":" + start_minute_input.val();
                    var end_time_int = parseInt(end_hour_input.val() + end_minute_input.val());
                    var end_time = end_hour_input.val() + ":" + end_minute_input.val();

                    // validate time
                    start_hour_input.parent().removeClass('has-error');
                    start_minute_input.parent().removeClass('has-error');
                    end_hour_input.parent().removeClass('has-error');
                    end_minute_input.parent().removeClass('has-error');
                    if (!isTimeType(start_time)) {
                        start_hour_input.parent().addClass('has-error');
                        start_minute_input.parent().addClass('has-error');
                        isValid = false;
                    }
                    if (!isTimeType(end_time)) {
                        end_hour_input.parent().addClass('has-error');
                        end_minute_input.parent().addClass('has-error');
                        isValid = false;
                    }
                    if (isValid && (start_time_int > end_time_int)) {
                        start_hour_input.parent().addClass('has-error');
                        start_minute_input.parent().addClass('has-error');
                        end_hour_input.parent().addClass('has-error');
                        end_minute_input.parent().addClass('has-error');
                        isValid = false;
                    }

                    if (isValid) {
                        args.push({
                            dow: dow,
                            starttime: start_time.replace(":", ""),
                            endtime: end_time.replace(":", ""),
                            act: act,
                            plan_cd: plan_cd,
                        });
                    }
                    isAllValid = isAllValid && isValid;
                });

                // end validate time
                if (!isAllValid) {
                    alert('時刻型で入力してください');
                    return false;
                }

                if (!confirm("スケジュールプランを登録しますか？")) {
                    return;
                }

                // send request
                var url = "/api/schedule-plan-create";
                var params = {
                    id: id,
                    transfer_number: transfer_number,
                    args: args
                }
                $.post(url, params).done(function(res){
                    console.log(res);
                    // schedule available
                    if (res.hasOwnProperty('schedule_list')) {
                        renderScheduleList(res.schedule_list);
                    } else {
                        alert("スケジュールプランを新規登録しますか？");
                    }

                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                    alert("スケジュールプランの取得に失敗しました。");
                });

            });

            /**
             * stop schedule
             */
            scheduleList.on('click', '.schedule-stop', function(){
                var plan_cd = $(this).data('plan_cd');

                if (plan_cd) {
                    // parse json
                    var inusetype = $.parseJSON($(this).data('inusetype'));
//                    var inusetype = $(this).data('inusetype');
                    //alert('plan stop api issue plan_cd = ' + plan_cd + '\n' + 'plan stop api issue inusetype = ' + inusetype);

                    var row = $(this).closest('.schedule-item');
                    var dow = $(row).find('select[name=dow] option:selected').text();

                    var starttime = $(row).find('input[name=start_hour]').val();
                    starttime += ':' + $(row).find('input[name=start_minute]').val();

                    var endtime = $(row).find('input[name=end_hour]').val();
                    endtime += ':' + $(row).find('input[name=end_minute]').val();

                    var action = '停止';
                    if (!inusetype) {
                        action = '起動';
                    }

                    var msg = dow + "曜日 " + starttime + "から" + endtime + "のスケジュールプランを" + action + "しますか？";

                    if (confirm(msg)) {
                        setInuse(inusetype, plan_cd);
                    }
                } else {
                    alert('このスケジュールプランはまだ登録されていません。');
                }
            });

            /**
             * delete schedule
             */
            scheduleList.on('click', '.schedule-delete', function(){
                var plan_cd = $(this).data('plan_cd');

                if (plan_cd) {
                    var row = $(this).closest('.schedule-item');
                    var dow = $(row).find('select[name=dow] option:selected').text();

                    var starttime = $(row).find('input[name=start_hour]').val();
                    starttime += ':' + $(row).find('input[name=start_minute]').val();

                    var endtime = $(row).find('input[name=end_hour]').val();
                    endtime += ':' + $(row).find('input[name=end_minute]').val();

                    var msg = dow + "曜日 " + starttime + "から" + endtime + "のスケジュールプランを削除しますか？";

                    if (confirm(msg)) {
                        deletePlan(plan_cd);
                    }
                } else {
                    $(this).closest('.schedule-item').remove();
                }
            });

            /**
             * reset client area content.
             * client and schedule list
             */
            function resetClientsArea(){
                // hide
                clientNumbersPanel.hide();
                resetSchedules();
            }

            /**
             * render schedule list
             */
            function renderScheduleList(schedule_list){
                scheduleList.html('');
                // add schedule list
                transferNumber.val('');
                $(schedule_list).each(function(i, o){
                    if (o.number.length > 0) {
                        transferNumber.val(o.number);
                    }
                    var data = {
                        schedule: {
                            dow: o.dow,
                            startHour: o.starttime.substr(0, 2),
                            startMinute: o.starttime.substr(2, 2),
                            endHour: o.endtime.substr(0, 2),
                            endMinute: o.endtime.substr(2, 2),
                            action: o.action,
                            plan_cd: o.plan_cd,
                            inusetype: o.inusetype,
                            inusetype_obj: (o.inusetype) ? $.parseJSON(o.inusetype) : { },
                        }
                    }
                    scheduleList.append(tmpl('schedule_tmpl', data));
                });
            }

            /**
             * reset schedules
             */
            function resetSchedules(){
                // selected id
                selectedClientID.val('');
                // reset title
                scheduleTransferTitle.text('050XXXXXXXX');
                scheduleListTitle.text('050XXXXXXXX');
                // reset transfer number
                transferNumber.val('');
                transferNumber.closest('.form-group').removeClass('has-error');
                // remove schedules
                scheduleList.html('');
                // hide
                schedulePanel.hide();
            }

            /**
             * stop or start schedule
             */
            function setInuse(inusetype, plan_cd){
                var id = selectedClientID.val();
                var url = '/api/schedule-set-inuse';
                var params = {
                    id: id,
                    action: (!inusetype) ? 'start' : 'stop',
                    plan_cd: plan_cd,
                };
                $.post(url, params).done(function(res){
                    console.log(res);
                    // schedule available
                    if (res.hasOwnProperty('schedule_list')) {
                        renderScheduleList(res.schedule_list);
                    } else {
                        alert("スケジュールプランが登録されていません。");
                    }

                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                    alert("スケジュールプランの取得に失敗しました。");
                });

            }

            /**
             * delete schedule plan
             */
            function deletePlan(plan_cd){
                var id = selectedClientID.val();
                var url = '/api/schedule-plan-delete';
                var params = {
                    id: id,
                    plan_cd: plan_cd,
                };
                $.post(url, params).done(function(res){
                    console.log(res);
                    // schedule available
                    if (res.hasOwnProperty('schedule_list')) {
                        renderScheduleList(res.schedule_list);
                    } else {
                        alert("スケジュールプランが登録されていません。");
                    }

                }).fail(function(err){
                    console.error(err);
                    console.error(err.responseText);
                    alert("スケジュールプランの取得に失敗しました。");
                });

            }

        });
        /*
         * end document.ready
         * =======================
         */
        /**
         * jquery micro template
         */
        var cache = { };
        this.tmpl = function tmpl(str, data){
            // Figure out if we're getting a template, or if we need to
            // load the template - and be sure to cache the result.
            var fn = !/\W/.test(str) ?
                cache[str] = cache[str] ||
                tmpl(document.getElementById(str).innerHTML) :
                // Generate a reusable function that will serve as a template
                // generator (and which will be cached).
                new Function("obj",
                    "var p=[],print=function(){p.push.apply(p,arguments);};" +
                    // Introduce the data as local variables using with(){}
                    "with(obj){p.push('" +
                    // Convert the template into pure JavaScript
                    str
                    .replace(/[\r\t\n]/g, " ")
                    .split("<%").join("\t")
                    .replace(/((^|%>)[^\t]*)'/g, "$1\r")
                    .replace(/\t=(.*?)%>/g, "',$1,'")
                    .split("\t").join("');")
                    .split("%>").join("p.push('")
                    .split("\r").join("\\'")
                    + "');}return p.join('');");

            // Provide some basic currying to the user
            return data ? fn(data) : fn;
        };

        /**
         * 時刻型かチェック
         * @param value 対象文字列
         * @returns true:success, false:failed 
         */
        function isTimeType(value){

            if (value == null) {
                return;
            }

            if (!value.match(/^\d{1,2}\:\d{2}$/)) {
                //alert('時刻型で入力してください(1)');
                return false;
            }

            var al = value.split(":");

            if (parseInt(al[0], 10) < 0 ||
                parseInt(al[0], 10) > 24 ||
                parseInt(al[1], 10) < 0 ||
                parseInt(al[1], 10) > 59) {
                //alert('時刻型で入力してください(2)');
                return false;
            }
            return true;
        }

    }(jQuery));
</script>

<!-- schedule template -->
<script type="text/html" id="schedule_tmpl">
    <tr class="schedule-item">
        <td style="width: 1%;">
            <select name="dow" class="form-control input-sm" style="width: 65px;">
                <option value="sun" <%=(schedule.dow === 'sun')? 'selected="selected"' : ''%>>日</option>
                <option value="mon" <%=(schedule.dow === 'mon')? 'selected="selected"' : ''%>>月</option>
                <option value="tue" <%=(schedule.dow === 'tue')? 'selected="selected"' : ''%>>火</option>
                <option value="wed" <%=(schedule.dow === 'wed')? 'selected="selected"' : ''%>>水</option>
                <option value="thu" <%=(schedule.dow === 'thu')? 'selected="selected"' : ''%>>木</option>
                <option value="fri" <%=(schedule.dow === 'fri')? 'selected="selected"' : ''%>>金</option>
                <option value="sat" <%=(schedule.dow === 'sat')? 'selected="selected"' : ''%>>土</option>
            </select>
        </td>
        <td>
            <div class="form-inline">
                <span><input type="number" name="start_hour" value="<%=(schedule.startHour)? schedule.startHour : ''%>" class="form-control input-sm" max="12" style="width: 45px;"></span> 時
                <span><input type="number" name="start_minute" value="<%=(schedule.startMinute)? schedule.startMinute : ''%>" class="form-control input-sm" max="59" style="width: 45px;"></span> 分 ～
                <span><input type="number" name="end_hour" value="<%=(schedule.endHour)? schedule.endHour : ''%>" class="form-control input-sm" max="12" style="width: 45px;"></span> 時
                <span><input type="number" name="end_minute" value="<%=(schedule.endMinute)? schedule.endMinute : ''%>" class="form-control input-sm" max="59" min="0" style="width: 45px;"></span> 分
            </div>
        </td>
        <td>
            <select name="act" class="form-control input-sm"  style="width: 150px;">
                <option value="1" <%=(schedule.action == '1')? 'selected="selected"' : ''%>>時間外転送</option>
                <option value="2" <%=(schedule.action == '2')? 'selected="selected"' : ''%>>ビジー返し</option>
                <option value="3" <%=(schedule.action == '3')? 'selected="selected"' : ''%>>時間外ガイダンス</option>
            </select>
        </td>
        <td>
            <button type="button" class="btn btn-sm btn-warning schedule-stop" data-plan_cd="<%=schedule.plan_cd%>" data-inusetype="<%=schedule.inusetype%>">
                <%=(schedule.inusetype_obj)? '停止' : '起動'%>
            </button>
            <button type="button" class="btn btn-sm btn-danger schedule-delete" data-plan_cd="<%=schedule.plan_cd%>">削除</button>
        </td>
    </tr>
</script>
<!-- end schedule template -->
@endsection