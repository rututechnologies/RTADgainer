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
<div id="da-content-area" style="margin:50px">

                        <div class="clear"></div>

<table><tr><td>
                         <div class="grid_2">

                <div class="da-panel">
                        <div class="da-panel-header">
                            <form action="https://testenvadgainer.adgainersolutions.com/adgainer/agency/updateLogo" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <span class="da-panel-title">
                            
                                
                                <h4 align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Logo Branding</b></h4>
                            </span><hr width="50%" align="center">
                        </div>
                        <table align="center" style="width:50%" style="height:25%">
                        
                        <div class="da-panel-content">
                        <tr>
                            <td>
                                <div class="da-form-row">
                                    <label>
                                    Logo</label></td><td>
                                    <div class="da-form-item large">
                                        <input type="file" name="logo" value="">
                                        <br/>
                                        ad-gainer-logo-v1.1-250x54px-transp-bkgd-flat.png   </div></td>
                                </div>
</td></tr><tr><td>
                                <div class="da-button-row">

                                    <input type="submit" id="shadow" value="Update Logo" class="da-button green" style="background-color:f5fffa" >
                                                                        </div></td></tr>
                        </div>
                        </table>
                        </form>
                    </div>
                </div></td>
    
<br><div style='margin-right:700px'>
    <td>    <div class="grid_2">

                <div class="da-panel" >
                
                        <div class="da-panel-header">
                            <form action="https://testenvadgainer.adgainersolutions.com/adgainer/agency/updateColor" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8" align="right">
                            <span class="da-panel-title">
                            
                            <h4 align="center"> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

                                Agency Color Branding
                            </span><hr width="80%" align="center">
                        </div>
                        <table id="a" align="center" style="width:50%" style="height:25%" >
                        <tr><td>
                        <div class="da-panel-content" >
                            
                                </td></tr><tr><div class="da-form-row">
                                    <label>
                                    <td>Color</label></td>
                                </tr><tr>
                                    <td><div class="da-form-item large">
                                        Click-> <input type="color" name='color' style="width:100px" value="1966FF"/>
                                    </div></td>
                                </div></tr>
                                <td><div class="da-button-row">

                                    <input type="submit" id="shadow"  value="Update Color" class="da-button green" style="background-color:f5fffa">
                                                                        </div></td>


                            
                        </div></tr></table>
                        </form>
                    </div>
                    </div>
                </div></td></tr>
                <br>
                        <div class="clear"></div>

<tr><td>
            <div class="grid_2">

                <div class="da-panel">
                        <div class="da-panel-header">
                            <span class="da-panel-title">
                            
                                <h4  align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
                                <b>Agency Subdomain</b></h4>
                            </span><hr width="50%" align="center">
                        </div>
                        <form action="https://testenvadgainer.adgainersolutions.com/adgainer/agency/updateDomain" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <table id="a" align="center" style="width:50%" style="height:25%">
                        <tr><td>
                        <div class="da-panel-content">
                            
                                <div class="da-form-row">
                                    <label>
                                        Subdomain                                   </label></td><td>
                                    <div class="da-form-item large">
                                        <input type="text" name="subdomain" class="letters_only" value="demo " /> <br/>
                                        <i>Must be only alpha characters a-z in english, with no spaces. Case is insensitive.</i>
                                    </div></td></tr>
                                </div>
<tr><td>
                                <div class="da-button-row">

                                    <input type="submit" id="shadow" value="Update Subdomain" class="da-button green" style="background-color:f5fffa">
                                                                        </div></td></tr>


                            
                        </div></table>
                        </form>
                    </div>
                </div>

    </td>       <td>    <div class="grid_2">

                <div class="da-panel">
                        <div class="da-panel-header">
                        <form action="https://testenvadgainer.adgainersolutions.com/adgainer/agency/updateSlogan" class="da-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <span class="da-panel-title">
                            
                            <h4 align="center"> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

                                <b>Login Page Slogan</b></span><hr width="80%" align="center">
                        </div>
                        <table align="center" style="width:50%" style="height:25%">
                        <tr><td>
                        <div class="da-panel-content">
                            
                                <div class="da-form-row">
                                    <label>Slogan                               </label></td><td>
                                    <div class="da-form-item large">
                                        <input type="text" name="slogan" class="" value="DEMO AGENCY SLOGAN " /> <br/>
                                        <i>Can contain html.</i></td></tr>
                                    </div>
                                </div>
<tr><td>
                                <div class="da-button-row">

                                    <input type="submit" id="shadow" value="Update Slogan" class="da-button green" style="background-color:f5fffa">
                                                                        </div></td></tr>

</table>
                            </form>
                        </div>
                    </div>
                    
                </div>

    </td></tr>                </div>

                </div>

            </div>
</table>
        </div>
</div>
@endsection
<style>
#shadow{
border:1px solid gray;
border-radius:10px;
padding:5px;
width:150px;
height:30px;
box-shadow:5px 5px 5px -2px rgba(0,0,0,0.6);
}
td{
padding-top:0em;
padding-bottom:0em;
}
tr.spaceUnder>td{
padding-bottom:1em;
}
</style>
@section('scripts')

@endsection