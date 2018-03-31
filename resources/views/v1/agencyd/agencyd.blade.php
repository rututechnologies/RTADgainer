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
                 <a href="{{url('/dashboard')}}"><button class=".btn-primary">Back</button></a>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Agency</strong>
                    </li>
                </ol>
            </div>
        </div>
 </div>

    <div class="wrapper border-bottom white-bg page-heading">
        <form action="fileUpload" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table style="margin-left:15px">
    <tr>
        <td>

            <span class="da-panel-title">

                            <h4 align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Logo Branding</b></h4>
                            </span>
            <table style="margin-left:15px">
                <tr>
                    <td>
                        <label>
                            Logo </label>
                    </td>
                    <td>

                        <input type="file" name="logo" id="logo"value="" accept="image/*" required>
                        flat.png
                    </td>
                </tr>
                <tr>
                    <td>

                        <input type="submit" id="shadow"name="shadow" value="Update Logo" class="da-button green" style="background-color:f5fffa">

                    </td>
                </tr>
            </table>
</form>
        </td>

        <td>

            <span class="da-panel-title">

                           <h4 align="center"> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" /><b>Agency Color Branding</b></h4>
                            </span>
<form action="colorUpload" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table id="a" style="margin-right:15px">

                <tr>

                    <td>
                        <label>
                            Color </label>
                    </td>

                    <td>Click &nbsp;&nbsp; --></td>
                    <td>
                        <input type="color" name='color' id="color"style="width:100px" value="1966FF" /><br/>                        please select color
                    </td>

                </tr>

    </tr>

    <tr>
        <td>
            <input type="submit" id="shadow" value="Update Color" class="da-button green" style="background-color:f5fffa">
        </td>

    </tr>
    </table>
</form>
    </td>
    </tr>

    <tr>
        <td>

            <span class="da-panel-title">

                                <h4  align="center"><img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />
                               <b> Agency Subdomain</b></h4>
                            </span>
<form action="subdomain" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table id="a" align="left" style="margin-left:15px">
                <tr>
                    <td>

                        <label>
                            Subdomain </label>
                    </td>
                    <td>

                        <input type="text" name="subdomain" id="subdomain" class="letters_only" value="demo " required/><br/>
                        Must be only alpha characters a-z in english, with no spaces.
                         Case is insensitive.</td>
                </tr>

                <tr>
                    <td>

                        <input type="submit" id="shadow" value="Update Subdomain" class="da-button green" style="background-color:f5fffa">

                    </td>
                </tr>

            </table>
</form>
        </td>
        <td>

            <span class="da-panel-title">

                            <h4 align="center"> <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/pencil.png" alt="Edit" />

                                <b>Login Page Slogan</b></h4></span>
<form action="slogan" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table style="margin-right:15px">
                <tr>
                    <td>

                        <label>Slogan </label>
                    </td>
                    <td>

                        <input type="text" name="slogan" class="" value="DEMO AGENCY SLOGAN " required/>
                        <br/>
                        <i>Can contain html.</i></td>
                </tr>

                <tr>
                    <td>

                        <input type="submit" id="shadow" value="Update Slogan" class="da-button green" style="background-color:f5fffa">

                    </td>
                </tr>

            </table>
        </form>
        </td>
    </tr>
</table>
</form>
@endsection
  
@section('scripts')
<script>

</script>
@endsection