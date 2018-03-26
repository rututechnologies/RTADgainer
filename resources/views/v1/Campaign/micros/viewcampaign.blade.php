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
													
														

													
													
														&nbsp;&nbsp;&nbsp;  Account:  <input type="text" id="default" list="languages" placeholder="Search An Account" onkeypress="change()" required>
          <datalist id="languages">           
            <option value="1015VM_ワンクリック詐欺EL">
            <option value="1030 アドウェイズテスト">
            <option value="1039VM_エスケージ株式会社">
            <option value="1057 AF_Me_四ツ谷ローズクリニック">
            <option value="1059 マーケットエンタープライズ">
            <option value="1074タウ">
            <option value="1094 CA_湘南美容外科">
            <option value="224Any-RC">
            <option value="234Any おそうじ革命[CR]">
            <option value="249Any-Ecostyle">
            <option value="258okkanri">
            <option value="263Origami-Takehiro">
            <option value="267Any-MasterPiece">
            <option value="291Gtyle">
            <option value="292siemple-yotuba">
            <option value="2nd new acct">
            <option value="307ランド">
            <option value="332THE IMPLANT">
            <option value="344ビートレーディング">
            <option value="357Nakamura-law">
            <option value="366万力">
            <option value="389レガシィ">
            <option value="390ZCルクス2">
            <option value="392フレックスインターナショナル">
            <option value="399弁護士ドットコム">
            <option value="HTML">
            <option value="423エーピーカンパニー">
            <option value="436グレイス">
            <option value="450ARA2">
            <option value="454日本スマイル">
            <option value="455ダイコウメディカル">
            <option value="469マグマダイエット">
            <option value="481T&W">
            <option value="501CAN">
            <option value="504カーブスジャパン">
            <option value="505ジェイック">
            <option value="513aun_ビートレーディング">
            <option value="518Kireimo">
            <option value="540DS松原クリニック">
            <option value="577OSマイト">
            <option value="600DSケイタイゴッド">
            <option value="601DSルクス">
            <option value="605サンキョークリーン">
            <option value="611SHIROFUNEテスト">
            <option value="703DSルクス車買取">
            <option value="724日本総合 転職道.com">
            <option value="738 フルスピード_くすの木法律事務所">
            <option value="745受験ドクター">
            <option value="752bloom_ST">
            <option value="754みんれび">
            <option value="771スカイダイニング">
            <option value="793日本駐車場開発">
            <option value="800都市ガスサービス">
            <option value="801スターティアラボ">
            <option value="810 AF_OS_トレジャートレーディング">
            <option value="819AFTR_MEDIX">
            <option value="838SLSハイパーロックレスキュー">
            <option value="843AF_SHすみれ海浜幕張">
            <option value="844AF_SHすみれ渋谷">
            <option value="845AF_SHすみれ宮益坂">
            <option value="848 フルスピード_カルド上石神井">
            <option value="849any光コラボ_引越">
            <option value="850any光コラボ_転用">
            <option value="859minrevi">
            <option value="869株式会社メーカーズST">
            <option value="870aun株式会社33">
            <option value="871JB_大塚美容整形外科">
            <option value="880 コネクト">
            <option value="894 AF_OS_フォーマルクライン">
            <option value="895ネット誹謗中傷コンシェルジュST">
            <option value="952イートラスト">
            <option value="964SMC税理士法人">
            <option value="966会議室セレクト">
            <option value="972ウルトラバイヤープラス">
            <option value="973株式会社ハーツワークス">
            <option value="974シロクマ整体院">
            <option value="989ウルトラバイヤー">
            <option value="ADgainer Inc2">
            <option value="ADgainer Inc">
            <option value="ADgainer Japan Office">
            <option value="ADgainer">
            <option value="AE Tuning1">
            <option value="AMV Air Conditioning, Inc.">
            <option value="Advanced Skin Therapy">
            <option value="America/Los_Angeles">
            <option value="Apollo Plumbing">
            <option value="BCJ-Chestertax">
            <option value="BCJ-Livent">
            <option value="CINH-privatesalon">
            <option value="cyberscene-suidoukyukyusha">
            <option value="eBLEST">
            <option value="eMnet">
            <option value="erer">
            <option value="GoGoClean">
            <option value="GoldStandard-REVE">
            <option value="Grand Monde">
            <option value="Hyper Advanced (Christian)">
            <option value="IKKO">
            <option value="J-B">
            <option value="KML Access">
            <option value="MR">
            <option value="Mach50">
            <option value="Mattress City">
            <option value="New SP Test Account">
            <option value="new account">
            <option value="new acct">
            <option value="new test account 929">
            <option value="Nihon Energy Management">
            <option value="North Cascade Ford PPC">
            <option value="North Coast Auto">
            <option value="Northwest Motorsports">
            <option value="ORGANIC TRACKING">
            <option value="onoqnwono">
            <option value="Rukusu">
            <option value="Schick Shadel">
            <option value="Takamura Shika">
            <option value="Test Account">
            <option value="test acct">
            <option value="test111">
            <option value="Varspec">
            <option value="Westin Tokyo">
            <option value="広島中央クリニック">
          </datalist>
  

													
												
														&nbsp;&nbsp;&nbsp;Time Zone:<select name="time_zone" id="time_zone">
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
   @if(count($test)>0)

