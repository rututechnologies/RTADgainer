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
                        &nbsp;&nbsp;<a href="{{url('profile')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Profile</button></a>
                        <a href="{{url('passwordb')}}"><button type="button" class="btn btn-primary" >Password</button></a>
                        <a href="{{url('interface')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Interface</button></a>
                         <a href="{{url('adduser')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Add User</button></a>
                         <a href="{{url('buttonform')}}"><button type="button" class="btn btn-primary" class="btn btn-default">My Account</button></div></a>
                    
                    
                                                    
                                    
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
<style>
td {
    padding-top: .1em;
    padding-bottom: .1em;
}
tr.spaceUnder>td {
  padding-bottom: 2em;
}
</style>
<style>
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
.btn-grid > .btn
{
    margin: 5px 0;
}
}
.btncolor{
background-color:#4274c2;
color:white;
border:1px solid gray;
border-radius:10px;
padding:5px;
width:100px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}
input[type="text"], textarea, input[type="file"] {
    background-color: white;
    -webkit-box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
}
</style>


 @section('scripts')

  @endsection