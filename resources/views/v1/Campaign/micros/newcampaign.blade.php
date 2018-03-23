@extends('layouts.app')
@section('title','Campaign Tool ')

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
                    Campaign
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/campaign')}}"><i
                                    class="fa fa-dashboard"></i> Campaign</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> New Campaign</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<h2 align="center"><b>campaign Setup</b></h2><hr>

<form>
<div class="container tabs-wrap">
 
<nav class="navbar navbar-default">
<div class="navbar-header">
      <a class="navbar-brand" href="#"><b>AD</b>gainer</a>
    </div>
  <ul class="nav navbar-nav" role="tablist" id="navtab">
    <li role="presentation" class="active">
      <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab" aria-expanded="true">General Settings</a>
    </li>
    <li>
      <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">Conversions</a>
    </li>
    <li>
      <a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Call Tracking</a>
    </li>
    <li>
      <a href="#notification" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Notifications</a>
    </li>
    <li>
      <a href="#filering" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Filtering</a>
    </li>
  </ul>
</nav>
<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="billing">
    <table id="table1" cellspacing="15px" cellpadding="15%" style="margin-left: 150px">
<tr>
<td>Campaign name:-</td>
<td><input type="text" name="campaign_name" /></td>
</tr>
<tr>
<td>Select Account or Create New Account:-</td>
<td><select name="account" id="account">
<option value="">Select an Account</option>
<option value="NEW">New Account</option>
<option>1015VM_ワンクリック詐欺EL</option>
<option>1030 アドウェイズテスト</option>
<option>1039VM_エスケージ株式会社</option>
<option>1057 AF_Me_四ツ谷ローズクリニック</option>
<option>1059 マーケットエンタープライズ</option>
<option>1074タウ</option>
<option>1094 CA_湘南美容外科</option>
<option>224Any-RC</option>
<option>234Any おそうじ革命[CR]</option>
<option>249Any-Ecostyle</option>
<option>258okkanri</option>
<option>263Origami-Takehiro</option>
<option>267Any-MasterPiece</option>
<option>291Gtyle</option>
<option>292siemple-yotuba</option>
<option>2nd new acct</option>
<option>307ランド</option>
<option>332THE IMPLANT</option>
<option>344ビートレーディング</option>
<option>357Nakamura-law</option>
<option>366万力</option>
<option>389レガシィ</option>
<option>390ZCルクス2</option>
<option>392フレックスインターナショナル</option>
<option>399弁護士ドットコム</option>
<option>423エーピーカンパニー</option>
<option>436グレイス</option>
<option>450ARA2</option>
<option>454日本スマイル</option>
<option>455ダイコウメディカル</option>
<option>469マグマダイエット</option>
<option>481T&W </option>
<option>501CAN</option>
<option>504カーブスジャパン</option>
<option >505ジェイック</option>
<option >513aun_ビートレーディング</option>
<option >518Kireimo</option>
<option >540DS松原クリニック</option>
<option >577OSマイト</option>
<option >600DSケイタイゴッド</option>
<option >601DSルクス</option>
<option>605サンキョークリーン</option>
<option value='6840c2098b2f2b56e3a8bdfd32941bd0'>611SHIROFUNEテスト</option>
<option value='b28f1c34394a2325253a0037b9ebbdc8'>703DSルクス車買取</option>
<option value='7586dae8779cbc8fa525629d5c1e92ed'>724日本総合 転職道.com</option>
<option value='89d3a3118baf9c2abe4155f051128c78'>738 フルスピード_くすの木法律事務所</option>
<option value='c738202d7cd4fbfd027d9dd5c162bd5d'>745受験ドクター</option>
<option value='0e8d3bd80b68b2143a894b1126577f1e'>752bloom_ST</option>
<option value='e5919dd086b77782e5259e84a464af75'>754みんれび</option>
<option value='8f7124f60ea4a7ce0fb6ed4034d8c028'>771スカイダイニング</option>
<option value='846052445e70f0fc86c31fb3bfa8211c'>793日本駐車場開発</option>
<option value='2ab110261b6d5fdec434b8b73321caaf'>800都市ガスサービス</option>
<option value='a7fb685c5d12586024e7b75aea86f184'>801スターティアラボ</option>
<option value='86af4eee20059f0adcd26ae3fac22a2d'>810 AF_OS_トレジャートレーディング</option>
<option value='e1878b56feb55df95add999e3f08ff01'>818 アップルパークDSPKG</option>
<option value='09c57986be2639fda849facf29945582'>819AFTR_MEDIX</option>
<option value='16cfdd0697c51397895ee2ca740578a0'>838SLSハイパーロックレスキュー</option>
<option value='dc0b7ae8c3ef4174837888ab2e3afaae'>843AF_SHすみれ海浜幕張</option>
<option value='75e33ed0c9c975b534379219d97e01ce'>844AF_SHすみれ渋谷</option>
<option value='c365b1565be6626a60119b87106f4577'>845AF_SHすみれ宮益坂</option>
<option value='e3bfac73e54cef93671c14046aeb927f'>848 フルスピード_カルド上石神井</option>
<option value='3c0471fd98ba26f6da279e4b40cf19c2'>849any光コラボ_引越</option>
<option value='83f0cdab27964a0f8ec8deb570ca7876'>850any光コラボ_転用</option>
<option value='ea046745cdbd8d46f3936d54873472db'>859minrevi</option>
<option value='4ab8fbf9f8be982a55ae55373950245c'>869株式会社メーカーズST</option>
<option value='37d4ba1058bfc61b15a5f3c793edc26e'>870aun株式会社33</option>
<option value='a312d446e28b849dd9b3c4724bf61805'>871JB_大塚美容整形外科</option>
<option value='ac95571c588f5df1abf6594f20a1b7b9'>880 コネクト</option>
<option value='436b124b609857d28fb6d440d0fcc155'>894 AF_OS_フォーマルクライン</option>
<option value='cd7ab64bb909a0a506655b3a7dfe973b'>895ネット誹謗中傷コンシェルジュST</option>
<option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b'>952イートラスト</option>
<option value='348ace254fb32039bf3ccc8f6858f724'>964SMC税理士法人</option>
<option value='b45e04dc78c83a139255e4011a19b314'>966会議室セレクト</option>
<option value='4bfbfa2ec208742f3eabb79bfccaa597'>972ウルトラバイヤープラス</option>
<option value='48c1385492ec3c9a35626a1bc13d476e'>973株式会社ハーツワークス</option>
<option value='4dc12ce4cf7338867770e4435140834f'>974シロクマ整体院</option>
<option value='5c352c9dcd62957ce5fbd4b100e44001'>989ウルトラバイヤー</option>
<option value='24c9e15e52afc47c225b757e7bee1f9d'>ADgainer</option>
<option value='e3d704f3542b44a621ebed70dc0efe13'>ADgainer Inc</option>
<option value='3c927997d3e4bbadf5ea7a2a1036f858'>ADgainer Inc2</option>
<option value='a7e8707208f37a3e39b4b81a8551c676'>ADgainer Japan Office</option>
<option value='38758042b7e125d22fd7322c6fe475f6'>AE Tuning1</option>
<option value='e170fbd8e2ebc0d88b20861979dddba6'>AMV Air Conditioning, Inc.</option>
<option value='50ee9bc89d15d97d024f4d99caa01197'>Advanced Skin Therapy</option>
<option value='8b3d3e8be9c177e4e63fa8a79e06243d'>Apollo Plumbing</option>
<option value='8c01845d67f0ce47dcfbd78b9fcbf4b1'>BCJ-Chestertax</option>
<option value='18be0a5dcb5b3a196dbaf244449ac9d3'>BCJ-Livent</option>
<option value='3fff9cfac85332ca4b55ca0a696cfef4'>CINH-privatesalon</option>
<option value='4435b6bbec81b357d3299085aed787bd'>GoGoClean</option>
<option value='4d6382645b19bda1d1357826af4fe6a4'>GoldStandard-REVE</option>
<option value='b7786916137132be19e1f5ccf9f7d0a1'>Grand Monde</option>
<option value='b12f2be1508d744d48fa51373b94a6a2'>Hyper Advanced (Christian)</option>
<option value='28dcb1596f953dae6300b706b0665191'>IKKO</option>
<option value='6b96eedcfb77ed12bd27e3bca7d06eb0'>J-B</option>
<option value='7e76526be3a92493f11831d543bb8946'>KML Access</option>
<option value='fa44c780d706e9e7a9c772b97351cedb'>MR</option>
<option value='bd2732e02bd07e6540d37cacf1757f80'>Mach50</option>
<option value='b6c9f62efeb6be919a2d413a4a8ded71'>Mattress City</option>
<option value='11df6cd9f7b18cb532a0ab32dc900cdc'>New SP Test Account</option>
<option value='f617b63689444ec94e9a2ca68293c615'>Nihon Energy Management</option>
<option value='384e44297657dfffdfb31720c024913f'>North Cascade Ford PPC</option>
<option value='b14e26ec94fbc9a10c48edbad4e5bd77'>North Coast Auto</option>
<option value='d52b5ab090360ec577f4bb6993952c73'>Northwest Motorsports</option>
<option value='fedea0bfeeb5ed138b3052baed653a47'>ORGANIC TRACKING</option>
<option value='7f24181524b6dd956be40e895a7ed1cf'>Rukusu</option>
<option value='234d61ae36bb9bc4a392edb137d64478'>Schick Shadel</option>
<option value='f97eac03d5d540093fe533eb6a91e8e4'>Takamura Shika</option>
<option value='35bsm4n4bu4mu5um'>Test Account</option>
<option value='a63fcccb60fb5056f696c3356c0238f5'>Varspec</option>
<option value='8601d10d514bc81c0936e8dc5acf8884'>Westin Tokyo</option>
<option value='5c0437f7f7279ea81d4f88971de8eb1f'>adw</option>
<option value='c246458d9da433f17600704abcc8a680'>cyberscene-suidoukyukyusha</option>
<option value='ff2bd36c14f3d5b0a832d0c1e871d6c2'>eBLEST</option>
<option value='b6cff89752d38e34229d686ecc63839d'>eMnet</option>
<option value='1b365e93ffb403f8c9aaa4af17d7dcb2'>erer</option>
<option value='ce91027a8ce76a85cbc0cc59af238dc9'>new account</option>
<option value='70b719857e6ec6d71266b4c949def8d2'>new acct</option>
<option value='e3ee7494e243580a319919e733f1469a'>new test account 929</option>
<option value='89e3980285790a6fb7247dc9deca31a9'>onoqnwono</option>
<option value='8f69f8432d3ebcffb342e5f43c265e45'>test acct</option>
<option value='ddc9e7780af347644c4e42df34696d05'>test111</option>
<option value='d3804235f81c9120cbcab8b8a3586bf8'>広島中央クリニック</option> 
 </select></td>
