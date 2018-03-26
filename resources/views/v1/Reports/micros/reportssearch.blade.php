@extends('layouts.app')
@section('title','Report search ')

@section('style')
<style>
td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 2em;
}
.btncolor{
background-color:#00cc7a;
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
</style>

@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
               <a href="{{url('reportsList')}}" style="color:black"> <span>
                    Reports
                </span></a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Search</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<div class="da-panel-header" style="margin-left:50px">
  <form action="searchreport" method="any">
<table><tr><td>
                  <div>
                    <span class="da-panel-title">
                      <b><center>Custom Query</center></b><hr width="80%" align="center">
                    </span>
                  </div>
                  <div class="col-sem-6">
                    <table align="center" style="width:50%" cellspacing="10" cellpadding="5">
                    <div class="da-form-row">
                      <tr>
                        <td><div class="category_div" id="category_div">Account</td> <td><select name="category" class="required-entry" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                              <option name="" value="">Select An Account</option>
                              <option name='2f0ee35b57077055e481dc9896d07496' value='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option name='77e2b7a06a6ed0d997843ddb1cad83e4' value='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option name='56848bc17c93660a942984531631ec66' value='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option name='3ad3099801c6d9af1dbc1940cfe438be' value='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option name='5aa10310366be0aa14aaa80c60f5ac67' value='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option name='09403ea3eb07cdbd1e9da1f1baa5204f' value='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option name='f1e96465b4ccff30b393962d629d6f62' value='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option name='30985deb3c9d4e189523b09ea235ebcc' value='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option name='1a2901584a7af4cdf90519e59d827ac7' value='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option name='165f79db0091ccc4d6972fbfa6b57356' value='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option name='fa5b84972e1a331bf8bdb13cdc5d92b2' value='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option name='76d7eaeeea2353d0acff9d3666169286' value='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option name='a417e73937309a207c95cb83c0005c36' value='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option name='2bf98ed63abe4eba3faa604c267fe066' value='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option name='94cf17a31dbf8769f2984c0872a36d18' value='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option name='4ddb4f0b78dcd0d9db12910bc9e3a4bf' value='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option name='eb16da04984a0aa8f35050044cdfe597' value='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option name='d6a112ee64e4cc7df6a23a445b3e7512' value='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option name='04ffcda7320dc2b1acac90e267cdf74a' value='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option name='a65e937e4ddf6bf6de91bea9891bb177' value='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option name='67d1313bcd7ff7e0b8d22a4f749bfd2f' value='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option name='012056cf7bf9ea0b4f3077edfd851520' value='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option name='3689cd138a82eacd9632e591887e881a' value='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option name='06cedeb761babe8c27b91f16bbfaf649' value='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option name='ba78b73db28a63e3e8a7740582c3dbdb' value='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option name='104321e1332ce429f9c51b6aa5b81956' value='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option name='5c1ff57f3c0f6421aa9b2d1ede6d091c' value='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option name='7719b71c916fec936b726c407b71c12e' value='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option name='596bbc3c2b710ed552650d745ca63613' value='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option name='56342ec62b6f33e2f2f7f5e435da300e' value='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option name='0d6e46e06b34bc11a56752f4c0db4e4f' value='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option name='a836016ca820908e66ef5e66aada46b8' value='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option name='fc7cb0c0beee4690f985ebf5d823c7fb' value='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option name='2cd5770d3ffbdd8a5b3152528b7c81c3' value='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option name='99acd85ef6ed4069cfd908aa034324d7' value='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option name='9738c34f9c6ba128fd4436454c10c7a8' value='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option name='8b1f62be8eef3ceb15bd74df1d78f38a' value='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option name='984a3bccf97834d1fae4f6f8b4698bfa' value='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option name='007d82926ce9d761810e67ac3bb017af' value='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option name='a1dd319e4414337a5436b5b754ec0127' value='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option name='fdfc6d69e5b8cca1d8ec5626a72eec8a' value='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option name='c943f4c50a9ba985bd9a113be62fa83c' value='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option name='6840c2098b2f2b56e3a8bdfd32941bd0' value='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option name='b28f1c34394a2325253a0037b9ebbdc8' value='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option name='7586dae8779cbc8fa525629d5c1e92ed' value='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option name='89d3a3118baf9c2abe4155f051128c78' value='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option name='c738202d7cd4fbfd027d9dd5c162bd5d' value='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option name='0e8d3bd80b68b2143a894b1126577f1e' value='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option name='e5919dd086b77782e5259e84a464af75' value='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option name='8f7124f60ea4a7ce0fb6ed4034d8c028' value='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option name='846052445e70f0fc86c31fb3bfa8211c' value='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option name='2ab110261b6d5fdec434b8b73321caaf' value='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option name='a7fb685c5d12586024e7b75aea86f184' value='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option name='86af4eee20059f0adcd26ae3fac22a2d' value='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option name='e1878b56feb55df95add999e3f08ff01' value='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option name='09c57986be2639fda849facf29945582' value='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option name='16cfdd0697c51397895ee2ca740578a0' value='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option name='dc0b7ae8c3ef4174837888ab2e3afaae' value='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option name='75e33ed0c9c975b534379219d97e01ce' value='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option name='c365b1565be6626a60119b87106f4577' value='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option name='e3bfac73e54cef93671c14046aeb927f' value='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option name='3c0471fd98ba26f6da279e4b40cf19c2' value='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option name='83f0cdab27964a0f8ec8deb570ca7876' value='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option name='ea046745cdbd8d46f3936d54873472db' value='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option name='4ab8fbf9f8be982a55ae55373950245c' value='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option name='37d4ba1058bfc61b15a5f3c793edc26e' value='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option name='a312d446e28b849dd9b3c4724bf61805' value='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option name='ac95571c588f5df1abf6594f20a1b7b9' value='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option name='436b124b609857d28fb6d440d0fcc155' value='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option name='cd7ab64bb909a0a506655b3a7dfe973b' value='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option name='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' value='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option name='348ace254fb32039bf3ccc8f6858f724' value='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option name='b45e04dc78c83a139255e4011a19b314' value='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option name='4bfbfa2ec208742f3eabb79bfccaa597' value='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option name='48c1385492ec3c9a35626a1bc13d476e' value='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option name='4dc12ce4cf7338867770e4435140834f' value='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option name='5c352c9dcd62957ce5fbd4b100e44001' value='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option name='3c927997d3e4bbadf5ea7a2a1036f858' value='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option name='e3d704f3542b44a621ebed70dc0efe13' value='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option name='a7e8707208f37a3e39b4b81a8551c676' value='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option name='24c9e15e52afc47c225b757e7bee1f9d' value='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option name='38758042b7e125d22fd7322c6fe475f6' value='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option name='e170fbd8e2ebc0d88b20861979dddba6' value='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option name='50ee9bc89d15d97d024f4d99caa01197' value='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option name='5c0437f7f7279ea81d4f88971de8eb1f' value='adw' data-time_zone='America/Los_Angeles' >adw</option><option name='8b3d3e8be9c177e4e63fa8a79e06243d' value='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option name='8c01845d67f0ce47dcfbd78b9fcbf4b1' value='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option name='18be0a5dcb5b3a196dbaf244449ac9d3' value='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option name='3fff9cfac85332ca4b55ca0a696cfef4' value='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option name='c246458d9da433f17600704abcc8a680' value='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option name='ff2bd36c14f3d5b0a832d0c1e871d6c2' value='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option name='b6cff89752d38e34229d686ecc63839d' value='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option name='1b365e93ffb403f8c9aaa4af17d7dcb2' value='erer' data-time_zone='America/Los_Angeles' >erer</option><option name='4435b6bbec81b357d3299085aed787bd' value='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option name='4d6382645b19bda1d1357826af4fe6a4' value='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option name='b7786916137132be19e1f5ccf9f7d0a1' value='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option name='b12f2be1508d744d48fa51373b94a6a2' value='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option name='28dcb1596f953dae6300b706b0665191' value='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option name='6b96eedcfb77ed12bd27e3bca7d06eb0' value='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option name='7e76526be3a92493f11831d543bb8946' value='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option name='fa44c780d706e9e7a9c772b97351cedb' value='MR' data-time_zone='Asia/Tokyo' >MR</option><option name='bd2732e02bd07e6540d37cacf1757f80' value='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option name='b6c9f62efeb6be919a2d413a4a8ded71' value='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option name='11df6cd9f7b18cb532a0ab32dc900cdc' value='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option name='ce91027a8ce76a85cbc0cc59af238dc9' value='new account' data-time_zone='America/Los_Angeles' >new account</option><option name='70b719857e6ec6d71266b4c949def8d2' value='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option name='e3ee7494e243580a319919e733f1469a' value='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option name='f617b63689444ec94e9a2ca68293c615' value='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option name='384e44297657dfffdfb31720c024913f' value='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option name='b14e26ec94fbc9a10c48edbad4e5bd77' value='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option name='d52b5ab090360ec577f4bb6993952c73' value='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option name='fedea0bfeeb5ed138b3052baed653a47' value='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option name='89e3980285790a6fb7247dc9deca31a9' value='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option name='7f24181524b6dd956be40e895a7ed1cf' value='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option name='234d61ae36bb9bc4a392edb137d64478' value='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option name='f97eac03d5d540093fe533eb6a91e8e4' value='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option name='35bsm4n4bu4mu5um' value='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option name='8f69f8432d3ebcffb342e5f43c265e45' value='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option name='ddc9e7780af347644c4e42df34696d05' value='test111' data-time_zone='America/Los_Angeles' >test111</option><option name='a63fcccb60fb5056f696c3356c0238f5' value='Varspec' data-time_zone='America/New_York' >Varspec</option><option name='8601d10d514bc81c0936e8dc5acf8884' value='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option name='d3804235f81c9120cbcab8b8a3586bf8' value='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>                            
                              </select>                            
                              </select>
                            </div></td>
                      </tr></div>
                    </div>
                  
                    <div class="da-form-row">
                    <tr><td>  <label>Campaign (optional)</label></td>
                      <div class="sub_category_div" id="sub_category_div">
                      <td><script type="text/javascript" language="JavaScript">
                          document.write('<select name="subcategory" id="subcategory"><option value="">Select a Campaign</option></select>');
                     </script></td>
                        </tr>
                    
                    </div>
                      </div>
                    </div>
                     
                    <div class="da-form-row">
                    
                    <tr><td>  <label>Keyword</label></td>
                    <td>  <div class="da-form-item large">
                        <input type="text" id="keyword" class="shadow" />
                        Contains: <input type="radio" name="keyword_spec" id="keyword_spec1" value="1" checked />
                        Equals: <input type="radio" name="keyword_spec" id="keyword_spec2" value="0"  /></td></tr>
                      </div></td></tr>
                    </div>
                    
                    <div class="da-form-row">
                    <tr><td>  <label>Source</label></td>
                    <td>  <div class="da-form-item large">
                        <input type="text" id="source" class="shadow"/>
                        Contains: <input type="radio" name="source_spec" id="source_spec1" value="1" checked />
                        Equals: <input type="radio" name="source_spec" id="source_spec2" value="0"  />
                      </div></td></tr>
                    </div>
                  
                    <div class="da-form-row">
                    <tr><td><label>Search Term</label></td>
                      <td><div class="da-form-item large">
                        <input type="text" id="searchTerm" class="shadow" /> 
                        Contains: <input type="radio" name="searchTerm_spec" id="searchTerm_spec1" value="1" checked />
                        Equals: <input type="radio" name="searchTerm_spec" id="searchTerm_spec2" value="0"  />
                      </td>
                      </div></tr>
                    </div>
                    
                    <div class="da-form-row"><tr><td>
                      <label>Traffic Type</label></td><td>
                      <div class="da-form-item large">
                        <select class='shortSel' id="traffic_type" name="traffic_type">
                          <option value='All'>All</option>                                  
                          <option value='PPC'>PPC</option>                                  
                          <option value='ORG'>ORGANIC</option>                                  
                          <option value='DIRECT'>DIRECT</option>                
                          <option value='DISPLAY'>DISPLAY</option>              
                        </select>
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row">
                      <tr><td><label>Visit Location</label></td><td>
                      <div class="da-form-item large">
                        <input type="text" id="visit_location" class="shadow"/> *contains
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row"><tr><td>
                      <label>Visit Duration (secs)</label></td>
                      <td><div class="da-form-item large">
                        <select id="visit_dur_operartor">
                          <option value=">">&rang;</option>
                          <option value="<">&lang;</option>
                          <option value="=">=</option>
                          <option value=">=">&rang;=</option>
                          <option value="<=">&lang;=</option>
                        </select>
                        
                        <input type="text" id="visit_duration" class="shadow" />
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row">
                    <tr><td>  <label>Platform</label></td><td>
                      <div class="da-form-item large">
                        Mobile: <input type="radio" name="mobile" id="mobile_m" value="1" />
                        Desktop: <input type="radio" name="mobile" id="mobile_d" value="0"  />
                        All: <input type="radio" name="mobile" id="mobile_a" value="2"  checked />
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row"><tr><td>
                      <label>Date of Visit</label></td><td>
                      <div class="da-form-item large">
                        From: <input type="date" id="date1_v" class="shadow"/>
                        To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="date2_v" class="shadow"/>
                      </div></td></tr>
                    </div><tr><td>
                    
                    <div class="da-button-row">
                      <a href="#searchReport"><input id="run_query" type="submit" value="Show Results" class="btncolor" onclick="#searchReport" style="height:50px;width:120px"></a>
                    </div></td></td></table>
                </div>    
                    
              </div>  
          </div></td> 
          <div class="grid_2">
          <td>    <div class="da-panel">
                  <div class="da-panel-header">
                    <span class="da-panel-title">
                       
                    </span>
                  </div>
                  <div class="col-sem-6" style='margin-bottom:110px'>
          <table align="center" style="width:50%" cellspacing="10" cellpadding="5" style='padding-top:1em'>
                     <div class="da-form-row"><tr><td>
                      <label>Tracking Phone Number</label></td><td>
                      <div class="da-form-item large">
                        <input type="text" id="phone_number" class="shadow" /> *contains
                      </div></td></tr>
                    </div>
                     
                    <div class="da-form-row">
                    <tr><td>  <label>Conversions Only</label></td><td>
                      <div class="da-form-item large">
                        Yes: <input type="radio" name="conversion" id="conversion_y" value="1" />
                        No: <input type="radio" name="conversion" id="conversion_n" value="0" checked />
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row"><tr><td>
                      <label>Calls Only</label></td><td>
                      <div class="da-form-item large">
                        Yes: <input type="radio" name="call_made" id="call_made1" value="1" />
                        No: <input type="radio" name="call_made" id="call_made2" value="0" checked />
                      </div></td></tr>
                    </div>
                    
                     <div class="da-form-row"><tr><td>
                      <label>Caller Phone Number</label></td><td>
                      <div class="da-form-item large">
                        <input type="text" id="caller_phone" class="shadow" /> *contains
                      </div></td></tr>
                    </div><hr width="80%" align="center">
                     <div class="da-form-row">
                    <tr><td>  <label>Caller Location</label></td><td>
                      <div class="da-form-item large">
                        <input type="text" id="caller_location" class="shadow"/> *contains
                      </div></td></tr>
                    </div>
                     <div class="da-form-row">
                      <tr><td><label>Call Duration (secs)</label></td><td>
                      <div class="da-form-item large">
                        <select id="call_dur_operator">
                          <option value=">">&rang;</option>
                          <option value="<">&lang;</option>
                          <option value="=">=</option>
                          <option value=">=">&rang;=</option>
                          <option value="<=">&lang;=</option>
                        </select>
                        <input type="text" id="call_duration" class="shadow"/>
                      </div></td></tr>
                    </div>
                    <div class="da-form-row">
                      <tr><td><label>Date of Call</label></td><td>
                      <div class="da-form-item large">
                        From: <input type="text" id="date1_c" class="shadow" />
                        To: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="date2_c" class="shadow" />
                      </div></td></tr>
                    </div>
                    </table>
                </div>    
            </div>  </td>
          </div>  
          
  </form>
</tr></table>  

<div style="overflow-x: scroll">
        <table class="table table-striped table-bordered" class="" width="100%" id="searchReport">
          <div class="table-grid" id="table-scroll">
                       <tr>                
                        <th>Row </th>
                        <th>time_stamp</th>
                        <th>goal1_hit</th>
                        <th>goal2_hit</th>
                        <th>goal3_hit</th>
                        <th>goal4_hit</th>
                        <th>time_of_call</th>
                        <th>call_status</th>
                        <th>keyword</th>
                        <th>searchTerm</th>
                        <th>matchtype</th>
                        <th>source</th>
                        <th>traffic_type</th>
                        <th>entry_type</th>
                        <th>phone_number</th>
                        <th>caller_phone</th>
                        <th>call_recording</th>
                        <th>call_rate</th>
                        <th>caller_state</th>
                        <th>caller_country</th>
                        <th>call_duration</th>
                        <th>clicks</th>
                        <th>page_views</th>
                        <th>mobile</th>
                        <th>time_on_site</th>
                        <th>visitor_city_state</th>
                 
                      </tr>
          <tr>
             @if($test)
            @foreach($test as $key => $data)
            <td>{{$key}}</td>
            <td>{{$data->goal1}}</td>
            <td>{{$data->goal2}}</td>
            <td>{{$data->goal3}}</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><? php echo keywords();?> </td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td><? php echo gettracktype();?></td>
            <td>0</td>
            <td>{{$data->default_number}}</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>

          </tr>
          @endforeach 
          @else
          <label class="label label-danger">No Data found....</label>
          @endif
        </div>

                    
</table>
                            
        

</div>

            
 @endsection

  <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #075f98;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>  

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "1015VM_ワンクリック詐欺EL" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("it-trouble","it-trouble");
                        
                        break;
                    
                    case "1030 アドウェイズテスト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("adwaystest2016","adwaystest2016");
                        document.getElementById("subcategory").options[2]=new Option("ssss","ssss");
                        break;
                    case "1039VM_エスケージ株式会社" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("kyutouki","kyutouki");
                        break;
                    case "1057 AF_Me_四ツ谷ローズクリニック" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("harg","harg");
                        break;
                        case "1059 マーケットエンタープライズ" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sp","sp");
                        document.getElementById("subcategory").options[2]=new Option("pc","pc");
                        document.getElementById("subcategory").options[3]=new Option("pcoffline","pcoffline");
                        document.getElementById("subcategory").options[4]=new Option("rentoffine","rentoffine");
                        document.getElementById("subcategory").options[5]=new Option("dolllp","dolllp");
                        document.getElementById("subcategory").options[6]=new Option("n_adtr","n_adtr");
                        break;
                        case "1074タウ" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("tau-reuse","tau-reuse");
                        document.getElementById("subcategory").options[2]=new Option("tau-display","tau-display");
                        document.getElementById("subcategory").options[3]=new Option("tau-sp","tau-sp");
                        document.getElementById("subcategory").options[4]=new Option("tau-sp-disp","tau-sp-disp");
                        break;
                        case "1094 CA_湘南美容外科" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sbcladies","sbcladies");
                        break;
                        case "224Any-RC" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("any_ecosamurai_st","any_ecosamurai_st");
                        document.getElementById("subcategory").options[2]=new Option("ecosamurai_ct","ecosamurai_ct");
                        document.getElementById("subcategory").options[3]=new Option("ecosamurai_dflt","ecosamurai_dflt");
                        document.getElementById("subcategory").options[4]=new Option("ecosamurai_media","ecosamurai_media");
                        document.getElementById("subcategory").options[5]=new Option("gomiyashiki_lpdf","gomiyashiki_lpdf");
                        document.getElementById("subcategory").options[6]=new Option("ecosamurai_dflt2","ecosamurai_dflt2");
                        document.getElementById("subcategory").options[7]=new Option("ihinseiri_lpdf","ihinseiri_lpdf");
                        document.getElementById("subcategory").options[8]=new Option("jikosha_lpdf","jikosha_lpdf");
                        document.getElementById("subcategory").options[9]=new Option("ecosamurai_kaitori_media","ecosamurai_kaitori_media");
                        document.getElementById("subcategory").options[10]=new Option("gomiyashiki_hlpdf","gomiyashiki_hlpdf");
                        break;
                        case "234Any おそうじ革命[CR]" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("CR","CR");
                         document.getElementById("subcategory").options[2]=new Option("fc_g","fc_g");
                          document.getElementById("subcategory").options[3]=new Option("fc_g","fc_g");
                        break;
                        case "249Any-Ecostyle" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("ecostyle_ct","ecostyle_ct");
                        break;
                        case "258okkanri" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("seikatsutrouble99_ct","seikatsutrouble99_ct");
                        break;
                        case "263Origami-Takehiro" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("takehiro_ct","takehiro_ct");
                        break;
                        case "267Any-MasterPiece" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("mp_ct","mp_ct");
                        break;
                        case "291Gtyle" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("kashikiriparty_mobile","kashikiriparty_mobile")
                         document.getElementById("subcategory").options[2]=new Option("offine 1","offine 1");
                          document.getElementById("subcategory").options[3]=new Option("caterringstyle_ct","caterringstyle_ct");
                          document.getElementById("subcategory").options[4]=new Option("caterringstyle_a","caterringstyle_a");
                          document.getElementById("subcategory").options[5]=new Option("caterringstyle_b","caterringstyle_b");
                          document.getElementById("subcategory").options[6]=new Option("caterringstyle_c","caterringstyle_c");
                        break;
                        case "292siemple-yotuba" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("npoyotuba_ct","npoyotuba_ct");
                        break;
                        case "2nd new acct" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Testing","Testing");
                        break;
                        case "307ランド" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("_speedkaitori_offline","_speedkaitori_offline");
                        document.getElementById("subcategory").options[2]=new Option("_speedkaitori_ct","_speedkaitori_ct");
                        document.getElementById("subcategory").options[3]=new Option("_speedkaitori_050","_speedkaitori_050");
                        document.getElementById("subcategory").options[4]=new Option("_nonct","_nonct");
                        break;
                        case "332THE IMPLANT" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("theimplat_st","theimplat_st");
                                                document.getElementById("subcategory").options[2]=new Option("theimplat_st1","theimplat_st1");
                        break;
                        case "344ビートレーディング" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("betrading_ct","betrading_ct");
                           document.getElementById("subcategory").options[2]=new Option("betrading_dflt","betrading_dflt");
                              document.getElementById("subcategory").options[3]=new Option("FAXDM","FAXDM");
                        break;
                        case "357Nakamura-law" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Nakamuralaw_ct","Nakamuralaw_ct");
                           document.getElementById("subcategory").options[2]=new Option("Nakamuralaw_offline","Nakamuralaw_offline");     
                        break;
                        case "366万力" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("banriki","banriki");
                         document.getElementById("subcategory").options[2]=new Option("banriki2","banriki2"); 
                        break;
                        case "389レガシィ" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("legacy1","legacy1");
                    document.getElementById("subcategory").options[2]=new Option("legacy2","legacy2");                 
                        break;
                        case "390ZCルクス2" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("zcluxx2","zcluxx2");
                        break;
                        case "392フレックスインターナショナル" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("flexintlst","flexintlst");
                        break;
                        case "399弁護士ドットコム" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("bengo4mtdefault","bengo4mtdefault");
                         document.getElementById("subcategory").options[2]=new Option("bengo4mt","bengo4mt");
                        break;
                        case "423エーピーカンパニー" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        
                        break;
                        case "436グレイス" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("gakkikaitori","gakkikaitori");
                        document.getElementById("subcategory").options[2]=new Option("447Trine","447Trine");
                        break;
                        case "450ARA2" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("ara2","ara2");
                        document.getElementById("subcategory").options[2]=new Option("ara2defautl","ara2defautl");
                        break;
                        case "454日本スマイル" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("hanarabi_ct","hanarabi_ct");
                        break;
                        case "455ダイコウメディカル" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("daikoumedical","daikoumedical");
                        break;
                        case "469マグマダイエットt" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("magmadiet_st","magmadiet_st");
                        document.getElementById("subcategory").options[2]=new Option("magmadiet_dflt","magmadiet_dflt");
                        break;
                        case "481T&W" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("txw_st","txw_st");
                        break;
                        case "501CAN" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("can","can");
                        break;
                        case "504カーブスジャパン" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
     
                        break;
                        case "505ジェイック" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("jaic_dflt","jaic_dflt");
                        document.getElementById("subcategory").options[2]=new Option("jaic","jaic");
                        document.getElementById("subcategory").options[3]=new Option("tokyo","tokyo");
                        document.getElementById("subcategory").options[4]=new Option("shinjuku","shinjuku");
                        document.getElementById("subcategory").options[5]=new Option("yokohama","yokohama");
                        document.getElementById("subcategory").options[6]=new Option("nagoya","nagoya");
                        break;
                         case "513aun_ビートレーディング" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("betrading","betrading");
                        document.getElementById("subcategory").options[2]=new Option("betradingdiflt","betradingdflt");
                        document.getElementById("subcategory").options[3]=new Option("FaxDM","FaxDM");
                        document.getElementById("subcategory").options[4]=new Option("begin-factoring.net1","begin-factoring.net1");
                        document.getElementById("subcategory").options[5]=new Option("begin-factoring.net2","begin-factoring.net2");
                        document.getElementById("subcategory").options[6]=new Option("betrading2","betrading2");
                        break;
                         case "518Kireimo" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("kireimo","kireimo");
                        document.getElementById("subcategory").options[2]=new Option("kireimo_offline","kireimo_offline");
                        break;
                         case "540DS松原クリニック" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("matsubarac","");
                        break;
                         case "577OSマイト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        
                        break;
                         case "600DSケイタイゴッド" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("keitaigod","keitaigod");
                        break;
                         case "601DSルクス" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("luxx_ct","luxx_ct");
                        document.getElementById("subcategory").options[2]=new Option("luxx_dt","luxx_dt");
                        break;
                         case "605サンキョークリーン" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sankyo64","sankyo64");
                        break;
                         case "611SHIROFUNEテスト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("shirofune_test","shirofune_test");
                        break;
                         case "703DSルクス車買取" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("rukusu_kuruma","rukusu_kuruma");
                        break;
                         case "724日本総合 転職道.com" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("tenshokudou","tenshokudou");
                        break;
                         case "738 フルスピード_くすの木法律事務所" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("kusunoki","kusunoki");
                        break;
                        case "745受験ドクター" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("jukendoctor","jukendoctor");
                        break;
                        case "752bloom_ST" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("bloom","bloom");
                        break;
                        case "754みんれび" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("minrevi","minrevi");
                        document.getElementById("subcategory").options[2]=new Option("ORGANIC","ORGANIC");
                        document.getElementById("subcategory").options[3]=new Option("Y/G_PPC * DSP","minrevi");
                        break;
                        case "771スカイダイニング" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("skydining_st","skydining_st");
                        document.getElementById("subcategory").options[2]=new Option("skydining_offline","skydining_offline");
                        document.getElementById("subcategory").options[3]=new Option("skydining_chirashi","skydining_chirashi");
                        break;
                        case "793日本駐車場開発" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "800都市ガスサービス" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("chibatoshi","chibatoshi");
                        document.getElementById("subcategory").options[2]=new Option("gas_tokyo","gas_tokyo");
                        break;
                        case "801スターティアラボ" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("startialab","startialab");
                        break;
                        case "810 AF_OS_トレジャートレーディング" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("treasure","treasure");
                        break;
                        case "818 アップルパークDSPKG" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("appleparkds","appleparkds");
                        break;
                        case "819AFTR_MEDIX" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("medix","medix");
                        break;
                        case "838SLSハイパーロックレスキュー" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("lock-hyper-rescue","lock-hyper-rescue");
                        document.getElementById("subcategory").options[2]=new Option("lock-hyper-rescue_offline","lock-hyper-rescue_offline");
                        document.getElementById("subcategory").options[3]=new Option("sp_area","sp_area");
                        document.getElementById("subcategory").options[4]=new Option("sp_kanzen","sp_kanzen");
                        document.getElementById("subcategory").options[5]=new Option("sp_buben","sp_buben");
                        document.getElementById("subcategory").options[6]=new Option("google_key","google_key");
                        document.getElementById("subcategory").options[7]=new Option("kyuto_key","kyuto_key");
                        break;
                        case "843AF_SHすみれ海浜幕張" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sumire_kaihinmakuhari","sumire_kaihinmakuhari");
                        break;
                        case "844AF_SHすみれ渋谷" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sumire_shibuya","sumire_shibuya");
                        break;
                        case "845AF_SHすみれ宮益坂" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("sumire_miyamasuzaka","sumire_miyamasuzaka");
                        break;
                        case "848 フルスピード_カルド上石神井" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("rocs","rocs");
                        document.getElementById("subcategory").options[2]=new Option("rocs_","rocs_");
                        break;
                        case "849any光コラボ_引越" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("hikarihikkoshi_df","hikarihikkoshi_df");
                        document.getElementById("subcategory").options[2]=new Option("hikarihikkoshi_sf","hikarihikkoshi_sf");
                        break;
                        case "850any光コラボ_転用" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("hikarihikkoshi_df","hikarihikkoshi_df");
                        document.getElementById("subcategory").options[2]=new Option("hikarihikkoshi_sf","hikarihikkoshi_sf");
                        break;
                        case "859minrevi" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
document.getElementById("subcategory").options[1]=new Option("hikarihikkoshi_df","hikarihikkoshi_df");
                        document.getElementById("subcategory").options[2]=new Option("hikarihikkoshi_sf","hikarihikkoshi_sf");
                        break;
                        case "869株式会社メーカーズST" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("chikushino","chikushino");
                        break;
                        case "870aun株式会社33" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("biss-hd","biss-hd");
                        document.getElementById("subcategory").options[2]=new Option("biss-hd_offline","biss-hd_offline");
                        break;
                        case "871JB_大塚美容整形外科" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("otsuka-biyo","otsuka-biyo");
                        break;
                        case "880 コネクト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
       
                        break;
                        case "894 AF_OS_フォーマルクライン" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("formalklein","formalklein");
                        break;
                        case "895ネット誹謗中傷コンシェルジュST" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("slander","slander");
                        document.getElementById("subcategory").options[2]=new Option("Yahoo_KW","Yahoo_KW");
                        document.getElementById("subcategory").options[3]=new Option("Yahoo_DSP","Yahoo_DSP");
                        document.getElementById("subcategory").options[4]=new Option("Yahoo_","Yahoo_");
                        document.getElementById("subcategory").options[5]=new Option("google_KW","oogle_KW");
                        document.getElementById("subcategory").options[6]=new Option("google_DSP","google_DSP");
                        document.getElementById("subcategory").options[7]=new Option("facebook","facebook");
                        break;
                        case "952イートラスト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("e-trsut","e-trsut");
                        document.getElementById("subcategory").options[2]=new Option("e-trsut2","e-trsut2");
                        break;
                        case "964SMC税理士法人" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("smckeiri","smckeiri");
                        break;
                        case "966会議室セレクト" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("kaigi-select","kaigi-select");
                        break;
                        case "972ウルトラバイヤープラス" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("plus-org","plus-org");
                        document.getElementById("subcategory").options[2]=new Option("plus-b-offline","plus-b-offline");
                        document.getElementById("subcategory").options[3]=new Option("plus-b-display","plus-b-display");
                        document.getElementById("subcategory").options[4]=new Option("plus-b-publie","plus-b-publie");
                        document.getElementById("subcategory").options[5]=new Option("plus-b-ad","plus-b-ad");
                        document.getElementById("subcategory").options[6]=new Option("inspect02","inspect02");
                        document.getElementById("subcategory").options[7]=new Option("inspect03","inspect03");
                        document.getElementById("subcategory").options[8]=new Option("inspect04","inspect04");
                        document.getElementById("subcategory").options[9]=new Option("inspect05","inspect05");
                        document.getElementById("subcategory").options[10]=new Option("inspect06","inspect06");
                        document.getElementById("subcategory").options[11]=new Option("inspect07","inspect07");
                        document.getElementById("subcategory").options[12]=new Option("inspect08","inspect08");
                        document.getElementById("subcategory").options[13]=new Option("inspect09","inspect09");
                        document.getElementById("subcategory").options[14]=new Option("inspect10","inspect10");
                        document.getElementById("subcategory").options[15]=new Option("inspect11","inspect11");
                        document.getElementById("subcategory").options[16]=new Option("inspect12","inspect12");
                        document.getElementById("subcategory").options[17]=new Option("inspect13","inspect13");
                        document.getElementById("subcategory").options[18]=new Option("inspect14","inspect14");
                        document.getElementById("subcategory").options[19]=new Option("inspect15","inspect15");
                        document.getElementById("subcategory").options[20]=new Option("inspect16","inspect16");
                        document.getElementById("subcategory").options[21]=new Option("inspect17","inspect17");
                        document.getElementById("subcategory").options[22]=new Option("inspect18","inspect18");
                        document.getElementById("subcategory").options[23]=new Option("inspect19","inspect19");
                        document.getElementById("subcategory").options[24]=new Option("inspect20","inspect20");
                        document.getElementById("subcategory").options[25]=new Option("inspect21","inspect21");
                        document.getElementById("subcategory").options[26]=new Option("inspect22","inspect22");
                        document.getElementById("subcategory").options[27]=new Option("inspect23","inspect23");
                        document.getElementById("subcategory").options[28]=new Option("inspect24","inspect24");
                        document.getElementById("subcategory").options[29]=new Option("inspect25","inspect25");
                        document.getElementById("subcategory").options[30]=new Option("inspect26","inspect26");
                        document.getElementById("subcategory").options[31]=new Option("inspect27","inspect27");
                        document.getElementById("subcategory").options[32]=new Option("inspect28","inspect28");
                        document.getElementById("subcategory").options[33]=new Option("inspect29","inspect29");
                        document.getElementById("subcategory").options[34]=new Option("inspect30","inspect30");
                        document.getElementById("subcategory").options[35]=new Option("inspect31","inspect31");

                        break;
                        case "973株式会社ハーツワークス" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("heartsworks","heartsworks");
                        break;
                        case "974シロクマ整体院" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("s-shirokuma","s-shirokuma");
                        break;
                        case "989ウルトラバイヤー" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("ultra-b","ultra-b");
                        document.getElementById("subcategory").options[2]=new Option("ultra-b_offline","ultra-b-offline");
                        break;
                        case "ADgainer Inc2" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("demo050","demo050");
                        document.getElementById("subcategory").options[2]=new Option("demo0800","demo0800");
                        document.getElementById("subcategory").options[3]=new Option("CT LP","CT LP");
                        document.getElementById("subcategory").options[4]=new Option("OFFLINE test","OFFLINE test");
                        document.getElementById("subcategory").options[5]=new Option("image replacement","image replacement");
                        document.getElementById("subcategory").options[6]=new Option("AGKK","AGKK");
                        document.getElementById("subcategory").options[7]=new Option("eblest offline","eblest offline");
                        document.getElementById("subcategory").options[8]=new Option("sourcetest","sourcetest");
                        document.getElementById("subcategory").options[9]=new Option("aglp","aglp");
                        break;
                        case "ADgainer Inc" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Source Camp test","");
                        document.getElementById("subcategory").options[2]=new Option("twilio test","");
                        document.getElementById("subcategory").options[3]=new Option("Source camp test 2","");
                        document.getElementById("subcategory").options[4]=new Option("calltracking campaign","");
                        document.getElementById("subcategory").options[5]=new Option("zerocreator","");
                        break;
                        case "ADgainer Japan Office" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "ADgainer" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("ADgainer Main Site","");
                        document.getElementById("subcategory").options[2]=new Option("ADgainer KK Site","");
                        document.getElementById("subcategory").options[3]=new Option("Super PAges","");
                        document.getElementById("subcategory").options[4]=new Option("NEw multi Campaign","");
                        document.getElementById("subcategory").options[5]=new Option("main site","");
                        document.getElementById("subcategory").options[6]=new Option("Source2","");
                        document.getElementById("subcategory").options[7]=new Option("Ads Network 2","");
                        document.getElementById("subcategory").options[8]=new Option("renamed","");
                        document.getElementById("subcategory").options[9]=new Option("test camp 2","");
                        document.getElementById("subcategory").options[10]=new Option("New submit Campaign","");
                        document.getElementById("subcategory").options[11]=new Option("new Submit Campaign","");
                        document.getElementById("subcategory").options[12]=new Option("Make New Auto","");
                        document.getElementById("subcategory").options[13]=new Option("JPN","");
                        break;
                        case "AE Tuning1" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Main Site","");
                        document.getElementById("subcategory").options[2]=new Option("Mobile Site","");
                        document.getElementById("subcategory").options[3]=new Option("AutoConceptsUSA","");

                        
                        break;
                        case "AMV Air Conditioning, Inc." :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Goole ADwords - Search","");
                        break;
                        case "Advanced Skin Therapy" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Adwords","");
                        document.getElementById("subcategory").options[2]=new Option("Bling","");
                        break;
                        case "adw" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("mammemo","");
                        break;
                        case "Apollo Plumbing" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Adwords","");
                        break;
                        case "BCJ-Chestertax" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "BCJ-Livent" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        
                        break;
                        case "CINH-privatesalon" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "cyberscene-suidoukyukyusha" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("suidoukyukyusha_ct","");
                        break;
                        case "eBLEST" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("SRJ Offline","");
                        break;
                        case "erer" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "GoGoClean" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("GoGoClean","");
                        break;
                        case "GoldStandard-REVE" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("mizunet_ct","");
                        break;
                        case "Grand Monde" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Tracking","");
                        break;
                        case "Hyper Advanced (Christian)" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Web Dev Sites","");
                        break;
                        case "IKKO" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");

                        break;
                        case "J-B" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("2more ct","");
                        break;
                        case "KML Access" :
                        document.getElementById("subcategory").options[0]=new Option("Select a Campaign","");
                        document.getElementById("subcategory").options[1]=new Option("Tracking","");
                        break;



                }
                return true;
            }
function gettracktype()
{
  var track=document.getElementById('traffic_type');
  return track;
}
function keywords()
{
  var key=document.getElementById('keyword');
  return key;
}


       </script>
@endsection
