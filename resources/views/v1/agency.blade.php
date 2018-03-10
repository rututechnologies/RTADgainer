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
        
    <div id="da-content-area" style="margin:50px">

                        <div class="clear"></div>


                         <div class="grid_2">

				<div class="da-panel">
						<div class="da-panel-header">
							<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="left">
							<span class="da-panel-title">
							
								
								<h4 align="left"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Logo Branding</b></h4>
							</span><hr width="50%" align="left">
							<table align="left" style="width:50%;height:25%;float: left">
						<tr><td>
						<div class="da-panel-content">
						
							
								<div class="da-form-row">
									<label>
									Logo									</label></td><td>
									<div class="da-form-item large">
										<input type="file" name="logo" value="">
										<br/>
										ad-gainer-logo-v1.1-250x54px-transp-bkgd-flat.png									</div>
								
</td></tr><tr><td>
								<div class="da-button-row">

									<input type="submit" id="" value="Update Logo" class="" style="background-color:f5fffa" >
		  </div></td></tr>


							
						
						</table>
						</form>
					</div>
<br>

			<div class="grid_2">

				<div class="da-panel">
				
						<div class="da-panel-header">
<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="right" >
							<span class="da-panel-title">
							
								<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
<b>
								Agency Color Branding</b></h4>
							</span><hr width="50%" align="right">
<table id="a" align="right" style="width:50%;height:25%;float: right">
						<tr><td>
						<div class="da-panel-content">
							
								</td></tr><tr><td><div class="da-form-row">
									<label>
									Color									</label></td><td>
									<div class="da-form-item large">
										Click-> <input type="color" name='color' style="width:100px" value="1966FF"/>
									</div></td></tr>
								
<tr><td>
								<div class="da-button-row">

									<input type="submit"  value="Update Color" class="da-button green" style="background-color:f5fffa">
																		</div></td></tr>


							
						</table>
						</form>
<br>
                        <div class="clear"></div>

			<div class="grid_2">

				<div class="da-panel">
						<div class="da-panel-header">
							<span class="da-panel-title">
							
								<h4  align="left"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
								<b>Agency Subdomain</b></h4>
							</span><hr width="50%" align="left">
						</div>
						<form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="left">
						<table id="a" align="left" style="width:50%;height:25%;float: left">
						<tr><td>
						<div class="da-panel-content">
							
								<div class="da-form-row">
									<label>
										Subdomain									</label></td><td>
									<div class="da-form-item large">
										<input type="text" name="subdomain" class="letters_only" value="demo " /> <br/>
										<i>Must be only alpha characters a-z in english, with no spaces. Case is insensitive.</i>
									</div></td></tr>
								
<tr><td>
								<div class="da-button-row">

									<input type="submit" id="" value="Update Subdomain" class="da-button green" style="background-color:f5fffa">
		</div></td></tr>


							
						</table>
						</form>
				<div class="grid_2">

				<div class="da-panel">
						<div class="da-panel-header">
				  <form action="" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="left">
							<span class="da-panel-title">
							
								<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

								<b>Login Page Slogan</b></span><hr width="50%" align="right">
						<table align="right" style="width:50%;height:25%;float: right">
						<tr><td>
						<div class="da-panel-content">
							
								<div class="da-form-row">
									<label>Slogan								</label></td><td>
									<div class="da-form-item large">
										<input type="text" name="slogan" class="" value="DEMO AGENCY SLOGAN " /> <br/>
										<i>Can contain html.</i></td></tr>
									
								
<tr><td>
								<div class="da-button-row">

									<input type="submit" id="" value="Update Slogan" class="da-button green" style="background-color:f5fffa">
																		</div></td></tr>

</table>
							</form>
			    </div>

            </div>

        </div>
        @endsection