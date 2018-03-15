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
     &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('profile')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Profile</button></a>
                        <a href="{{url('passwordb')}}"><button type="button" class="btn btn-primary" >Password</button></a>
                        <a href="{{url('interface')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Interface</button></a>
                         <a href="{{url('adduser')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Add User</button></a>
                         <a href="{{url('buttonform')}}"><button type="button" class="btn btn-primary" class="btn btn-default">My Account</button></div></a>
<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images//icons/black/16/pencil.png" alt="">
                                            Edit Your Profile<hr>
                                        
                                        <form action="" class="da-form"  method="post" >
                                        
                                            <table>
                                            <tr>
                                                <td><label>Logo</label></td>
                                                
                                                    <td>Current: ad-gainer-logo-v1.1-250x54px-transp-bkgd-flat.png<br/><br> 
                                                    File: <input type="file" name="logo" ><br/><br>
                                                    
                                                    URL:  <input type="text" name='logo_url' value="" ><br/></td></tr>
<tr>
                                                
                                                <td><label>Color</label></td>
                                                
                                                     <td><input type="color" name='color' style="width:100px" value="##000000" ></td>
                                                     </tr>
                                                <tr>
                                                <td style='margin-bottom:5px'><label>Wallpaper</label></td>
                                                
                                                    <td>Current:<br><br>                                                <input type="file" name="wallpaper" >
                                                    <br/>
                                                    <br/>
                                                    URL:  <input name='wallpaper_url' value="" ></td>
                                                    </tr>
                                                    </table>
                                                

                                        
                                                <input type="reset" value="Reset" class="da-button gray left">
                                                <input type="submit" value="Update Profile Information" class="da-button green">
                                            
                                        </form>



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