</tr>
<tr>
 <td >Campaign Tracking Type:-</td>
 <td>
<select id='campaign_type' name='campaign_type'>
<option value='tracking_code'>Standard</option>
<option value='source_code'>Source</option>
<option value='multi_code'>Multi-Tracking</option>
</select></td>
</tr>
<tr>
<td>Traffic Tracking Type:-</td>
<td>
<select name="tracking_type" >
<option value="0">OFF</option>
<option value="P" selected>PPC</option>
<option value="D">Display</option>
<option value="O">Organic</option>
<option value="O+P">Organic + PPC</option>
<option value="O+D">Organic + Display</option>
<option value="P+D">PPC + Display</option>
<option value="O+P+D">Organic + PPC + Display</option>
<option value="A">Organic + PPC + Display+ Direct</option>
</select></td>
</tr>
<tr>
<td>Multi-Numbers Used 
Per Tracking Session:-</td>
<td><select name="multi_phone">
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
<option value='32'>32</option>
<option value='33'>33</option>
<option value='34'>34</option>
<option value='35'>35</option>
<option value='36'>36</option>
<option value='37'>37</option>
<option value='38'>38</option>
<option value='39'>39</option>
<option value='40'>40</option>
<option value='41'>41</option>
<option value='42'>42</option>
<option value='43'>43</option>
<option value='44'>44</option>
<option value='45'>45</option>
<option value='46'>46</option>
<option value='47'>47</option>
<option value='48'>48</option>
<option value='49'>49</option>
<option value='50'>50</option>
<option value='51'>51</option>
<option value='52'>52</option>
<option value='53'>53</option>
<option value='54'>54</option>
<option value='55'>55</option>
<option value='56'>56</option>
<option value='57'>57</option>
<option value='58'>58</option>
<option value='59'>59</option>
<option value='60'>60</option>
<option value='61'>61</option>
<option value='62'>62</option>
<option value='63'>63</option>
<option value='64'>64</option>
<option value='65'>65</option>
<option value='66'>66</option>
<option value='67'>67</option>
<option value='68'>68</option>
<option value='69'>69</option>
<option value='70'>70</option>
<option value='71'>71</option>
<option value='72'>72</option>
<option value='73'>73</option>
<option value='74'>74</option>
<option value='75'>75</option>
<option value='76'>76</option>
<option value='77'>77</option>
<option value='78'>78</option>
<option value='79'>79</option>
<option value='80'>80</option>
<option value='81'>81</option>
<option value='82'>82</option>
<option value='83'>83</option>
<option value='84'>84</option>
<option value='85'>85</option>
<option value='86'>86</option>
<option value='87'>87</option>
<option value='88'>88</option>
<option value='89'>89</option>
<option value='90'>90</option>
<option value='91'>91</option>
<option value='92'>92</option>
<option value='93'>93</option>
<option value='94'>94</option>
<option value='95'>95</option>
<option value='96'>96</option>
<option value='97'>97</option>
<option value='98'>98</option>
<option value='99'>99</option>
<option value='100'>100</option>
<option value='101'>101</option>
<option value='102'>102</option>
<option value='103'>103</option>
<option value='104'>104</option>
<option value='105'>105</option>
<option value='106'>106</option>
<option value='107'>107</option>
<option value='108'>108</option>
<option value='109'>109</option>
<option value='110'>110</option>
<option value='111'>111</option>
<option value='112'>112</option>
<option value='113'>113</option>
<option value='114'>114</option>
<option value='115'>115</option>
<option value='116'>116</option>
<option value='117'>117</option>
<option value='118'>118</option>
<option value='119'>119</option>
<option value='120'>120</option>
<option value='121'>121</option>
<option value='122'>122</option>
<option value='123'>123</option>
<option value='124'>124</option>
<option value='125'>125</option>
<option value='126'>126</option>
<option value='127'>127</option>
<option value='128'>128</option>
<option value='129'>129</option>
<option value='130'>130</option>
<option value='131'>131</option>
<option value='132'>132</option>
<option value='133'>133</option>
<option value='134'>134</option>
<option value='135'>135</option>
<option value='136'>136</option>
<option value='137'>137</option>
<option value='138'>138</option>
<option value='139'>139</option>
<option value='140'>140</option>
<option value='141'>141</option>
<option value='142'>142</option>
<option value='143'>143</option>
<option value='144'>144</option>
<option value='145'>145</option>
<option value='146'>146</option>
<option value='147'>147</option>
<option value='148'>148</option>
<option value='149'>149</option>
<option value='150'>150</option>
</select></td>
</tr>
<tr>
<td>Country/Language:-</td>
<td>
<select name="country_tracking" >
<option value="keyword">USA (English)</option>
<option value="ch_keyword">Chinese (Includes English)</option>
<option value="k_keyword">Korean (Includes English)</option>
<option value="j_keyword">Japanese (Includes English)</option>
</select></td>
</tr>
<tr>
<td>Correlation Time:-</td>

