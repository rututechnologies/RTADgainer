@extends('layouts.app')
@section('title','Delete Campaign ')

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
        <span>Delete Campaign - {{$accountData->accountName}} - {{$campaignDetails->campaign_name}}</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Delete Campaign</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <!--<h3>Delete Campaign Step 1 of 2: <?php echo $campaignDetails->campaign_name; ?></h3>-->

    <!--// TODO: display alert-->

    @if (session('error_msg'))
    <div class="alert alert-danger">
        {{ session('error_msg') }}
    </div>
    @endif
    <div class="panel">
        <div class="panel-body">

            <form action="{{url('app/campaign/submit-delete', ['campaign_id' => $campaignDetails->campaign_id])}}" method="post">
                {{csrf_field()}}
                <h4>Campaign Name: {{$campaignDetails->campaign_name}}</h4>
                <h4>Campaign ID: {{$campaignDetails->campaign_id}}</h4>
                <hr>
                <?php
                if ( $result->count() == 0 ) {
                    ?>
                    <p>This campaign has no phone numbers associated to it.</p>
                    <p>Immediate deletion is OK.</p>
                    <?php
                } else {
                    ?>
                    <p>"This campaign has {{$result->count()}} phone number(s) associated with it.</p>
                    <h4>Reassign to Another Campaign or Make them unassigned.</h4>
                    <div class="form-group">
                        <div><label>Phone Number Options:</label></div>
                        <select name='transferCampaignId' class="form-control" style="display: inline-block;width: auto;">
                            <option value=''>Make Phone Number(s) Unassigned </option>
                            @foreach ( $campaigns as $campaignData ):

                            <option value='{{$campaignData->campaign_id}}'>Move to: {{$campaignData->campaign_name}}</option>

                            @endforeach;
                        </select>
                    </div>
                    <hr>
                    <?php
                }
                ?>

                <input type="hidden" name="numPhoneNumbers" value="<?php echo $result->count(); ?>" />
                <p>Are you sure you want to delete this campaign, with campaign ID: <?php echo $campaignDetails->campaign_id; ?></p>
                <div class="checkbox" style="margin-bottom: 20px;">
                    <label>
                        <input type="checkbox" name="deleteYes" value="1"> Yes
                    </label>
                </div>
                <button class="btn btn-danger btn-lg">Delete Campaign</button>
            </form>


        </div>

    </div>

</div>

@endsection

@section('scripts')
<script>


</script>
@endsection