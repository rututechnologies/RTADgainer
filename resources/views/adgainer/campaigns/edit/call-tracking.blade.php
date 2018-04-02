<div class="row">
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td><label>Call Tracking Medium</label></td>
                <td><select class="form-control" name="tracking_campaign_type" id="tracking_campaign_type">
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
                <td><label>Default Display Phone Number </label></td>
                <td><i>Note: All numbers, no dashes, periods or spaces.</i><br>
                    <input type="text" class="form-control" name="default_number" value='<?php echo $campaignDetails->default_number; ?>'/>
                </td>
            </tr> 

            <tr>

                <td><label>Phone Number Replacement </label></td>
                <td><i>i.e. 2125551212,2065551212 (must end with ",") </i> up to 20. <br/>These numbers will be specifically replaced with the single tracking number.<br/>
                    <textarea class="form-control" name="numbers_to_replace" cols="40" rows='4'><?php echo $campaignDetails->numbers_to_replace; ?></textarea>
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
                <td><label>Forwarding Number </label></td>
                <td><i>i.e. 2125551212,2065551212... Up to 3 will all ring at once</i> <br/>
                    <textarea class="form-control" name="transfer_to_number" cols="40" rows='4'><?php echo $campaignDetails->transfer_to_number; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Record Calls</label>
                </td>
                <td>
                    <div class="da-form-item large">
                        <input type="radio" name="record_calls" value="1" <?php
                        if ( $campaignDetails->record_calls == 1 ) {
                            echo "checked";
                        }
                        ?> /> Yes
                        <input type="radio" name="record_calls" value="0" <?php
                        if ( $campaignDetails->record_calls == 0 ) {
                            echo "checked";
                        }
                        ?> /> No
                    </div>
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
                    <textarea class="form-control" name="greeting" cols="40" rows='4'><?php echo $campaignDetails->greeting; ?></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Prompt*</label></td>
                <td> <i>Be prompted with the text entered below, when the call occurs. Only for the receiving end.</i>
                    <textarea class="form-control" name="prompt" cols="40" rows='4'><?php echo $campaignDetails->prompt; ?></textarea>
                </td>
            </tr>
            <tr>
                <td><label>Post Back Page URL</label></td>
                <td><i>Must include http:// <br/> Note: We will post phone call data to a page that you specify</i><br/>
                    <textarea class="form-control" cols="40" rows='4' name='postback_page' ><?php echo $campaignDetails->postback_page; ?></textarea>
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
                <td>Campaign Name:</td>
                <td><input type="checkbox" name="postback_fields[]" value="campaign_name" {{ (stristr($campaignDetails->postback_fields, "campaign_name"))? 'checked' : '' }} /></td></tr>
            <tr>
                <td><b>Call Information</b><br/></td>
            </tr>
            <tr>
                <td>Record ID #:</td>
                <td><input type="checkbox" name="postback_fields[]" value="id"  {{ (stristr($campaignDetails->postback_fields, "id"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Tracking Phone #:</td>

                <td><input type="checkbox" name="postback_fields[]" value="phone_number" {{ (stristr($campaignDetails->postback_fields, "phone_number"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Caller Phone #:</td>

                <td><input type="checkbox" name="postback_fields[]" value="caller_phone"  {{ (stristr($campaignDetails->postback_fields, "caller_phone"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Caller Location:</td>

                <td><input type="checkbox" name="postback_fields[]" value="caller_state,caller_country,caller_zip" {{ (stristr($campaignDetails->postback_fields, "caller_state,caller_country,caller_zip"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Caller Duration:</td>
                <td><input type="checkbox" name="postback_fields[]" value="call_duration"  {{ (stristr($campaignDetails->postback_fields, "call_duration"))? 'checked' : '' }}    /></td>
            </tr>
            <tr>
                <td>Call Time:</td>

                <td><input type="checkbox" name="postback_fields[]" value="time_of_call"  {{ (stristr($campaignDetails->postback_fields, "time_of_call"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Caller Name*:</td>

                <td> <input type="checkbox" name="postback_fields[]" value="caller_name"  {{ (stristr($campaignDetails->postback_fields, "caller_name"))? 'checked' : '' }}   /></td>
            </tr>

        </table>
        <table class="table-form">
            <tr>
                <td colspan="2"><b>Web Tracking Information</b><br/></td>
            </tr>
            <tr>
                <td>Entry Time: </td>

                <td><input type="checkbox" name="postback_fields[]" value="time_stamp" {{ (stristr($campaignDetails->postback_fields, "time_stamp"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Location: </td>

                <td><input type="checkbox" name="postback_fields[]" value="visitor_city_state"  {{ (stristr($campaignDetails->postback_fields, "visitor_city_state"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Lat,Long:</td>

                <td><input type="checkbox" name="postback_fields[]" value="lat,lng"  {{ (stristr($campaignDetails->postback_fields, "lat,lng"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Duration:</td>

                <td><input type="checkbox" name="postback_fields[]" value="time_on_site" {{ (stristr($campaignDetails->postback_fields, "time_on_site"))? 'checked' : '' }}    /></td>
            </tr>
            <tr>
                <td>Traffic Type:</td>

                <td><input type="checkbox" name="postback_fields[]" value="traffic_type"  {{ (stristr($campaignDetails->postback_fields, "traffic_type"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Keyword:</td>

                <td><input type="checkbox" name="postback_fields[]" value="keyword"   {{ (stristr($campaignDetails->postback_fields, "keyword"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Match Type: </td>

                <td><input type="checkbox" name="postback_fields[]" value="matchtype" {{ (stristr($campaignDetails->postback_fields, "matchtype"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Source:</td>

                <td><input type="checkbox" name="postback_fields[]" value="source"  {{ (stristr($campaignDetails->postback_fields, "source"))? 'checked' : '' }}   /></td>
            </tr>
            <tr>
                <td>Goal Pages:</td>

                <td><input type="checkbox" name="postback_fields[]" value="goal_pages" {{ (stristr($campaignDetails->postback_fields, "goal_pages"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 1:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom1" {{ (stristr($campaignDetails->call_notification, "custom1"))? 'checked' : '' }} /></td>

            </tr>
            <tr>
                <td>Custom 2:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom2" {{ (stristr($campaignDetails->call_notification, "custom2"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 3:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom3" {{ (stristr($campaignDetails->call_notification, "custom3"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 4:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom4" {{ (stristr($campaignDetails->call_notification, "custom4"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 5:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom5" {{ (stristr($campaignDetails->call_notification, "custom5"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 6:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom6" {{ (stristr($campaignDetails->call_notification, "custom6"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 7:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom7" {{ (stristr($campaignDetails->call_notification, "custom7"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 8:</td>
                <td><input type="checkbox" name="call_notification[]" value="custom8" {{ (stristr($campaignDetails->call_notification, "custom8"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 9:</td>
                <td><input type="checkbox" name="call_notification[]" value="custom9" {{ (stristr($campaignDetails->call_notification, "custom9"))? 'checked' : '' }}  /></td>
            </tr>
            <tr>
                <td>Custom 10:</td>

                <td><input type="checkbox" name="call_notification[]" value="custom10" {{ (stristr($campaignDetails->call_notification, "custom10"))? 'checked' : '' }}  /></td>

            </tr>
        </table>
    </div>
</div>


<a class="btn btn-primary back" id="back2">Go Back</a>
<a class="btn btn-primary continue" id="continue3">Continue</a>

