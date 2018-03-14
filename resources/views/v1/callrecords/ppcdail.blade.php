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
<div class="container">
          <ul class="nav navbar-nav" id="color1">
               <li class="active">
                  <a data-toggle="tab" href="#sec_1" style='color:black'>
                    
                        <h6>PPC Daily Overview</h6>
                     
                  </a>
               </li>
               <li> 
                  <a  data-toggle="tab" href="#sec_2" style='color:black'>
                   
                        <h6>Spend vs Clicks</h6>
               
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#sec_3" style='color:black'>
                
                        <h6>Spend vs Calls</h6>
                
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#sec_4"style='color:black'>
                    
                        <h6>Impressions vs CTR</h6>
                   
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#sec_5" style='color:black'>
                    
                        <h6>Clicks vs Avg CPC</h6>
                  
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#sec_6"style='color:black'>
                  
                        <h6>Spend vs CPL</h6>
                   
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#sec_7"style='color:black'>
                  
                         <h6>Calls vs Cost Per Call</h6>
                    
                  </a>
               </li>
               <li>
                  <a data-toggle="tab"href="#sec_8"style='color:black'>
                    
                        <h6>Account Keywords</h6>
                     
                  </a>
               </li>
              
            </ul>
             <br>
            <br>
            <br>
         <div class="da-panel">
           
               <span class="da-panel-title">
               <h4><i style="font-size:24px" class="fa">&#xf200;</i>
               
                <b>PPC Account Details<h4></b>
               </span>
            
         </div>
         <hr align="left" width="100%" color="black">   
         <span id="gen_acct_pdf" style="cursor:pointer;" rel="24c9e15e52afc47c225b757e7bee1f9d">
           </h6>PDF Download</h6> &nbsp;&nbsp;&nbsp; <a href="C:\Users\user\Desktop\ppcdtl-try.html" download><i class="fa fa-file-pdf-o" style="font-size:20px;color:red" ></i></a> 
           
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Currency: USD    
            
       </span>
      
         
                 
<hr align="left" width="100%" color="black">                  
                  <div class="clear"></div>
              
                    <b> From:</b> <input type="text" id="date1" style="width:75px" value="03/01/2018" class="hasDatepicker"> <b>To:</b> <input type="text" id="date2" style="width:75px" value="03/10/2018" class="hasDatepicker">
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button id="setAccountDate">Update</button>                                  
          
            
            
         <div class="tab-content">
         <br>
            <br>
            <div class="clear"></div>
            <div id="sec_1" class="tab-pane fade in active">
               <table class="table table-striped" cellspacing="0" cellpadding="1" border="0" width="300" >
               
                 <tr><td> 
                     Date
                  </td><td>
                 
                     Day
               </td><td>
                 
                     Total Spend
                  </td><td>
                 
                     Clicks
                </td><td>
                 
                     Impressions
                 </td><td>

                     Avg CPC
                 </td><td>
                 
                     Calls
               </td><td>

                     Unq Calls
               </td>
                  <td>
                     Goals
                </td><td>
                 
                     CPL Goals
                </td><td>
                 
                     Emails
                 </td><td>
                 
                     CTR
                 </td><td>
                  
                     Total CPL
                 </td>
               </tr>
               <tr>
              
                  <td>
                     Total
                 </td>
                  <td>
                     -
                </td><td>
                  
                     0.00  
               </td>
                  <td>
                     0
               </td><td>
                 
                     0
               </td><td>
                  
                     0.00  
                </td><td>
                
                     0
                  </td><td>
               
                     0
                 </td><td>
                 
                     0
                 </td><td>
                
                     0
                </td><td>
                 
                     0
                  </td><td>
               
                     0.00%
                 </td><td>
                 
                     0.00   
                 
                  </td>
               </tr></table>
            </div>
            
            <div class="clear"></div>
            <div id="sec_8" class="tab-pane fade">
              <b><h5>Account
               Keywords (0)
               <span style="float:right">
               03/01/2018                    -
              03/10/2018<h5></b>
               </span>
           <table class="table table-striped" id="scrool8"cellspacing="0" cellpadding="2" border="0" width="30" height="10px" >
             
                  <tr class="">
                     <th class="header" style="width: 6.07143%;">
                        Keyword
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        MatchType
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Clicks
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Convs
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Conv %
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Calls
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Unq. Calls
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Unq. Calls &gt; 1m
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Call Conv %
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Goal 1
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Goal 2
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Goal 3
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Goal 4
                     </th>
                     <th class="header" style="width: 6.07143%;">
                        Emails
                     </th>
                  </tr>
              
               
            </table>
            </div>
             <div id="sec_2" class="tab-pane fade">
               
                           <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_0">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Spend (0.00) vs Clicks (0)</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Spend</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">clicks</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_0)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
                        
                     
               
            </div>
             <div id="sec_3" class="tab-pane fade">
              <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_1">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Spend (0.00) vs Calls (0)</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Spend</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Calls</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_1)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
             </div>
              <div id="sec_4" class="tab-pane fade">
              <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_2">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Impressions (0) vs CTR</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Impressions</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">CTR</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_2)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
              </div>
               <div id="sec_5" class="tab-pane fade">
               <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_3">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Clicks (0) vs Avg CPC</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Clicks</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">AVG CPC</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_3)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
               </div>
               <div id="sec_6" class="tab-pane fade">
               <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_4">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Spend (0.00) vs CPL (0.00)</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Spend</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">CPL</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_4)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
               </div>
               <div id="sec_7" class="tab-pane fade">
                <svg width="900" height="500" aria-label="A chart." style="overflow: hidden;">
                              <defs id="defs">
                                 <clipPath id="_ABSTRACT_RENDERER_ID_5">
                                    <rect x="161" y="96" width="579" height="309"></rect>
                                 </clipPath>
                              </defs>
                              <rect x="0" y="0" width="900" height="500" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                              <g>
                                 <text text-anchor="start" x="161" y="47.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Calls (0) vs Cost Per Call</text>
                                 <rect x="161" y="36" width="579" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                              </g>
                              <g>
                                 <rect x="161" y="59" width="84" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g>
                                    <rect x="161" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="194" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Calls</text>
                                    </g>
                                    <path d="M161,66L189,66" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                                 <g>
                                    <rect x="217" y="59" width="28" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                    <g>
                                       <text text-anchor="start" x="250" y="70.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Cost Per Call</text>
                                    </g>
                                    <path d="M217,66L245,66" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
                                 </g>
                              </g>
                              <g>
                                 <rect x="161" y="96" width="579" height="309" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                 <g clip-path="url(https://testenvadgainer.adgainersolutions.com/adgainer/account/showPPCAccountDetails?account_id=24c9e15e52afc47c225b757e7bee1f9d&amp;date1=03/01/2018&amp;date2=03/10/2018&amp;archive=0&amp;time_zone=America/Los_Angeles#_ABSTRACT_RENDERER_ID_5)">
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="327" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="250" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="173" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                       <rect x="161" y="96" width="579" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                    </g>
                                    <g>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                       <rect x="161" y="404" width="579" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g>
                                    <g>
                                       <text text-anchor="end" x="147" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.25</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.50</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.75</text>
                                    </g>
                                    <g>
                                       <text text-anchor="end" x="147" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.00</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="409.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="332.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">5</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="255.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">10</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="178.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">15</text>
                                    </g>
                                    <g>
                                       <text text-anchor="start" x="754" y="101.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">20</text>
                                    </g>
                                 </g>
                              </g>
                              <g></g>
                           </svg>
               </div>
              
         </div>
      </div>
        </div>


</div>
 @endsection


 @section('scripts')


 @endsection