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
<style>
.popupMsg{
background-color:#1ab394;
color:white;
border:1px solid gray;
border-radius:10px;
padding:5px;
width:200px;
height:50px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
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
                <a href="{{url('/campaign')}}"> <button class=".btn-primary">Back</button></a>
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

<form action='new_Campaign_General'method='post'>

  <input type="hidden" name="_token" value="{{ csrf_token()}}">
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
    <table id="table1" cellspacing="15px" cellpadding="15%" align="center">
<tr>
<td>Campaign name:- <span class="required_inputs_star text-danger">*</span></td>
<td><input type="text" name="campaign_name" /></td>
</tr>
<tr>
<td>Select Account or Create New Account:- <span class="required_inputs_star text-danger">*</span></td>
<td><select name="account" id="account">
  <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option>
  <option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option>
  <option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option>
  <option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option>
  <option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option>
  <option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option>
  <option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option>
  <option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option>
  <option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option>
  <option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option>
  <option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option>
  <option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option>
  <option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option>
  <option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option>
  <option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option>
  <option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option>
  <option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option>
  <option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option>
  <option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option>
  <option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option>
  <option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option>
  <option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option>
  <option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option>
  <option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option>
  <option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option>
  <option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option>
  <option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option>
  <option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option>
  <option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option>
  <option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option>
  <option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option>
  <option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option>
  <option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option>
  <option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option>
  <option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option>
  <option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option>
  <option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option>
  <option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option>
  <option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option>
  <option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option>
  <option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                             
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
</td>
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
<td>Yes <input type="checkbox" name="email_tracking" value="1" checked style="width:auto"/></td>
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
<td>Campaign Budget:- <span class="required_inputs_star text-danger">*</span></td>
<td><input type="text" name="campaign_budget"  /></td>
</tr>
<tr>
<td>Campaign Manager:- <span class="required_inputs_star text-danger">*</span></td>
<td><input type="text" name="campaign_mgr"  /></td>
</tr>
<tr>
<td>Account Manager:- <span class="required_inputs_star text-danger">*</span></td>
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
<td>Yahoo JPN Account Id:- <span class="required_inputs_star text-danger">*</span></td>
<td><input type="text"   name="yahoojpn_aid"  style="width:100px"/></td>
</tr>
<tr>
<td>Yahoo JPN Campaign Id:- <span class="required_inputs_star text-danger">*</span></td>
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
                                                <label><small>Average Goal Pages Per Day</small></label><input type="text"   name="avgGoalPgs" style="width:100px"/>
Notification Threshold: <select name="goalsThresh" style="width:100px">
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
                                                <label><small>Average Calls Per Day</small></label><input type="text"   name="avgCalls"  style="width:100px"/>
&nbsp; Notification Threshold: <select name="callsThresh" style="width:100px">
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
                                                <label><small>Average Emails Per Day</small></label><input type="text"   name="avgEmails" style="width:100px" />
&nbsp;&nbsp; Notification Threshold: <select name="emailsThresh" style="width:100px">
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
                                                <label><small>Average Clicks Per Day</small></label><input type="text"   name="avgClicks" style="width:100px" />
&nbsp;&nbsp; Notification Threshold: <select name="clicksThresh" style="width:100px">
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
                                                <label><small>Average Covnersions Per Day</small></label><input type="text"   name="avgConversions"  style="width:100px"/>
&nbsp;&nbsp; Notification Threshold: <select name="convsThresh" style="width:100px">
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
                                                <label><small>Custom URL paramter 1</small></label><input type="text"   name="camp_custom1"  style="width:100px"  />

                                                </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 2</small></label><input type="text"   name="camp_custom2"  style="width:100px" />

                                                </div>
                                            <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 3</small></label><input type="text"   name="camp_custom3"  style="width:100px"  />

                                                </div>
                                        <br>
<div class="da-form-row">
                                                <label><small>Custom URL paramter 4</small></label><input type="text"   name="camp_custom4"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 5</small></label><input type="text"   name="camp_custom5"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 6</small></label><input type="text"   name="camp_custom6"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 7</small></label><input type="text"   name="camp_custom7"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 8</small></label><input type="text"   name="camp_custom8"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 9</small></label><input type="text"   name="camp_custom9"  style="width:100px" />

                                                </div>
                                            <br>
                                            <div class="da-form-row">
                                                <label><small>Custom URL paramter 10</small></label><input type="text"   name="camp_custom10"  style="width:100px" />

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
                                            <!--<tr>

                                            <td><input type="hidden" name="single_to_many_numbers" value="NO" />
                                            
                                            <div class="da-form-row">
                                                <label>Single Tracking</label>
                                                <div class="da-form-item large">
                                                    <select name="single_to_many_numbers" id="single_to_many_numbers" >

                                                        <option value="0">NO</option>
                                                        <option value="1">YES</option>
                                                    </select>

                                                </div>
                                            </div>
                                            </td></tr>-->
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
                                                <td><label><small>Default Display Phone Number <span class="required_inputs_star text-danger">*</span></small></label></td>
                                                   <td><i>Note: All numbers, no dashes, periods or spaces.</i><br>
                                                    <input type="text"   name="default_number" /></td></tr> 
                                                </div>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Phone Number Replacement <span class="required_inputs_star text-danger">*</span></small></label></td>
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
                                                <td><label><small>Forwarding Number <span class="required_inputs_star text-danger">*</span></small></label></td>
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
                                                     Man  <input type="radio" name="greet_voice" value="woman"  style="width:20px" checked />
                                                     Woman <input type="radio" name="greet_voice" value="alice"  style="width:20px"   />
                                                     International Woman <br/> Language:
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
                                                        </select> <br/>
                                                    <textarea name="greeting" cols="40" rows='4'></textarea>
                                                </div></td></tr>
                                            </div>
                                            <tr>
                                            <div class="da-form-row">
                                                <td><label><small>Prompt*</small></label></td>
                                                <div class="da-form-item large">
                                                    <td> <i>Be prompted with the text entered below, when the call occurs. Only for the receiving end.</i>
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
                                           
                                            <div class="da-form-row expand">
                                                    <td><label><small>Post Back Notification Settings</small></label></td></tr>
                                                    <div class="da-form-item large" style="overflow-x:hidden;width:450px;height:auto">


                                                    <div class="campSubSection">
                                                     <tr>
                                                        <td><b>Campaign Info     </b><br/></td></tr>
                                                        <div class="clear"></div>
                                                           <tr>
                                                        <td><div class='leftName'><small>Campaign Name:</small></div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="campaign_name"  checked /></td></tr>
                                                        </div>
                                                       <tr>
                                                        <div class="clear"></div>
                                                        <td><b>Call Information</b><br/></td></tr>
                                                        <div class="clear"></div>
                                                     <tr>
                                                        <td><div class='leftName'><small>Record ID #:</small></div></td>
                                                         <div class='leftValue'>
                                                             <td><input type="checkbox" name="postback_fields[]" value="id"  checked  /></td>
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
                                                    </table>
                                                    <table width="15%" align="right" >
                                                    <tr>
                                                    <div class="campSubSection">

                                                        <div class="clear"></div>
                                                        <td><b>Web Tracking Information</b><br/></td>
                                                        <div class="clear"></div>
                                                      </tr>
                                                      <tr>
                                                        <td><div class='leftName'>Entry Time: </div></td>
                                                         <div class='leftValue'>
                                                            <td><input type="checkbox" name="postback_fields[]" value="time_stamp" checked  /></td>
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

    <a class="btn btn-primary back" id="back2">Go Back</a>
    <a class="btn btn-primary continue" id="continue2">Continue</a>
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
                                                 <td>Yes <input type="radio" name="email_notify" checked value="1"  style="width:auto"/> No <input type="radio" name="email_notify" value="0"  style="width:auto"/> <br/>
                                                  Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <br/>
                                                 <textarea name="email_to_notify" cols="40" rows="4" ></textarea>
                                                </div></td></tr>
                                            </div>
                                            
                                            <tr>
                                             <div class="da-form-row">
                                                    <td><label><small>Email notifcation of phone calls:-</small></label></td>
                                                    <div class="da-form-item large">
                                                     <td>Yes <input type="radio" name="email_notify_user" value="1" checked  style="width:auto"/> No <input type="radio" name="email_notify_user" value="0"  style="width:auto"/> <br/>
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
                                                            <td><input type="checkbox" name="call_notification[]" value="campaign_name" checked   /></td>
                                                        </div></tr>
                                                        <tr>
                                                        <div class="clear"></div>
                                                        <td><b>Call Information</b><br/></td></tr>
                                                        <div class="clear"></div>
                                                         <tr>
                                                        <td><div class='leftName'>Tracking Phone #:</div></td>
                                                         <div class='leftValue'>
                                                            <td> <input type="checkbox" name="call_notification[]" value="phone_number" checked /></td>
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
                                                            <td><input type="checkbox" name="call_notification[]" value="time_stamp" checked   /></td>
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
                                                        <td>Yes <input type="checkbox" name="text_notify" value="1" style="width:auto" checked/>
                                                        <br/>
                                                        Provider<span class="required_inputs_star text-danger">*</span> <select name='cell_provider'>
                                                                    <option value=''>Select Provider (optional)</option>
                                                                    <option value='verizon'>Verizon</option>
                                                                    <option value='cricket'>Cricket</option>
                                                                    <option value='tmobile'>T-Mobile</option>
                                                                    <option value='boost'>Boost Mobile</option>
                                                                    <option value='sprint'>Sprint</option>
                                                                    <option value='att'>AT&ampT</option>
                                                                    <option value='virgin'>Virgin Mobile</option>
                                                                </select>
                                                    </div></td>
                                                </div></tr>
                                                <tr>
                                                <div class="da-form-row">
                                                    <td><label><small>Phone Number to Text <span class="required_inputs_star text-danger">*</span></small></label></td>
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

                                                <td> <a class="btn btn-primary back" id="back4">Go Back</a>
   <input type="Submit" value="Submit" class="btn btn-primary continue" class="popupMsg">
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