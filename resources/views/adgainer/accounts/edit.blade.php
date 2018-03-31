@extends('layouts.app')
@section('title','Edit Accounts')

@section('style')
<style>
    table.table-form, table.table-form table{
        table-layout: fixed;
        width: 100%;
    }
    table.table-form >tbody td{
        padding: 5px 10px;
        width: 100%;
    }

</style>

@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <span>Edit Account - {{$account->accountName}}</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Edit Account</strong></li>
    </ol>
</div>

<div class="container-fluid">

    <div class="panel">

        <ul id="mytabs"class="nav nav-tabs">

            <li class="active"><a data-toggle="tab" href="#menu1">General Settings</a></li>
            <li><a data-toggle="tab" href="#menu2">Billing Information</a></li>

        </ul>
        <div class="panel-body_">

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <table class="table-form">
                        <tr>
                            <td style="vertical-align: top;">
                                <table>
                                    <tr>
                                        <td><label>Account Name</label></td>
                                        <td><input type="text" class="form-control" id="account_name" name="accountName" value="{{$account->accountName}}"  required></td> 
                                    </tr>
                                    <tr>

                                        <td> <label>Username</label></td>

                                        <td><input type="text" class="form-control" id="username"name="username" value="{{$account->username}}"  required></td> 
                                    </tr>
                                    <tr>

                                        <td><label>Password</label>
                                        </td>
                                        <td><a href="{{url('/passwordb')}}" target="_blank"><b>
                                                    Edit Password</b></a></td>
                                    </tr>
                                    <tr>
                                        <td><label>Telephone</label></td><td><input type="number" class="form-control" id="telephone" name="accountName" value=""    onkeypress="check()"></td></tr>
                                    <tr>
                                        <td><label>Address</label></td><td><input type="text" class="form-control" id="address1"name="accountName" value=""   ></td></tr>
                                    <tr>
                                        <td><label>Address</label></td><td><input type="text" class="form-control" id="address2"name="accountName" value=""   ></td></tr>
                                    <tr>
                                        <td><label>City</label></td>
                                        <td><input type="text" class="form-control" id="city"name="accountName" value=""   ></td></tr>
                                    <tr>

                                        <td><label>State</label></td>


                                        <td><input type="text" class="form-control" id="state"name="accountName" value=""   ></td></tr>
                                    <tr>

                                        <td><label>Zip</label></td>

                                        <td><input type="text" class="form-control" id="zipcode"name="accountName" value=""   ></td></tr>

                                    <tr>

                                        <td><label>Country</label></td>

                                        <td>    <select class="form-control" name="country" id="country">
                                                <option value="" selected="selected">Select Country</option>
                                                <option value="United States">United States</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D ivoire">Cote D ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select></td>
                                    </tr>
                                    <tr><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td><td></td></tr><tr><td></td></tr><tr><td></td><td></td></tr><td></td><td></td><td></td><td></td><td></td><tr><td></td></tr><td></td><tr><td></td><td></td></tr><tr><td></td><td></td></tr>    
                                </table>
                            </td>

                            <td>
                                <table>
                                    <tr>



                                        <td><label>Contact</label></td><td><input type="text" class="form-control" id="contact"name="accountName" value=""   ></td>


                                    </tr>
                                    <tr>

                                        <td><label>Email</label></td>

                                        <td><input type="text" class="form-control" id="email"name="accountName" value="christiang@adgainer.com"   ></td> 
                                    </tr>
                                    <tr>

                                        <td>  <label>Offline Chat Image</label></td>

                                        <td><input type="file"  id="offline_img"name="offline_img" /> OfflineButton.png 100KB Max &nbsp;&nbsp; 150x30px Max</td>
                                    </tr>
                                    <tr>

                                        <td><label>Online Chat Image</label></td>

                                        <td><input type="file" id="online_img" name="online_img" /> OnlineButton.png 100KB Max &nbsp;&nbsp; 150x30px Max</td> 
                                    </tr>



                                    <tr>

                                        <td><label>Account Pin *</label></td>

                                        <td>  Required. Must be 5 numbers in length. <br>
                                            <input type="text" class="form-control"  name="account_pin"  id="account_pin" value="22222"  required></td> 
                                    </tr>
                                    <tr>
                                        <td><label>Account Subsidiary</label></td>
                                        <td><select class="form-control" name="account_subsidiary" id="account_subsidiary" >
                                                <option  value="">Current: </option>
                                                <option value="ADGAINER">ADGAINER</option>
                                                <option value="ADGAINER KK">ADGAINER KK</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td><label>Account Currency</label></td>
                                        <td><select class="form-control" name="account_currency" id="account_currency">
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
                                        <td><label>Account Language</label></td>
                                        <td><select class="form-control" name="account_language" id="account_language" style="width:80%">
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
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td><label>Account TimeZone</label></td>
                                        <td><select class="form-control" name="account_time_zone" id="account_time_zone">
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
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td><label>Show Phone Numbers</label></td>
                                        <td><select class="form-control" id="show_number" name="show_number" >
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td><label>Account Access</label></td>
                                        <td><select class="form-control" name="status" id="status" >
                                                <option  value="FULL">FULL VERSION</option>
                                                <option value="TEMP">TEMP VERSION</option>
                                                <option value="FULL">FULL VERSION</option>
                                            </select></td>
                                    </tr>
                                    <tr>

                                        <td> <label>Account Level</label></td>

                                        <td><select class="form-control"  name="accountLevel" id="accountLevel">
                                                <option value="1">Administrator</option>
                                                <option value="3">Client</option>
                                                <option value="1">Admin</option>
                                                <option value="5">Agency</option>
                                                <option value="2">Manager</option>
                                            </select></td> 
                                    </tr>
                                    <tr>

                                        <td><label>Account Active</label></td>

                                        <td><select class="form-control"  name="active" id="active" >

                                                <option value="1" >Current: ACTIVE</option>


                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select> </td>
                                    </tr>
                                    <tr>

                                        <td><label>Account Manager</label></td>

                                        <td>  <input type="text" class="form-control" name="account_mgr" id="account_mgr"value="christiang@adgainer.com" /></td> 
                                    </tr>
                                    <tr>

                                        <td><label>PPC Markup</label></td>

                                        <td><input type="text" class="form-control"   name="ppc_markup"  id="ppc_markup"style="width:100px" value="25"  /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = (100 - %)</td> 
                                    </tr>
                                    <tr>

                                        <td>  <label>Adwords Client ID  ie. 123-456-7890 </label></td>

                                        <td><input type="text" class="form-control" id="adw_client_id" name="adw_client_id" value=""/></td> 
                                    </tr>






                                </table>
                            </td>
                        </tr>
                    </table>
                </div>

                <div id="menu2" class="tab-pane fade">      


                    <table class="table-form" style="width: 600px;">
                        <tr>


                            <td><label>Billing Type</label></td>
                            <td><select class="form-control" id="Billing_type">
                                    <option value=""></option>
                                    <option value="MAIL-IN">MAIL-IN</option>
                                    <option value="AUTOPAY CC">AUTOPAY CC</option>
                                    <option value="CALL IN CC">CALL IN CC</option>
                                </select></td>
                        </tr>
                        <tr>

                            <td><label>Billing Address <i>Same as location: <input type="checkbox" id="same_addr" /> </i></label></td>

                            <td><input type="text" class="form-control" id="billing_address_1"name="billing_address_1" value="" /></td></tr>


                        <tr>

                            <td> <label>Billing Address </label></td>
                            <td><input type="text" class="form-control" id="billing_address_2" name="billing_address_2" value="" /></td></tr>


                        <tr>

                            <td><label>Billing City </label></td>
                            <td><input type="text" class="form-control" id="billing_city" name="billing_city" value="" /></td>
                        </tr>

                        <tr>

                            <td><label>Billing State </label></td>

                            <td><input type="text" class="form-control" id="billing_state" name="billing_state" value="" /></td></tr>


                        <tr>

                            <td><label>Billing Zip </label></td>

                            <td><input type="text" class="form-control" id="billing_zip" name="billing_zip" value="" /></td>


                        </tr>
                        <tr>

                            <td><label>Billing Country</label></td>

                            <td><select class="form-control" name="billing_country" id="billing_country">
                                    <option value="" selected="selected">Select Country</option>
                                    <option value="United States">United States</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D ivoire">Cote D ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select></td>

                        </tr>
                        <tr>

                            <td><label> Billing Date</label></td>

                            <td><input type="text" class="form-control" id="billing_date" name="billing_date" /></td>

                        </tr>

                        <tr>

                            <td><label>Name On Card</label></td>

                            <td><input type="text" class="form-control" id="name_on_card"name="name_on_card" value="" /></td>

                        </tr>
                        <tr>

                            <td>Card Number <i>no spaces</i></td>
                            <td> <input type="text" class="form-control" id="card_number"name="card_number" value="" /></td>


                        </tr>


                        <tr>

                            <td><label> Expiration </label></td>

                            <td> MM: <input type="date" id="exp_m" name="exp_m" style="width:150px" value="0" >

                                /
                                YY: <input type="date" id="exp_y" name="exp_y" style="width:150px" value="0" ></td>



                        </tr>
                        <tr>

                            <td><label> CVV <i>securty code</i></label></td>

                            <td><input type="text" class="form-control" id="cvv"name="cvv" value="" /></td>


                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-body text-center">
            <input type="submit" class="btn btn-primary btn-lg" id="submit" value="submit" >
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection