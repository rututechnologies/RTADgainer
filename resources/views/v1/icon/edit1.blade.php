@extends('layouts.app')
@section('title','Edit')

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
                <span>
                    Report
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i>edit Report</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<div class="grid_4" style="margin:50px">
                                                    <div class="da-panel">
                                
                <div class="da-panel-header">
                    <span class="da-panel-title">
                        <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images//icons/black/16/pencil.png" alt="">
                    <b> Edit Report</b>
                    </span><hr>
                </div>
                
                <div class="da-panel-content"> 
                    <form >
                        <div class="da-form-row">
                            
                            <div class="da-form-item large">
                            <table> <tr><td><div class="rowName">
                                    Report Name:
                                </div></td>
                                <td><div class="rowValue">
                                    <input type="text" name="report_name" class="req" value="ag Calls"> <br>
                                </div></td></tr>
                            <tr><td><div class="rowName">
                                    Report:
                                </div></td>
                                <td><div class="rowValue">
                                    <select name="data_report" id="" class="req"><option value="Custom Field Report::Row">Custom Field Report (Row) </option> <option value="Calls Report::Row"> Calls Report (Row) </option> <option value="Web Traffic Report::Row"> Web Traffic Report (Row) </option> <option value="Conversions Report::Day"> Conversions Report (Day) </option> <option value="Calls Report::Day"> Calls Report (Day) </option> <option value="Account Calls Report::Campaign"> Account Calls Report (Campaign) </option> <option value="Campaign Calls Report::Row"> Campaign Calls Report (Row) </option> <option value="Campaign Calls Report::Day"> Campaign Calls Report (Day) </option> <option value="PPC Report::Day"> PPC Report (Day) </option> <option value="PPC Traffic::Day"> PPC Traffic (Day) </option> </select></div></td></tr>
                                
                                
                                <tr><td><div class="rowName">
                                    Custom Report Records:  
                                </div></td>
                                <td><div class="rowValue">
                                    
                                    
                                    <select class="" id="rType" name="rType">
                                    
                                    
                                        <option value="0">All Web Traffic w/ Web Based Calls</option>                                                                   
                                        <option value="1">Calls Only</option>                                                                   
                                        <option value="2">Conversions Only</option>                             
                                        <option value="3">Goals Only</option>                           
                                        <option value="4">All Records</option>                          
                                    </select>
                                    <br>
                                </div></td></tr>
                                
                                
                                <tr><td><div class="rowName">
                                    Account:
                                </div></td>
                            <td><div class="rowValue"> 
                                    <select id="report_account" name="report_account" class="req">
                                        <option value="">Select an Account</option>
                                        <option value="2f0ee35b57077055e481dc9896d07496">1015VM_ワンクリック詐欺EL</option><option value="77e2b7a06a6ed0d997843ddb1cad83e4">1030 アドウェイズテスト</option><option value="56848bc17c93660a942984531631ec66">1039VM_エスケージ株式会社</option><option value="3ad3099801c6d9af1dbc1940cfe438be">1057 AF_Me_四ツ谷ローズクリニック</option><option value="5aa10310366be0aa14aaa80c60f5ac67">1059 マーケットエンタープライズ</option><option value="09403ea3eb07cdbd1e9da1f1baa5204f">1074タウ</option><option value="f1e96465b4ccff30b393962d629d6f62">1094 CA_湘南美容外科</option><option value="30985deb3c9d4e189523b09ea235ebcc">224Any-RC</option><option value="1a2901584a7af4cdf90519e59d827ac7">234Any おそうじ革命[CR]</option><option value="165f79db0091ccc4d6972fbfa6b57356">249Any-Ecostyle</option><option value="fa5b84972e1a331bf8bdb13cdc5d92b2">258okkanri</option><option value="76d7eaeeea2353d0acff9d3666169286">263Origami-Takehiro</option><option value="a417e73937309a207c95cb83c0005c36">267Any-MasterPiece</option><option value="2bf98ed63abe4eba3faa604c267fe066">291Gtyle</option><option value="94cf17a31dbf8769f2984c0872a36d18">292siemple-yotuba</option><option value="4ddb4f0b78dcd0d9db12910bc9e3a4bf">2nd new acct</option><option value="eb16da04984a0aa8f35050044cdfe597">307ランド</option><option value="d6a112ee64e4cc7df6a23a445b3e7512">332THE IMPLANT</option><option value="04ffcda7320dc2b1acac90e267cdf74a">344ビートレーディング</option><option value="a65e937e4ddf6bf6de91bea9891bb177">357Nakamura-law</option><option value="67d1313bcd7ff7e0b8d22a4f749bfd2f">366万力</option><option value="012056cf7bf9ea0b4f3077edfd851520">389レガシィ</option><option value="3689cd138a82eacd9632e591887e881a">390ZCルクス2</option><option value="06cedeb761babe8c27b91f16bbfaf649">392フレックスインターナショナル</option><option value="ba78b73db28a63e3e8a7740582c3dbdb">399弁護士ドットコム</option><option value="104321e1332ce429f9c51b6aa5b81956">423エーピーカンパニー</option><option value="5c1ff57f3c0f6421aa9b2d1ede6d091c">436グレイス</option><option value="7719b71c916fec936b726c407b71c12e">450ARA2</option><option value="596bbc3c2b710ed552650d745ca63613">454日本スマイル</option><option value="56342ec62b6f33e2f2f7f5e435da300e">455ダイコウメディカル</option><option value="0d6e46e06b34bc11a56752f4c0db4e4f">469マグマダイエット</option><option value="a836016ca820908e66ef5e66aada46b8">481T&amp;W</option><option value="fc7cb0c0beee4690f985ebf5d823c7fb">501CAN</option><option value="2cd5770d3ffbdd8a5b3152528b7c81c3">504カーブスジャパン</option><option value="99acd85ef6ed4069cfd908aa034324d7">505ジェイック</option><option value="9738c34f9c6ba128fd4436454c10c7a8">513aun_ビートレーディング</option><option value="8b1f62be8eef3ceb15bd74df1d78f38a">518Kireimo</option><option value="984a3bccf97834d1fae4f6f8b4698bfa">540DS松原クリニック</option><option value="007d82926ce9d761810e67ac3bb017af">577OSマイト</option><option value="a1dd319e4414337a5436b5b754ec0127">600DSケイタイゴッド</option><option value="fdfc6d69e5b8cca1d8ec5626a72eec8a">601DSルクス</option><option value="c943f4c50a9ba985bd9a113be62fa83c">605サンキョークリーン</option><option value="6840c2098b2f2b56e3a8bdfd32941bd0">611SHIROFUNEテスト</option><option value="b28f1c34394a2325253a0037b9ebbdc8">703DSルクス車買取</option><option value="7586dae8779cbc8fa525629d5c1e92ed">724日本総合 転職道.com</option><option value="89d3a3118baf9c2abe4155f051128c78">738 フルスピード_くすの木法律事務所</option><option value="c738202d7cd4fbfd027d9dd5c162bd5d">745受験ドクター</option><option value="0e8d3bd80b68b2143a894b1126577f1e">752bloom_ST</option><option value="e5919dd086b77782e5259e84a464af75">754みんれび</option><option value="8f7124f60ea4a7ce0fb6ed4034d8c028">771スカイダイニング</option><option value="846052445e70f0fc86c31fb3bfa8211c">793日本駐車場開発</option><option value="2ab110261b6d5fdec434b8b73321caaf">800都市ガスサービス</option><option value="a7fb685c5d12586024e7b75aea86f184">801スターティアラボ</option><option value="86af4eee20059f0adcd26ae3fac22a2d">810 AF_OS_トレジャートレーディング</option><option value="e1878b56feb55df95add999e3f08ff01">818 アップルパークDSPKG</option><option value="09c57986be2639fda849facf29945582">819AFTR_MEDIX</option><option value="16cfdd0697c51397895ee2ca740578a0">838SLSハイパーロックレスキュー</option><option value="dc0b7ae8c3ef4174837888ab2e3afaae">843AF_SHすみれ海浜幕張</option><option value="75e33ed0c9c975b534379219d97e01ce">844AF_SHすみれ渋谷</option><option value="c365b1565be6626a60119b87106f4577">845AF_SHすみれ宮益坂</option><option value="e3bfac73e54cef93671c14046aeb927f">848 フルスピード_カルド上石神井</option><option value="3c0471fd98ba26f6da279e4b40cf19c2">849any光コラボ_引越</option><option value="83f0cdab27964a0f8ec8deb570ca7876">850any光コラボ_転用</option><option value="ea046745cdbd8d46f3936d54873472db">859minrevi</option><option value="4ab8fbf9f8be982a55ae55373950245c">869株式会社メーカーズST</option><option value="37d4ba1058bfc61b15a5f3c793edc26e">870aun株式会社33</option><option value="a312d446e28b849dd9b3c4724bf61805">871JB_大塚美容整形外科</option><option value="ac95571c588f5df1abf6594f20a1b7b9">880 コネクト</option><option value="436b124b609857d28fb6d440d0fcc155">894 AF_OS_フォーマルクライン</option><option value="cd7ab64bb909a0a506655b3a7dfe973b">895ネット誹謗中傷コンシェルジュST</option><option value="f4d1bfcbbcefa0de4a495c2f6b7fcb6b">952イートラスト</option><option value="348ace254fb32039bf3ccc8f6858f724">964SMC税理士法人</option><option value="b45e04dc78c83a139255e4011a19b314">966会議室セレクト</option><option value="4bfbfa2ec208742f3eabb79bfccaa597">972ウルトラバイヤープラス</option><option value="48c1385492ec3c9a35626a1bc13d476e">973株式会社ハーツワークス</option><option value="4dc12ce4cf7338867770e4435140834f">974シロクマ整体院</option><option value="5c352c9dcd62957ce5fbd4b100e44001">989ウルトラバイヤー</option><option value="24c9e15e52afc47c225b757e7bee1f9d">ADgainer</option><option value="e3d704f3542b44a621ebed70dc0efe13">ADgainer Inc</option><option value="3c927997d3e4bbadf5ea7a2a1036f858">ADgainer Inc2</option><option value="a7e8707208f37a3e39b4b81a8551c676">ADgainer Japan Office</option><option value="38758042b7e125d22fd7322c6fe475f6">AE Tuning1</option><option value="e170fbd8e2ebc0d88b20861979dddba6">AMV Air Conditioning, Inc.</option><option value="50ee9bc89d15d97d024f4d99caa01197">Advanced Skin Therapy</option><option value="8b3d3e8be9c177e4e63fa8a79e06243d">Apollo Plumbing</option><option value="8c01845d67f0ce47dcfbd78b9fcbf4b1">BCJ-Chestertax</option><option value="18be0a5dcb5b3a196dbaf244449ac9d3">BCJ-Livent</option><option value="3fff9cfac85332ca4b55ca0a696cfef4">CINH-privatesalon</option><option value="4435b6bbec81b357d3299085aed787bd">GoGoClean</option><option value="4d6382645b19bda1d1357826af4fe6a4">GoldStandard-REVE</option><option value="b7786916137132be19e1f5ccf9f7d0a1">Grand Monde</option><option value="b12f2be1508d744d48fa51373b94a6a2">Hyper Advanced (Christian)</option><option value="28dcb1596f953dae6300b706b0665191">IKKO</option><option value="6b96eedcfb77ed12bd27e3bca7d06eb0">J-B</option><option value="7e76526be3a92493f11831d543bb8946">KML Access</option><option value="fa44c780d706e9e7a9c772b97351cedb">MR</option><option value="bd2732e02bd07e6540d37cacf1757f80">Mach50</option><option value="b6c9f62efeb6be919a2d413a4a8ded71">Mattress City</option><option value="11df6cd9f7b18cb532a0ab32dc900cdc">New SP Test Account</option><option value="f617b63689444ec94e9a2ca68293c615">Nihon Energy Management</option><option value="384e44297657dfffdfb31720c024913f">North Cascade Ford PPC</option><option value="b14e26ec94fbc9a10c48edbad4e5bd77">North Coast Auto</option><option value="d52b5ab090360ec577f4bb6993952c73">Northwest Motorsports</option><option value="fedea0bfeeb5ed138b3052baed653a47">ORGANIC TRACKING</option><option value="7f24181524b6dd956be40e895a7ed1cf">Rukusu</option><option value="234d61ae36bb9bc4a392edb137d64478">Schick Shadel</option><option value="f97eac03d5d540093fe533eb6a91e8e4">Takamura Shika</option><option value="35bsm4n4bu4mu5um">Test Account</option><option value="a63fcccb60fb5056f696c3356c0238f5">Varspec</option><option value="8601d10d514bc81c0936e8dc5acf8884">Westin Tokyo</option><option value="5c0437f7f7279ea81d4f88971de8eb1f">adw</option><option value="c246458d9da433f17600704abcc8a680">cyberscene-suidoukyukyusha</option><option value="ff2bd36c14f3d5b0a832d0c1e871d6c2">eBLEST</option><option value="b6cff89752d38e34229d686ecc63839d">eMnet</option><option value="1b365e93ffb403f8c9aaa4af17d7dcb2">erer</option><option value="ce91027a8ce76a85cbc0cc59af238dc9">new account</option><option value="70b719857e6ec6d71266b4c949def8d2">new acct</option><option value="e3ee7494e243580a319919e733f1469a">new test account 929</option><option value="89e3980285790a6fb7247dc9deca31a9">onoqnwono</option><option value="8f69f8432d3ebcffb342e5f43c265e45">test acct</option><option value="ddc9e7780af347644c4e42df34696d05">test111</option><option value="d3804235f81c9120cbcab8b8a3586bf8">広島中央クリニック</option>                                   </select> 
                                </div></td></tr>
                                
                                
                                <tr><td><div class="rowName">
                                    Campaign: 
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select id="report_campaign" name="report_campaign">
                                        <option value="">Select an Account (optional)</option>
                                     </select>   <br>
                                </div></td></tr>
                                
                            <tr><td>    <div class="rowName">
                                    Email Frequency: 
                                    <br>
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select id="duration" name="duration" style="width:90px">
                                        <option value="0">DO NOT SEND</option>
                                        <option value="daily">Daily (Previous Day)</option>
                                        <option value="weekly">Weekly (Last 7 Days)</option>
                                        <option value="monthly">Monthly (Current Month)</option>
                                    </select> |
                                    
                                    <select id="day" name="day" style="width:90px">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                    
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    Hour of the Day: 
                                    <br>
                                </div></td>
                            <td>    <div class="rowValue">                                                  
                                <select id="hour" name="hour" style="width:60px">
                                        <option value="0">0:00</option><option value="1">1:00</option><option value="2">2:00</option><option value="3">3:00</option><option value="4">4:00</option><option value="5">5:00</option><option value="6">6:00</option><option value="7">7:00</option><option value="8">8:00</option><option value="9">9:00</option><option value="10">10:00</option><option value="11">11:00</option><option value="12">12:00</option><option value="13">13:00</option><option value="14">14:00</option><option value="15">15:00</option><option value="16">16:00</option><option value="17">17:00</option><option value="18">18:00</option><option value="19">19:00</option><option value="20">20:00</option><option value="21">21:00</option><option value="22">22:00</option><option value="23">23:00                                     
                                    </option></select>
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    Time Zone: 
                                    <br>
                                </div></td>
                            <td>    <div class="rowValue">                                                  
                                    <select name="time_zone" id="time_zone">
                                            <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                            <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                            <option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
                                            <option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
                                            <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
                                            <option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
                                            <option value="America/Anchorage">(GMT-09:00) Alaska</option>
                                            <option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
                                            <option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
                                            <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                            <option value="America/Denver">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                            <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                            <option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
                                            <option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
                                            <option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                            <option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
                                            <option value="America/Chicago">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                            <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
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
                                        </select>
                                </div></td></tr>
                                
                                
                                
                            <tr><td>    <div class="rowName">
                                    Emails:  
                                    <br>
                                </div></td>
                                <div class="rowValue">
                                    <td><i>Separate by comma</i></td></tr>
                                <tr><td></td><td>   <textarea name="emails"></textarea></td></tr>
                                      <br>
                                </div>
                                
                                
                                <tr><td><div class="rowName">
                                    File Format: 
                                    <br>
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select id="format" name="format">
                                        <option value="CSV">CSV</option>
                                        <option value="PDF">PDF (PPC Report Only)</option>
                                    </select>  <br>
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    Attach File: 
                                    <br>
                                </div></td>
                            <td>    <div class="rowValue">
                                                                        Yes <input type="radio" name="attach_csv" checked="" value="1"> &nbsp;&nbsp;&nbsp; No <input type="radio" name="attach_csv" value="0"> <br>
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    Traffic Type:  
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select class="" id="traffic" name="traffic">
                                        <option value="All">All</option>                                                                    
                                        <option value="PPC">PPC</option>                                                                    
                                        <option value="ORG">ORGANIC</option>                                                                    
                                        <option value="DIRECT">DIRECT</option>                              
                                        <option value="DISPLAY">DISPLAY</option>                            
                                    </select>
                                    <br>
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    CSV Format:  
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select class="shortSel" id="conv_type" name="conv_type">
                                        <option value="UTF-8">UTF-8 (English)</option>                                                                  
                                        <option value="SJIS-win">Shift-JIS (Japanese)</option>                                  
                                    </select>
                                    <br>
                                </div></td></tr>
                                
                                
                            <tr><td>    <div class="rowName">
                                    FTP:  
                                </div></td>
                            <td>    <div class="rowValue">
                                    <select class="" id="ftp_data_id" name="ftp_data_id">
                                        <option value="">No FTP</option>                                                                    
                                                                                <option value="1">208.88.16.130:22 ( manager )</option>                                 
                                                                                <option value="3">ftp.aemporium.com:21 ( u36585400-remote )</option>                                    
                                                                                <option value="15">:0 (  )</option>                                 
                                                                            </select>
                                    <br>
                                </div></td></tr>
                            
                                
                            <tr><td>    <div class="clear">Custom Report Fields:</div></td></tr></table>
                                <div class="da-form-item large" style="height:auto;overflow-x:hidden;width:500px;">
                                    
                                    
                            <table> <div class="campSubSection" style="width: 45%;">    
                                <tr>    <td><b>Campaign Info</b><br></td><td></td>
                                    <div class="clear"></div>
                                    
                            <tr>    <td>    <div class="leftName">Campaign Name:</div></td>
                                <td>     <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="campaign_name" checked="checked">  
                                    </div></td></tr>
                                    
                                    <br><br>
                                    <div class="clear"></div>
                                <tr><td>    <b>Call Information</b><br></td></tr>
                                    <div class="clear"></div>
                                    
                            <tr>    <td>    <div class="leftName">Tracking Phone #:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="phone_number" checked="checked"> 
                                    </div>  </td></tr>                                               
                            <tr><td><div class="leftName">Tracking # Called:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="number_dialed"> 
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Caller Phone #:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="caller_phone" checked="checked"> 
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Caller Location:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="caller_state,caller_country,caller_zip">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Caller Duration:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="call_duration">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Call Time:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="time_of_call">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Caller Name*:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="caller_name">  
                                    </div></td></tr>
                                </div></table>
                            <table >    <div class="campSubSection" style="height:auto;overflow-x:hidden;width:500px">  
                                    
                                    <div class="clear"></div>
                                <tr><td>    <b>Web Tracking Information</b><br></td><td></td></tr>
                                    <div class="clear"></div>
                                    
                                <tr><td>    <div class="leftName">Entry Time: </div></td>
                                <td>     <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="time_stamp">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Location: </div></td>
                                <td>     <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="visitor_city_state">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Lat,Long:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="lat,lng" checked="checked">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Duration:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="time_on_site"> 
                                    </div></td></tr>
                                     
                                <tr><td>    <div class="leftName">Traffic Type:</div></td>
                                <td>     <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="traffic_type">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Keyword:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="keyword">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Match Type: </div></td>
                                <td>     <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="matchtype" checked="checked">  
                                    </div></td></tr>
                                <tr><td>    <div class="leftName">Source:</div></td>
                                <td>     <div class="leftValue">
                                         <input type="checkbox" name="postback_fields[]" value="source" checked="checked">  
                                    </div></td></tr>
                                <tr><td>     <div class="leftName">UTM Content:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="utm_content">  
                                       </div></td></tr>
                            <tr><td>    <div class="leftName">All Goal Pages:</div></td>
                            <td>     <div class="leftValue">
                                     <input type="checkbox" name="postback_fields[]" value="goal_pages">  
                                </div></td></tr>
                            <tr><td>    <div class="leftName">Goal Page 1:</div></td>
                            <td>    <div class="leftValue">
                                    <input type="checkbox" name="postback_fields[]" value="goal1_hit" checked="checked">  
                               </div></td></tr>
                            <tr><td>    <div class="leftName">Goal Page 2:</div></td>
                            <td>    <div class="leftValue">
                                    <input type="checkbox" name="postback_fields[]" value="goal2_hit" checked="checked">  
                               </div></td></tr>
                            <tr><td>    <div class="leftName">Goal Page 3:</div></td>
                            <td>    <div class="leftValue">
                                    <input type="checkbox" name="postback_fields[]" value="goal3_hit" checked="checked">  
                               </div></td></tr>
                            <tr><td>    <div class="leftName">Goal Page 4:</div></td>
                            <td>    <div class="leftValue">
                                    <input type="checkbox" name="postback_fields[]" value="goal4_hit">  
                               </div></td></tr>
                                     
                                     
                                <tr><td>    <div class="leftName">Custom 1:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom1">  
                                   </div></td></tr>
                                <tr><td>    <div class="leftName">Custom 2:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom2">  
                                   </div></td></tr>
                                <tr><td>   <div class="leftName">Custom 3:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom3">  
                                   </div></td></tr>
                                <tr><td>    <div class="leftName">Custom 4:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom4">  
                                   </div></td></tr>
                                <tr><td>    <div class="leftName">Custom 5:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom5">  
                                   </div></td></tr>
                                <tr><td>   <div class="leftName">Custom 6:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom6">  
                                   </div></td></tr>
                                <tr><td>    <div class="leftName">Custom 7:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom7">  
                                   </div></td></tr>
                                <tr><td>    <div class="leftName">Custom 8:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom8">  
                                   </div></td></tr>
                                <tr><td>   <div class="leftName">Custom 9:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom9">  
                                   </div></td></tr>
                                <tr><td>   <div class="leftName">Custom 10:</div></td>
                                <td>    <div class="leftValue">
                                        <input type="checkbox" name="postback_fields[]" value="custom10">  
                                   </div></td></tr>
                                     
                                    <div class="clear"></div>
                                </div>  </table>  
                                     
                                </div>      
                            
                            </div>
                        </div>
                        
                         
                        
                        
                        
                            <input type="submit" value="Save Changes" class="da-button green">
                        
                    </form>
                </table>

