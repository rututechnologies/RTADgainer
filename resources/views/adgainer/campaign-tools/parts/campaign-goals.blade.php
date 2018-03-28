<div class="table-responsive">

    <table class="table table-bordered table-borderless-row">
        <thead>
            <tr>
                <th class="text-center">Campaign</th>
                <th class="text-center">#</th>
                <th class="text-center">Goal</th>
                <th class="text-center">Goal URL</th>
                <th class="text-center">CPL Goal</th>
                <th class="text-center">Hit Count</th>
            </tr>
        </thead>

        <tbody class="text-center">
            <?php
            $count = 0;

            foreach ( $campaigns as $campaign ) {

                $class = "odd";
                if ( ($count % 2) == 0 ) {
                    $class = "even";
                }

                $camp_goals = [];

                $camp_goals[ 1 ] = 0;
                $camp_goals[ 2 ] = 0;
                $camp_goals[ 3 ] = 0;
                $camp_goals[ 4 ] = 0;

                foreach ( $all_ppc[ $campaign->campaign_id ] as $campPPC ):

                    if ( strtotime( $campPPC->time_stamp ) > strtotime( $date1 ) && strtotime( $campPPC->time_stamp ) < strtotime( $date2 ) ) {
                        if ( $campPPC->goal1_hit == 1 ) {
                            $camp_goals[ 1 ] ++;
                        }
                        if ( $campPPC->goal2_hit == 1 ) {
                            $camp_goals[ 2 ] ++;
                        }
                        if ( $campPPC->goal3_hit == 1 ) {
                            $camp_goals[ 3 ] ++;
                        }
                        if ( $campPPC->goal4_hit == 1 ) {
                            $camp_goals[ 4 ] ++;
                        }
                    }
                endforeach;
                ?>
            <tbody>

                <!--1-->
                <tr class="{{ ($count % 2 == 0)? 'even' : 'odd' }}">
                    <td>{{ $campaign->campaign_name }}</td>
                    <td class="text-center">1</td>
                    <td>{{ $campaign->goal1Memo }}</td>
                    <td>{{ $campaign->goal1 }}</td>
                    <td class="text-center">{{ ($campaign->goal1_inc == 1) ? 'yes' : 'No' }}</td>
                    <td class="text-center">{{ $camp_goals[1] }}</td>
                </tr>
                <!--2-->
                <tr class="{{ ($count % 2 == 0)? 'even' : 'odd' }}">
                    <td></td>
                    <td class="text-center">2</td>
                    <td>{{ $campaign->goal2Memo }}</td>
                    <td>{{ $campaign->goal2 }}</td>
                    <td class="text-center">{{ ($campaign->goal2_inc == 1) ? 'yes' : 'No' }}</td>
                    <td class="text-center">{{ $camp_goals[2] }}</td>
                </tr>
                <!--3-->
                <tr class="{{ ($count % 2 == 0)? 'even' : 'odd' }}">
                    <td></td>
                    <td class="text-center">3</td>
                    <td>{{ $campaign->goal3Memo }}</td>
                    <td>{{ $campaign->goal3 }}</td>
                    <td class="text-center">{{ ($campaign->goal3_inc == 1) ? 'yes' : 'No' }}</td>
                    <td class="text-center">{{ $camp_goals[3] }}</td>
                </tr>
                <!--4-->
                <tr class="{{ ($count % 2 == 0)? 'even' : 'odd' }}">
                    <td></td>
                    <td class="text-center">4</td>
                    <td>{{ $campaign->goal4Memo }}</td>
                    <td>{{ $campaign->goal4 }}</td>
                    <td class="text-center">{{ ($campaign->goal4_inc == 1) ? 'yes' : 'No' }}</td>
                    <td class="text-center">{{ $camp_goals[4] }}</td>
                </tr>

            </tbody>
            <?php
            $count++;
        }
        ?>
        <tr>

        </tr>
        </tbody>

    </table>

</div>