<td><select id="correlation_time"  name="correlation_time"   >
<option value="0.083">5 minutes</option>
<option value="0.166">10 minutes</option>
<option value="0.332">20 minutes</option>
<option value='1' >1</option>
<option value='2' >2</option>
<option value='3' >3</option>
<option value='4' selected>4</option>
<option value='5' >5</option>
<option value='6' >6</option>
<option value='7' >7</option>
<option value='8' >8</option>
<option value='9' >9</option>
<option value='10' >10</option>
<option value='11' >11</option>
<option value='12' >12</option> 
</select>
</td><
</tr>
<tr>
<td>Time Zone:-</td>
 <td><select name="timeZone" id="timeZone">
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
</select>
</td>
</tr>
<tr>
<td>Show Phone Numbers <i>In reports</i>:-</td>
<td><select id="show_number" name="show_number" >
<option value="1">Yes</option>
<option value="0">No</option>
</select></td>
</tr>
<tr>
<td>Email Submission Form Tracking:-</td>
<td>Yes <input type="checkbox" name="email_tracking" value="1"  style="width:auto"/></td>
<tr>
<td>Browser Location Tracking <i>*user authorized</i>:-</td>
<td>Yes: <input type="radio" name="location_tracking" value="1" style="width:30px" /> 
No: <input type="radio" name="location_tracking" value="0" style="width:30px" checked /><hr><br>
</td>
</tr>
<tr>
<td>Browser Location Tracking Device:-</td>&nbsp;&nbsp;&nbsp;&nbsp;
<td>Both:-<input type="radio" name="location_device" value="2" style="width:30px" checked /> 
Mobile Only:-<input type="radio" name="location_device" value="1" style="width:30px" />
Desktop Only:-<input type="radio" name="location_device" value="0" style="width:30px"  /></td>
</tr>
<td>Campaign Budget:-</td>
<td><input type="text" name="campaign_budget"  /></td>
</tr>
<tr>
<td>Campaign Manager:-</td>
<td><input type="text" name="campaign_mgr"  /></td>
</tr>
<tr>
<td>Account Manager:-</td>
<td><input type="text" name="account_mgr"  /></td>
</tr>
<tr>
<td>Campaign Currency:-</td>
<td><select name="campaign_currency">
                                                          <option value="">Select Currency</option>
                                                          <option value="AUD">Australian Dollar</option>
                                                          <option value="BRL">Brazilian Real </option>
                                                          <option value="CAD">Canadian Dollar</option>
                                                          <option value="CZK">Czech Koruna</option>
                                                          <option value="DKK">Danish Krone</option>
                                                          <option value="EUR">Euro</option>
                                                          <option value="HKD">Hong Kong Dollar</option>
                                                          <option value="HUF">Hungarian Forint </option>
                                                          <option value="ILS">Israeli New Sheqel</option>
                                                          <option value="JPY">Japanese Yen</option>
                                                          <option value="MYR">Malaysian Ringgit</option>
                                                          <option value="MXN">Mexican Peso</option>
                                                          <option value="NOK">Norwegian Krone</option>
                                                          <option value="NZD">New Zealand Dollar</option>
                                                          <option value="PHP">Philippine Peso</option>
                                                          <option value="PLN">Polish Zloty</option>
                                                          <option value="GBP">Pound Sterling</option>
                                                          <option value="SGD">Singapore Dollar</option>
                                                          <option value="SEK">Swedish Krona</option>
                                                          <option value="CHF">Swiss Franc</option>
                                                          <option value="TWD">Taiwan New Dollar</option>
                                                          <option value="THB">Thai Baht</option>
                                                          <option value="TRY">Turkish Lira</option>
                                                          <option value="USD" SELECTED="YES">U.S. Dollar</option>
