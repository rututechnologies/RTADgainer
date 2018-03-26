@extends('layouts.app')
@section('title','Users List ')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Users
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Sales </strong>
                    </li>
                </ol>
            </div>
        </div>
        </div>
 
 	<table align="left">
 		<tr><td>Logo	</td>
 			<td><input type="file" name="logo" value="">
			<br/>ad-gainer-logo-v1.1-250x54px-transp-bkgd-flat.png
			</td></tr>
    						
							<span class="da-panel-title">
								<h4 align="left"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Logo Branding</b></h4>
							</span><hr width="50%" align="left">

						
						<tr><td><input type="submit" id="" value="Update Logo" class="" style="background-color:f5fffa" >
		  				</td></tr>
	</table>

						
					
<br>
<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="right" >
	<table id="a" align="right" style="width:50%;height:25%;float: right">
		<div class="da-panel-header">
				<span class="da-panel-title">
								<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
										<b>Agency Color Branding</b></h4>
				</span><hr width="50%" align="right">

						<tr><td>
								<label>Color</label></td>
							<td>
									Click-> <input type="color" name='color' style="width:100px" value="1966FF"/>
							</td></tr>
								
						<tr><td>
								<input type="submit"  value="Update Color" class="da-button green" style="background-color:f5fffa">
						</td></tr>
		</div>
	</table>
</form>

<br>
<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="left">
	<table id="a" align="left" style="width:50%;height:25%;float: left">
       	<div class="grid_2">
       		<div class="da-panel">
						<div class="da-panel-header">
							<span class="da-panel-title">
							
								<h4  align="left"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
								<b>Agency Subdomain</b></h4>
							</span><hr width="50%" align="left">
						</div>
				<tr><td>
						<label>Subdomain</label></td><td>
									<input type="text" name="subdomain" class="letters_only" value="demo " /> <br/>
										<i>Must be only alpha characters a-z in english, with no spaces. Case is insensitive.</i>
				</td></tr>
								
				<tr><td>
					<input type="submit" id="" value="Update Subdomain" class="da-button green" style="background-color:f5fffa">
				</td></tr>
			</div>
		</div>
	</table>
</form>

<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="left">
	<table align="right" style="width:50%;height:25%;float: right">
								  
							<span class="da-panel-title">
							
								<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

								<b>Login Page Slogan</b></span><hr width="50%" align="right">
						
						<tr><td>
							<label>Slogan		</label></td><td>
							<input type="text" name="slogan" class="" value="DEMO AGENCY SLOGAN " /> <br/>
							<i>Can contain html.</i></td></tr>
									
								
						<tr><td>
							<input type="submit" id="" value="Update Slogan" class="da-button green" style="background-color:f5fffa">
						</td></tr>

</table>
							</form>
			    
        @endsection