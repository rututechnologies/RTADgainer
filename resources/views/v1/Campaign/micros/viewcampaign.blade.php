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
                        <a href="{{url('/campaign')}}"><i
                                    class="fa fa-dashboard"></i> Campaign</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Campaign Tool</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>
    <div class="w3-container">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="container tabs-wrap">
     <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>AD</b>gainer</a>
    </div>
  <ul class="nav navbar-nav" role="tablist">
    <li role="presentation" class="active">
      <a href="#CampaignPPC" aria-controls="alltrackingdata" role="tab" data-toggle="tab" aria-expanded="true">Campaign PPC Overview</a>
    </li>
    <li>
      <a href="#ppctracking" id="ppc" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">PPC Tracking  Data</a>
    </li>
    <li>
      <a href="#alltrackingdata" id="all" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">All Tracking Data</a>
    </li>
    
    <li>
      <a href="#campaigndetails"  id="cam"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Campaign Details</a>
    </li>
     <li>
      <a href="#mapview" id="map" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Map View Configuration</a>
    </li>
    <li>
      <a href="#graphdata" id="grap"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Graph Data Overview</a>
    </li>
     <li>
      <a href="#campaigngoals" id="campaigl" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Campaign Goals</a>
    </li>
     <li>
      <a href="#acckeyword" id="acc"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Account keywords</a>
    </li>
    
    
  </ul>
</div>
</div>
</nav>
<div class="da-form-item">
													
													
													</div>
<div id="camp_nav">
<h1><b>Account Records Navigation</b></h1>
 </div>
 <div>
&nbsp;&nbsp;<button type="button" class="btn btn-primary">Call Records</button>
<button type="button" class="btn btn-primary">Web Traffic</button>
<button type="button" class="btn btn-primary">PPC Traffic</button>
<button type="button" class="btn btn-primary">Conversion</button>
<a href="images/Portfolio.pdf" class="button" download ><img src="images/doc_pdf.png" height="34" width="34" /></a>&nbsp;&nbsp;<button type="button" class="btn btn-primary">PPC Daily</button>
<hr></div>
<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="CampaignPPC">
    <table align="center" width="90%" class="table table-striped table-bordered">
        

<tr>
											<td><div class="table-header-column" id=''>
												Campaign										</div></td>
											<td><div class="table-header-column" id=''>

												Budget											</div><td>
											<td><div class="table-header-column" id=''>

												Total Spend											</div></td>
											<td><div class="table-header-column" id=''>

												Clicks											</div></td>
											<td><div class="table-header-column" id=''>

												Impressions											</div></td>
											<td><div class="table-header-column" id=''>

												Avg CPC											</div></td>
											<td><div class="table-header-column" id=''>

												Calls											</div></td>
											<td><div class="table-header-column" id=''>

												Unq Calls											</div></td>
											<td><div class="table-header-column" id=''>

												Goals											</div></td>
											<td><div class="table-header-column" id=''>

												CPL Goals											</div></td>
											<td><div class="table-header-column" id=''>

												Calls > 45s
											</div></td>
											<td><div class="table-header-column" id=''>

												CTR											</div></td>
											<td><div class="table-header-column" id=''>

												Total CPL											</div></td>

										
										</tr>
										<tr>
										<td class="table-primary" colspan="14" align="center" bgcolor="#075f98" style="color:#fff;">                   Adwords Campaigns (0)        </td></tr>
										<tr>
										<td class="table-primary" colspan="14" align="center" bgcolor="#075f98" style="color:#fff;">                     Bing Campaigns (0)</td></tr>
										<tr>
										<td class="table-primary" colspan="14" align="center" bgcolor="#075f98" style="color:#fff;">            SuperPages Campaigns (0)           </td></tr>
										<tr>
										<td class="table-primary"colspan="14" align="center" bgcolor="#075f98" style="color:#fff;">                 Facebook Campaigns (0 )                 </td></tr>
									
										<tr>
										<td class="table-data-column boldClass grey;">GRAND TOTALS</td>
										<td class="table-data-column boldClass grey;" >0.00</td>
										<td class="table-data-column boldClass grey;" >  0.00</td>
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0.00</td>
										<td class="table-data-column boldClass grey;">0</td>
										
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0</td>
										<td class="table-data-column boldClass grey;">0.00%</td>
										<td class="table-data-column boldClass grey;">0.00</td>
										</tr>
										</table>
  </div>

  <div role="tabpanel" class="tab-pane" id="ppctracking">
   <table align="center" id="customers" class="table table-striped table-bordered">     
<tr>





                       
											<td><div class="table-header-column" id=''>
												
                                                    Campaign Name									</div></td>
											<td><div class="table-header-column" id=''>

												Click									</div><td>
											<td><div class="table-header-column" id=''>

												Calls										</div></td>
											<td><div class="table-header-column" id=''>

												Calls										</div></td>
											<td><div class="table-header-column" id=''>

												Unique call										</div></td>
											<td><div class="table-header-column" id=''>

												Call Conv%										</div></td>
											<td><div class="table-header-column" id=''>

												Goal										</div></td>
											<td><div class="table-header-column" id=''>
                                                  Email											</div></td>
											<td><div class="table-header-column" id=''>

												All convs										</div></td>
												<td><div class="table-header-column" id=''>

												All conv%										</div></td>
											

										
										</tr>