<table class="table table-striped table-bordered table-hover dataTables-example" id="ppctracking">
        <thead>
            <th>Campaign Name  </th>
                      <th>Click </th>
                      <th>Calls </th>
                      <th>Calls </th>
                      <th>Unique call  </th>
                      <th>Call Conv%  </th>
                      <th>Goal</th>
                      <th> Email</th>
                      <th> All convs </th>
                        <th> All conv%    </th>
                      
        </thead>
        <tbody>
            @foreach($test as $tata)
                <tr>
                        
    <td >{{$tata->campaign_name}}</td>
    <td>{{$tata->clicksThresh}}</td>
    <td>{{$tata->callsThresh}}</td>
    <td>{{$tata->avgCalls}}</td>
    <td>{{$tata->avgConversions}}</td>
    <td> {{$tata->goal1_inc}}</td>
    <td>{{$tata->emailsThresh}}</td>
    <td>{{$tata->conversion_flag}}</td>
    <td>{{$tata->avgConversions}}</td>
<td>{{$tata->avgConversions}}</td>

                </tr>
            @endforeach

        </tbody>
    </table>



@else
    <label class="label label-danger">No PPc Tracking Data found.</label>
 @endif
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

												Goals										</div></td>
												<td><div class="table-header-column" id=''>

												Email										</div></td>
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
			   
			   
			   			  			  <br>
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
											<td>Hit Count</td>
											

										
										</tr>
										<tr>
										<td>takehiro_ct</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td>NO</td>
										<td>0</td>
										</tr>
										</tr>
										<tr>
										<td></td>
										<td>2</td>
										<td></td>
										<td></td>
										<td></td>
										<td>NO</td>
										<td>0</td>
										</tr>
										</tr>
										<tr>
										<td></td>
										<td>3</td>
										<td></td>
										<td></td>
										<td></td>
										<td>NO</td>
										<td>0</td>
										</tr>
										</tr>
										<tr>
										<td></td>
										<td>4</td>
										<td></td>
										<td></td>
										<td></td>
										<td>NO</td>
										<td>0</td>
										</tr>
										</table></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="acckeyword">
@if(count($test)>0)

<table class="table table-striped table-bordered table-hover dataTables-example" id="acckeyword">
        <thead>
            <th>Keyword</th> 
    <th>Match Type</th> 
    <th>Click</th> 
    <th>Convs</th> 
    <th>Conv%</th>
<th>Calls</th>
<th>Unq.call</th>
<th>unq.calls :-1m</th>
<th>Call Conv%</th>
<th>Goal 1</th>
<th>Goal 2</th>
<th>Goal 3</th>
<th>Goal 4</th>
<th>Email</th>
        </thead>
        <tbody>
            @foreach($test as $tata)
                <tr>
                        
    <td >Keyword</td>
    <td>Match Type</td>
    <td>{{$tata->clicksThresh}}</td>
    <td>{{$tata->avgConversions}}</td>
    <td>{{$tata->avgConversions}}</td>
    <td> {{$tata->callsThresh}}</td>
    <td>{{$tata->avgCalls}}</td>
    <td>Unq.calls:-1m</td>
    <td>{{$tata->avgCalls}}</td>
<td>{{$tata-> goal1_inc}}</td>
<td>{{$tata->goal2_inc}}</td>
<td>{{$tata->goal3_inc}}</td>
<td>{{$tata->goal4_inc}}</td>
<td>{{$tata->emailsThresh}}</td> 

                </tr>
            @endforeach

        </tbody>
    </table>



@else
    <label class="label label-danger">No Account Keyword Data found.</label>
 @endif
      </table>

</div>


            <div id="push"></div>
           
    

   		</div>

@endsection
@section('scripts')
<script>
$(document).ready(function (){
	$('#ppc').hide();
  $('#all').hide();
   $('#cam').hide();
    $('#map').hide();
    $('#campaigl').hide();
    $('#acc').hide();
    $('#grap').hide();
	$('#updateAccountOverviewDate').click(function(){
    //Some code
	 $('#ppc').show();
  $('#all').show();
	  $('#cam').show();
     $('#map').show();
     $('#campaigl').show();
     $('#acc').show();
     $('#grap').show();
});
});
</script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

            // When the document is ready http://www.expertphp.in/article/bootstrap-datepicker-example-text-input-with-specifying-date-format
            $(document).ready(function () {
                
                $('input[name="date1"]').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
       
</script>
<script>
var dataList = document.getElementById('json-datalist');
var input = document.getElementById('ajax');

// Create a new XMLHttpRequest.
var request = new XMLHttpRequest();

// Handle state changes for the request.
request.onreadystatechange = function(response) {
  if (request.readyState === 4) {
    if (request.status === 200) {
      // Parse the JSON
      var jsonOptions = JSON.parse(request.responseText);
  
      // Loop over the JSON array.
      jsonOptions.forEach(function(item) {
        // Create a new <option> element.
        var option = document.createElement('option');
        // Set the value using the item in the JSON array.
        option.value = item;
        // Add the <option> element to the <datalist>.
        dataList.appendChild(option);
      });
      
      // Update the placeholder text.
      input.placeholder = "e.g. datalist";
    } else {
      // An error occured :(
      input.placeholder = "Couldn't load datalist options :(";
    }
  }
};

// Update the placeholder text.
input.placeholder = "Loading options...";

// Set up and make the request.
request.open('GET', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/4621/html-elements.json', true);
request.send();

function change() 
{
document.getElementById("updateAccountOverviewDate").innerHTML="Update";
}
</script>  
@endsection
