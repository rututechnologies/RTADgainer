@extends('layouts.app')
@section('title','Add Multi Phone Numbers')

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
            <?php
            $MULTI_ARR = $campaignModel->getMultiTrackingNumberSets( $accountData->account_id, $campaign_id, $campaignDetails->multi_phone );
            ?>
            <h4>
                Max. Possible Tracked Sessions Per Window ({{$MULTI_ARR[ 'MIN' ]}}) &nbsp;&nbsp; | &nbsp;&nbsp; 
                Total Unique Customer Numbers ({{count( $MULTI_ARR[ 'ALLTRACK' ] )}} )
            </h4>
        </div>

        <div class="panel-body">
            <form class="da-form" method="post" action="<?php echo url( '/' ) . '/app/campaign/do_addMultiPhoneNumbers'; ?>"  enctype="multipart/form-data" >
                {{csrf_field()}}                
                <div class="form-group">
                    <p><label>Upload CSV, 4 column format</label></p>
                    <input type="file" name="phone_number_file"  />
                    <i>Row format: phone number, tracking number, forward number, phone name,number id\n</i>
                </div>

                <hr>

                <?php
                for ( $x = 1; $x <= $campaignDetails->multi_phone; $x++ ) {
                    ?>

                    <div class="da-form-row">
                        <label style="margin-bottom: 15px;">Add Phone Number {{$x}}</label>
                        <div class="da-form-item">
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Exisiting Number: </label>
                                    <select style="width:250px" name="existing_cust_phone[]" id="EXIST_<?php echo $x; ?>" class="existing_cust_phone form-control">
                                        <option value="">Loading Numbers...</option>
                                    </select> &nbsp;&nbsp; OR <br/><br/>
                                </div>
                            </div>
                            <div class="form-inline" style="margin-bottom: 20px;">
                                <div class="form-group">
                                    <label>Name:</label> 
                                    <input type="text" name="phone_name[]" id="NAME_<?php echo $x; ?>" style="width:250px" class="form-control">
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Replacing Number: </label>
                                    <input type="text" id="PHONE_<?php echo $x; ?>" name="cust_phone[]" style="" class="checkMultiPhone form-control"> &nbsp;&nbsp; 
                                    <label>Forward To: </label>
                                    <input type="text" id="FORWARD_<?php echo $x; ?>" name="forward_to[]" style="" class="form-control">&nbsp;&nbsp; 
                                    <label>Tracking Number: </label>
                                    <input type="text" name="track_phone[]" id="TRACK_<?php echo $x; ?>" class="trackPhone req form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php
                }
                ?>
                <input type="hidden" name="account_id" id="account_id_client" value="<?php echo $account_id; ?>" />
                <input type="hidden" name="campaign_id" id="campaign_id_client" value="<?php echo $campaign_id; ?>" />

                <div class="text-center" style="margin-top: 20px;">
                    <input type="reset" value="Reset" class="da-button btn btn-default btn-lg">&nbsp;
                    <input type="submit" value="Submit" class="da-button btn btn-primary btn-lg">
                </div>
            </form>
        </div>

    </div>

    <div class="panel">
        <div class="panel-body">
            <?php
            $cust_numbers = array_keys( $MULTI_ARR[ 'ALLTRACK' ] );
            $count = 1;
            foreach ( $MULTI_ARR[ 'ALLTRACK' ] as $cust_phone ) {
                echo "$count. Client phone number [ " . $cust_numbers[ ($count - 1) ] . " ] has " . count( $cust_phone ) . " tracking phone Numbers. <br/>";
                $count++;
            }
            ?>
        </div>
    </div>

</div>

@endsection

@section('scripts')
@endsection