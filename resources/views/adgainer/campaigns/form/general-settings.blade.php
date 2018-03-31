<div class="row">
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td>Campaign name:- <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control" name="campaign_name" required /></td>
            </tr>
            <tr>
                <td>Account</td>
                <td>{{$account->accountName}}</td>
            </tr>
            <tr>
                <td >Campaign Tracking Type</td>
                <td>
                    <select class="form-control" id='campaign_type' name='campaign_type'>
                        <option value='tracking_code'>Standard</option>
                        <option value='source_code'>Source</option>
                        <option value='multi_code'>Multi-Tracking</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Traffic Tracking Type</td>
                <td><select class="form-control" name="tracking_type" >
                        <option value="0">OFF</option>
                        <option value="P" selected>PPC</option>
                        <option value="D">Display</option>
                        <option value="O">Organic</option>
                        <option value="O+P">Organic + PPC</option>
                        <option value="O+D">Organic + Display</option>
                        <option value="P+D">PPC + Display</option>
                        <option value="O+P+D">Organic + PPC + Display</option>
                        <option value="A">Organic + PPC + Display+ Direct</option></select></td>
            </tr>

            <tr>
                <td>Country/Language:-</td>
                <td><select class="form-control" name="country_tracking"  >
                        <option value="keyword">{{$account->account_language}}</option>
                        <option value="ch_keyword">Chinese (Includes English)</option>
                        <option value="k_keyword">Korean (Includes English)</option>
                        <option value="j_keyword">Japanese (Includes English)</option>
                    </select></td>
            </tr>

            <tr>
                <td>Correlation Time:-</td>
                <td><select class="form-control" id="correlation_time"  name="correlation_time"   >
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
                        <option value='12' >12</option> </select></td>
            </tr>

            <tr>
                <td>Time Zone:-</td>
                <td><select class="form-control" name="timeZone" id="timeZone">
                        <option value="America/Los_Angeles">{{$account->account_time_zone}}</option>
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

            <tr><td>Show Phone Numbers</td>
                <td><select class="form-control" id="show_number" name="show_number" >
                        <option value="1">Yes</option>
                        <option value="0">No</option></select></td>
            </tr>
            <tr><td> <i>In reports</i></td></tr>

            <tr>
                <td>Email Submission Form Tracking</td>
                <td>Yes <input type="checkbox" name="email_tracking" value="1" checked style="width:auto"/></td>
            </tr>

            <tr>
                <td>Browser Location Tracking </td>
                <td>Yes: <input type="radio" name="location_tracking" value="1" style="width:30px" /> 
                    No: <input type="radio" name="location_tracking" value="0" style="width:30px" checked /><br>
                </td>
            <tr><td><i>*user authorized</i></td></tr>
            </tr>

            <tr>
                <td>Browser Location </td>
                <td>Both<input type="radio" name="location_device" value="2" style="width:30px" checked /> 
                    Mobile Only<input type="radio" name="location_device" value="1" style="width:30px" /></tr>
            <tr><td>Tracking Device</td><td>
                    Desktop Only<input type="radio" name="location_device" value="0" style="width:30px"  /></td>
            </tr>

        </table>
    </div>
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td>Campaign Budget <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control" name="campaign_budget"  /></td>
            </tr>

            <tr>
                <td>Campaign Manager <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control" name="campaign_mgr"  /></td>
            </tr>

            <tr>
                <td>Account Manager <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control" name="account_mgr" required  /></td>
            </tr>

            <tr>
                <td>Campaign Currency:-</td>
                <td><select class="form-control" name="campaign_currency">
                        <option value="">{{$account->account_currency}}</option>
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
                <td><select class="form-control" name="campaign_cycle">
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
                <td><input type="text" class="form-control"   name="dblclick_name_calls"  style="width:100px"  /></td>
            </tr>

            <tr>
                <td>Doubleclick Goals Activity Name:-</td>
                <td><input type="text" class="form-control"   name="dblclick_name_goals"  style="width:100px"  /></td>
            </tr>

            <tr>
                <td>Doubleclick Agency ID:- </td>
                <td><input type="text" class="form-control"    name="dblclick_agency_id"  style="width:100px" onkeypress='return validateId()' /></td>
            </tr>

            <tr>
                <td>Doubleclick Advertiser ID :-</td>
                <td><input type="text" class="form-control"    name="dblclick_advertiser_id"  style="width:100px" /></td>
            </tr>

            <tr>
                <td>Yahoo JPN Account Id:- <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control"   name="yahoojpn_aid"  style="width:100px"/></td>
            </tr>

            <tr>
                <td>Yahoo JPN Campaign Id:- <span class="required_inputs_star text-danger">*</span></td>
                <td><input type="text" class="form-control"   name="yahoojpn_cid"  style="width:100px"/></td>
            </tr>

            <tr>
                <td>>AdWords Campaign Id:-</td>
                <td><input type="text" class="form-control"   name="adwords_campaign_id"  style="width:100px"/></td>
            </tr>

            <tr>
                <td>Bing Campaign Id:-</td>
                <td><input type="text" class="form-control"   name="bing_campaign_id"  style="width:100px"/></td>
            </tr>

            <tr>
                <td>Super Pgs Campaign Id:-</td>
                <td><input type="text" class="form-control"   name="sp_campaign_id"  style="width:100px"/></td>
            </tr>

            <tr>
                <td>PPC Markup:-</td>
                <td><i>20% markup = ( 100 - 20 ), enter 80 into the field</i><br>
                    <input type="text" class="form-control"   name="ppc_markup"  style="width:100px"  />  = (100 - %)</td>
            </tr>

            <tr>
                <td>**Chat Covnersion Words:-</td>
                <td><i>i.e. credit cards, appointment,shipping, do you take credit cards </i> up to 50.<br>
                    If any of these words are typed during a chat session, they will be counted each time as a conversion.<br>
                    <textarea name="tag_words" cols="40" rows='4'></textarea></td>
            </tr>

        </table>
    </div>
</div>
<input type="button" class="btn btn-primary continue" id="continue1" value="continue">