</select></td>
</tr>
<tr>
<td>Billing Cycle:-</td>
<td><select name="campaign_cycle">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>      
</select></td>
</tr>
<tr>
<td>Doubleclick Calls Activity Name:- </td>
<td><input type="text"   name="dblclick_name_calls"  style="width:100px"  /></td>
</tr>
<tr>
<td>Doubleclick Goals Activity Name:-</td>
<td><input type="text"   name="dblclick_name_goals"  style="width:100px"  /></td>
</tr>
<tr>
<td>Doubleclick Agency ID:- </td>
<td><input type="text"    name="dblclick_agency_id"  style="width:100px"  /></td>
</tr>
<tr>
<td>Doubleclick Advertiser ID :-</td>
<td><input type="text"    name="dblclick_advertiser_id"  style="width:100px" /></td>
</tr>
<tr>
<td>Yahoo JPN Account Id:-</td>
<td><input type="text"   name="yahoojpn_aid"  style="width:100px"/></td>
</tr>
<tr>
<td>Yahoo JPN Campaign Id:-</td>
<td><input type="text"   name="yahoojpn_cid"  style="width:100px"/></td>
</tr>
<tr>
<td>>AdWords Campaign Id:-</td>
<td><input type="text"   name="adwords_campaign_id"  style="width:100px"/></td>
</tr>
<tr>
<td>Bing Campaign Id:-</td>
<td><input type="text"   name="bing_campaign_id"  style="width:100px"/></td>
</tr>
<tr>
<td>Super Pgs Campaign Id:-</td>
<td><input type="text"   name="sp_campaign_id"  style="width:100px"/></td>
</tr>
<tr>
<td>PPC Markup:-</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><i>20% markup = ( 100 - 20 ), enter 80 into the field</i>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="ppc_markup"  style="width:100px"  /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = (100 - %)</td>
</tr>
<tr>
<td>**Chat Campaign:-</td>
<td><input type="radio" name="chat_campaign" value="1"> Yes
<input type="radio" name="chat_campaign" value="0" checked> No</td>
</tr>
<tr>
<td>**Save Chat Conversation:-</td>
<td><input type="radio" name="save_chat" value="1"> Yes
<input type="radio" name="save_chat" value="0" checked> No</td>
</tr>
<tr>
<td>**Chat Covnersion Words:-</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><i>i.e. credit cards, appointment,shipping, do you take credit cards </i> up to 50.<br>
If any of these words are typed during a chat session, they will be counted each time as a conversion.<br>
<textarea name="tag_words" cols="40" rows='4'></textarea></td>
</tr>
</table>
    <input type="button" class="btn btn-primary continue" id="continue" value="continue">
  </div>



<!-- 2ND PANEL  -->

  <div role="tabpanel" class="tab-pane" id="shipping">
    <table width="50%" align="left" >
<div id="campConSection" class="campSection">
                                        <div class="campSubSection">


                                            <div class="da-form-row">
                                                <tr>
                                                <td><label>Goal Pages</label></td>
                                                <td><div class="da-form-item large">
                                                        <i>Do not include "http://www." or "http://", should be, domain.com/anything or sub.domain.com/anything  </i> <br/> <br/></td></tr>
