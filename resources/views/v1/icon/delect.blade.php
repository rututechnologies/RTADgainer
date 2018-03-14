@extends('layouts.app')
@section('title','Campaign Tool ')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Campaign
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Campaign</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">

 <b>Delete Campaign Step 1 of 2: ADgainer Main Site</b><br>This campaign has (1) phone number(s) associated with it.
    <br><hr>
    Would you like to transfer them to another campaign or make them all unassigned.<br>
   <b>Reassign to Another Campaign or Make them unassigned.</b>
   <br>Phone Number Options: <select name='transferCampaignId'>
        <option value=''>Make Phone Number(s) Unassigned </option>
        <option value='2b15b046ee8e172fc398eedd0efe22be'>Move to: ADgainer Main Site </option>
        <option value='5e391fdc28041ad372488d3d4a0671e9'>Move to: ADgainer KK Site </option>
        <option value='952e8ab2c1640fe4b6a630ad5ecf37ce'>Move to: Super Pages </option>
        <option value='8da7ce86124f3d9509b336e495cd973d'>Move to: New Multi Campaign </option>
        <option value='cd269bea65932ebac54bcf5b70b6d5f9'>Move to: main site </option>
        <option value='81b62689975466780b925249d2b70afe'>Move to: Source2 </option>
        <option value='68244ad14b88617590316527ffd0f678'>Move to: Ads Network 2 </option>
        <option value='9212bd82a3006a4fd6d642144d6c7f77'>Move to: renamed </option>
        <option value='ba6b4d182fc22e41e3bbf8d36380f926'>Move to: test camp 2 </option>
        <option value='6cbcc3a49d3512658d35a1092b1a9dfd'>Move to: New Submit Campaign </option>
        <option value='f38c384a2a305f7c9c1d745c3df97664'>Move to: New Submit Campaign </option>
        <option value='d720d74f3beb79f08150b1b1645b3ff0'>Move to: Make New Auto </option>
        <option value='011bfba5b8f76d5540203642f0bfb986'>Move to: Make New Auto </option>
        <option value='d45684dabafa3bc712c341059501ab6d'>Move to: Make New Auto </option>
        <option value='f7dbb48afe0574e257c310bed7f685cd'>Move to: JPN </option>
        <option value='04905a52c1efd51c564d17a7c805158e'>Move to: jPN2 </option>
    </select>
    <br>
    <br>
     Are you sure you want to delete this campaign, with campaign ID: 2b15b046ee8e172fc398eedd0efe22be
    <br>
    <br>Yes<input type="checkbox" name="deleteYes" value="1">
     <a href="{{url('buttonform')}}"><button id="updateAccountOverviewDate">Delete Campaign</button></a>


</div>
@endsection


@section('scripts')



@endsection