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

                                            <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="">
                                            Add User to Account  <br/>  
                                        
                                        <form class="da-form" method="post" action="" >
                                            <table>
                                            <tr>
                                                <td><label>Username</label></td>
                                                
                                                    <td><input type="text" name="addUsername" class="req" required></td>
                                                    </tr>
                                                <tr>
                                                <td><label>Password</label></td>
                                                
                                                    <td>Randomly Generated Sent to User</td>
                                                    </tr>
                                                
                                            
                                                <tr>
                                                <td><label>Email</label></td>
                                            
                                                    <td><input type="text" name="addEmail" class="req" required></td>
                                                    </tr>
                                                    <tr>
                                            
                                                <td><label>Phone</label></td>
                                                
                                                    <td><input type="text" name="addPhone"></td>
                                                </tr>
                                                <tr>
                                                <td><label>Level</label></td>
                                                
                                                    <td><select name="addLevel">
                                                        <option value="2">Manager</option><option value="1">Admin</option><option value="3">Client</option>
                                                        </select></td>
                                                        </tr>
                                                        <tr>
                                                
                                                <td><label>Chat User</label></td>
                                                
                                                    <td><select name="chat_user">
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select></td>
                                                </tr>
                                                <tr>
                                                <td><label>Chat User Dept</label></td>
                                                
                                                    <td><select name="sel_dept">
                                                        <option value="">Select Existing Dept</option>
                                                        <option value='eee'>eee</option>
                                                    </select>
                                                    <br/>
                                                    <br/>
                                                    OR
                                                    <br/>
                                                    <br/>
                                                    Create New Department: <input type="text" name="dept" /></td>
</tr>
    </table>                                            
                                                <input type="reset" value="Reset" class="da-button gray left">

                                                <input type="submit" value="Add User" class="da-button green">
                                            
                                        </form>





</div>
@endsection
<style>
td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 1em;
}
</style>
<style>
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>


@section('scripts')

  @endsection