<tr>                                                        
&nbsp; &nbsp; &nbsp; <td> <small>Goal 1 Memo</small></td> <td><input type='text' name='goal_page1_memo' style='width:300px' /><br/></td></tr>
<tr>
&nbsp; &nbsp;&nbsp;  <td><small>Goal 1 URL</small></td>&nbsp; <td><input type='text' name='goal_page1' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp; &nbsp; &nbsp;<td> <small>Goal 2 Memo</small></td> <td><input type='text' name='goal_page2_memo' style='width:300px'  /><br/></td>
<tr>
&nbsp; &nbsp; &nbsp; <td><small>Goal 2 URL</small> </td>&nbsp; <td><input type='text' name='goal_page2' style='width:300px'  /><br/><hr></td></tr>
<tr>
&nbsp; &nbsp; &nbsp; <td><small>Goal 3 Memo</small></td> <td><input type='text' name='goal_page3_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp; &nbsp; &nbsp; <td><small>Goal 3 URL</small></td> &nbsp; <td><input type='text' name='goal_page3' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;  <td><small>Goal 4 Memo</small></td> <td><input type='text' name='goal_page4_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;  <td><small>Goal 4 URL</small></td> &nbsp; <td><input type='text' name='goal_page4' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;<td><small>Goal 5 Memo</small></td><td> <input type='text' name='goal_page5_memo' style='width:300px'  /><br/></td>
<tr>
&nbsp;&nbsp; &nbsp;<td><small>Goal 5 URL</small></td> &nbsp;<td> <input type='text' name='goal_page5' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp; &nbsp;<td><small>Goal 6 Memo</small></td> <td><input type='text' name='goal_page6_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 6 URL</small></td> &nbsp; <td><input type='text' name='goal_page6' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 7 Memo</small></td><td> <input type='text' name='goal_page7_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 7 URL</small></td> &nbsp; <td><input type='text' name='goal_page7' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 8 Memo</small></td> <td><input type='text' name='goal_page8_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 8 URL</small></td> &nbsp;<td><input type='text' name='goal_page8' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;&nbsp;<td><small>Goal 9 Memo </small></td><td><input type='text' name='goal_page9_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;<td><small>Goal 9 URL</small></td> &nbsp; <td><input type='text' name='goal_page9' style='width:300px' /><br/><hr></td></tr>
<tr>
&nbsp;&nbsp;<td><small>Goal 10 Memo</small></td><td> <input type='text' name='goal_page10_memo' style='width:300px'  /><br/></td></tr>
<tr>
&nbsp;&nbsp; &nbsp;<td><small> Goal 10 URL</small></td> &nbsp;<td> <input type='text' name='goal_page10' style='width:300px' /><br/><hr></td></tr>

                                                </div>
                                            </div>
<div class="da-form-row">
<tr>
                                                <td><label><small>Google Analytics Code for Calls</small></label></td>
                                                <td><div class="da-form-item large">
                                                     <input type="text"   name="call_code"   /></td></tr>
                                                </div>
                                            </div>
<div class="da-form-row">
<tr>
                                                <td><label><small>Google Analytics Code for Goals</small></label></td>
                                                <td><div class="da-form-item large">
                                                    <input type="text"   name="goal_code"   />
                                                </div></td></tr>
                                            </div>
                                        </div>
                                        </table>
<div class="campSubSection">


                                            <div class="da-form-row">
                                                <label><small>Average Goal Pages Per Day</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="avgGoalPgs" style="width:80px"/>
Notification Threshold: <select name="goalsThresh" style="width:50px">
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="25">25%</option>
                                                        <option value="33">33%</option>
                                                        <option value="50">50%</option>
                                                        <option value="66">66%</option>
                                                        <option value="75">75%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                
                                            </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Average Calls Per Day</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="avgCalls"  style="width:80px"/>
&nbsp; Notification Threshold: <select name="callsThresh" style="width:50px">
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="25">25%</option>
                                                        <option value="33">33%</option>
                                                        <option value="50">50%</option>
                                                        <option value="66">66%</option>
                                                        <option value="75">75%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                
                                            </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Average Emails Per Day</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="avgEmails" style="width:80px" />
&nbsp;&nbsp; Notification Threshold: <select name="emailsThresh" style="width:50px">
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="25">25%</option>
                                                        <option value="33">33%</option>
                                                        <option value="50">50%</option>
                                                        <option value="66">66%</option>
                                                        <option value="75">75%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                
                                            </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Average Clicks Per Day</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="avgClicks" style="width:80px" />
&nbsp;&nbsp; Notification Threshold: <select name="clicksThresh" style="width:50px">
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="25">25%</option>
                                                        <option value="33">33%</option>
                                                        <option value="50">50%</option>
                                                        <option value="66">66%</option>
                                                        <option value="75">75%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                
                                            </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Average Covnersions Per Day</small></label>&nbsp;&nbsp;<input type="text"   name="avgConversions"  style="width:80px"/>
&nbsp;&nbsp; Notification Threshold: <select name="convsThresh" style="width:50px">
                                                        <option value="5">5%</option>
                                                        <option value="10">10%</option>
                                                        <option value="15">15%</option>
                                                        <option value="25">25%</option>
                                                        <option value="33">33%</option>
                                                        <option value="50">50%</option>
                                                        <option value="66">66%</option>
                                                        <option value="75">75%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                
                                            </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 1</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom1"  style="width:100px"  />

                                                </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 2</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom2"  style="width:100px" />

                                                </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 3</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom3"  style="width:100px"  />

                                                </div>
                                        <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 4</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom4"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 5</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom5"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 6</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom6"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 7</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom7"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 8</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom8"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 9</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom9"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 10</small></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"   name="camp_custom10"  style="width:100px" />

                                                </div>
                                            <br>

                                        </div>



                                        

    <a class="btn btn-primary back" id="back1">Go Back</a>
    <a class="btn btn-primary continue" id="continue1">Continue</a>
  </div>
<!-- 3rd panel   -->


  <div role="tabpanel" class="tab-pane" id="review">
   <table width="50%" align="left" >
