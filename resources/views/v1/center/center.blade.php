@extends('layouts.app')
@section('title','chat ')

@section('style')
<style>
  .modal-dialog {
  height: 70% !important;
  padding-top:10%;
}

.modal-content {
  height: 100% !important;
  width:100%;
  overflow:visible;
}

.modal-body {
  height: 80%;
  overflow: auto;
}
  td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 2em;
}
  .btncolor{
background-color:#1ab394;
color:white;
border:1px solid gray;
border-radius:10px;
padding:5px;
width:200px;
height:50px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}
.btcolor{
color:white;
background-color:#1ab394;
border-radius:10px;
width:75px;
height:45px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}

.shadow{
width:100px;
heigth:25;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
  div.ex1 {
    
    width: 110px;
    height: 110px;
    overflow: scroll;
  </style>
  <style>
  #tallModal .modal-body p { margin-bottom: 900px }
  </style>

@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    chat
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> chat</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style='margin-left:100px'>
<div class="container">
  
  <!-- Trigger the modal with a button 1-->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CampaignPPCTable">Campaign PPC Table</button>

  <!-- Modal -->
  <div class="modal fade" id="CampaignPPCTable" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
    <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>
<tr>
<td>Account</td><td>&nbsp;:-&nbsp;</td><td>&nbsp;&nbsp;<select><option>Select An campagin</option> </select>&nbsp;&nbsp;</td>
</tr>
</table>

        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Trigger the modal with a button 2a-->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CampaignTrafficTable">Account Traffic Table</button>

  <!-- Modal -->
  <div class="modal fade" id="CampaignTrafficTable" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
         <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>

</table>
        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#pqr">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
   <!-- Trigger the modal with a button2 -->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CampaignPPCTable">Campaign Traffic Table</button>

  <!-- Modal -->
  <div class="modal fade" id="CampaignPPCTable" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
         date :- From<input type="date">To<input type="date"><br>
     Account: &nbsp;&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                             </select>
<br>
Account:-<select><option>Select An campagin</option> </select><br>

        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#abc">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
  &nbsp;&nbsp;&nbsp;&nbsp;
   <!-- Trigger the modal with a button3 -->
  <button type="button"  class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#AccountTrafficGraph">Account Traffic Graph</button>

  <!-- Modal -->
  <div class="modal fade" id="AccountTrafficGraph" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
         <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>

</table>
        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#khan">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Trigger the modal with a button4 -->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CampaignTrafficGraph">Campaign Traffic Graph</button>

  <!-- Modal -->
  <div class="modal fade" id="CampaignTrafficGraph" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
         <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>
<tr>
<td>Account</td><td>&nbsp;:-&nbsp;</td><td>&nbsp;&nbsp;<select><option>Select An campagin</option> </select>&nbsp;&nbsp;</td>
</tr>
</table>
        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#ijk">Get Title</button>
          <button type="button"class="btcolor"  class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Trigger the modal with a button5 -->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#AccountKeywordsTable">Account Keywords Table</button>

  <!-- Modal -->
  <div class="modal fade" id="AccountKeywordsTable" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
         <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>

</table>
        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ghf">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <!-- Trigger the modal with a button6 -->
  <button type="button" class="btncolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CampaignKeywordsTable">Campaign Keywords Table</button>

  <!-- Modal1 -->
  <div class="modal fade" id="CampaignKeywordsTable" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Tile</h4>
        </div>
        <div class="modal-body">
        <table>
    <tr>
         <td>date</td> <td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;From&nbsp;<input type="date">&nbsp;To&nbsp;<input type="date"></td></tr>
     <tr>
     <td>Account</td><td>&nbsp;:-&nbsp;</td> <td>&nbsp;&nbsp;<select id="campaign_account">
                              <option value="" name_="">Select An Account</option>
                              <option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select></td></tr>
<tr>
<td>Account</td><td>&nbsp;:-&nbsp;</td><td>&nbsp;&nbsp;<select><option>Select An campagin</option> </select>&nbsp;&nbsp;</td>
</tr>
</table>
        </div>
        <div class="modal-footer">
    <button type="button" class="btcolor" class="btn btn-info btn-lg" data-toggle="modal" data-target="#khan">Get Title</button>
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal2 -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            <table class="google-visualization-table-table"  cellspacing="10">
            <thead><tr class="google-visualization-table-tr-head">
            <th class="google-visualization-table-th gradient">&nbsp;Date&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Clicks&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Impressions&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;CTR&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Avg CPC&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Avg Pos&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Calls&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Call Percentage&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Call Cost&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goals&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Emails&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Conversions&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Conv Per&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;CPL&nbsp;</th></tr>
            </thead><tbody></tbody></table>
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal3 -->
  <div class="modal fade" id="pqr" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            <table class="google-visualization-table-table"  cellspacing="10">
            <thead><tr class="google-visualization-table-tr-head">
            <th class="google-visualization-table-th gradient">&nbsp;Date&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Clicks&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Organic&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Direct&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Display&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Calls&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Emails&nbsp;</th>
            </tr>
            </thead><tbody></tbody></table>
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="pqr" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            <table class="google-visualization-table-table"  cellspacing="10">
            <thead><tr class="google-visualization-table-tr-head">
            <th class="google-visualization-table-th gradient">&nbsp;Date&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Clicks&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Organic&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Direct&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Display&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Calls&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Emails&nbsp;</th>
            </tr>
            </thead><tbody></tbody></table>
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="khan" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="ghf" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            <table class="google-visualization-table-table"  cellspacing="10">
            <thead><tr class="google-visualization-table-tr-head">
            <th class="google-visualization-table-th gradient">&nbsp;Keyword&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Match Type&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Clicks&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Convs.&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Conv%&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Calls&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Call%&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal 1&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal 2&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal 3&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goal 4&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Email&nbsp;</th>
            </tr>
            </thead><tbody></tbody></table>
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="ijk" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="tileSection ui-draggable ui-draggable-handle" id="tileSection2237" style="position: relative; width: 1100px;  height: 200px; bottom: auto;  top: 0px; ">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Account PPC Overview  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="repc_date1_2237" class="repc_date hasDatepicker" value="02/01/2018">
            -
            <input type="text" id="repc_date2_2237" class="repc_date hasDatepicker" value="02/19/2018">
            <button class="updateReportCenterDate" id="update_2237">Update</button>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button id="gen_report_center_2237" class="gen_report_center" rtype="5" traffic="All" account_id="77e2b7a06a6ed0d997843ddb1cad83e4" campaign_id="" report="PPC Report" group_by="Day">Generate Report</button>
            <div class="clear closeSection" id="close_2237">
              
            </div><br><br>
            
            <div id="chart_div_2237_77e2b7a06a6ed0d997843ddb1cad83e4" class="chart_DIV">
            <div class="google-visualization-table" style="position: relative; z-index: 0; max-width: 100%; max-height: 100%;">
            <div style="position: relative; overflow: auto; max-width: 100%; max-height: 100%;">
            <table class="google-visualization-table-table"  cellspacing="10">
            <thead><tr class="google-visualization-table-tr-head">
            <th class="google-visualization-table-th gradient">&nbsp;Date&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Clicks&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Orangic&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Direct&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Dispaly&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Calls&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Goals&nbsp;</th>
            <th class="google-visualization-table-th gradient">&nbsp;Email&nbsp;</th>
            
            </tr>
            </thead><tbody></tbody></table>
            <div class="google-visualization-table-div-page gradient">
            <div class="charts-inline-block charts-custom-button charts-custom-button-disabled charts-custom-button-collapse-right" role="button" aria-disabled="true" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-prev"></span></div>
            </div></div><div class="charts-inline-block charts-custom-button charts-custom-button-collapse-left" role="button" tabindex="0" style="user-select: none;">
            <div class="charts-inline-block charts-custom-button-outer-box">
            <div class="charts-inline-block charts-custom-button-inner-box">
            <span class="google-visualization-table-page-next"></span>
            </div></div></div></div>
            <div style="clear: both; width: 100%; height: 0px;">
            </div></div></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btcolor"  class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</div>

@endsection
<style>
  .modal-dialog {
  height: 70% !important;
  padding-top:10%;
}

.modal-content {
  height: 100% !important;
  width:100%;
  overflow:visible;
}

.modal-body {
  height: 80%;
  overflow: auto;
}
  td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 2em;
}
  .btncolor{
background-color:#1ab394;
color:white;
border:1px solid gray;
border-radius:10px;
padding:5px;
width:200px;
height:50px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}
.btcolor{
color:white;
background-color:#1ab394;
border-radius:10px;
width:75px;
height:45px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}

.shadow{
width:100px;
heigth:25;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
  div.ex1 {
    
    width: 110px;
    height: 110px;
    overflow: scroll;
  </style>
  <style>
  #tallModal .modal-body p { margin-bottom: 900px }
  </style>

@section('scripts')
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  @endsection