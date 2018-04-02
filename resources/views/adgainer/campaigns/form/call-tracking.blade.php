<div class="row">
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td><label>Call Tracking Medium</label></td>
                <td><select class="form-control" name="tracking_campaign_type">
                        <option value="online">Online - Web</option>
                        <option value="offline">Offline - Non Web</option>
                    </select>
                    <input type="hidden" name="single_to_many_numbers" value="NO" />
                </td>
            </tr>
            <tr>
                <td><label>Default Phone Display Format</label></td>
                <td>
                    <select class="form-control" name='default_phone_format' id='default_phone_format'>
                        <option value='1'>888.888.8888</option>
                        <option value='2'>888-888-8888</option>
                        <option value='3'>888 888 8888</option>
                        <option value='4'>(888) 888-8888 </option>
                        <option value='5'>(888) 888 8888 </option>
                        <option value='6'>1.888.888.8888 (US Only)</option>
                        <option value='7'>1-888-888-8888 (US Only)</option>
                        <option value='8'>1 888 888 8888 (US Only)</option>
                        <option value='9'>1 (888) 888 8888 (US Only)</option>
                        <option value='10'>8888-888-8888 (JPN Only)</option>
                        <option value='11'>8888-88-8888 (JPN Only)</option>
                        <option value='12'>8888-888-888 (JPN Only)</option>
                        <option value='13'>88-8888-8888 (JPN Only)</option>
                        <option value='14'>888-8888-8888 (JPN Only)</option>
                        <option value='15'>8888-8888-88 (JPN Only)</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Tracking Phone Display Format </label></td>
                <td>
                    <select class="form-control" name='phone_format' id='phone_format'>

                        <option value='1'>888.888.8888</option>
                        <option value='2'>888-888-8888</option>
                        <option value='3'>888 888 8888</option>
                        <option value='4'>(888) 888-8888 </option>
                        <option value='5'>(888) 888 8888 </option>
                        <option value='6'>1.888.888.8888 (US Only)</option>
                        <option value='7'>1-888-888-8888 (US Only)</option>
                        <option value='8'>1 888 888 8888 (US Only)</option>
                        <option value='9'>1 (888) 888 8888 (US Only)</option>
                        <option value='10'>8888-888-8888 (JPN Only)</option>
                        <option value='11'>8888-88-8888 (JPN Only)</option>
                        <option value='12'>8888-888-888 (JPN Only)</option>
                        <option value='13'>88-8888-8888 (JPN Only)</option>
                        <option value='14'>888-8888-8888 (JPN Only)</option>
                        <option value='15'>8888-8888-88 (JPN Only)</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Default Display Phone Number <span class="required_inputs_star text-danger">*</span></label></td>
                <td><i>Note: All numbers, no dashes, periods or spaces.</i><br>
                    <input type="text" class="form-control" name="default_number" />
                </td>
            </tr> 

            <tr>

                <td><label>Phone Number Replacement <span class="required_inputs_star text-danger">*</span></label></td>
                <td><i>i.e. 2125551212,2065551212 (must end with ",") </i> up to 20. <br/>These numbers will be specifically replaced with the single tracking number.<br/>
                    <textarea class="form-control" name="numbers_to_replace" cols="40" rows='4'></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Serve Tracking Numbers</label></td>
                <td><select class="form-control" class="form-control" name='number_serve_active' id='number_serve_active'>

                        <option value='0'>Off</option>
                        <option value='1'>On</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Forwarding Number <span class="required_inputs_star text-danger">*</span></label></td>
                <td><i>i.e. 2125551212,2065551212... Up to 3 will all ring at once</i> <br/>
                    <textarea class="form-control" name="transfer_to_number" cols="40" rows='4'></textarea>
                </td>
            </tr>

        </table>
    </div>
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td><label>Greeting*</label></td>
                <td> 
                    <input type="radio" name="greet_voice" value="man" style="width:20px" />
                    Man  <input type="radio" name="greet_voice" value="woman"  style="width:20px" checked />
                    Woman <input type="radio" name="greet_voice" value="alice"  style="width:20px"   />
                    International Woman <br/><br/> Language:
                    <select class="form-control" name="language">
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
                    </select> <br/>
                    <textarea class="form-control" name="greeting" cols="40" rows='4'></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Prompt*</label></td>
                <td> <i>Be prompted with the text entered below, when the call occurs. Only for the receiving end.</i>
                    <textarea class="form-control" name="prompt" cols="40" rows='4'></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Post Back Page URL</label></td>
                <td><i>Must include http:// <br/> Note: We will post phone call data to a page that you specify</i><br/>
                    <textarea class="form-control" cols="40" rows='4' name='postback_page' ></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Postback Page Method</label></td>
                <td><select class="form-control" name="post_back_type" id="post_back_type" >
                        <option value="POST">POST</option>
                        <option value="GET">GET</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Campaign Info</b></td>
            </tr>
            <tr>
                <td><div class='leftName'>Campaign Name:</div></td>
                <td><input type="checkbox" name="postback_fields[]" value="campaign_name"  checked /></td></tr>
            <tr>
                <td><b>Call Information</b><br/></td>
            </tr>
            <tr>
                <td><div class='leftName'>Record ID #:</div></td>
                <td><input type="checkbox" name="postback_fields[]" value="id"  checked  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Tracking Phone #:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="phone_number"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Caller Phone #:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="caller_phone"   /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Caller Location:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="caller_state,caller_country,caller_zip"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Caller Duration:</div></td>
                <td><input type="checkbox" name="postback_fields[]" value="call_duration"     /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Call Time:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="time_of_call"    /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Caller Name*:</div></td>

                <td> <input type="checkbox" name="postback_fields[]" value="caller_name"    /></td>
            </tr>

        </table>
        <table class="table-form">
            <tr>
                <td colspan="2"><b>Web Tracking Information</b><br/></td>
            </tr>
            <tr>
                <td><div class='leftName'>Entry Time: </div></td>

                <td><input type="checkbox" name="postback_fields[]" value="time_stamp" checked  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Location: </div></td>

                <td><input type="checkbox" name="postback_fields[]" value="visitor_city_state"    /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Lat,Long:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="lat,lng"    /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Duration:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="time_on_site"    /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Traffic Type:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="traffic_type"   /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Keyword:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="keyword"     /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Match Type: </div></td>

                <td><input type="checkbox" name="postback_fields[]" value="matchtype"   /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Source:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="source"    /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Goal Pages:</div></td>

                <td><input type="checkbox" name="postback_fields[]" value="goal_pages"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 1:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom1"  /></td>

            </tr>
            <tr>
                <td><div class='leftName'>Custom 2:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom2"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 3:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom3"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 4:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom4"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 5:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom5"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 6:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom6"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 7:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom7"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 8:</div></td>
                <td><input type="checkbox" name="call_notification[]" value="custom8"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 9:</div></td>
                <td><input type="checkbox" name="call_notification[]" value="custom9"  /></td>
            </tr>
            <tr>
                <td><div class='leftName'>Custom 10:</div></td>

                <td><input type="checkbox" name="call_notification[]" value="custom10"  /></td>

            </tr>
        </table>
    </div>
</div>


<a class="btn btn-primary back" id="back2">Go Back</a>
<a class="btn btn-primary continue" id="continue3">Continue</a>

