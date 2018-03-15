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
<div id="da-content-area">

    <div class="clear"></div>

    <div class="grid_3">

        <h2>
							ADgainer						</h2>

        <div class="da-panel">

            <div class="da-panel-header" style="height:70px">
                <span class="da-panel-title">

											<div class="clear">
												Campaign Management
											</div>

										<div style="float:left;width:200px">

											 <a href="">
												 Create New Campaign
											</a>

											<a href=''>
														  View All Campaigns
													</a>										</div>

											<div style="float:right;width:200px;">

												 &nbsp;&nbsp;
															<a href="{{url('newCampaign')}}"> 
																<img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
															</a>&nbsp;&nbsp;
															<a href='{{ url('/delect') }}'>
																<img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
															</a>
											</div>

										</span>
            </div>

            <div class="da-panel-widget">
                <div class='clear'></div>
                <h4 style='margin-bottom:0'> ADgainer Main Site</h4>
                <div class='clear'></div><i> Source Tracking Campaign</i>
                <br/> <a href=''>Edit Campaign</a>
                <br/>
                <br/> <b>Phone Numbers</b>
                <br> <a href=''>Add</a>
                <br> <a href=''>Serving (0) | Total (0)</a>
                <br/>
                <br/> <a href=''>Search Phone Numbers</a>
                <br>EMAIL TRACKING
                <input type="checkbox" class="tagMgr" value="1" checked rel="2b15b046ee8e172fc398eedd0efe22be" />
                <br/>
               

    <div class="clear"></div>

</div>

</div>

</div>

</div>

<div class="container tabs-wrap">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="container tabs-wrap">
     <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>AD</b>gainer</a>
    </div>
 <div class="container tabs-wrap">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab" aria-expanded="true" style='color:black'>TAGS Manager</a>
    </li>
    <li>
      <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false" style='color:black'>Email Code</a>
    </li>
    <li>
      <a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false" style='color:black'>PPC URL</a>
    </li>
	<li>
      <a href="#abc" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false" style='color:black'>DISPLAY URL</a>
    </li>
  </ul>
</div>
</div>
</nav>
<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="billing">
    <textarea cols="50" rows="10" style="width:100%">&lt;
!-- INSTALL JQUERY IF NEEDED &lt;
script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"&gt;
&lt;
/script&gt;
--&gt;
&lt;
script type="text/javascript" src="https://testenvadgainer.adgainersolutions.com/adgainer/tracking/getURLvars.js"&gt;
&lt;
/script&gt;
&lt;
script&gt;
document.write(unescape('&lt;script type="text/javascript" src="https://testenvadgainer.adgainersolutions.com/adgainer/incomingdata/getCode/?campaign_id=2b15b046ee8e172fc398eedd0efe22be&amp;'+ vars +'&amp;referrer='+ referrer +'"&gt;&lt;/scr'+'ipt&gt;'));
&lt;
/script&gt;
&lt;
div id="tagManager_DIV" style="display:none"&gt;
&lt;
/div&gt;
</textarea>
  </div>

  <div role="tabpanel" class="tab-pane" id="shipping">
    <textarea cols="50" rows="10" style="width:100%">&lt;script type="text/javascript" src="https://testenvadgainer.adgainersolutions.com/adgainer/incomingdata/email_tracking_js_code/?formId=&amp;class=&amp;campaignId=2b15b046ee8e172fc398eedd0efe22be"&gt;&lt;/script&gt;</textarea>
  </div>

  <div role="tabpanel" class="tab-pane" id="review">
    <div style="float:left;width:70px">URL :</div>
<div style="float:left;width:300px">
    <input type="text" id="PPC_URL_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px" value="http://"> </div>
<div class="clear"></div><br><br>
<div style="float:left;width:70px">Source :</div>
<div style="float:left;width:300px">
    <input type="text" id="PPC_SOURCE_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px"> </div>
<div class="clear"></div><br><br>
<div style="float:left;width:70px">Campaign:</div>
<div style="float:left;width:300px">
    <input type="text" id="PPC_CAMPAIGN_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px" value="ADgainer Main Site"> </div>
<div class="clear"></div><br><br>
<div style="float:left;width:70px">Medium :</div>
<div style="float:left;width:300px">
    <input type="text" id="PPC_MEDIUM_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px" value="cpc"> </div>
<div class="clear"></div><br><br>
<div style="float:left;width:70px">Content :</div>
<div style="float:left;width:300px">
    <input type="text" id="PPC_CONTENT_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px"> </div>
<div class="clear"></div><br><br>
<div style="float:left;width:70px">Custom 1 :</div>
<div style="float:left;width:300px">Name:
    <input type="text" id="PPC_CUSTOM1N_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px">
    <br> Value:
    <input type="text" id="PPC_CUSTOM1V_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px"> </div>
<div class="clear"></div><br><br><br><br><br><br>
<div style="float:left;width:70px">Custom 2 :</div>
<div style="float:left;width:300px">Name:
    <input type="text" id="PPC_CUSTOM2N_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px">
    <br> Value:
    <input type="text" id="PPC_CUSTOM2V_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px"> </div>
<div class="clear"></div><br><br><br><br><br>
<div style="float:left;width:70px">Custom 3 :</div>
<div style="float:left;width:300px">Name:
    <input type="text" id="PPC_CUSTOM3N_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px">
    <br> Value:
    <input type="text" id="PPC_CUSTOM3V_2b15b046ee8e172fc398eedd0efe22be_P" style="width:300px"> </div>
<div class="clear"></div>
<div class="clear"></div><br><br><br><br><br>
<div style="float:left;width:70px">YAHOO?</div>
<div style="float:left;width:300px"> Yes
    <input type="checkbox" id="yahoo_P"> </div>
<div class="clear"></div>
<div style="float:left;width:70px"><br><br>
    <button class="genURL" id="generateURL_2b15b046ee8e172fc398eedd0efe22be" rel="_P" ktype="keyword">Generate</button>
</div>
<div class="clear" style="height:10px"></div><br><br>
<textarea style="width:100%;height:50px" class="ppc_result" id="PPC_RESULT_2b15b046ee8e172fc398eedd0efe22be_P"></textarea>
<div id="QRCODE_2b15b046ee8e172fc398eedd0efe22be_P" style="margin:10px 0 0 0"></div>

</div>
    
  </div>
 
</div></div>


            <div id="push"></div>

</div>
@endsection


@section('scripts')



@endsection
