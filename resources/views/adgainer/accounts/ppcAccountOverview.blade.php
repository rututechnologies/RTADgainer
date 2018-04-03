@extends('layouts.app')
@section('title','PPC Account Details')

@section('style')

@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>PPC Account Details</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong>PPC Account Details</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading"><h4>PPC Account Details - {{$accountData->accountName}}</h4></div>
                <div class="panel-body">
                    <div id="camp_nav" class="grid_2">
                        <!--TODO: PDF link-->
                    </div>

                    <div class="form-group">
                        <label>Currency: {{$accountData->account_currency}}</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>From :</label>
                                <input type="text" name="date1" class="form-control" data-provide="datepicker" value="{!! $date1 !!}" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>To :</label>
                                <input type="text" name="date2" class="form-control" data-provide="datepicker" value="{!! $date2 !!}" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                    </div>
                    <input type='hidden' id='url' value='<?php echo url( '/' ) . '/account/showPPCAccountDetails?account_id=' . $account_id; ?>' />
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <!--.panel-body-->
            </div>
        </div>
    </div>
    <!--.row-->

    <!--table results-->
    <div style="background-color: #fff;min-height: 300px;margin-bottom: 30px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs-sm" role="tablist">
            <li class="active"><a href="#tab_1" data-toggle="tab">PPC Daily Overview</a></li>
            <li><a href="#tab_2" data-toggle="tab">Spend vs Clicks</a></li>
            <li><a href="#tab_3" data-toggle="tab">Spend vs Calls</a></li>
            <li><a href="#tab_4" data-toggle="tab">Impressions vs CTR</a></li>
            <li><a href="#tab_5" data-toggle="tab">Clicks vs Avg CPC</a></li>
            <li><a href="#tab_6" data-toggle="tab">Spend vs CPL</a></li>
            <li><a href="#tab_7" data-toggle="tab">Calls vs Cost Per Call</a></li>
            <li><a href="#tab_8" data-toggle="tab">Account Keywords</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!--section 1-->
            <div role="tabpanel" class="tab-pane fade in active" id="tab_1">
                @include('adgainer.accounts.parts.ppc-daily-overview')
            </div>
        </div>
        
    </div>
    <!--end table result-->

</div>

@endsection

@section('scripts')


@endsection