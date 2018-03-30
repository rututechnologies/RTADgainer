@extends('layouts.app')
@section('title','Account Details ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <!--TODO: Account name here-->
        <span>Account Details - {{$account->accountName}}</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Account Details</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <div class="panel">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">General Settings</a></li>
            <li><a data-toggle="tab" href="#menu2">Billing Information</a></li>
        </ul>
        <div class="panel-body">
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-5">
                            <table class="table">
                                <tr>
                                    <td><label>Account Name</label></td>
                                    <td>{{$account->accountName}}</td> 
                                </tr>
                                <tr>
                                    <td> <label>Username</label></td>
                                    <td>{{$account->username}}</td> 
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td><a href="{{url('passwordb')}}" target="_blank"><b>Edit Password</b></a></td></tr>
                                <tr>
                                    <td><label>Telephone</label></td><td>{{$account->tel}}</td></tr>
                                <tr>
                                    <td><label>Address</label></td><td>{{$account->address}}</td></tr>
                                <tr>
                                    <td><label>Address</label></td><td>{{$account->address}}</td></tr>
                                <tr>
                                    <td><label>City</label></td>
                                    <td>{{$account->city}}</td></tr>
                                <tr>
                                    <td><label>State</label></td>
                                    <td>{{$account->state}}</td></tr>
                                <tr>
                                    <td><label>Zip</label></td>
                                    <td>{{$account->zip}}</td></tr>
                                <tr>
                                    <td><label>Country</label></td>
                                    <td>{{$account->country}}</td>
                                </tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><tr>  
                            </table>
                        </div>
                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td><label>Contact</label></td><td>{{$account->contact}}</td>
                                </tr>
                                <tr>
                                    <td><label>Email</label></td>
                                    <td>{{$account->email}}</td> 
                                </tr>
                                <tr>
                                    <td><label>Offline Chat Image</label></td>
                                    <td>{{$account->offline_img}}</td>
                                </tr>
                                <tr>
                                    <td><label>Online Chat Image</label></td>
                                    <td>{{$account->online_img}}</td> 
                                </tr>
                                <tr>
                                    <td> <label>PPC Markup</label></td>
                                    <td>{{$account->ppc_markup}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = (100 - %)</td>
                                </tr>
                                <tr>
                                    <td><label>Account Pin *</label></td>
                                    <td>{{$account->account_pin}}</td> 
                                </tr>
                                <tr>
                                    <td> <label>Account Level</label></td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <td><label>Account Active</label></td>
                                    <td>{{$account->active}}</td>
                                </tr>
                                <tr>
                                    <td><label>Account Manager</label></td>
                                    <td>{{$account->account_mgr}} </td> 
                                </tr>
                                <tr>
                                    <td><label>Time Zone</label></td>
                                    <td>{{$account->account_time_zone}}</td> 
                                </tr>
                                <tr>
                                    <td><label>Show Phone Numbers <i>In reports</i></label></td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <td><label>API Information</label></td><td>{{$account->api_key}}</td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-5">
                            <!--TODO: display data-->
                            <table class="table">
                                <tr>
                                    <td><label>Account Access</label></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><label>Account Manager</label></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><label>Account Subsidiary</label></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-5">

                            <table class="table">
                                <tr>
                                    <td><label>Billing Type</label></td>
                                    <td>{{$account->billing_type}}</td>
                                </tr>
                                <tr>
                                    <td><label>Billing Address</label></td>
                                    <td>{{$account->billing_address_1}}</td></tr>
                                <tr>
                                    <td><label>Billing Address </label></td>
                                    <td>{{$account->billing_address_2}}</td></tr>
                                <tr>
                                    <td><label>Billing City </label></td>
                                    <td>{{$account->billing_city}}</td>
                                </tr>
                                <tr>
                                    <td><label>Billing State </label></td>
                                    <td>{{$account->billing_state}}</td></tr>
                                <tr>
                                    <td><label>Billing Zip </label></td>
                                    <td>{{$account->billing_zip}}</td>
                                </tr>
                                <tr>
                                    <td><label>Billing Country</label></td>
                                    <td>{{$account->billing_country}}</td>
                                </tr>
                                <tr>
                                    <td><label> Billing Date</label></td>
                                    <!--TODO: Dynamic data-->
                                    <td>
                                        <!--<input type="text" name="billing_date" />-->
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Name On Card</label></td>
                                    <td>{{$account->name_on_card}}</td>
                                </tr>
                                <tr>
                                    <td><label>Card Number</label></td>
                                    <td> <i>{{$account->card_number}}</i></td>
                                </tr>
                                <tr>
                                    <td><label> Expiration </label></td>
                                    <!--TODO: Dynamic data--> 
                                    <td> 0 / 0</td>
                                </tr>
                                <tr>
                                    <td><label> CVV <i>securty code</i></label></td>
                                    <td>{{$account->cvv}}</td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
                <!--.tab-pane-->
            </div>
            <!--.tab-content-->
        </div>

    </div>

</div>

@endsection

@section('scripts')

@endsection