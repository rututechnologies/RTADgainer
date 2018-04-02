<div role="tabpanel" class="tab-pane" id="filering">
    <table class="table-form table-form-single-col" style="width: 700px; max-width: 100%;">
        <tr>
            <td><label>Blacklist Keywords:-</label></td>
            <td><p><i>i.e. Your company name,lawnmowers </i> up to 30, separate by comma. <br/>These words will not initiate a tracked visit. There will be no tracking number provided to the visitor that has typed these keywords for organic traffic.</p>
                <textarea name="blacklist_words" class="form-control" cols="40" rows="4"><?php echo $campaignDetails->blacklist_words; ?></textarea>
            </td>
        </tr>
        <tr>
            <td><label>Blacklist IP Addresses:-</label></td>
            <td><p><i>i.e. 22.22.22.22,33.55.254.22 </i> up to 30 addresses, separate by comma. <br/>These words will not initiate a tracked visit. There will be no tracking number provided to the visitor that has typed these keywords for organic traffic.</p>
                <textarea name="blacklist_ips" class="form-control" cols="40" rows="4"><?php echo $campaignDetails->blacklist_ips; ?></textarea>
            </td>
        </tr>

    </table>
    <br/><br/>
    <a class="btn btn-primary back" id="back4">Go Back</a>
    <input type="reset" value="Reset"  class="btn btn-primary back" /> 

</div>