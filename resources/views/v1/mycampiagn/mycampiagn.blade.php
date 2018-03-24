
@extends('layouts.app')
@section('title','chat ')

@section('style')
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  .btn-grid
{
    margin: -2px 0;
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
.shadow{
width:100px;
heigth:25;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
.scrollit{
overflow:scroll;
height:300px;
weight:300px;
}
td{
padding-top:1em;
padding-bottom:1em;
}
tr.spaceUnder>td{
padding-bottom:1em;
}

</style>

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
                        <strong><i class="fa fa-list"></i>My Campaign</strong>
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
      <a href="#ppctracking" id="ppc" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">PPC Tracking  Details</a>
    </li>
    <li>
      <a href="#alltrackingdata" id="all" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">All Tracking Details</a>
    </li>
    
    <li>
      <a href="#mapview"  id="cam"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">View Configuration</a>
    </li>
     <li>
      <a href="#graphdata" id="map" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Graph Data Overview</a>
    </li>
    <li>
      <a href="#last30dayConversions" id="grap"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">last 30 day Conversions</a>
    </li>
     <li>
      <a href="#abc" id="campaigl" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Account campaigns List</a>
    </li>
     <li>
      <a href="#campaigngoals" id="acc"aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Campaign Goals</a>
    </li>
    
    
  </ul>
</div>
</div>
</nav>
<div class="da-form-item">
  <form action="mycampiagn" method="any">
                          
                           
                          
                        
                            &nbsp;&nbsp;&nbsp;Time Zone:<select name="timeZone" id="timeZone">

                              <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                            <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                            <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                                            <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                                            <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                                            <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                                            <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                                            <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                                            <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                                            <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                            <option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                            <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                            <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                                            <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                                            <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                            <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                                            <option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
                                                            <option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                            <option value="America/Havana">(GMT-05:00) Cuba</option>
                                                            <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                            <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                            <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                            <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                            <option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
                                                            <option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
                                                            <option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
                                                            <option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
                                                            <option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
                                                            <option value="America/Araguaina">(GMT-03:00) UTC-3</option>
                                                            <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                            <option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
                                                            <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                            <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                            <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                            <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                            <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                            <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                            <option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
                                                            <option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
                                                            <option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
                                                            <option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
                                                            <option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
                                                            <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                            <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                            <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                            <option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
                                                            <option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
                                                            <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                            <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                            <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                                            <option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
                                                            <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                            <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                            <option value="Asia/Damascus">(GMT+02:00) Syria</option>
                                                            <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                            <option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
                                                            <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                            <option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                            <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                            <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                            <option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                            <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                            <option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                            <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                            <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                            <option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
                                                            <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                            <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                            <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                            <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                            <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                            <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                            <option value="Australia/Eucla">(GMT+08:45) Eucla</option>
                                                            <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                            <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                            <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                            <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                            <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                            <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                            <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                            <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                            <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
                                                            <option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
                                                            <option value="Asia/Magadan">(GMT+11:00) Magadan</option>
                                                            <option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
                                                            <option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
                                                            <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                            <option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                            <option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
                                                            <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                            <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                            </select><br><br><br>
                          
                          

                          

                          
                            &nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp;&nbsp;From: <input type="date" id="date1" name="date1" style="width:150px" value="02/01/2018" class="dateChange" />
                            To: <input type="date" id="date2" style="width:150px" value="02/19/2018" class="dateChange"  /><br><br>
&nbsp;&nbsp;&nbsp;<span>Archive?</span> <input type="checkbox" id="look_archive" />
                            <br><br>
                            &nbsp;&nbsp;&nbsp;<button id="updateAccountOverviewDate">View Data</button>
                             &nbsp;&nbsp;&nbsp;
                            <button id="clearAccount">Start Over</button>
                            <!--
                             <br> <br> <button id="view_archive"> View Archive </button>
                             -->
                          </div>
<div id="camp_nav">
<h1><b>Account Records Navigation</b></h1>
 </div>
 <div>
&nbsp;&nbsp; <a href="{{url('callrecords')}}"><button type="button" class="btn btn-primary">Call Records</button></a>
<a href="{{url('callrecords')}}"><button type="button" class="btn btn-primary">Web Traffic</button></a>
<a href="{{url('callrecords')}}"><button type="button" class="btn btn-primary">PPC Traffic</button></a>
<a href="{{url('callrecords')}}"><button type="button" class="btn btn-primary">Conversion</button></a>
<a href="images/Portfolio.pdf" class="button" download ><img src="images/doc_pdf.png" height="34" width="34" /></a>
&nbsp;&nbsp;<a href="{{url('ppcdail')}}"><button type="button" class="btn btn-primary">PPC Daily</button></a>
<hr></div>
<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="CampaignPPC">
    <table align="center" width="90%" class="table table-striped table-bordered">
        

<tr>





                       

                      <td><div class="table-header-column" id=''>
                        Campaign                    </div></td>
                      <td><div class="table-header-column" id=''>

                        Budget                      </div><td>
                      <td><div class="table-header-column" id=''>

                        Total Spend                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Clicks                      </div></td>
                      <td><div class="table-header-column" id=''>

                        Impressions                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Avg CPC                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Calls                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Unq Calls                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Goals                     </div></td>
                      <td><div class="table-header-column" id=''>

                        CPL Goals                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Calls > 45s
                      </div></td>
                      <td><div class="table-header-column" id=''>

                        CTR                     </div></td>
                      <td><div class="table-header-column" id=''>

                        Total CPL                     </div></td>

                    
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
  <table align="center" width="90%" class="table table-striped">
         <div class="collapsable_section"  id="sec_6" style="display:block">

<tr>





                        <div class="grid_3">
                <div class="table-grid">


                    <div class="clear"></div>

                    <div class="table-header">

                      
                <tr class="">

                  <th class="">
                    Campaign Name
                  </th>
                  <th class="">
                    Visits
                  </th>
                  <th class="">
                    Clicks
                  </th>
                  <th class="">
                    PPC Calls | Unique
                  </th>
                  <th class="">
                    Call Conv %
                  </th>
                  <th class="">
                    PPC Goals
                  </th>
                  <th class="">
                    PPC Emails
                  </th>
                  <th class="">
                    All PPC Conv %
                  </th>
                  <th class="">
                    Bounce Rate
                  </th>
                  <th class="">
                    Manage
                  </th>

                </tr>
<!-- 2018-02-20 00:00:00 2018-02-21 00:00:00 2018-02-20 2018-02-20 -->
<!-- 2018-02-20 00:00:00 --- 2018-02-21 00:00:00-->
<tr class='even'>
    <td class=' even tall_line_height'>
        ADgainer Main Site
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=2b15b046ee8e172fc398eedd0efe22be&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
        <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        ADgainer KK Site
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=5e391fdc28041ad372488d3d4a0671e9&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
       <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        Super Pages
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=952e8ab2c1640fe4b6a630ad5ecf37ce&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        New Multi Campaign
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=8da7ce86124f3d9509b336e495cd973d&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        main site
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=cd269bea65932ebac54bcf5b70b6d5f9&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
       <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        Source2
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=81b62689975466780b925249d2b70afe&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        Ads Network 2
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=68244ad14b88617590316527ffd0f678&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
       <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        renamed
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=9212bd82a3006a4fd6d642144d6c7f77&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        test camp 2
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=ba6b4d182fc22e41e3bbf8d36380f926&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        New Submit Campaign
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=6cbcc3a49d3512658d35a1092b1a9dfd&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        New Submit Campaign
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=f38c384a2a305f7c9c1d745c3df97664&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        Make New Auto
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=2&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Goal%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=3&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Conversion%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=d720d74f3beb79f08150b1b1645b3ff0&rType=2&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
<a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        Make New Auto
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=011bfba5b8f76d5540203642f0bfb986&rType=0&date1=2018-02-20&date2=2018-02-20' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Web%20Traffic&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=011bfba5b8f76d5540203642f0bfb986&rType=0&date1=2018-02-20&date2=2018-02-20&traffic=PPC|DISPLAY' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='https://testenvadgainer.adgainersolutions.com/adgainer/campaign/getTable?report=Call%20Records&account_id=24c9e15e52afc47c225b757e7bee1f9d&campaign_id=011bfba5b8f76d5540203642f0bfb986&rType=1&date1=2018-02-20&date2=2018-02-20&traffic=PPC' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
       <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
       <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        Make New Auto
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
       <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
       <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class=' even tall_line_height'>
        JPN
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
       <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
        <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
       <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='odd'>
    <td class=' odd tall_line_height'>
        jPN2
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                0
                              </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>
        <a href='{{ url('/management') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/settings.png' alt='Manage' />
        </a> &nbsp;&nbsp;
       <a href="{{url('newCampaign')}}">
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png' alt='Edit' />
        </a>&nbsp;&nbsp;
       <a href='{{ url('/delect') }}'>
            <img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/cancel.png' alt='Delete' />
        </a>
    </td>
</tr>
<tr class='even'>
    <td class='  tall_line_height'>
        --
    </td>
    <td class='  tall_line_height'>
        <a ='' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a ='
    ' target='_blank'>
                                  0
                                </a>
    </td>
    <td class='  tall_line_height'>
        <a class='noUnderline' ='' target='_blank'>
                                  0 | 0
                                </a>
    </td>
    <td class='  tall_line_height'>
        0

    </td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>0</td>
    <td class='  tall_line_height'>&nbsp;</td>
    <td class='  tall_line_height'>&nbsp;</td>
</tr>
</tbody>
</table>
  </div>

<div role="tabpanel" class="tab-pane" id="alltrackingdata">
<table align="center" id="customers">
 <tr>
 <div class="grid_3">
<div class="table-grid">
<div class="table-header">
<td><div class="table-header-column" id=''>Campaign Name                 </div></td>
<td><div class="table-header-column" id=''>All visits                </div></td>
<td><div class="table-header-column" id=''>All clicks                    </div></td>
<td><div class="table-header-column" id=''>PPC                   </div></td>
<td><div class="table-header-column" id=''>Display                 </div></td>
<td><div class="table-header-column" id=''>Organic                 </div></td>
<td><div class="table-header-column" id=''>Direct</div></td>
<td><div class="table-header-column" id=''>Call | Unique                      </div></td>
<td><div class="table-header-column" id=''>Call conv%                  </div></td>
<td><div class="table-header-column" id=''>Goals                   </div></td>
<td><div class="table-header-column" id=''>Email                   </div></td>
<td><div class="table-header-column" id=''>All Convs                   </div></td>
<td><div class="table-header-column" id=''>All Conv%                 </div></td></div></tr>
                @if($result)
                @foreach($result as $key => $data)
                    <td>{{$data->campaign_name}}</td>
                    <td><a href="">all visit</a></td>
                    <td><a href="">{{$data->clicksThresh}}</a></td> 
                    <td><a href="">{{$data->ppc_markup}}</a></td> 
                    <td><a href="">display</a></td>
                    <td><a href="">organic</a></td>
                    <td><a href="">Direct</a></td>
                    <td><a href="">{{$data->avgCalls}}</a></td>
                    <td><a href="">{{$data->avgConversions}}</a></td> 
                    <td><a href="">{{$data->goalsThresh}}</a></td> 
                    <td>{{$data->emailsThresh}}</td> 
                    <td><a href="">{{$data->convsThresh}}</a></td>  
                    <td>{{$data->avgCalls}}</td>
                    
                    </tr>
                @endforeach
                @else
                            <label class="label label-danger">No Campaign Found....</label>
                 @endif

                </div>
                            
            </div>
            
</table>
  </div>
   <div role="tabpanel" class="tab-pane" id="last30dayConversions">
  <div id="da-content-area" style="margin-left:30px">
                        <div class="clear"></div>
          
            

<h6>Account Conversions Last 30 Days</h6>
<embed src="https://www.gstatic.com/charts/annotatedtimeline/0/en/chart.swf" width="850" height="350">
</div>

  </div>
  
   <div role="tabpanel" class="tab-pane" id="mapview">
   <div>

<label>Setting:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Campaign: <select>
               <option>Select a Campagin (option) </option>
         <option>takehiro_ct</option>
         </select><br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Traffic Type:<select>
        <option>All option </option>
         <option>PPC</option>
         <option>organic </option>
         <option>Dispaly</option>
         <option>DIRECT</option>
         </select><br><br>
         
         
         <label>Calls Only:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" id="look_archive" />&nbsp;&nbsp;
        All calls<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="unique_calls" />&nbsp;&nbsp;Only Unique Calls<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;<input type="radio" id="look_archive" />&nbsp;&nbsp;All trafic<br>
         
         
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/map') }}">
                        <button id="clearAccount">Open map</button></a></td>
        
         </div>
  </div>
  
  <div role="tabpanel" class="tab-pane" id="graphdata">
   

    

          <div id="chart_div1" style="width: 450px; height: 250px; float:left; margin:0 10px 0 50px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 400px; height: 200px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="400" height="200" aria-label="A chart." style="overflow: hidden;"><defs id="defs"></defs><rect x="0" y="0" width="400" height="200" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="67" y="22.85" font-family="Arial" font-size="11" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Account Traffic Source</text><rect x="67" y="13.5" width="267" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><text text-anchor="middle" x="200.5" y="103.85" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#000000">No data</text><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Source</th><th>Visits per Source</th></tr></thead><tbody></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 410px; white-space: nowrap; font-family: Arial; font-size: 11px;">No data</div><div></div></div></div>
          <div id="chart_div2" style="width: 450px; height: 250px; float:left; margin:0 10px 0 50px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 400px; height: 200px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="400" height="200" aria-label="A chart." style="overflow: hidden;"><defs id="defs"></defs><rect x="0" y="0" width="400" height="200" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="67" y="22.85" font-family="Arial" font-size="11" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Account Call Source</text><rect x="67" y="13.5" width="267" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><text text-anchor="middle" x="200.5" y="103.85" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#000000">No data</text><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Source</th><th>Calls per Source</th></tr></thead><tbody></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 410px; white-space: nowrap; font-family: Arial; font-size: 11px;">No data</div><div></div></div></div>



          <div id="chart_div3" style="width: 450px; height: 250px; float:left; margin:0 10px 0 50px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 400px; height: 200px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="400" height="200" aria-label="A chart." style="overflow: hidden;"><defs id="defs"></defs><rect x="0" y="0" width="400" height="200" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="67" y="22.85" font-family="Arial" font-size="11" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Account Conversion Referrals</text><rect x="67" y="13.5" width="267" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><text text-anchor="middle" x="200.5" y="103.85" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#000000">No data</text><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Source</th><th>Conversion Source</th></tr></thead><tbody></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 410px; white-space: nowrap; font-family: Arial; font-size: 11px;">No data</div><div></div></div></div>
          <div id="chart_div4" style="width: 450px; height: 250px; float:left; margin:0 10px 0 50px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 400px; height: 200px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="400" height="200" aria-label="A chart." style="overflow: hidden;"><defs id="defs"></defs><rect x="0" y="0" width="400" height="200" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="67" y="22.85" font-family="Arial" font-size="11" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Account Conversion Types</text><rect x="67" y="13.5" width="267" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><text text-anchor="middle" x="200.5" y="103.85" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#000000">No data</text><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Source</th><th>Conversion Traffic</th></tr></thead><tbody></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 410px; white-space: nowrap; font-family: Arial; font-size: 11px;">No data</div><div></div></div></div>

          

      
  </div>
  <!--  Account Camp List -->
  <div role="tabpanel" class="tab-pane" id="abc" >
<table align="center" id="customers">
   
          <div class="grid_3">
          <div class="table-grid">
           <tr> <thead> <div class="table-header">
                      <td><div class="table-header-column" id=''> Name              </div></td>
                      <td><div class="table-header-column" id=''>Track Type               </div></td>
                      <td><div class="table-header-column" id=''>Track Window            </div></td>
                      <td><div class="table-header-column" id=''>Default Number                  </div></td>
                      <td><div class="table-header-column" id=''>Type                  </div></td>
                      <td><div class="table-header-column" id=''>Goals                 </div></td>
                      <td><div class="table-header-column" id=''> Record Calls        </div></td>
                      <td><div class="table-header-column" id=''>Active                 </div></td>

                      <td><div class="table-header-column" id=''>Edit / Details   </div></td>

                  </div></thead></tr>
          <tr>
                   @if($result)
                    @foreach($result as $key => $data)
                        <td>{{$data->campaign_name}}</td>
                        <td>{{$data->tracking_campaign_type}}</td>
                        <td>{{$data->device_tracking}}</td>
                        <td>{{$data->default_number}}</td>
                        <td>{{$data->tracking_type}}</td>
                        <td>{{$data->avgCalls}}</td>
                        <td>no</td>
                        <td>yes</td>
                        <td> <button type="button" class="btn btn-default btn-sm"  id="color">
                            <span class="glyphicon glyphicon-pencil" id="color"></span>&nbsp;&nbsp;
                            </button>
                                  <a href='{{ url('/management') }}'><button type="button" class="btn btn-default btn-sm"  id="color">
                                  <span class="glyphicon glyphicon-th" id="color"></span> &nbsp;&nbsp;
                                  </button></a></td>
          </tr>
                     @endforeach
                      @else
                            <label class="label label-danger">No Account Campaign List Found....</label>
            @endif
                      
              </div>                
            </div>
           
</table>

 </div>


 <!--  camp Goal  -->
  <div role="tabpanel" class="tab-pane" id="campaigngoals">
  
   <table align="center" id="customers">

    <tr> <td> Campaign   </td>
          <td>  #  </td>
          <td>  Goal </td>
          <td>  Goal URL  </td>
          <td>  CPL Goal </td>
          <td>  Hit Count </td></tr>
    <tr>
      @if($result)

      @foreach($result as $count => $data)
        
        <td>{{$data->campaign_name}}</td>
        <td>{{++$count}}</td>
        <td>{{$data->goal1Memo}}</td>
        <td>{{$data->goal1}}</td>

        <td>cpl</td>
        <td>hitcount</td>
      </tr>

      <tr><td></td>
        <td>{{++$count}}</td> 
        <td>{{$data->goal2Memo}}</td>
        <td>{{$data->goal2}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal3Memo}}</td>
        <td>{{$data->goal3}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal4Memo}}</td>
        <td>{{$data->goal4}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal5Memo}}</td>
        <td>{{$data->goal5}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
        <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal6Memo}}</td>
        <td>{{$data->goal6}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal7Memo}}</td>
        <td>{{$data->goal8}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal9Memo}}</td>
        <td>{{$data->goal9}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>
    <tr><td></td>
        <td>{{++$count}}</td>
        <td>{{$data->goal10Memo}}</td>
        <td>{{$data->goal10}}</td>
        <td>cpl</td>
        <td>hitcount</td></tr>

    @endforeach

    @else
        <label class="label label-danger">No  Campaign Goal Found....</label>
    @endif
    </table>
    </div>
   
  </form>
</body></div>
  </div>
  
 
@endsection
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  .btn-grid
{
    margin: -2px 0;
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
.shadow{
width:100px;
heigth:25;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
.scrollit{
overflow:scroll;
height:300px;
weight:300px;
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

 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

          <script type="text/javascript">
                        google.load("visualization", "1", {packages: ["corechart"]});
                        google.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Source', 'Visits per Source'],
                
                            ]);

                            var options = {
                                title: 'Account Traffic Source'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
                            chart.draw(data, options);
                        }
          </script>

          <script type="text/javascript">
                        google.load("visualization", "1", {packages: ["corechart"]});
                        google.setOnLoadCallback(drawChart1);
                        function drawChart1() {
                            var data = google.visualization.arrayToDataTable([
                                ['Source', 'Calls per Source'],
                
                            ]);

                            var options = {
                                title: 'Account Call Source'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                            chart.draw(data, options);
                        }
          </script>

          <script type="text/javascript">
                        google.load("visualization", "1", {packages: ["corechart"]});
                        google.setOnLoadCallback(drawChart2);
                        function drawChart2() {
                            var data = google.visualization.arrayToDataTable([
                                ['Source', 'Conversion Traffic'],
                
                            ]);

                            var options = {
                                title: 'Account Conversion Types'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
                            chart.draw(data, options);
                        }
          </script>

          <script type="text/javascript">
                        google.load("visualization", "1", {packages: ["corechart"]});
                        google.setOnLoadCallback(drawChart3);
                        function drawChart3() {
                            var data = google.visualization.arrayToDataTable([
                                ['Source', 'Conversion Source'],
                
                            ]);

                            var options = {
                                title: 'Account Conversion Referrals'
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
                            chart.draw(data, options);
                        }
          </script>
<script type="text/javascript">

            // When the document is ready http://www.expertphp.in/article/bootstrap-datepicker-example-text-input-with-specifying-date-format
            $(document).ready(function () {
                
                $('input[name="date1"]').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
       
</script>
@endsection
