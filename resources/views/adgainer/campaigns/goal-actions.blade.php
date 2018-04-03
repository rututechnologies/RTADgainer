@extends('layouts.app')
@section('title','Goal Actions')

@section('style')

@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Goal Actions</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong>Goal Actions</strong></li>
    </ol>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-10">

            <div class="panel">
                <div class="panel-heading">
                    <h4 style="margin-bottom: 0;">Create A Goal</h4>
                </div>
                <div class="panel-body">
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

                    <form action="/app/campaign/do_saveGoalAction" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <!--account-->
                        <div class="form-group">
                            <label class="col-md-3">
                                Account
                            </label>
                            <div class="col-md-9">
                                <?php
                                if ( $level != 3 ) {
                                    ?>
                                    <select id="goal_account_id" name="account_id" class="form-control select2-account" required>
                                        <option value="">Select an Account</option>
                                        <?php
                                        foreach ( $accounts as $account ) {
                                            echo "<option value='" . $account->account_id . "'>" . $account->accountName . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <?php
                                } else {
                                    ?>
                                    <p>{{$account->accountName}}</p>
                                    <input type='hidden' id='goal_account_id' name='account_id' value='<?php echo $user_account_id; ?>' />
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!--Campaign-->
                        <div class="form-group">
                            <label class="col-md-3">
                                Campaign
                            </label>
                            <div class="col-md-9">
                                <?php
                                if ( $level != 3 ) {
                                    ?>
                                    <select id="goal_campaign_id" name="campaign_id" class="form-control select2-campaign" required>
                                        <option value="">Select a Campaign</option>
                                    </select>

                                    <?php
                                } else {
                                    ?>
                                    <select id="goal_campaign_id" name="campaign_id" class="form-control select2-campaign" required>
                                        <option value="">Select a Campaign</option>
                                        <?php
                                        foreach ( $campaigns as $camp ) {
                                            echo '<option value="' . $camp->campaign_id . '">' . $camp->campaign_name . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3">Action Name:</label>
                            <div class="col-md-9">
                                <input type="text" id="click_name" name="click_name" class="form-control" />
                            </div>
                        </div>          
                        <div class="form-group">
                            <label class="col-md-3">Click ID: <i>HTML ID</i></label>
                            <div class="col-md-9">
                                <input type="text" id="click_id" name="click_id" class="form-control" />
                            </div>
                        </div>            
                        <div class="form-group">
                            <label class="col-md-3">Click Class: <i>HTML Class</i></label>
                            <div class="col-md-9">
                                <input type="text" id="click_class" name="click_class" class="form-control" />
                            </div>
                        </div>            
                        <div class="form-group">
                            <label class="col-md-3">URL: (optional)</label>
                            <div class="col-md-9">
                                <input type="text" id="URL" nme="URL" class="form-control" />
                            </div>
                        </div>            
                        <div class="form-group">
                            <label class="col-md-3">Mark as Email:</label>
                            <div class="col-md-9">
                                <div class="radio radio-inline" style="padding-left: 0;">
                                    <label><input type="radio" name="email_send" value="1" />Yes </label> &nbsp;
                                    <label><input type="radio" name="email_send" value="0" />No </label>                                    
                                </div>
                            </div>

                        </div>            
                        <div class="form-group">
                            <label class="col-md-3">GOAL:</label>
                            <div class="col-md-9">
                                <select id="goal_count" name="goal_count" class="form-control">
                                    <option value=''>Select a Campaign</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" value="Save Goal" class="btn btn-primary"> &nbsp;
                                <input type="reset" value="Reset" class="btn btn-default">&nbsp;
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
@endsection