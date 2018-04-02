<div class="row">
    <div class="col-md-6">
        <table class="table-form" >
            <tr>
                <td><label>Goal Pages</label></td>
                <td>
                    <i>Do not include "http://www." or "http://", should be, domain.com/anything or sub.domain.com/anything  </i> <br/> <br/>
                </td>
            </tr>

            <tr>
                <td> Goal 1 Memo</td>
                <td><input type='text' class="form-control" name='goal_page1_memo'  value="<?php echo $campaignDetails->goal1Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 1 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page1' value="<?php echo $campaignDetails->goal1; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal1_inc" value="1" {{($campaignDetails->goal1_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal1_inc" value="0" {{($campaignDetails->goal1_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 2 Memo</td>
                <td><input type='text' class="form-control" name='goal_page2_memo'  value="<?php echo $campaignDetails->goal2Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 2 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page2' value="<?php echo $campaignDetails->goal2; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal2_inc" value="1" {{($campaignDetails->goal2_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal2_inc" value="0" {{($campaignDetails->goal2_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 3 Memo</td>
                <td><input type='text' class="form-control" name='goal_page3_memo'  value="<?php echo $campaignDetails->goal3Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 3 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page3' value="<?php echo $campaignDetails->goal3; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal3_inc" value="1" {{($campaignDetails->goal3_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal3_inc" value="0" {{($campaignDetails->goal3_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 4 Memo</td>
                <td><input type='text' class="form-control" name='goal_page4_memo'  value="<?php echo $campaignDetails->goal4Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 4 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page4' value="<?php echo $campaignDetails->goal4; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal4_inc" value="1" {{($campaignDetails->goal4_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal4_inc" value="0" {{($campaignDetails->goal4_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 5 Memo</td>
                <td><input type='text' class="form-control" name='goal_page5_memo'  value="<?php echo $campaignDetails->goal5Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 5 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page5' value="<?php echo $campaignDetails->goal5; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal5_inc" value="1" {{($campaignDetails->goal5_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal5_inc" value="0" {{($campaignDetails->goal5_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 6 Memo</td>
                <td><input type='text' class="form-control" name='goal_page6_memo'  value="<?php echo $campaignDetails->goal6Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 6 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page6' value="<?php echo $campaignDetails->goal6; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal6_inc" value="1" {{($campaignDetails->goal6_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal6_inc" value="0" {{($campaignDetails->goal6_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 7 Memo</td>
                <td><input type='text' class="form-control" name='goal_page7_memo'  value="<?php echo $campaignDetails->goal7Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 7 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page7' value="<?php echo $campaignDetails->goal7; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal7_inc" value="1" {{($campaignDetails->goal7_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal7_inc" value="0" {{($campaignDetails->goal7_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 8 Memo</td>
                <td><input type='text' class="form-control" name='goal_page8_memo'  value="<?php echo $campaignDetails->goal8Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 8 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page8' value="<?php echo $campaignDetails->goal8; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal8_inc" value="1" {{($campaignDetails->goal8_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal8_inc" value="0" {{($campaignDetails->goal8_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 9 Memo</td>
                <td><input type='text' class="form-control" name='goal_page9_memo'  value="<?php echo $campaignDetails->goal9Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 9 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page9' value="<?php echo $campaignDetails->goal9; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal9_inc" value="1" {{($campaignDetails->goal9_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal9_inc" value="0" {{($campaignDetails->goal9_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td> Goal 10 Memo</td>
                <td><input type='text' class="form-control" name='goal_page10_memo'  value="<?php echo $campaignDetails->goal10Memo; ?>" /></td>
            </tr>

            <tr>
                <td>Goal 10 URL</td> 
                <td>
                    <input type='text' class="form-control" name='goal_page10' value="<?php echo $campaignDetails->goal10; ?>" />
                    <div class="radio radio-inline" style="padding-left: 0;margin-top: 7px;margin-bottom: 10px;">
                        Include in CPL? &nbsp;&nbsp;
                        <label><input type="radio" name="goal10_inc" value="1" {{($campaignDetails->goal10_inc == 1)? 'checked' : ''}} > Yes</label>&nbsp;
                        <label><input type="radio" name="goal10_inc" value="0" {{($campaignDetails->goal10_inc == 0)? 'checked' : ''}} > No</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td><label>Google Analytics Code for Calls</label></td>
                <td>
                    <?php
                    $ga_codes_arr = array( 'goal' => "", 'call' => "" );
                    //print_r($ga_codes);
                    foreach ( $ga_codes as $code ) {
                        if ( isset( $code->code ) ) {
                            $ga_codes_arr[ $code->type ] = $code->code;
                        }
                    }
                    //print_r($ga_codes_arr);
                    ?>
                    <input type='text' class="form-control"   name="call_code"  value='<?php echo $ga_codes_arr[ 'call' ]; ?>'  />
                </td>
            </tr>
            <tr>
                <td><label>Google Analytics Code for Goals</label></td>
                <td>
                    <input type='text' class="form-control" name="goal_code" value='<?php echo $ga_codes_arr[ 'goal' ]; ?>'/>
                </td>
            </tr>

        </table>
    </div>
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td><label>Total Goal Pages Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgGoalPgs" value='<?php echo @$campaignDetails->avgGoalPgs; ?>'/>
                    Notification Threshold:<select class="form-control" name="goalsThresh" >
                        <option value="<?php echo @$campaignDetails->goalsThresh; ?>"><?php echo @$campaignDetails->goalsThresh; ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="25">25%</option>
                        <option value="33">33%</option>
                        <option value="50">50%</option>
                        <option value="66">66%</option>
                        <option value="75">75%</option>
                        <option value="90">90%</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td><label>Total Calls Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgCalls" value='<?php echo @$campaignDetails->avgCalls; ?>'/>
                    Notification Threshold: <select class="form-control" name="callsThresh" >
                        <option value="<?php echo @$campaignDetails->callsThresh; ?>"><?php echo @$campaignDetails->callsThresh; ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="25">25%</option>
                        <option value="33">33%</option>
                        <option value="50">50%</option>
                        <option value="66">66%</option>
                        <option value="75">75%</option>
                        <option value="90">90%</option>
                    </select></td>

            </tr>

            <tr>
                <td> <label>Total Emails Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgEmails" value='<?php echo @$campaignDetails->avgEmails; ?>'/>
                    Notification Threshold:<select class="form-control" name="emailsThresh" >
                        <option value="<?php echo @$campaignDetails->emailsThresh; ?>"><?php echo @$campaignDetails->emailsThresh; ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="25">25%</option>
                        <option value="33">33%</option>
                        <option value="50">50%</option>
                        <option value="66">66%</option>
                        <option value="75">75%</option>
                        <option value="90">90%</option>
                    </select></td>

            </tr>


            <tr>
                <td> <label>Total Clicks Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgClicks" value='<?php echo @$campaignDetails->avgClicks; ?>'/>
                    Notification Threshold: <select class="form-control" name="clicksThresh" >
                        <option value="<?php echo @$campaignDetails->clicksThresh; ?>"><?php echo @$campaignDetails->clicksThresh; ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="25">25%</option>
                        <option value="33">33%</option>
                        <option value="50">50%</option>
                        <option value="66">66%</option>
                        <option value="75">75%</option>
                        <option value="90">90%</option>
                    </select></td>

            </tr>


            <tr>
                <td><label>Total Covnersions Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgConversions" value='<?php echo @$campaignDetails->avgConversions; ?>'/>
                    Notification Threshold: <select class="form-control" name="convsThresh" >
                        <option value="<?php echo @$campaignDetails->convsThresh; ?>"><?php echo @$campaignDetails->convsThresh; ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="25">25%</option>
                        <option value="33">33%</option>
                        <option value="50">50%</option>
                        <option value="66">66%</option>
                        <option value="75">75%</option>
                        <option value="90">90%</option>
                    </select></td>

            </tr>

            <tr>
                <td>
                    <label>Custom URL paramter 1</label></td><td><input type='text' class="form-control"   name="camp_custom1" value='<?php echo @$campaignDetails->camp_custom1; ?>'/>
                </td>
            </tr>
            <tr>
                <td>        
                    <label>Custom URL paramter 2</label></td><td><input type='text' class="form-control"   name="camp_custom2"  value='<?php echo @$campaignDetails->camp_custom2; ?>'/>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Custom URL paramter 3</label></td><td><input type='text' class="form-control"   name="camp_custom3"  value='<?php echo @$campaignDetails->camp_custom3; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 4</label></td><td><input type='text' class="form-control"   name="camp_custom4" value='<?php echo @$campaignDetails->camp_custom4; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 5</label></td><td><input type='text' class="form-control"   name="camp_custom5"  value='<?php echo @$campaignDetails->camp_custom5; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 6</label></td><td><input type='text' class="form-control"   name="camp_custom6" value='<?php echo @$campaignDetails->camp_custom6; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 7</label></td><td><input type='text' class="form-control"   name="camp_custom7" value='<?php echo @$campaignDetails->camp_custom7; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 8</label></td><td><input type='text' class="form-control"   name="camp_custom8"  value='<?php echo @$campaignDetails->camp_custom8; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 9</label></td><td><input type='text' class="form-control"   name="camp_custom9" value='<?php echo @$campaignDetails->camp_custom9; ?>'/>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 10</label></td><td><input type='text' class="form-control"   name="camp_custom10" value='<?php echo @$campaignDetails->camp_custom10; ?>'/>
                </td>
            </tr>
        </table>

    </div>
</div>
<a class="btn btn-primary back" id="back1">Go Back</a>
<a class="btn btn-primary continue" id="continue2">Continue</a>