<div id="campCallSection" class="campSection">
                                    <div class="campSubSection">

                                            <div class="da-form-row">
                                            <tr>
                                                <td><label><small>Call Tracking Medium</small></label></td>
                                                <td><select name="tracking_campaign_type">
                                                        <option value="online">Online - Web</option>
                                                        <option value="offline">Offline - Non Web</option>
                                                    </select>
                                                
                                            </div></td></tr>
                                            <tr>

                                            <td><input type="hidden" name="single_to_many_numbers" value="NO" />
                                            <!--
                                            <div class="da-form-row">
                                                <label>Single Tracking</label>
                                                <div class="da-form-item large">
                                                    <select name="single_to_many_numbers" id="single_to_many_numbers" >

                                                        <option value="0">NO</option>
                                                        <option value="1">YES</option>
                                                    </select>

                                                </div>
                                            </div>
                                            --></td></tr>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Default Phone Display Format </small></label></td>
                                                <td><select name='default_phone_format' id='default_phone_format'>

                                                        <option value='1'>888.888.8888</option>
                                                        <option value='2'>888-888-8888</option>
                                                        <option value='3'>888 888 8888</option>
                                                        <option value='4'>(888) 888-8888 </option>
                                                        <option value='5'>(888) 888 8888 </option>
                                                        <option value='6'>1.888.888.8888 (US Only)</option>
                                                        <option value='7'>1-888-888-8888 (US Only)</option>
                                                        <option value='8'>1 888 888 8888 (US Only)</option>
                                                        <option value='9'>1 (888) 888 8888 (US Only)</option>
                                                        <option value='10'>8888-888-8888 (JPN Only)</option>
                                                        <option value='11'>8888-88-8888 (JPN Only)</option>
                                                        <option value='12'>8888-888-888 (JPN Only)</option>
                                                        <option value='13'>88-8888-8888 (JPN Only)</option>
                                                        <option value='14'>888-8888-8888 (JPN Only)</option>
                                                        <option value='15'>8888-8888-88 (JPN Only)</option>

                                                    </select></td></tr>
                                                
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Tracking Phone Display Format </small></label></td>
                                                <td><select name='phone_format' id='phone_format'>

                                                        <option value='1'>888.888.8888</option>
                                                        <option value='2'>888-888-8888</option>
                                                        <option value='3'>888 888 8888</option>
                                                        <option value='4'>(888) 888-8888 </option>
                                                        <option value='5'>(888) 888 8888 </option>
                                                        <option value='6'>1.888.888.8888 (US Only)</option>
                                                        <option value='7'>1-888-888-8888 (US Only)</option>
                                                        <option value='8'>1 888 888 8888 (US Only)</option>
                                                        <option value='9'>1 (888) 888 8888 (US Only)</option>
                                                        <option value='10'>8888-888-8888 (JPN Only)</option>
                                                        <option value='11'>8888-88-8888 (JPN Only)</option>
                                                        <option value='12'>8888-888-888 (JPN Only)</option>
                                                        <option value='13'>88-8888-8888 (JPN Only)</option>
                                                        <option value='14'>888-8888-8888 (JPN Only)</option>
                                                        <option value='15'>8888-8888-88 (JPN Only)</option>

                                                    </select></td></tr>
                                                </div>
                                            
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Default Display Phone Number</small></label></td>
                                                   <td><i>Note: All numbers, no dashes, periods or spaces.</i><br>
                                                    <input type="text"   name="default_number" /></td></tr> 
                                                </div>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Phone Number Replacement</small></label></td>
                                                <div class="da-form-item large">
                                                    <td><i>i.e. 2125551212,2065551212 (must end with ",") </i> up to 20. <br/>These numbers will be specifically replaced with the single tracking number.<br/>
                                                    <textarea name="numbers_to_replace" cols="40" rows='4'></textarea>
                                                </div></td></tr>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Serve Tracking Numbers</small></label></td>
                                                <div class="da-form-item large">
                                                    <td><select name='number_serve_active' id='number_serve_active'>

                                                        <option value='0'>Off</option>
                                                        <option value='1'>On</option>

                                                    </select>
                                                </div></td></tr>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Forwarding Number</small></label></td>
                                                <div class="da-form-item large">
                                                    <td><i>i.e. 2125551212,2065551212... Up to 3 will all ring at once</i> <br/>
                                                    <textarea name="transfer_to_number" cols="40" rows='4'></textarea>
                                                </div>
                                            </div></td></tr>

                                    </div>
                                    <tr>
                                    <td>          
                                    </td></tr>
                                    <tr>
                                    <td>     
                                    </td></tr>

                                            
                                    </table>
                                    <table width="50%" align="right" >
                                    <tr>
                                    <div class="campSubSection">

                                            <div class="da-form-row">
                                                <td><label><small>Greeting*</small></label></td>
                                                <div class="da-form-item large">
                                                    <td> <input type="radio" name="greet_voice" value="man" style="width:20px" />
                                                     Man &nbsp;&nbsp;&nbsp; <input type="radio" name="greet_voice" value="woman"  style="width:20px" checked />
                                                     Woman &nbsp;&nbsp;&nbsp;<input type="radio" name="greet_voice" value="alice"  style="width:20px"   />
                                                     International Woman <br><br> Language:
                                                        <select name="language" style="width:80%">
                                                            <option value="en-US">English - United States</option>
                                                            <option value="da-DK">Danish</option>
                                                            <option value="de-DE">German</option>
                                                            <option value="en-AU">English - Australia</option>
                                                            <option value="en-CA">English - Canada</option>
                                                            <option value="en-GB">English - UK</option>
                                                            <option value="en-IN">English - India</option>
                                                            <option value="ca-ES">Catalan</option>
                                                            <option value="es-ES">Spanish - Spain</option>
                                                            <option value="es-MX">Spanish - Mexico</option>
                                                            <option value="fi-FI">Finnish</option>
                                                            <option value="fr-CA">French - Canada</option>
                                                            <option value="fr-FR">French - France</option>
                                                            <option value="it-IT">Italian</option>
                                                            <option value="ja-JP">Japanese</option>
                                                            <option value="ko-KR">Korean</option>
                                                            <option value="nb-NO">Norwegian</option>
                                                            <option value="nl-NL">Dutch</option>
                                                            <option value="pl-PL">Polish</option>
                                                            <option value="pt-BR">Portugese - Brazil</option>
                                                            <option value="pt-PT">Portugese - Portugal</option>
                                                            <option value="ru-RU">Russian</option>
                                                            <option value="sv-SE">Swedish</option>
                                                            <option value="zh-CN">Mandarian</option>
                                                            <option value="zh-HK">Cantonese</option>
                                                            <option value="zh-TW">Taiwanese Mandarian</option>
                                                        </select> <br><br>
                                                    <textarea name="greeting" cols="40" rows='4'></textarea>
                                                </div></td></tr>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Prompt*</small></label></td>
                                                <div class="da-form-item large">
                                                    <td> <i>Be prompted with the text entered below, when the call occurs.</i><br>
                                                     <textarea name="prompt" cols="40" rows='4'></textarea>
                                                </div></td></tr>
                                            </div>
                                           <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Post Back Page URL</small></label></td>
                                                <div class="da-form-item large">
                                                        <td><i>Must include http:// <br/> Note: We will post phone call data to a page that you specify</i><br/>
                                                        <textarea cols="40" rows='4' name='postback_page' ></textarea>
                                                </div></td></tr>
                                            </div>
                                            
                             <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Postback Page Method</small></label></td>
                                                <div class="da-form-item large">
                                                <td><select name="post_back_type" id="post_back_type" >

                                                        <option value="POST">POST</option>
                                                        <option value="GET">GET</option>
                                                    </select>

                                                </div></td></tr>
                                            </div>
                                          </table>
                                           <table style="margin-right: 300px">
                                            <tr>
                                              <td>
                                                
                                            <div class="da-form-row expand">
                                                   <tr> <td><label><small>Post Back Notification Settings</small></label></td></tr>
                                                    <div class="da-form-item large" style="overflow-x:hidden;width:450px;height:auto">


                                                    <div class="campSubSection">
                                                     <tr>
                                                        <td><b>Campaign Info     </b><br/></td></tr>
                                                        <div class="clear"></div>
                                                           <tr>
                                                        <td><div class='leftName'><small>Campaign Name:</small></div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="campaign_name"   /></td></tr>
                                                        </div>
                                                       <tr>
                                                        <div class="clear"></div>
                                                        <td><b>Call Information</b><br/></td></tr>
                                                        <div class="clear"></div>
                                                     <tr>
                                                        <td><div class='leftName'><small>Record ID #:</small></div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="id"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Tracking Phone #:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="phone_number"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Phone #:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="caller_phone"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Location:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="caller_state,caller_country,caller_zip"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Duration:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="call_duration"     /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Call Time:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="time_of_call"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Name*:</div></td>
                                                         <div class='leftValue'>
                                                            <td> <input type="checkbox" name="postback_fields[]" value="caller_name"    /></td>
                                                        </div></tr>
                                                    </div>
                                                   
                                                    <tr>
                                                    <div class="campSubSection">

                                                        <div class="clear"></div>
                                                        <td><b>Web Tracking Information</b><br/></td>
                                                        <div class="clear"></div>
                                                      </tr>
                                                      <tr>
                                                        <td><div class='leftName'>Entry Time: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="time_stamp"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Location: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="visitor_city_state"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Lat,Long:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="lat,lng"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Duration:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="time_on_site"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Traffic Type:</div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="traffic_type"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Keyword:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="keyword"     /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Match Type: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="matchtype"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Source:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="source"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Goal Pages:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="goal_pages"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                          <td><div class='leftName'>Custom 1:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom1"  /></td>
                                                             
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 2:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom2"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 3:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom3"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 4:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom4"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 5:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom5"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 6:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom6"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 7:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom7"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 8:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom8"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 9:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom9"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Custom 10:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="custom10"  /></td>
                                                        </div></tr>
