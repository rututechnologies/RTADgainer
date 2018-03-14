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

<div class="btn-grid">
                        &nbsp;&nbsp;<button type="button" class="btn btn-primary" class="btn btn-default">Profile</button>
                        <button type="button" class="btn btn-primary" >Password</button>
                        <button type="button" class="btn btn-primary" class="btn btn-default">Interface</button>
                        <button type="button" class="btn btn-primary" class="btn btn-default">Contacts</button>
                        <button type="button" class="btn btn-primary" class="btn btn-default">Add User</button>
                        <button type="button" class="btn btn-primary" class="btn btn-default">My Account</button></div>
                    
                    
                                                    
                                    
    <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt=""><b>Change Your Password</b><hr width="50%" align="left">
                                            <br>

                                    
                                    <table>
                                    <tr>
                                    
                                            
                                                <td><label>Username</label></td>
                                                
                                                    <td><input type="text" name="username" value="cgibbs" readonly="readonly"/></td></tr>
                                                <tr>
                                                <td><label>Current Password</label></td>
                                                
                                                    <td><input type="password" name="oldPassword" class="req" required></td></tr>
                                                <tr>
                                                <td><label>New Password</label></td>
                                                
                                                    <td><input type="password" name="newPassword" class="req"  required></td>
                                                </tr>
                                                <table>
                                                <input type="reset" value="Reset" class="da-button gray left">
                                                &nbsp;&nbsp;&nbsp;<input type="submit" value="Update Password" class="da-button green">
                                            
                                    
                                    


</div>
 @endsection



 @section('scripts')

  @endsection