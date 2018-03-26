@extends('layouts.app')
@section('title','Agency')

@section('style')
<style>
        #shadow {
            border: 1px solid gray;
            border-radius: 10px;
            padding: 5px;
            width: 150px;
            height: 30px;
            box-shadow: 5px 5px 5px -2px rgba(0, 0, 0, 0.6);
        }
        
        td {
            padding-top: 2em;
            padding-bottom: 2em;
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
                    Agency
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i>Agency</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">

            <div id="da-content-area" style="margin-right:45px">

                <div class="clear"></div>

                <table>
                    <tr >
                        <td>

                            <div class="grid_2">

                                <div class="da-panel">
                                    <div class="da-panel-header">
                                       
                                            <span class="da-panel-title">

                                <h4 align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Logo Branding</b></h4>
                            </span>
                                            <hr width="50%" align="center">
                                    </div>
                                    <table align="center" style="width:60%" style="height:25%">
                                        <tr>

                                            <div class="da-panel-content">

                                                <div class="da-form-row">
                                                    <td style="padding-left: 50px">
                                                        <label>
                                                            Logo </label>
                                                    </td>
                                                    <td>
                                                        <div class="da-form-item large">
                                                            <input type="file" name="logo" value="">
                                                            <br/> ad-gainer-logo-v1.1-250x54px-transp-bkgd-flat.png </div>
                                                    </td>
                                                </div>
                        
                                
                        <tr>
                            <td style="padding-left: 40px" >
                                <div class="da-button-row">

                                    <input type="submit" id="shadow" value="Update Logo" class="da-button green" style="background-color:f5fffa">
                                </div>
                            </td>
                        </tr>
                        </div>
                        </tr>
                        </table>
                        
                        </div>
                        </div>
                    </td>
                    
                       

                        <br>
                        <div style='margin-right:700px'>
                            <td>
                                <div class="grid_2">

                                    <div class="da-panel">

                                        <div class="da-panel-header">
                                            
                                                <span class="da-panel-title">

                            <h4 align="center"> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

                                Agency Color Branding
                            </span>
                                                <hr width="80%" align="center">
                                        </div>
                                        <table id="a" align="center" style="width:100%" style="height:25%">
                                            <tr>
                                                <td>
                                                    <div class="da-panel-content">
                                                        <tr>
                                                            <div class="da-form-row">
                                                                <td>
                                                                    <label>
                                                                        Color </label>
                                                                </td>

                                                                <div class="da-form-item large">
                                                                    <td>Click &nbsp; -->
                                                                        <input type="color" name='color' style="width:100px" value="1966FF" />
                                                                    </td>
                                                                </div>

                                                            </div>
                                                        </tr>
                                                        <tr>

                                                            <div class="da-button-row">

                                                                <td>
                                                                    <input type="submit" id="shadow" value="Update Color" class="da-button green" style="background-color:f5fffa">
                                                                </td>
                                                            </div>

                                                    </div>
                                                    </tr>
                                        </table>
                                        
                                    </div>
                                </div></td>
                        </div>
                        </td>
                        </tr>
                        <br>
                        <div class="clear"></div>

                        <tr>
                            <td>
                                <div class="grid_2">

                                    <div class="da-panel">
                                        <div class="da-panel-header">
                                            <span class="da-panel-title">

                                <h4  align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
                                <b>Agency Subdomain</b></h4>
                            </span>
                                            <hr width="50%" align="center">
                                        </div>
                                        
                                            <table id="a" align="center" style="width:60%" style="height:25%">
                                                <trstyle="margin-right: 10px">
                                                    <td>
                                                        <div class="da-panel-content">

                                                            <div class="da-form-row">
                                                                <label>
                                                                    Subdomain </label>
                                                    </td>
                                                    <td>
                                                        <div class="da-form-item large">
                                                            <input type="text" name="subdomain" class="letters_only" value="demo " />
                                                            <br/>
                                                            <i>Must be only alpha characters a-z in english, with no spaces. Case is insensitive.</i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </div>
                                                <tr >
                                                    <td >
                                                        <div >

                                                            <input type="submit" id="shadow" value="Update Subdomain" class="da-button green" style="background-color:f5fffa">
                                                        </div>
                                                    </td>
                                                </tr>

                                                </div>
                                            </table>
                                        
                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="grid_2">

                                    <div class="da-panel">
                                        <div class="da-panel-header">
                                            
                                                <span class="da-panel-title">

                            <h4 align="center" style="margin-bottom:15px "> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

                                <b>Login Page Slogan</b></span>
                                                <hr width="80%" align="center">
                                        </div>
                                        <table align="center" style="width:50%" style="height:25%">
                                            <tr>
                                                <td>
                                                    <div class="da-panel-content">

                                                        <div class="da-form-row">
                                                            <label>Slogan </label>
                                                </td>
                                                <td>
                                                    <div class="da-form-item large">
                                                        <input type="text" name="slogan" class="" value="DEMO AGENCY SLOGAN " />
                                                        <br/>
                                                        <i>Can contain html.</i></td>
                                            </tr>
                                            </div>
                                            </div>
                                            <tr>
                                                <td style="padding-top: 20px">
                                                    <div class="da-button-row">

                                                        <input type="submit" id="shadow" value="Update Slogan" class="da-button green" style="background-color:#075f98" style="bgcolor:black">
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
                                        
                                        </div>
                                    </div>

                                </div>

                            </td>
                        </tr>
            </div>

            </div>

            </div>
            </table>
            </div>
</div>
@endsection
  <style>
        #shadow {
            border: 1px solid gray;
            border-radius: 10px;
            padding: 5px;
            width: 150px;
            height: 30px;
            box-shadow: 5px 5px 5px -2px rgba(0, 0, 0, 0.6);
        }
        
        td {
            padding-top: 1em;
            padding-bottom: 1em;
        }
        
        tr.spaceUnder>td {
            padding-bottom: 1em;
        }
    </style>
@section('scripts')

@endsection