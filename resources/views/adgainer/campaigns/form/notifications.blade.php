<div role="tabpanel" class="tab-pane" id="notification">
    <table class="table-form table-form-single-col" style="width: 700px; max-width: 100%;">
        <tr>
            <td style="vertical-align: top;"><label><small>Notify Low Numbers + Report:-</small></label></td>
            <td>
                <div class="checkbox-inline">
                    <label><input type="radio" name="email_notify" checked value="1"/> Yes</label> &nbsp;&nbsp;
                    <label><input type="radio" name="email_notify" checked value="0"/> No</label>
                </div>
                <p>Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <p>
                <textarea name="email_to_notify" cols="40" rows="4" class="form-control" ></textarea>
            </td></tr>

        <tr>
            <td><label><small>Email notifcation of phone calls:-</small></label></td>
            <td>
                <div class="checkbox-inline">
                    <label><input type="radio" name="email_notify_user" checked value="1"/> Yes</label> &nbsp;&nbsp;
                    <label><input type="radio" name="email_notify_user" checked value="0"/> No</label>
                </div>
                <p>Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 </p>
                <textarea name="email_to_notify_user" cols="40" rows="4" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td><label><small>Call Notification Settings</small></label></td></tr>
        <tr>
            <td><b>Campaign Info</b><br/></td></tr>

        <tr>
            <td>Campaign Name:</td>

            <td><input type="checkbox" name="call_notification[]" value="campaign_name" /></td>
        </tr>
        <tr>

            <td><b>Call Information</b><br/></td></tr>

        <tr>
            <td>Tracking Phone #:</td>

            <td> <input type="checkbox" name="call_notification[]" value="phone_number" /></td>
        </tr>
        <tr>
            <td>Caller Phone #:</td>

            <td> <input type="checkbox" name="call_notification[]" value="caller_phone"   /></td>
        </tr>
        <tr>
            <td>Caller Location:</td>

            <td><input type="checkbox" name="call_notification[]" value="caller_state,caller_country,caller_zip"  />
            </td></tr>
        <tr>
            <td>Caller Duration:</td>

            <td><input type="checkbox" name="call_notification[]" value="call_duration"     /></td>
        </tr>
        <tr>
            <td>Call Time:</td>

            <td><input type="checkbox" name="call_notification[]" value="time_of_call"    />
            </td></tr>
        <tr>
            <td>Caller Name*:</td>
            <td> <input type="checkbox" name="call_notification[]" value="caller_name"    />
            </td></tr>
        <tr>
            <td><b>Web Tracking Information&nbsp;</b><br/></td>
        </tr>
        <tr>
            <td>Entry Time: </td>

            <td><input type="checkbox" name="call_notification[]" value="time_stamp" checked   /></td>
        </tr>
        <tr>
            <td>Location: </td>

            <td><input type="checkbox" name="call_notification[]" value="visitor_city_state"    /></td>
        </tr>
        <tr>
            <td>Lat,Long:</td>

            <td><input type="checkbox" name="call_notification[]" value="lat,lng"    /></td>
        </tr>
        <tr>
            <td>Duration:</td>

            <td><input type="checkbox" name="call_notification[]" value="time_on_site"    /></td>
        </tr>
        <tr>
            <td>Web Page History:</td>

            <td><input type="checkbox" name="call_notification[]" value="last_page"  /></td>
        </tr>
        <tr>
            <td>Traffic Type:</td>

            <td><input type="checkbox" name="call_notification[]" value="traffic_type"   /></td>
        </tr>
        <tr>
            <td>Keyword:</td>

            <td><input type="checkbox" name="call_notification[]" value="keyword"     /></td>
        </tr>
        <tr>
            <td>Match Type: </td>

            <td><input type="checkbox" name="call_notification[]" value="matchtype"   /></td>
        </tr>
        <tr>
            <td>Source:</td>

            <td><input type="checkbox" name="call_notification[]" value="source"    /></td>
        </tr>
        <tr>
            <td>Goal Pages:</td>

            <td><input type="checkbox" name="call_notification[]" value="goal_pages"  /></td>
        </tr>

        <tr>
            <td><label>Recieve Text Messages After Phone Calls (USA)</label></td>
            <td>
                <div class="checkbox">
                    <input type="hidden" name="text_notify" value="0">            
                    <label><input type="checkbox" name="text_notify" value="1" style="width:auto" checked/> Yes</label>
                </div>
                <label for="">Provider</label>
                <select name='cell_provider' class="form-control">
                    <option value=''>Select Provider (optional)</option>
                    <option value='verizon'>Verizon</option>
                    <option value='cricket'>Cricket</option>
                    <option value='tmobile'>T-Mobile</option>
                    <option value='boost'>Boost Mobile</option>
                    <option value='sprint'>Sprint</option>
                    <option value='att'>AT&ampT</option>
                    <option value='virgin'>Virgin Mobile</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Phone Number to Text</label></td>
            <td><input type="text" name='cell_to_text' id='cell_to_text' class="form-control">
            </td> 
        </tr>

        <tr>
            <td> <a class="btn btn-primary back" id="back3">Go Back</a> <a class="btn btn-primary continue" id="continue4">Continue</a></td>
        </tr>
    </table>

</div>