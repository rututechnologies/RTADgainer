@extends('layouts.app')
@section('title','Phone Number List')

@section('style')

@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Phone Number List</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa fa-list"></i> Campaign Details</a></li>
        <li class="active"><strong>Phone Number List</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <div class="panel">
        <div class="panel-heading">
            <h4>
                Client 
                <a href="<?php echo url( '/' ) . '/app/account/details/' . $accountData->account_id; ?>"><?php echo $accountData->accountName; ?></a>
            </h4>
            <h4>
                Phone Number List for Campaign <a href='<?php echo url( '/' ); ?>/app/campaign/edit/<?php echo $campaignDetails->campaign_id; ?>/<?php echo $campaignDetails->account_id; ?>'> <?php echo $campaignDetails->campaign_name; ?>  </a>
            </h4>
        </div>
        <div class="panel-body">

            <form class="da-form" method="post" action="<?php echo url( '/' ) . '/app/campaign/removeCampaignNumbers?campaign_id=' . $campaignDetails->campaign_id; ?>" >
                {{csrf_field()}}
                <?php
                $count = 1;

                if ( $campaignPhoneNumbers->count() == 0 ) {
                    ?>

                    <div class="alert alert-warning">
                        This campaign has no phone numbers
                    </div>


                    <?php
                } else {
                    ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Assigned to Visitor</th>
                                <th class="text-center" style="width: 1%;">Remove</th>
                                <th>Serveable</th>
                            </tr>
                        </thead>
                        <?php
                        $allPhoneData = $campaignPhoneNumbers;
                        foreach ( $allPhoneData as $eachPhone ):
                            if ( $eachPhone->active == 1 ) {
                                $active = "Yes";
                            } else {
                                $active = "No";
                            }
                            ?>
                            <tr>
                                <td>{{$eachPhone->phone_number}}</td>
                                <td>{{$active}}</td>
                                <?php
                                echo "<td class='text-center'>";
                                if ( $level <= 2 || $level == 5 ) {
                                    echo " <input type='checkbox' name='phoneNumber[]' value='" . $eachPhone->id . "' style='width:auto'/>";
                                }
                                echo "</td>";

                                echo "<td>";
                                if ( $level <= 2 || $level == 5 ) {
                                    $checkN = "";
                                    $checkY = "checked";
                                    if ( $eachPhone->useable == 0 ) {
                                        $checkY = "";
                                        $checkN = "checked";
                                    }
                                    ?>
                                <div class="" style="padding-left: 0;">
                                    <label>
                                        <input type='radio' name='non_{{$eachPhone->id}}' value='1' {{$checkY}} /> Yes &nbsp;&nbsp; | &nbsp;&nbsp;  
                                    </label>
                                    <label>
                                        <input type='radio' name='non_{{$eachPhone->id}}' value='0' {{$checkN}} /> No
                                    </label>
                                </div>
                                <?php
                                echo "<input type='hidden' name='allNumbers[]' value='" . $eachPhone->id . "' />";
                            }
                            echo "</td>";
                            ?>
                            </tr>
                            <?php
                            $count++;
                        endforeach;
                        ?>

                    </table>
                    <input type="hidden" name="account_id" value="<?php echo $accountData->account_id; ?>" />
                    <input type="hidden" name="campaign_id" value="<?php echo $campaignDetails->campaign_id; ?>" />

                    <div style="margin-top: 20px;">
                        <input type="reset" value="Reset" class="da-button btn btn-default">
                        <?php
                        if ( $count > 1 && ($level <= 2 || $level == 5) ) {
                            ?>
                            <input type="submit" value="Submit" class="da-button btn btn-primary"  onClick="return confirmSubmit()">
                        <?php } ?>
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
<script>
    function confirmSubmit()
    {
        var agree = confirm("Are you sure you want those number settings?");
        if (agree)
            return true;
        else
            return false;
    }
</script>
@endsection