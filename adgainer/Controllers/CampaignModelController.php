<?php
namespace Adgainer\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CampaignModelController extends Controller
{
    function getMultiTrackingNumberSets( $account_id, $campaign_id, $multi_phone )
    {
        $result = DB::table( 'multi_tracking_inventory' )
            ->where( 'account_id', $account_id )
            ->where( 'campaign_id', $campaign_id )
            ->where( 'track_phone', '!=', 0 )
            ->get();
        $allTrack = array();
        foreach ( $result as $phone ) {
            $allTrack[ $phone->cust_phone ][] = $phone->track_phone;
        }
        $totalPerGroup = array();
        foreach ( $allTrack as $phoneArr ) {
            $totalPerGroup[] = count( $phoneArr );
        }
        if ( count( $totalPerGroup ) == 0 ) {
            $totalPerGroup = array( 0 );
        }
        $smallestGroup = min( $totalPerGroup );

        return array( 'MIN' => $smallestGroup, 'ALLTRACK' => $allTrack, 'GRPTOTAL' => $totalPerGroup );
    }

    function getMultiPhoneNumbers( $account_id )
    {
        return DB::table( 'multi_tracking_inventory' )
                ->where( 'account_id', $account_id )
                ->get();
    }

    function addMultiPhoneNumbers( $track_phone, $phone_name, $cust_phone, $forward_to, $account_id, $campaign_id )
    {
        $added = 0;
        foreach ( $cust_phone as $key => $phone ) {
            if ( $phone != "" ) {
                DB::table( 'multi_tracking_inventory' )
                    ->where( 'track_phone', $track_phone[ $key ] )
                    ->update( [ 'pre_account_id' => $account_id ] );
                $data = array(
                    'phone_name'      => $phone_name[ $key ],
                    'cust_phone'      => $phone,
                    'track_phone'     => $track_phone[ $key ] | 0,
                    'forward_to'      => $forward_to[ $key ] | 0,
                    'pre_account_id'  => '',
                    'account_id'      => $account_id,
                    'campaign_id'     => $campaign_id,
                    'order_id'        => ($key + 1),
                    "active"          => 1,
                    'ip'              => '',
                    'single_tracking' => 0,
                    'device'          => 0,
                    'useable'         => 0,
                    'time_stamp'      => Carbon::now()
                );
                DB::table( 'multi_tracking_inventory' )->insert( $data );
                $added++;
            }
        }
        return $added;
    }

    function getAllCampaignSourcePhoneNumbers( $campaign_id )
    {
        return DB::table( 'source_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->get();
    }

    function getAllCampaignPhoneNumbers( $campaign_id )
    {
        return DB::table( 'phone_number_inventory' )
                ->where( 'campaign_id', $campaign_id )
                ->get();
    }

}