<tr>
										<td>takehiro_ct</td>
								        <td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										</tr>
<tr>
										<td>Total</td>
								        <td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										</tr>
 </table>
  </div>

  <div role="tabpanel" class="tab-pane" id="alltrackingdata">
   <table align="center" id="tacking" class="table table-striped table-bordered">
<tr>
<td><div class="table-header-column" id=''>Campaign Name</div></td>
<td><div class="table-header-column" id=''>All visits</div><td>
<td><div class="table-header-column" id=''>All clicks</div></td>
<td><div class="table-header-column" id=''>PPC</div></td>
											<td><div class="table-header-column" id=''>

												Display									</div></td>
											<td><div class="table-header-column" id=''>

												Organic									</div></td>
											<td><div class="table-header-column" id=''>
                                                         Direct
																						</div></td>
											<td><div class="table-header-column" id=''>
                                                 Call | Unique											</div></td>
											<td><div class="table-header-column" id=''>

												Call conv%									</div></td>
												<td><div class="table-header-column" id=''>
												All Convs										</div></td>
												<td><div class="table-header-column" id=''>

												All Conv%									</div></td>
											

										
										</tr>
										<tr>
										<td>takehiro_ct</td>
								        <td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0|0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										</tr>
										<tr>
										<td>Total</td>
								        <td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0|0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										<td style="color:blue">0</td>
										</tr>
                                        </table>
  </div>
   <div role="tabpanel" class="tab-pane" id="campaigndetails">
   <table align="center" id="campaigndetails" class="table table-striped table-bordered">

<tr>




                        

											<td><div class="table-header-column" id=''>
												
                                                    Campaign Name#									</div></td>
											<td><div class="table-header-column" id=''>

												Budget#								</div><td>
											<td><div class="table-header-column" id=''>

												Default#										</div></td>
											<td><div class="table-header-column" id=''>

												Dest#										</div></td>
											<td><div class="table-header-column" id=''>

												Manage								</div></td>
											
										</tr>
										<tr>
										<td>takehiro_ct</td>
								        <td>0</td>
										<td>0899418883</td>
										<td>0899418883,</td>
										<td></td>
									   </tr> </table>

  </div>
  
   <div role="tabpanel" class="tab-pane" id="mapview">
   <div>
<label>Setting:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Campaign: <select>
               <option>Select a Campagin (option) </option>
			   <option>takehiro_ct</option>
			   </select><br>
			  
			  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Traffic Type:<select>
			  <option>All option </option>
			   <option>PPC</option>
			   <option>organic </option>
			   <option>Dispaly</option>
			   <option>DIRECT</option>
			   </select><br><br>
			   
			   
			   <label>Calls Only:</label>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="look_archive" />&nbsp;&nbsp;All calls<br>
			  			  			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="unique_calls" />&nbsp;&nbsp;Only Unique Calls<br>
			  			  			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="look_archive" />&nbsp;&nbsp;All trafic<br>
			   
			   
			   			  			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="clearAccount">Open map</button></td>
			   
			   </div>
  </div>
  
  <div role="tabpanel" class="tab-pane" id="graphdata">
   
  </div>
   <div role="tabpanel" class="tab-pane" id="campaigngoals">
   <div class="table-responsive">
   <table align="center" id="campaigngls" class="table table-striped table-bordered">
        									<tr>
											<td>Campaign	</td>
											<td>#	<td>
											<td>Goal</td>
											<td>Goal URL</td>
											<td>CPL Goal</td>
											<td>Hit Count</td></tr>
											
@if($tdata)
@foreach($tdata as $key => $data)
  <tr><td> {{$data->campaign_id}}</td>
    <td>{{$data->id}}</td>
    <td>{{$data->click_id}}</td>
    <td>{{$data->URL}}</td>
    <td>{{$data->active}}</td>
    <td>{{$data->goal_count}}</td>
    </tr>
    @endforeach 
    @else
          <label class="label label-danger">No Data found....</label>
          @endif
  </table>
 											
  </div>
</div>
  <div role="tabpanel" class="tab-pane" id="acckeyword"><table id="myTable" class="table table-striped table-bordered" width="100%"> 
<thead> 
<tr> 
    <th>Keyword</th> 
    <th>Match Type</th> 
    <th>Click</th> 
    <th>Convs</th> 
    <th>Conv%</th>
<th>Calls</th>
<th>Unq.call</th>
<th>unq.calls</th>
<th>Call Conv%</th>
<th>Goal 1</th>
<th>Goal 2</th>
<th>Goal 3</th>
</tr> 
</thead> 
</table></div>
  
<th>Goal 4</th>





                       

            <div id="push"></div>
           
    

   		</div>

@endsection
@section('scripts')
<script>
$(document).ready(function (){
	$('#ppc').hide();
  $('#all').hide();
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

            // When the document is ready http://www.expertphp.in/article/bootstrap-datepicker-example-text-input-with-specifying-date-format
            $(document).ready(function () {
                
                $('input[name="date1"]').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
       
</script>

												Goals										</div></td>
												<td><div class="table-header-column" id=''>

												Email										</div></td>
												<td><div class="table-header-column" id=''>

@endsection
