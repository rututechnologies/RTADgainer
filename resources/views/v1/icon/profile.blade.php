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
<div class="btn-grid">
                        &nbsp;&nbsp;<a href="{{url('profile')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Profile</button></a>
                        <a href="{{url('passwordb')}}"><button type="button" class="btn btn-primary" >Password</button></a>
                        <a href="{{url('interface')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Interface</button></a>
                         <a href="{{url('adduser')}}"><button type="button" class="btn btn-primary" class="btn btn-default">Add User</button></a>
                         <a href="{{url('buttonform')}}"><button type="button" class="btn btn-primary" class="btn btn-default">My Account</button></div></a>
                        
                            <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images//icons/black/16/pencil.png" alt="">
                            Edit Your Profile
                        
                                    <form  method="post"
                                          action=""
                                         >
                                        <table>
                                        <tr>
                                            <label>
                                                <td>First Name</td>                                         </label>
                                            
                                                <td><input type="text" name="editAccountFname" required></td></tr>
                                            <tr>
                                            <td>
                                            <label>
                                                Last Name                                           </label>
                                        </td>
                                                <td><input type="text" name="editAccountLname" required></td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <label>
                                                Username                                            </label>
                                        </td>
                                                <td><input type="text" name="editAccountUsername"
                                                       value="cgibbs" class="req" required></td>
                                            </tr>
                                        <tr>
                                            <label>
                                            <td>    Email                                           </label>
                                            </td>
                                                <td><input type="text" name="editAccountEmail"
                                                       value="christiang@adgainer.com" class="req" required></td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <label>
                                                Phone                                           </label>
                                            </td>
                                                <td><input type="text" name="editAccountPhone"/></td>
                                                </tr>
                                                <tr>
                                            
                                            <td><label>
                                                Language                                            </label>
                                            </td>
                                                <td><select name="language" id="language" style="width:80%">
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
                                                        </select>           
                                            </td>
                                            </tr>
                                            <tr>
<td>Currency</td><td><select>
<option value="">Select Currency</option>
                                                    <option value="AUD">Australian Dollar</option>
                                                    <option value="BRL">Brazilian Real</option>
                                                    <option value="CAD">Canadian Dollar</option>
                                                    <option value="CZK">Czech Koruna</option>
                                                    <option value="DKK">Danish Krone</option>
                                                    <option value="EUR">Euro</option>
                                                    <option value="HKD">Hong Kong Dollar</option>
                                                    <option value="HUF">Hungarian Forint</option>
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
                                                    <option value="USD">U.S. Dollar</option>
</select>   </td>
                                            </tr>                                           
                                        <tr>
                                            <td><label>
                                                Photo                                               <br> <i>2MB max, 3000 x 2000 max</i>

                                            </label></td>
                                            
                                                <td><input type="file" name="editAccountPhoto" value="" class=""/></td>
                                                
                                                <td><img src='https://testenvadgainer.adgainersolutions.com/adgainer/application/views/user_photos/24c9e15e52afc47c225b757e7bee1f9d/cgibbs.jpg' alt='logo' class='profileImg_mini' /></td>                                          </div>
                                        </tr>


                                        <tr>
                                            <td><input type="submit" value="Update Profile Information"
                                                   class="da-button green"></td>
                                                   </tr>
                                    </table>    
                                    </form>



    </div>
     @endsection
<style>
td {
    padding-top: .5em;
    padding-bottom: .5em;
}
tr.spaceUnder>td {
  padding-bottom: 1em;
}
</style>
<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
input[type="text"], textarea, input[type="file"] {
    background-color: white;
    -webkit-box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
}
</style>


 @section('scripts')

  @endsection