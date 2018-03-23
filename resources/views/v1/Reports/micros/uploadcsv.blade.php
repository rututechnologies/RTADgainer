@extends('layouts.app')
@section('title','Reports')

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
                    Reports
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Reports</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>
<div class="w3-container">
<div style='margin-left:80px'>
<span class="da-panel-title"> <br>
<table>
    <b>Upload PPC Records for Comparison</b>
    <hr width="50%" align="left">
                                        </span>
                                    <div>
                                    <tr>
                                    <div class="da-panel-content">
                                        <form class="da-form" method="post" action="#" enctype="multipart/form-data">
                                            
                                            <div class="da-form-row">
                                                <td>Existing Reports &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <div>
                                                    <td><select id="selectReportToView" class="textShadow">
                                                    <option value="">Select Report</option>
                                                    <option value='8463eae8451b916fe59705474030eb5e'>AG Report Keywords -2013-08-03_01_55_41 </option>
                                                    <option value='42707c171d02242fa9079036595b791e'>AG Report Keywords 2-2013-08-03_02_05_37 </option> 
                                                    </select></td>
                                                 </div>
                                            </div>
                                         
                                        </form>
                                    </div>
                                </tr>
                        </div>
          </table>              <br/>
          <hr width="50%" align="left">
                 
                        
                        <div class="clear"></div>
                     
                         <div class="grid_3">
                        
                            <div class="da-panel">
                                    <div class="da-panel-header">
                                        <span class="da-panel-title" style="height:auto">
                                             <span><b>Upload PPC Records for Comparison</b></span>
                                             <br/><br/>
                                            <hr width="50%" align="left">
                <table>                                                                 </span>         
                                    </div>
                                    
                                    <div class="da-panel-content">
                                        <form class="da-form">
                                                                                    
                                            <div class="da-form-row" >
                                            <tr>    <td>Account*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <td><div class="da-form-item large"">
                                                    <select id="csv_account" name="csv_account" class="textShadow">
                                                            <option value="">Select an Account</option>
                                                            <option value='2f0ee35b57077055e481dc9896d07496'>1015VM_????????EL</option>
                                                            <option value='77e2b7a06a6ed0d997843ddb1cad83e4'>1030 ?????????</option>
                                                            <option value='56848bc17c93660a942984531631ec66'>1039VM_?????????</option>
                                                            <option value='3ad3099801c6d9af1dbc1940cfe438be'>1057 AF_Me_???????????</option><option value='5aa10310366be0aa14aaa80c60f5ac67'>1059 ?????????????</option><option value='09403ea3eb07cdbd1e9da1f1baa5204f'>1074??</option><option value='f1e96465b4ccff30b393962d629d6f62'>1094 CA_??????</option><option value='30985deb3c9d4e189523b09ea235ebcc'>224Any-RC</option><option value='1a2901584a7af4cdf90519e59d827ac7'>234Any ??????[CR]</option><option value='165f79db0091ccc4d6972fbfa6b57356'>249Any-Ecostyle</option><option value='fa5b84972e1a331bf8bdb13cdc5d92b2'>258okkanri</option><option value='76d7eaeeea2353d0acff9d3666169286'>263Origami-Takehiro</option><option value='a417e73937309a207c95cb83c0005c36'>267Any-MasterPiece</option><option value='2bf98ed63abe4eba3faa604c267fe066'>291Gtyle</option><option value='94cf17a31dbf8769f2984c0872a36d18'>292siemple-yotuba</option><option value='4ddb4f0b78dcd0d9db12910bc9e3a4bf'>2nd new acct</option><option value='eb16da04984a0aa8f35050044cdfe597'>307???</option><option value='d6a112ee64e4cc7df6a23a445b3e7512'>332THE IMPLANT</option><option value='04ffcda7320dc2b1acac90e267cdf74a'>344?????????</option><option value='a65e937e4ddf6bf6de91bea9891bb177'>357Nakamura-law</option><option value='67d1313bcd7ff7e0b8d22a4f749bfd2f'>366??</option><option value='012056cf7bf9ea0b4f3077edfd851520'>389????</option><option value='3689cd138a82eacd9632e591887e881a'>390ZC???2</option><option value='06cedeb761babe8c27b91f16bbfaf649'>392??????????????</option><option value='ba78b73db28a63e3e8a7740582c3dbdb'>399????????</option><option value='104321e1332ce429f9c51b6aa5b81956'>423?????????</option><option value='5c1ff57f3c0f6421aa9b2d1ede6d091c'>436????</option><option value='7719b71c916fec936b726c407b71c12e'>450ARA2</option><option value='596bbc3c2b710ed552650d745ca63613'>454??????</option><option value='56342ec62b6f33e2f2f7f5e435da300e'>455?????????</option><option value='0d6e46e06b34bc11a56752f4c0db4e4f'>469????????</option><option value='a836016ca820908e66ef5e66aada46b8'>481T&W</option><option value='fc7cb0c0beee4690f985ebf5d823c7fb'>501CAN</option><option value='2cd5770d3ffbdd8a5b3152528b7c81c3'>504????????</option><option value='99acd85ef6ed4069cfd908aa034324d7'>505?????</option><option value='9738c34f9c6ba128fd4436454c10c7a8'>513aun_?????????</option><option value='8b1f62be8eef3ceb15bd74df1d78f38a'>518Kireimo</option><option value='984a3bccf97834d1fae4f6f8b4698bfa'>540DS???????</option><option value='007d82926ce9d761810e67ac3bb017af'>577OS???</option><option value='a1dd319e4414337a5436b5b754ec0127'>600DS???????</option><option value='fdfc6d69e5b8cca1d8ec5626a72eec8a'>601DS???</option><option value='c943f4c50a9ba985bd9a113be62fa83c'>605?????????</option><option value='6840c2098b2f2b56e3a8bdfd32941bd0'>611SHIROFUNE???</option><option value='b28f1c34394a2325253a0037b9ebbdc8'>703DS??????</option><option value='7586dae8779cbc8fa525629d5c1e92ed'>724???? ???.com</option><option value='89d3a3118baf9c2abe4155f051128c78'>738 ??????_?????????</option><option value='c738202d7cd4fbfd027d9dd5c162bd5d'>745??????</option><option value='0e8d3bd80b68b2143a894b1126577f1e'>752bloom_ST</option><option value='e5919dd086b77782e5259e84a464af75'>754????</option><option value='8f7124f60ea4a7ce0fb6ed4034d8c028'>771????????</option><option value='846052445e70f0fc86c31fb3bfa8211c'>793???????</option><option value='2ab110261b6d5fdec434b8b73321caaf'>800????????</option><option value='a7fb685c5d12586024e7b75aea86f184'>801????????</option><option value='86af4eee20059f0adcd26ae3fac22a2d'>810 AF_OS_????????????</option><option value='e1878b56feb55df95add999e3f08ff01'>818 ???????DSPKG</option><option value='09c57986be2639fda849facf29945582'>819AFTR_MEDIX</option><option value='16cfdd0697c51397895ee2ca740578a0'>838SLS????????????</option><option value='dc0b7ae8c3ef4174837888ab2e3afaae'>843AF_SH???????</option><option value='75e33ed0c9c975b534379219d97e01ce'>844AF_SH?????</option><option value='c365b1565be6626a60119b87106f4577'>845AF_SH??????</option><option value='e3bfac73e54cef93671c14046aeb927f'>848 ??????_???????</option><option value='3c0471fd98ba26f6da279e4b40cf19c2'>849any????_??</option><option value='83f0cdab27964a0f8ec8deb570ca7876'>850any????_??</option><option value='ea046745cdbd8d46f3936d54873472db'>859minrevi</option><option value='4ab8fbf9f8be982a55ae55373950245c'>869?????????ST</option><option value='37d4ba1058bfc61b15a5f3c793edc26e'>870aun????33</option><option value='a312d446e28b849dd9b3c4724bf61805'>871JB_????????</option><option value='ac95571c588f5df1abf6594f20a1b7b9'>880 ????</option><option value='436b124b609857d28fb6d440d0fcc155'>894 AF_OS_?????????</option><option value='cd7ab64bb909a0a506655b3a7dfe973b'>895??????????????ST</option><option value='f4d1bfcbbcefa0de4a495c2f6b7fcb6b'>952??????</option><option value='348ace254fb32039bf3ccc8f6858f724'>964SMC?????</option><option value='b45e04dc78c83a139255e4011a19b314'>966???????</option><option value='4bfbfa2ec208742f3eabb79bfccaa597'>972???????????</option><option value='48c1385492ec3c9a35626a1bc13d476e'>973???????????</option><option value='4dc12ce4cf7338867770e4435140834f'>974???????</option><option value='5c352c9dcd62957ce5fbd4b100e44001'>989????????</option><option value='24c9e15e52afc47c225b757e7bee1f9d'>ADgainer</option><option value='e3d704f3542b44a621ebed70dc0efe13'>ADgainer Inc</option><option value='3c927997d3e4bbadf5ea7a2a1036f858'>ADgainer Inc2</option><option value='a7e8707208f37a3e39b4b81a8551c676'>ADgainer Japan Office</option><option value='38758042b7e125d22fd7322c6fe475f6'>AE Tuning1</option><option value='e170fbd8e2ebc0d88b20861979dddba6'>AMV Air Conditioning, Inc.</option><option value='50ee9bc89d15d97d024f4d99caa01197'>Advanced Skin Therapy</option><option value='8b3d3e8be9c177e4e63fa8a79e06243d'>Apollo Plumbing</option><option value='8c01845d67f0ce47dcfbd78b9fcbf4b1'>BCJ-Chestertax</option><option value='18be0a5dcb5b3a196dbaf244449ac9d3'>BCJ-Livent</option><option value='3fff9cfac85332ca4b55ca0a696cfef4'>CINH-privatesalon</option><option value='4435b6bbec81b357d3299085aed787bd'>GoGoClean</option><option value='4d6382645b19bda1d1357826af4fe6a4'>GoldStandard-REVE</option><option value='b7786916137132be19e1f5ccf9f7d0a1'>Grand Monde</option><option value='b12f2be1508d744d48fa51373b94a6a2'>Hyper Advanced (Christian)</option><option value='28dcb1596f953dae6300b706b0665191'>IKKO</option><option value='6b96eedcfb77ed12bd27e3bca7d06eb0'>J-B</option><option value='7e76526be3a92493f11831d543bb8946'>KML Access</option><option value='fa44c780d706e9e7a9c772b97351cedb'>MR</option><option value='bd2732e02bd07e6540d37cacf1757f80'>Mach50</option><option value='b6c9f62efeb6be919a2d413a4a8ded71'>Mattress City</option><option value='11df6cd9f7b18cb532a0ab32dc900cdc'>New SP Test Account</option><option value='f617b63689444ec94e9a2ca68293c615'>Nihon Energy Management</option><option value='384e44297657dfffdfb31720c024913f'>North Cascade Ford PPC</option><option value='b14e26ec94fbc9a10c48edbad4e5bd77'>North Coast Auto</option><option value='d52b5ab090360ec577f4bb6993952c73'>Northwest Motorsports</option><option value='fedea0bfeeb5ed138b3052baed653a47'>ORGANIC TRACKING</option><option value='7f24181524b6dd956be40e895a7ed1cf'>Rukusu</option><option value='234d61ae36bb9bc4a392edb137d64478'>Schick Shadel</option><option value='f97eac03d5d540093fe533eb6a91e8e4'>Takamura Shika</option><option value='35bsm4n4bu4mu5um'>Test Account</option><option value='a63fcccb60fb5056f696c3356c0238f5'>Varspec</option><option value='8601d10d514bc81c0936e8dc5acf8884'>Westin Tokyo</option><option value='5c0437f7f7279ea81d4f88971de8eb1f'>adw</option><option value='c246458d9da433f17600704abcc8a680'>cyberscene-suidoukyukyusha</option><option value='ff2bd36c14f3d5b0a832d0c1e871d6c2'>eBLEST</option><option value='b6cff89752d38e34229d686ecc63839d'>eMnet</option><option value='1b365e93ffb403f8c9aaa4af17d7dcb2'>erer</option><option value='ce91027a8ce76a85cbc0cc59af238dc9'>new account</option><option value='70b719857e6ec6d71266b4c949def8d2'>new acct</option><option value='e3ee7494e243580a319919e733f1469a'>new test account 929</option><option value='89e3980285790a6fb7247dc9deca31a9'>onoqnwono</option><option value='8f69f8432d3ebcffb342e5f43c265e45'>test acct</option><option value='ddc9e7780af347644c4e42df34696d05'>test111</option><option value='d3804235f81c9120cbcab8b8a3586bf8'>?????????</option>                                                   </select></td>
                                                </div>
                                            </div></tr>
        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                                        <tr>    <div class="da-form-row">
                                                <label><td>Campaign* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td> </label>
                                                <div class="da-form-item large">
                                                    <td><select id="csv_campaign" name="csv_campaign" class="textShadow">
                                                        <option value="">Select an Account</option>
                                                    </select></td>
                                                 </div>
                                            </div>
                                        </tr>
                                        
                                            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                                        <tr>    <div class="da-form-row">
                                                <td><label>Date Range &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label></td>
                                                <div class="da-form-item large">
                                                
                                                     <td>Start Date &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input type='date' id='date1' name='date1' value="02/01/2018" class="textShadow" />
                                                    <tr><td>&nbsp;</td><td>End Date &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input type='date' id='date2' name='date2' value="02/28/2018" class="textShadow" /></td></tr>
                                                 </div>
                                            </div>
                                        </tr>
                                
                                            <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                                        <tr>    <div class="da-form-row">
                                                <label><td>Report Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <br><i>Should be Unique</i></label></td>
                                                <div class="da-form-item large">                                                    
                                                    <td><input type="text" name="reportName" class="textShadow" /></td>
                                                </div></tr>
                                            </div><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                                        <tr>    
                                            <div class="da-form-row">
                                                <label><td>Upload CSV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td></label>
                                                <div class="da-form-item large">
                                                    <td><input type="file" name="CSV_DATA_COMPARE"/></td></tr>
                                                    
                                                </div>
                                            </div>
                                        </table>    
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Row format: &nbsp;&nbsp; Keyword Match Type, &nbsp;&nbsp; Keyword, &nbsp;&nbsp; Status, &nbsp;&nbsp;  Max CPC, &nbsp;&nbsp; Clicks, &nbsp;&nbsp; Impressions, &nbsp;&nbsp; CTR, &nbsp;&nbsp; Avg CPC, &nbsp;&nbsp; Cost, &nbsp;&nbsp; Avg Positions 
                                            
                                         
                                            <br/><br/>
                                
                                            <input type="hidden" name="account_id" id="account_id" value="" />
                                            <input type="hidden" name="campaign_id" id="campaign_id" value="" />
                                            
                                            <div class="da-button-row" class="button">
                                                <input type="reset" value="Reset" class="button">
                                                <input type="submit" value="Submit" class="button">
                                            </div>
                                        </form>
                                                                            </div>
                                </div>
                        </div>
                        <hr>

</div>

 @endsection
<style>
.textShadow{
height:25px;
width: 200px;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}

.button {
    color:white;
    background-color:#20b2aa;
    padding: 5px 12px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:10px;
    box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.6);
}
.button:hover{
border-radius:10px;
    box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.9);

}

</style>

 @section('scripts')



 @endsection