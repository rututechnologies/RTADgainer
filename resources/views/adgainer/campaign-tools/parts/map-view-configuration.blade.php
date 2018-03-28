<div class="form-horizontal" style="width: 600px; max-width: 100%;">
    <div class="form-group">
        <label class="col-sm-4 control-label">Campaign :</label>
        <div class="col-sm-8">
            <select id="campaign_map" class="form-control">
                <option value="">Select a Campaign</option>
                <?php
                foreach ( $campaigns as $campaign ) {
                    echo "<option value='" . $campaign->campaign_id . "'>" . $campaign->campaign_name . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <!-- -->
    <div class="form-group">
        <label class="col-sm-4 control-label">Traffic Type :</label>
        <div class="col-sm-8">
            <select id="traffic_map" class="form-control">
                <option value="">(optional) All</option>
                <option value="PPC">PPC</option>
                <option value="ORG">Organic</option>
                <option value="DISPLAY">Display</option>
                <option value="DIRECT">DIRECT</option>
            </select>
        </div>
    </div>
    <!-- -->
    <div class="form-group">
        <label class="col-sm-4 control-label">Calls Only :</label>
        <div class="col-sm-8">
            <div class="radio">
                <label>
                    <input type="radio" id="calls_only1" name="calls_only" value="1"/> All Calls
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="calls_only3" name="calls_only" value="3"/> Only Unique Calls
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="calls_only2" name="calls_only" value="2" checked/> All Traffic
                </label>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="row">
        <div class="col-sm-6 col-sm-offset-4">
            <button type="button" class="btn btn-primary">Open Map</button>
        </div>
    </div>

</div>