</table>
</td>
<tr>
  </table>
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Next</a>
 </div>

<!--  4th panel  -->
 <div role="tabpanel" class="tab-pane" id="notification">
   <table id="table1" cellspacing="5px" width="50%" cellpadding="5%" align="center">
<div id="campNotifSection" class="campSection">
                                        <div class="campSubSection">


                                            <div class="da-form-row">
                                            <tr>
                                                <td><label><small>Notify Low Numbers + Report:-</small></label></td>
                                                <div class="da-form-item large">
                                                 <td>Yes <input type="radio" name="email_notify" value="1"  style="width:auto"/> No <input type="radio" name="email_notify" value="0"  style="width:auto"/> <br/>
                                                  Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <br/>
                                                 <textarea name="email_to_notify" cols="40" rows="4" ></textarea>
                                                </div></td></tr>
                                            </div>
                                            
                                            <tr>
                                             <div class="da-form-row">
                                                    <td><label><small>Email notifcation of phone calls:-</small></label></td>
                                                    <div class="da-form-item large">
                                                     <td>Yes <input type="radio" name="email_notify_user" value="1"  style="width:auto"/> No <input type="radio" name="email_notify_user" value="0"  style="width:auto"/> <br/>
                                                     Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <br/>
                                                     <textarea name="email_to_notify_user" cols="40" rows="4" ></textarea>
                                                    </div></td></tr>
                                                </div>
                                                <tr>
                                                <div class="da-form-row expand">
                                                    <td><label><small>Call Notification Settings</small></label></td></tr>
                                                    <div class="da-form-item large" style="overflow-x:hidden;width:450px;height:auto">

                                                    <div class="checkSubSection">
                                                      <tr>
                                                        <td><b>Campaign Info</b><br/></td></tr>
                                                        <div class="clear"></div>
                                                        <tr>
                                                        <td><div class='leftName'>Campaign Name:</div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="call_notification[]" value="campaign_name"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <div class="clear"></div>
                                                        <td><b>Call Information</b><br/></td></tr>
                                                        <div class="clear"></div>
                                                         <tr>
                                                        <td><div class='leftName'>Tracking Phone #:</div></td>
                                                         <div class='leftValue'>
                                                            <td> <input type="checkbox" name="call_notification[]" value="phone_number"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Phone #:</div></td>
                                                         <div class='leftValue'>
                                                            <td> <input type="checkbox" name="call_notification[]" value="caller_phone"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Location:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="caller_state,caller_country,caller_zip"  />
                                                        </div></td></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Duration:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="call_duration"     /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Call Time:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="time_of_call"    />
                                                        </div></td></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Caller Name*:</div></td>
                                                         <div class='leftValue'>
                                                            <td> <input type="checkbox" name="call_notification[]" value="caller_name"    />
                                                        </div></td></tr>

                                                    </div>
                                                    
                                                    <tr>
                                                    <div class="checkSubSection">

                                                        <div class="clear"></div>
                                                        <td><b>Web Tracking Information&nbsp;</b><br/></td>
                                                        <div class="clear"></div></tr>
                                                          <tr>
                                                        <td><div class='leftName'>Entry Time: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="call_notification[]" value="time_stamp"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Location: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="call_notification[]" value="visitor_city_state"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Lat,Long:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="lat,lng"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Duration:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="time_on_site"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Web Page History:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="last_page"  /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Traffic Type:</div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="call_notification[]" value="traffic_type"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Keyword:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="keyword"     /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Match Type: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="call_notification[]" value="matchtype"   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Source:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="source"    /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <td><div class='leftName'>Goal Pages:</div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="call_notification[]" value="goal_pages"  /></td>
                                                        </div></tr>
                                                        <div class="clear"></div>
                                                    </div>

                                                    </div>
                                                </div>
                                                <tr>

                                                <div class="da-form-row">
                                                    <td><label><small>Recieve Text Messages After Phone Calls (USA)</small></label></td>
                                                    <div class="da-form-item large">
                                                        <td>Yes <input type="checkbox" name="text_notify" value="1" style="width:auto"/>
                                                        <br/>
                                                        Provider <select name='cell_provider'>
                                                                    <option value=''>Select Provider (optional)</option>
                                                                    <option value='verizon'>Verizon</option>
                                                                    <option value='cricket'>Cricket</option>
                                                                    <option value='tmobile'>T-Mobile</option>
                                                                    <option value='boost'>Boost Mobile</option>
                                                                    <option value='sprint'>Sprint</option>
                                                                    <option value='att'>AT&amp;T</option>
                                                                    <option value='virgin'>Virgin Mobile</option>
                                                                </select>
                                                    </div></td>
                                                </div></tr>
                                                <tr>
                                                <div class="da-form-row">
                                                    <td><label><small>Phone Number to Text</small></label></td>
                                                    <div class="da-form-item large">
                                                        <td><input type="text" name='cell_to_text' id='cell_to_text'>
                                                    </div></td>
                                                </div></tr>

                                    </div>
                                </div>
                                <tr>

   <td> <a class="btn btn-primary back" id="back3">Go Back</a> <a class="btn btn-primary continue" id="continue3">Continue</a></td>
                                            </tr>
                                </table>

    
    
  </div>


  <!--  5th panel  -->
 <div role="tabpanel" class="tab-pane" id="filering">
    <table id="table1" cellspacing="5px" width="50%" cellpadding="5%" align="center">
