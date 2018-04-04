@extends('layouts.app')
@section('title','Add Client Phone Numbers')

@section('style')

@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span> Add Client Phone Numbers</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong> Add Client Phone Numbers</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <div class="panel">
        <div class="panel-heading">
            <h4>Add Client Phone Numbers 
                <a href="<?php echo url( '/' ) . 'app/account/details/?account_id=' . $accountData->account_id; ?>"><?php echo $accountData->accountName; ?></a> 
                for Campaign {{$campaignDetails->campaign_name}}
            </h4>
        </div>

        <div class="panel-body">
            <form class="da-form" method="post" action="<?php echo url( '/' ) . '/app/campaign/do_addCampaignNumbers'; ?>"  enctype="multipart/form-data" >
                {{csrf_field()}}                
                <div class="form-group">
                    <p><label>Upload CSV, 1 column format</label></p>
                    <input type="file" name="phone_number_file"  />
                    <i>Row format: 2125551212,\n</i>
                </div>

                <hr>
                <?php
                if ( $level <= 2 || $level == 5 ) {
                    ?>
                    <div class="form-horizontal">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                for ( $x = 1; $x <= 10; $x++ ) {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-3">Phone Number <?php echo $x; ?></label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone_number[]" class="checkPhone form-control" id="PHONE_<?php echo $x; ?>" />
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                for ( $x = 11; $x <= 20; $x++ ) {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-3">Phone Number <?php echo $x; ?></label>
                                        <div class="col-md-9">
                                            <input type="text" name="phone_number[]" class="checkPhone form-control" id="PHONE_<?php echo $x; ?>" />
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <input type="hidden" name="account_id" id="account_id" value="<?php echo $accountData->account_id; ?>" />
                        <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $campaignDetails->campaign_id; ?>" />

                        <div class="text-center" style="margin-top: 20px;">
                            <input type="reset" value="Reset" class="da-button btn btn-default btn-lg">&nbsp;
                            <input type="submit" value="Submit" class="da-button btn btn-primary btn-lg">
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-warning">
                        This must be done by a campaign manager.
                    </div>
                    <?php
                }
                ?>
            </form>
        </div>

    </div>

</div>

@endsection

@section('scripts')
@endsection