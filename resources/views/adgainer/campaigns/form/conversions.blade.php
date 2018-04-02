<div class="row">
    <div class="col-md-6">
        <table class="table-form" >
            <tr>
                <td><label>Goal Pages</label></td>
                <td>
                    <i>Do not include "http://www." or "http://", should be, domain.com/anything or sub.domain.com/anything  </i>  
                </td>
            </tr>
            <tr>                                                        
                <td> Goal 1 Memo</td> <td><input type='text' class="form-control" name='goal_page1_memo' /></td>
            </tr>

            <tr>
                <td>Goal 1 URL</td> <td><input type='text' class="form-control" name='goal_page1' /></td>
            </tr>

            <tr>
                <td> Goal 2 Memo</td> <td><input type='text' class="form-control" name='goal_page2_memo'  /></td></tr>

            <tr>
                <td>Goal 2 URL </td> <td><input type='text' class="form-control" name='goal_page2'  /></td></tr>

            <tr>
                <td>Goal 3 Memo</td> <td><input type='text' class="form-control" name='goal_page3_memo'  /></td></tr>

            <tr>
                <td>Goal 3 URL</td>  <td><input type='text' class="form-control" name='goal_page3' /></td></tr>

            <tr>
                <td>Goal 4 Memo</td> <td><input type='text' class="form-control" name='goal_page4_memo'  /></td></tr>

            <tr>
                <td>Goal 4 URL</td>  <td><input type='text' class="form-control" name='goal_page4' /></td></tr>

            <tr>
                <td>Goal 5 Memo</td><td> <input type='text' class="form-control" name='goal_page5_memo'  /></td>

            <tr>
                <td>Goal 5 URL</td> <td> <input type='text' class="form-control" name='goal_page5' /></td></tr>

            <tr>
                <td>Goal 6 Memo</td> <td><input type='text' class="form-control" name='goal_page6_memo'  /></td></tr>

            <tr>
                <td>Goal 6 URL</td>  <td><input type='text' class="form-control" name='goal_page6' /></td></tr>

            <tr>
                <td>Goal 7 Memo</td><td> <input type='text' class="form-control" name='goal_page7_memo'  /></td></tr>

            <tr>
                <td>Goal 7 URL</td>  <td><input type='text' class="form-control" name='goal_page7' /></td></tr>

            <tr>
                <td>Goal 8 Memo</td> <td><input type='text' class="form-control" name='goal_page8_memo'  /></td></tr>

            <tr>
                <td>Goal 8 URL</td> <td><input type='text' class="form-control" name='goal_page8' /></td></tr>

            <tr>
                <td>Goal 9 Memo </td><td><input type='text' class="form-control" name='goal_page9_memo'  /></td></tr>

            <tr>
                <td>Goal 9 URL</td>  <td><input type='text' class="form-control" name='goal_page9' /></td></tr>

            <tr>
                <td>Goal 10 Memo</td><td> <input type='text' class="form-control" name='goal_page10_memo'  /></td></tr>

            <tr>
                <td> Goal 10 URL</td> <td> <input type='text' class="form-control" name='goal_page10' /></td></tr>
            <tr>
                <td><label>Google Analytics Code for Calls</label></td>
                <td>
                    <input type='text' class="form-control"   name="call_code"   /></td></tr>
            <tr>
                <td><label>Google Analytics Code for Goals</label></td>
                <td>
                    <input type='text' class="form-control"   name="goal_code"   />
                </td></tr>


        </table>
    </div>
    <div class="col-md-6">
        <table class="table-form">
            <tr>
                <td><label>Average Goal Pages Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgGoalPgs" />
                    Notification Threshold:<select class="form-control" name="goalsThresh" >
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
                <td><label>Average Calls Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgCalls"  />
                    Notification Threshold: <select class="form-control" name="callsThresh" >
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
                <td> <label>Average Emails Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgEmails"  />
                    Notification Threshold:<select class="form-control" name="emailsThresh" >
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
                <td> <label>Average Clicks Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgClicks"  />
                    Notification Threshold: <select class="form-control" name="clicksThresh" >
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
                <td><label>Average Covnersions Per Day</label></td>
                <td><input type='text' class="form-control"   name="avgConversions"  />
                    Notification Threshold: <select class="form-control" name="convsThresh" >
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
                    <label>Custom URL paramter 1</label></td><td>
                    <input type='text' class="form-control"   name="camp_custom1"    />
                </td>
            </tr>
            <tr>
                <td>        
                    <label>Custom URL paramter 2</label></td><td><input type='text' class="form-control"   name="camp_custom2"   />
                </td>
            </tr>

            <tr>
                <td>
                    <label>Custom URL paramter 3</label></td><td><input type='text' class="form-control"   name="camp_custom3"    />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 4</label></td><td><input type='text' class="form-control"   name="camp_custom4"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 5</label></td><td><input type='text' class="form-control"   name="camp_custom5"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 6</label></td><td><input type='text' class="form-control"   name="camp_custom6"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 7</label></td><td><input type='text' class="form-control"   name="camp_custom7"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 8</label></td><td><input type='text' class="form-control"   name="camp_custom8"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 9</label></td><td><input type='text' class="form-control"   name="camp_custom9"   />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Custom URL paramter 10</label></td><td><input type='text' class="form-control"   name="camp_custom10"   />
                </td>
            </tr>

        </table>


    </div>
</div>
<a class="btn btn-primary back" id="back1">Go Back</a>
<a class="btn btn-primary continue" id="continue2">Continue</a>