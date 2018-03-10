@extends('layouts.app')
@section('title','Sales ')

@section('style')
<style>
.da-button_green
{
 color:white;
 width:125px;
 height:40px;
    background-color:rgb(0,128,192);<!--#4169E1;-->
    padding: 5px 12px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:10px;
	box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.6);
	<!--box-shadow: inset 0px 0px 10px rgba(0,0,0,0.9);-->
}
.da-button_green:hover
{
color:white;
 background-color:rgb(0,179,225);<!--#FFA500 ;-->
}
.a{
height: 200px;
  width: 400px;
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.9);}
  .b{
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);
  }
</style>

@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Sales
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

<div class="w3-container">


<div id="da-content-area" style="margin-left:30px">




                        <div class="clear"></div>
                        <h3>Adwords Keyword Traffic Estimator</h3></br></br>


                        <!--
                        <div class="grid_2">

							<div class="da-panel">
									<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="images/icons/black/16/pencil.png" alt="">
											Upload Option

										</span>
									</div>
									<div class="da-panel-content">
										<form class="da-form">
											<div class="da-form-row">
												<label>Upload Keywords</label>
												<div class="da-form-item large">
													<input type="file" />
												</div>
											</div>
										</form>
									</div>
								</div>
                        </div>
                        -->
<hr>
                         <div class="grid_4">

							<div class="da-panel">
									<div class="da-panel-header">
										<span class="da-panel-title">

										</span>
									</div>
									<div class="da-panel-content">
										<form class="da-form"  ><table><tr><td>
										<div class="da-form-row">
												<label>Keywords</label></td><td>
												<div class="da-form-item large">

													<span style="font-size:12px;"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seperate each keyword by comma, i.e. blue shoes, lawn mowers, automotibles, watches...</i></span> </tr><tr><td></td><td><br/>&nbsp;&nbsp;&nbsp;&nbsp; <textarea id="estimateTerm" cols="50" rows="10" class="a" ></textarea> <br/></td></tr>

												</div></td><tr>
											</div></table>
<hr>
											<div class="da-form-row"><table>
												<tr><td><label>Max CPC</label></td><td>
												<div class="da-form-item large">

													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="maxCpc" class="b"/>

												</td></div></tr></table>
											</div>

<hr>
											<div class="da-form-row"><table>
												<tr><td><label>Location</label></td><td></td></tr><tr><td>   </td><td>
												<div class="da-form-item large">
													<input type="radio" class="LOCATION CLOSE" name="LOCATION" value="ALL" style="width:50px" checked="checked"/> All countries and territories<br/>
													<input type="radio" class="LOCATION CLOSE" name="LOCATION" value="USACND" style="width:50px" /> United States and Canada<br/>
													<input type="radio" class="LOCATION CLOSE" name="LOCATION" value="USA" style="width:50px" /> United States<br/>
													<input type="radio" class="LOCATION CLOSE" name="LOCATION" value="JPN" style="width:50px" /> Japan<br/>
													<input type="radio" class="LOCATION CHOICES" id="LOCATION_CHOOSE" name="LOCATION" value="CHOICES" style="width:50px" /> Let me choose<br/>

													
														<div class="subOptionDiv" id="LOCATION_CHOICES" ></div>
												</div></td></tr></table>
											</div>
</br></br>
											<div class="da-button-row">
												<input id="trafficEstimate" type="submit" value="Estimate Traffic" class="da-button_green" onClick="return false;">
											</div>

											<div class="da-form-row" id="trafficResults">


											</div>







										</form>
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
