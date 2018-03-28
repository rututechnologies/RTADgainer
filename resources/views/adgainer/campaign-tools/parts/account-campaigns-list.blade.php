<div class="table-responsive">

    <table class="table table-bordered table-hovered table-stripped">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Track Type</th>
                <th class="text-center">Track Window</th>
                <th class="text-center">Default Number</th>
                <th class="text-center">Type</th>
                <th class="text-center">Goals</th>
                <th class="text-center">Record Calls</th>
                <th class="text-center">Active</th>
                <th class="text-center">Details / Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ( $campaigns as $campaign ) {

                echo '<tr class="text-center">';
                $goals = 0;
                if ( $campaign->goal1 != "" || $campaign->goal1Memo ) {
                    $goals++;
                }
                if ( $campaign->goal2 != "" || $campaign->goal2Memo ) {
                    $goals++;
                }
                if ( $campaign->goal3 != "" || $campaign->goal3Memo ) {
                    $goals++;
                }
                if ( $campaign->goal4 != "" || $campaign->goal4Memo ) {
                    $goals++;
                }

                $record_calls = "No";
                if ( $campaign->record_calls == 1 ) {
                    $record_calls = "Yes";
                }

                $camp_type = "Single";
                $editType = "edit";
                if ( $campaign->multi_code == 1 ) {
                    $camp_type = "Mutli";
                    $editType = "editMulti";
                } else {
                    if ( $campaign->source_code == 1 ) {
                        $camp_type = "Source";
                        $editType = "editSource";
                    }
                }

                $active = "No";
                if ( $campaign->active == 1 ) {
                    $active = "Yes";
                }

                echo "<td>" . $campaign->campaign_name . "</td>";
                echo "<td>" . $campaign->tracking_campaign_type . "</td>";
                echo "<td>" . $campaign->correlation_time . "</td>";
                echo "<td>" . $campaign->default_number . "</td>";
                echo "<td>" . $camp_type . "</td>";
                echo "<td>" . $goals . "</td>";
                echo "<td>" . $record_calls . "</td>";
                echo "<td>" . $active . "</td>";
                $urlDetail = "campaign/details/$campaign->campaign_id/$account_id";
                $urlEdit = "campaign/edit/$campaign->campaign_id/$account_id";
                ?>
            <td>
                <a href = "<?php echo $urlDetail; ?>" class = "btn btn-sm btn-info"><i class = "fa fa-info-circle"></i></a>
                <a href = "<?php echo $urlEdit; ?>" class = "btn btn-sm btn-info"><i class = "fa fa-pencil"></i></a>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>

</div>