<tr>
<div id="campFilterSection" class="campSection">
                                        <div class="campSubSection">



                                            <div class="da-form-row">
                                                <td><label><small>Blacklist Keywords:-</small></label></td>
                                                <div class="da-form-item large">
                                                    <td><i>i.e. Your company name,lawnmowers </i> up to 30, separate by comma. <br/>These words will not initiate a tracked visit. There will be no tracking number provided to the visitor that has typed these keywords for organic traffic.<br/>
                                                    <textarea name="blacklist_words" cols="40" rows="4"></textarea>
                                                </div></td>
                                            </div></tr>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Blacklist IP Addresses:-</small></label></td>
                                                <div class="da-form-item large">
                                                    <td><i>i.e. 22.22.22.22,33.55.254.22 </i> up to 30 addresses, separate by comma. <br/>These words will not initiate a tracked visit. There will be no tracking number provided to the visitor that has typed these keywords for organic traffic.<br/>
                                                    <textarea name="blacklist_ips" cols="40" rows="4"></textarea>
                                                </div></td>
                                            </div></tr>

                                    </div>
                                </div>
                                <tr>
 
   <td> <input type="reset" value="Reset"  class="btn btn-primary back" />  </td>

                                                <td> <a class="btn btn-primary back">Go Back</a>
   <input type="submit" value="Submit" class="btn btn-primary continue">
                                            </td>
                                            </tr>
</table>

   
  </div>

</div></div>


            <div id="push"></div>

</form>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
    
$(function(){

    $('#continue').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#shipping"]').tab('show');
    });

    $('#continue1').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#review"]').tab('show');
    });
    $('#continue2').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#notification"]').tab('show');
    });
    $('#continue3').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#filering"]').tab('show');
    });

$('#back4').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#notification"]').tab('show');
    });

$('#back3').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#review"]').tab('show');
    });
$('#back2').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#shipping"]').tab('show');
    });

$('#back1G').click(function(e){
        e.preventDefault();
        $('#navtab a[href="#billing"]').tab('show');
    });


});
</script>
 @endsection
