<div role="tabpanel" class="tab-pane" id="notification">
    <table id="table1" cellspacing="5px" width="50%" cellpadding="5%" align="center">
        <div id="campNotifSection" class="campSection">
            <div class="campSubSection">


                <div class="da-form-row">
                    <tr>
                        <td><label><small>Notify Low Numbers + Report:-</small></label></td>
                    <div class="da-form-item large">
                        <td>Yes <input type="radio" name="email_notify" checked value="1"  style="width:auto"/> No <input type="radio" name="email_notify" value="0"  style="width:auto"/> <br/>
                            Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <br/>
                            <textarea name="email_to_notify" cols="40" rows="4" ></textarea>
                    </div></td></tr>
                </div>

                <tr>
                <div class="da-form-row">
                    <td><label><small>Email notifcation of phone calls:-</small></label></td>
                    <div class="da-form-item large">
                        <td>Yes <input type="radio" name="email_notify_user" value="1" checked  style="width:auto"/> No <input type="radio" name="email_notify_user" value="0"  style="width:auto"/> <br/>
                            Email(s): <i>i.e. email@adgainer.com,hello@adgainer.com</i> up to 20 <br/>
                            <textarea name="email_to_notify_user" cols="40" rows="4" ></textarea>
                    </div></td></tr>
                </div>
                <tr>
                <div class="da-form-row expand">
                    <td><label><small>Call Notification Settings</small></label></td></tr>
                    <div class="da-form-item large" style="overflow-x:hidden;width:450px;height:auto">

                        <div class="checkSubSection">
                            <tr>
                                <td><b>Campaign Info</b><br/></td></tr>
                            <div class="clear"></div>
                            <tr>
                                <td><div class='leftName'>Campaign Name:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="campaign_name" checked   /></td>
                            </div></tr>
                            <tr>
                            <div class="clear"></div>
                            <td><b>Call Information</b><br/></td></tr>
                            <div class="clear"></div>
                            <tr>
                                <td><div class='leftName'>Tracking Phone #:</div></td>
                            <div class='leftValue'>
                                <td> <input type="checkbox" name="call_notification[]" value="phone_number" checked /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Caller Phone #:</div></td>
                            <div class='leftValue'>
                                <td> <input type="checkbox" name="call_notification[]" value="caller_phone"   /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Caller Location:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="caller_state,caller_country,caller_zip"  />
                            </div></td></tr>
                            <tr>
                                <td><div class='leftName'>Caller Duration:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="call_duration"     /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Call Time:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="time_of_call"    />
                            </div></td></tr>
                            <tr>
                                <td><div class='leftName'>Caller Name*:</div></td>
                            <div class='leftValue'>
                                <td> <input type="checkbox" name="call_notification[]" value="caller_name"    />
                            </div></td></tr>

                        </div>

                        <tr>
                        <div class="checkSubSection">

                            <div class="clear"></div>
                            <td><b>Web Tracking Information&nbsp;</b><br/></td>
                            <div class="clear"></div></tr>
                            <tr>
                                <td><div class='leftName'>Entry Time: </div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="time_stamp" checked   /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Location: </div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="visitor_city_state"    /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Lat,Long:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="lat,lng"    /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Duration:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="time_on_site"    /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Web Page History:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="last_page"  /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Traffic Type:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="traffic_type"   /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Keyword:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="keyword"     /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Match Type: </div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="matchtype"   /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Source:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="source"    /></td>
                            </div></tr>
                            <tr>
                                <td><div class='leftName'>Goal Pages:</div></td>
                            <div class='leftValue'>
                                <td><input type="checkbox" name="call_notification[]" value="goal_pages"  /></td>
                            </div></tr>
                            <div class="clear"></div>
                        </div>

                    </div>
                </div>
                <tr>

                <div class="da-form-row">
                    <td><label><small>Recieve Text Messages After Phone Calls (USA)</small></label></td>
                    <div class="da-form-item large">
                        <td>Yes <input type="checkbox" name="text_notify" value="1" style="width:auto" checked/>
                            <br/>
                            Provider<span class="required_inputs_star text-danger">*</span> <select name='cell_provider'>
                                <option value=''>Select Provider (optional)</option>
                                <option value='verizon'>Verizon</option>
                                <option value='cricket'>Cricket</option>
                                <option value='tmobile'>T-Mobile</option>
                                <option value='boost'>Boost Mobile</option>
                                <option value='sprint'>Sprint</option>
                                <option value='att'>AT&ampT</option>
                                <option value='virgin'>Virgin Mobile</option>
                            </select>
                    </div></td>
                </div></tr>
                <tr>
                <div class="da-form-row">
                    <td><label><small>Phone Number to Text <span class="required_inputs_star text-danger">*</span></small></label></td>
                    <div class="da-form-item large">
                        <td><input type="text" name='cell_to_text' id='cell_to_text'>
                    </div></td> 
                </div></tr>

            </div>
        </div>
        <tr>

            <td> <a class="btn btn-primary back" id="back3">Go Back</a> <a class="btn btn-primary continue" id="continue4">Continue</a></td>
        </tr>
    </table>



</div>