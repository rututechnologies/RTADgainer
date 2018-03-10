@extends('layouts.app')
@section('title','Reports')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Reports
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Reports</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">


<div class="da-form-row" style="margin-left:30px;">
<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /> <b>Save FTP</b><br><hr>
							<span>Save FTP settings for your automated reports to be sent to your FTP.</span>
							<div class="da-form-item large">
							<table align="left" cellpadding = "10">
								<tr><td><div class="rowName">
									Host:
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="host" name="host" class="req" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Username:
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="ftp_username" name="ftp_username" class="req" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Password:
								</div></td><td>
								<div class="rowValue">
									<input type="password" id="ftp_password" name="ftp_password" class="req" /> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Port:
								</div></td><td>
								<div class="rowValue">
									<select id="port" name="port">
										<option value="21">21</option>
										<option value="22">SFTP 22</option>
									</select> <br/>
								</div></td></tr><tr><td>
								<div class="rowName">
									Destination Folder:
								</div></td><td>
								<div class="rowValue">
									<input type="text" id="folder" name="folder" class="req" placeholder="/home/" /> <br/>
								</div></td></tr>
								<tr><td>
								<div class="da-button-row">

									<input type="submit" id="" value="Save" class="da-button green" >
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
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #075f98;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>  

@section('scripts')
    <script>
$(document).ready(function() {

 });

    </script>
@endsection
