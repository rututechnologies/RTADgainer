@extends('layouts.app')
@section('title','Reports FTP')

@section('style')
<style>
td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 2em;
}
</style>

@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
               <a href="{{url('reportsList')}}" style="color:black"> <span>
                    Reports
                </span></a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Reports FTP</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">


<div class="da-form-row" style="margin-left:50px">
<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /> <b>Save FTP</b><br><hr>
							<span>Save FTP settings for your automated reports to be sent to your FTP.</span>
							<div class="da-form-item large">
							<table align="left" cellpadding = "10">
								<tr><td><div class="rowName">
									Host</td><td>:</td>
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="host" name="host" class="shadow" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Username</td><td>:</td>
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="ftp_username" name="ftp_username" class="shadow" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Password</td><td>:</td>
								</div></td><td>
								<div class="rowValue">
									<input type="password" id="ftp_password" name="ftp_password" class="shadow" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Port</td><td>:</td>
								</div></td><td>
								<div class="rowValue">
									<select id="port" name="port">
										<option value="21">21</option>
										<option value="22">SFTP 22</option>
									</select> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Destination Folder</td><td>:</td>
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="folder" name="folder" class="req" placeholder="/home/"  class="shadow"/> <br/>
								</div></td></tr>
								<tr><td>
								<div class="da-button-row">

									<input type="submit" id="" value="Save" class="btncolor" >
																		</div></td></tr>
								</table>
									 
									<div class="clear"></div>
								</div>	  
									 
								</div> 		
							
							</div>
						</div>
			
            
            
 </div>
 @endsection

 <style>
.btncolor{
background-color:#20B2aa;
color:white;
border:1px solid gray;
border-radius:10px;
padding:5px;
width:100px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}
.shadow{
width:100px;
heigth:25;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
td{
padding-top:1em;
padding-bottom:1em;
}
tr.spaceUnder>td{
padding-bottom:1em;
}
</style>

@section('scripts')
    <script>
$(document).ready(function() {

 });

    </script>
@endsection
