@extends('layouts.app')
@section('title','Check PhoneNumbers ')

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
                <a href="{{url('campaign')}}" style="color:black" > <span>
                    Campaign Tools
                </span></a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/campaign')}}"><i
                                    class="fa fa-dashboard"></i> Campaign</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Check PhoneNumbers</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

    <div class="w3-container">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h4><b>AD</b>gainer</h4></a>
    </div>
    <ul class="nav navbar-nav">
	<li><a href=""></a></li>
      <li ><a href=""></a></li>
      <li class="active"><a href="">Check Client Phone Numbers</a></li>
      <li><a href=""></a></li>
      <li><a href=""></a></li>
    </ul>
	
  </div>
</nav>
    <form action="check" method="post">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table id="table1" cellspacing="5px"; width="25%" cellpadding="5%" align="left">
<tr>
 <div class="clear"></div>

                         <div class="grid_4">

							<div class="da-panel">
									
									<div class="da-panel-content"><tr>
											<div class="campSubSection">
													
													<div class="da-form-row">
													<td>	<label>Phone Number 1</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_1" class="" name="chck_phone_1">
																<label></label>
																<input type="submit" id="check_1" class="check_phone_all" value ="check" /> </td>
																<td><span id="check_result_1"></span></td>
														</div>
													</div>

												</div>
											</tr>

                                                  <tr>							
													<div class="da-form-row">
														<td><label>Phone Number 2</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_2" class="" name="chck_phone_2"><label></label>
															 <input type="submit" id="check_2" class="check_phone_all" value ="check" /></td>
															  <td><span id="check_result_2"></span></td>
														</div>
													</div>
												</tr>
                                                   
												

											<tr>
												<div class="da-form-row">
												<td><label>Phone Number 3</label></td>
												<div class="da-form-item large">
												<td><input type="text" id="check_phone_3" class="" name="chck_phone_3"> <label></label>
													<input type="submit" id="check_3" class="check_phone_all" value ="check" /></td>
													 <td><span id="check_result_3"></span></td>
													</div>
													                                                         
												</div>
 											</tr>


											<tr>
													<div class="da-form-row">
														<td><label>Phone Number 4</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_4" class="" name="chck_phone_4"><label></label>
															 <input type="submit" id="check_4" class="check_phone_all" value ="check" /> </td>
															<td> <span id="check_result_4"></span></td>
														</div>
													</div>
												</tr>

												

					                       <tr>						
													<div class="da-form-row">
														<td><label>Phone Number 5</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_5" class="" name="chck_phone_5"> <label></label>
																<input type="submit" id="check_5" class="check_phone_all" value ="check" /></td>
																<td> <span id="check_result_5"></span></td>
														</div>
													</div>
												</tr>

												</div>
                                                  </table>

												  <table id="table1"; cellspacing="5px"; width="25%" cellpadding="5%" align="center">
											<tr>
													<div class="da-form-row">
														<td><label>Phone Number 6</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_6" class="" name="chck_phone_6"><label></label>
															 <input type="submit" id="check_6" class="check_phone_all" value ="check" /></td>
															 <td> <span id="check_result_6"></span></td>
														</div>
													</div>
												</tr>

												 
												

											<tr>
													<div class="da-form-row">
														<td><label>Phone Number 7</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_7" class="" name="chck_phone_7"><label></label>
															 <input type="submit" id="check_7" class="check_phone_all" value ="check" /> </td>
															<td> <span id="check_result_7"></span></td>
														</div>
													</div>
													<tr>

												

											
													<tr>
													<div class="da-form-row">
														<td><label>Phone Number 8</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_8" class="" name="chck_phone_8"><label></label>
															 <input type="submit" id="check_8" class="check_phone_all" value ="check" /></td>
															  <td><span id="check_result_8"></span></td>
														</div>
													</div>
												</tr>

											

											<tr>
													<div class="da-form-row">
														<td><label>Phone Number 9</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_9" class="" name="chck_phone_9"><label></label>
															 <input type="submit" id="check_9" class="check_phone_all" value ="check" /> </td>
															<td> <span id="check_result_9"></span></td>
														</div>
													</div>
												</tr>

												

											<tr>
													<div class="da-form-row">
														<td><label>Phone Number 10</label><br></td>
														<div class="da-form-item large">
															<td><input type="text" id="check_phone_10" class="" name="chck_phone_10"><label></label>
															 <input type="submit" id="check_10" class="check_phone_all" value ="check" /></td>
															 <td> <span id="check_result_10"></span></td>
														</div>
													</div>
												</tr>

												</div>

											
									</div>
								
                        
</table>
</form>
 </div>
 @endsection
