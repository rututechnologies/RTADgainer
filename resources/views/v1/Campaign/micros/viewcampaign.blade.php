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
													
														&nbsp;&nbsp;&nbsp;Search:<input type="text" id="search_account_select" />

													
													
														&nbsp;&nbsp;&nbsp;Account:<select id="campaign_account">
															<option value="" name_="">Select An Account</option>
															<option value='2f0ee35b57077055e481dc9896d07496' name_='1015VM_ワンクリック詐欺EL' data-time_zone='Asia/Tokyo' >1015VM_ワンクリック詐欺EL</option><option value='77e2b7a06a6ed0d997843ddb1cad83e4' name_='1030 アドウェイズテスト' data-time_zone='' >1030 アドウェイズテスト</option><option value='56848bc17c93660a942984531631ec66' name_='1039VM_エスケージ株式会社' data-time_zone='' >1039VM_エスケージ株式会社</option><option value='3ad3099801c6d9af1dbc1940cfe438be' name_='1057 AF_Me_四ツ谷ローズクリニック' data-time_zone='Asia/Tokyo' >1057 AF_Me_四ツ谷ローズクリニック</option><option value='5aa10310366be0aa14aaa80c60f5ac67' name_='1059 マーケットエンタープライズ' data-time_zone='Asia/Tokyo' >1059 マーケットエンタープライズ</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f' name_='1074タウ' data-time_zone='Asia/Tokyo' >1074タウ</option><option value='f1e96465b4ccff30b393962d629d6f62' name_='1094 CA_湘南美容外科' data-time_zone='Asia/Tokyo' >1094 CA_湘南美容外科</option><option value='30985deb3c9d4e189523b09ea235ebcc' name_='224Any-RC' data-time_zone='Asia/Tokyo' >224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7' name_='234Any おそうじ革命[CR]' data-time_zone='Asia/Tokyo' >234Any おそうじ革命[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356' name_='249Any-Ecostyle' data-time_zone='Asia/Tokyo' >249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2' name_='258okkanri' data-time_zone='Asia/Tokyo' >258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286' name_='263Origami-Takehiro' data-time_zone='Asia/Tokyo' >263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36' name_='267Any-MasterPiece' data-time_zone='Asia/Tokyo' >267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066' name_='291Gtyle' data-time_zone='Asia/Tokyo' >291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18' name_='292siemple-yotuba' data-time_zone='Asia/Tokyo' >292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf' name_='2nd new acct' data-time_zone='America/Los_Angeles' >2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597' name_='307ランド' data-time_zone='Asia/Tokyo' >307ランド</option><option value='d6a112ee64e4cc7df6a23a445b3e7512' name_='332THE IMPLANT' data-time_zone='Asia/Tokyo' >332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a' name_='344ビートレーディング' data-time_zone='America/Los_Angeles' >344ビートレーディング</option><option value='a65e937e4ddf6bf6de91bea9891bb177' name_='357Nakamura-law' data-time_zone='America/Los_Angeles' >357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f' name_='366万力' data-time_zone='Asia/Tokyo' >366万力</option><option value='012056cf7bf9ea0b4f3077edfd851520' name_='389レガシィ' data-time_zone='Asia/Tokyo' >389レガシィ</option><option value='3689cd138a82eacd9632e591887e881a' name_='390ZCルクス2' data-time_zone='Asia/Tokyo' >390ZCルクス2</option><option value='06cedeb761babe8c27b91f16bbfaf649' name_='392フレックスインターナショナル' data-time_zone='Asia/Tokyo' >392フレックスインターナショナル</option><option value='ba78b73db28a63e3e8a7740582c3dbdb' name_='399弁護士ドットコム' data-time_zone='Asia/Tokyo' >399弁護士ドットコム</option><option value='104321e1332ce429f9c51b6aa5b81956' name_='423エーピーカンパニー' data-time_zone='Asia/Tokyo' >423エーピーカンパニー</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c' name_='436グレイス' data-time_zone='Asia/Tokyo' >436グレイス</option><option value='7719b71c916fec936b726c407b71c12e' name_='450ARA2' data-time_zone='Asia/Tokyo' >450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613' name_='454日本スマイル' data-time_zone='Asia/Tokyo' >454日本スマイル</option><option value='56342ec62b6f33e2f2f7f5e435da300e' name_='455ダイコウメディカル' data-time_zone='Asia/Tokyo' >455ダイコウメディカル</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f' name_='469マグマダイエット' data-time_zone='Asia/Tokyo' >469マグマダイエット</option><option value='a836016ca820908e66ef5e66aada46b8' name_='481T&W' data-time_zone='Asia/Tokyo' >481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb' name_='501CAN' data-time_zone='Asia/Tokyo' >501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3' name_='504カーブスジャパン' data-time_zone='Asia/Tokyo' >504カーブスジャパン</option><option value='99acd85ef6ed4069cfd908aa034324d7' name_='505ジェイック' data-time_zone='Asia/Tokyo' >505ジェイック</option><option value='9738c34f9c6ba128fd4436454c10c7a8' name_='513aun_ビートレーディング' data-time_zone='Asia/Tokyo' >513aun_ビートレーディング</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a' name_='518Kireimo' data-time_zone='Asia/Tokyo' >518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa' name_='540DS松原クリニック' data-time_zone='Asia/Tokyo' >540DS松原クリニック</option><option value='007d82926ce9d761810e67ac3bb017af' name_='577OSマイト' data-time_zone='Asia/Tokyo' >577OSマイト</option><option value='a1dd319e4414337a5436b5b754ec0127' name_='600DSケイタイゴッド' data-time_zone='America/Los_Angeles' >600DSケイタイゴッド</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a' name_='601DSルクス' data-time_zone='Asia/Tokyo' >601DSルクス</option><option value='c943f4c50a9ba985bd9a113be62fa83c' name_='605サンキョークリーン' data-time_zone='' >605サンキョークリーン</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0' name_='611SHIROFUNEテスト' data-time_zone='Asia/Tokyo' >611SHIROFUNEテスト</option><option value='b28f1c34394a2325253a0037b9ebbdc8' name_='703DSルクス車買取' data-time_zone='America/Los_Angeles' >703DSルクス車買取</option><option value='7586dae8779cbc8fa525629d5c1e92ed' name_='724日本総合 転職道.com' data-time_zone='Asia/Tokyo' >724日本総合 転職道.com</option><option value='89d3a3118baf9c2abe4155f051128c78' name_='738 フルスピード_くすの木法律事務所' data-time_zone='Asia/Tokyo' >738 フルスピード_くすの木法律事務所</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d' name_='745受験ドクター' data-time_zone='Asia/Tokyo' >745受験ドクター</option><option value='0e8d3bd80b68b2143a894b1126577f1e' name_='752bloom_ST' data-time_zone='Asia/Tokyo' >752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75' name_='754みんれび' data-time_zone='Asia/Tokyo' >754みんれび</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028' name_='771スカイダイニング' data-time_zone='Asia/Tokyo' >771スカイダイニング</option><option value='846052445e70f0fc86c31fb3bfa8211c' name_='793日本駐車場開発' data-time_zone='' >793日本駐車場開発</option><option value='2ab110261b6d5fdec434b8b73321caaf' name_='800都市ガスサービス' data-time_zone='Asia/Tokyo' >800都市ガスサービス</option><option value='a7fb685c5d12586024e7b75aea86f184' name_='801スターティアラボ' data-time_zone='' >801スターティアラボ</option><option value='86af4eee20059f0adcd26ae3fac22a2d' name_='810 AF_OS_トレジャートレーディング' data-time_zone='America/Los_Angeles' >810 AF_OS_トレジャートレーディング</option><option value='e1878b56feb55df95add999e3f08ff01' name_='818 アップルパークDSPKG' data-time_zone='' >818 アップルパークDSPKG</option><option value='09c57986be2639fda849facf29945582' name_='819AFTR_MEDIX' data-time_zone='America/Los_Angeles' >819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0' name_='838SLSハイパーロックレスキュー' data-time_zone='Asia/Tokyo' >838SLSハイパーロックレスキュー</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae' name_='843AF_SHすみれ海浜幕張' data-time_zone='Asia/Tokyo' >843AF_SHすみれ海浜幕張</option><option value='75e33ed0c9c975b534379219d97e01ce' name_='844AF_SHすみれ渋谷' data-time_zone='Asia/Tokyo' >844AF_SHすみれ渋谷</option><option value='c365b1565be6626a60119b87106f4577' name_='845AF_SHすみれ宮益坂' data-time_zone='Asia/Tokyo' >845AF_SHすみれ宮益坂</option><option value='e3bfac73e54cef93671c14046aeb927f' name_='848 フルスピード_カルド上石神井' data-time_zone='Asia/Tokyo' >848 フルスピード_カルド上石神井</option><option value='3c0471fd98ba26f6da279e4b40cf19c2' name_='849any光コラボ_引越' data-time_zone='Asia/Tokyo' >849any光コラボ_引越</option><option value='83f0cdab27964a0f8ec8deb570ca7876' name_='850any光コラボ_転用' data-time_zone='Asia/Tokyo' >850any光コラボ_転用</option><option value='ea046745cdbd8d46f3936d54873472db' name_='859minrevi' data-time_zone='Asia/Tokyo' >859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c' name_='869株式会社メーカーズST' data-time_zone='Asia/Tokyo' >869株式会社メーカーズST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e' name_='870aun株式会社33' data-time_zone='Asia/Tokyo' >870aun株式会社33</option><option value='a312d446e28b849dd9b3c4724bf61805' name_='871JB_大塚美容整形外科' data-time_zone='Asia/Tokyo' >871JB_大塚美容整形外科</option><option value='ac95571c588f5df1abf6594f20a1b7b9' name_='880 コネクト' data-time_zone='Asia/Tokyo' >880 コネクト</option><option value='436b124b609857d28fb6d440d0fcc155' name_='894 AF_OS_フォーマルクライン' data-time_zone='Asia/Tokyo' >894 AF_OS_フォーマルクライン</option><option value='cd7ab64bb909a0a506655b3a7dfe973b' name_='895ネット誹謗中傷コンシェルジュST' data-time_zone='Asia/Tokyo' >895ネット誹謗中傷コンシェルジュST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b' name_='952イートラスト' data-time_zone='Asia/Tokyo' >952イートラスト</option><option value='348ace254fb32039bf3ccc8f6858f724' name_='964SMC税理士法人' data-time_zone='Asia/Tokyo' >964SMC税理士法人</option><option value='b45e04dc78c83a139255e4011a19b314' name_='966会議室セレクト' data-time_zone='Asia/Tokyo' >966会議室セレクト</option><option value='4bfbfa2ec208742f3eabb79bfccaa597' name_='972ウルトラバイヤープラス' data-time_zone='Asia/Tokyo' >972ウルトラバイヤープラス</option><option value='48c1385492ec3c9a35626a1bc13d476e' name_='973株式会社ハーツワークス' data-time_zone='Asia/Tokyo' >973株式会社ハーツワークス</option><option value='4dc12ce4cf7338867770e4435140834f' name_='974シロクマ整体院' data-time_zone='Asia/Tokyo' >974シロクマ整体院</option><option value='5c352c9dcd62957ce5fbd4b100e44001' name_='989ウルトラバイヤー' data-time_zone='Asia/Tokyo' >989ウルトラバイヤー</option><option value='3c927997d3e4bbadf5ea7a2a1036f858' name_='ADgainer Inc2' data-time_zone='Asia/Tokyo' >ADgainer Inc2</option><option value='e3d704f3542b44a621ebed70dc0efe13' name_='ADgainer Inc' data-time_zone='Asia/Tokyo' >ADgainer Inc</option><option value='a7e8707208f37a3e39b4b81a8551c676' name_='ADgainer Japan Office' data-time_zone='America/Los_Angeles' >ADgainer Japan Office</option><option value='24c9e15e52afc47c225b757e7bee1f9d' name_='ADgainer' data-time_zone='America/Los_Angeles' >ADgainer</option><option value='38758042b7e125d22fd7322c6fe475f6' name_='AE Tuning1' data-time_zone='America/Los_Angeles' >AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6' name_='AMV Air Conditioning, Inc.' data-time_zone='America/Los_Angeles' >AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197' name_='Advanced Skin Therapy' data-time_zone='America/Los_Angeles' >Advanced Skin Therapy</option><option value='5c0437f7f7279ea81d4f88971de8eb1f' name_='adw' data-time_zone='America/Los_Angeles' >adw</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d' name_='Apollo Plumbing' data-time_zone='America/Los_Angeles' >Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1' name_='BCJ-Chestertax' data-time_zone='America/Los_Angeles' >BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3' name_='BCJ-Livent' data-time_zone='America/Los_Angeles' >BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4' name_='CINH-privatesalon' data-time_zone='America/Los_Angeles' >CINH-privatesalon</option><option value='c246458d9da433f17600704abcc8a680' name_='cyberscene-suidoukyukyusha' data-time_zone='Asia/Tokyo' >cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2' name_='eBLEST' data-time_zone='Asia/Tokyo' >eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d' name_='eMnet' data-time_zone='America/Los_Angeles' >eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2' name_='erer' data-time_zone='America/Los_Angeles' >erer</option><option value='4435b6bbec81b357d3299085aed787bd' name_='GoGoClean' data-time_zone='Asia/Tokyo' >GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4' name_='GoldStandard-REVE' data-time_zone='America/Los_Angeles' >GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1' name_='Grand Monde' data-time_zone='America/New_York' >Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2' name_='Hyper Advanced (Christian)' data-time_zone='America/Los_Angeles' >Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191' name_='IKKO' data-time_zone='America/Los_Angeles' >IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0' name_='J-B' data-time_zone='America/Los_Angeles' >J-B</option><option value='7e76526be3a92493f11831d543bb8946' name_='KML Access' data-time_zone='America/Los_Angeles' >KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb' name_='MR' data-time_zone='Asia/Tokyo' >MR</option><option value='bd2732e02bd07e6540d37cacf1757f80' name_='Mach50' data-time_zone='America/Los_Angeles' >Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71' name_='Mattress City' data-time_zone='America/Los_Angeles' >Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc' name_='New SP Test Account' data-time_zone='America/Los_Angeles' >New SP Test Account</option><option value='ce91027a8ce76a85cbc0cc59af238dc9' name_='new account' data-time_zone='America/Los_Angeles' >new account</option><option value='70b719857e6ec6d71266b4c949def8d2' name_='new acct' data-time_zone='America/Los_Angeles' >new acct</option><option value='e3ee7494e243580a319919e733f1469a' name_='new test account 929' data-time_zone='America/Los_Angeles' >new test account 929</option><option value='f617b63689444ec94e9a2ca68293c615' name_='Nihon Energy Management' data-time_zone='America/Los_Angeles' >Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f' name_='North Cascade Ford PPC' data-time_zone='America/Los_Angeles' >North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77' name_='North Coast Auto' data-time_zone='America/Los_Angeles' >North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73' name_='Northwest Motorsports' data-time_zone='America/Los_Angeles' >Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47' name_='ORGANIC TRACKING' data-time_zone='America/Los_Angeles' >ORGANIC TRACKING</option><option value='89e3980285790a6fb7247dc9deca31a9' name_='onoqnwono' data-time_zone='America/Los_Angeles' >onoqnwono</option><option value='7f24181524b6dd956be40e895a7ed1cf' name_='Rukusu' data-time_zone='America/Los_Angeles' >Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478' name_='Schick Shadel' data-time_zone='America/Los_Angeles' >Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4' name_='Takamura Shika' data-time_zone='America/Los_Angeles' >Takamura Shika</option><option value='35bsm4n4bu4mu5um' name_='Test Account' data-time_zone='America/Los_Angeles' >Test Account</option><option value='8f69f8432d3ebcffb342e5f43c265e45' name_='test acct' data-time_zone='America/Los_Angeles' >test acct</option><option value='ddc9e7780af347644c4e42df34696d05' name_='test111' data-time_zone='America/Los_Angeles' >test111</option><option value='a63fcccb60fb5056f696c3356c0238f5' name_='Varspec' data-time_zone='America/New_York' >Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884' name_='Westin Tokyo' data-time_zone='America/Los_Angeles' >Westin Tokyo</option><option value='d3804235f81c9120cbcab8b8a3586bf8' name_='広島中央クリニック' data-time_zone='America/Los_Angeles' >広島中央クリニック</option>														 </select>

													
												
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
													
													

													

													
														&nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp;&nbsp;From: <input type="text" id="date1" name="date1" style="width:75px" value="02/01/2018" class="dateChange" />
														To: <input type="text" id="date2" style="width:75px" value="02/19/2018" class="dateChange"  /><br><br>
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
<th>Emails</th> 
</div></div>


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
@endsection