<label>
                                            
                                                User Created Reports
                                        
                                        </label><br><br><>
                                        <table>
                                            
                                            <td>
                                                Report
                                            </td>
                                            <td>
                                                Account
                                            </td>
                                            <td>
                                                Campaign
                                            </td>
                                            <td>
                                                Traffic
                                            </td>
                                            <td>
                                                 Time Zone
                                            </td>                                               
                                            <td>
                                                Emails
                                            </td>
                                            <td>
                                                Frequency
                                            </td>
                                            <td>
                                                Generate
                                            </td>
                                            <td>
                                                Update/Delete
                                            </td>
                                                                            
                                        </tr>
                                        
                                    <tr>    
                                    <td>Calls (Row)</td><td>Varspec</td><td>All</td><td>All</td> 
                                                <td>Asia/Tokyo
                                            </td><td></td><td>0  Monday 0:00</td>
                                                <td><img id='gen_report_1695' class='gen_report' src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/doc_excel_csv.png' /></td>
                                                
                                            <td> <button class='updateUserReport' id='upd_1695' >Update</button> <button class='deleteUserReport' id='del_1695' >Delete</button> </td></tr><tr><td>ag calls (Row)</td><td>ADgainer</td><td>All</td><td>All</td> 
                                                <td>America/New_York</td><td></td>
                                            <td>daily  Tuesday 7:00</td>
                                                <td><img id='gen_report_1709' class='gen_report' src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/doc_excel_csv.png' /></td>
                                                 
                                             <td><button class='updateUserReport' id='upd_1709' >Update</button> <button class='deleteUserReport' id='del_1709' >Delete</button></td></tr><tr> <td>Calls (Row)</td><td>ADgainer</td><td>All</td><td>All</td> 
                                                <td>America/Los_Angeles</td>
                                            <td>christian@cgnewyork.com</td><td>0  Monday 0:00</td>
                                                <td><img id='gen_report_1763' class='gen_report' src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/doc_excel_csv.png' /></td>
                                                 
                                            <td><button class='updateUserReport' id='upd_1763' >Update</button> <button class='deleteUserReport' id='del_1763' >Delete</button></td></tr><tr> <td>Calls2 (Row)</td><td>ADgainer</td><td>All</td><td>All</td>
                                                <td>America/Los_Angeles</td><td></td>
                                            <td>0  Monday 0:00</td>
                                                <td><img id='gen_report_1765' class='gen_report' src='https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/color/doc_excel_csv.png' /></td>
                                            <td> <button class='updateUserReport' id='upd_1765' >Update</button> <button class='deleteUserReport' id='del_1765' >Delete</button> </td></tr></div>                                               
                    
        <table>




</div>
 @endsection

 
@section('scripts')
 
@endsection