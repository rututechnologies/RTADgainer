<?php

namespace App\Http\Traits\V1;
use App\Models\AllTrips;

trait TripsTraits{
    use InventoryTraits;

    public function getTripList($requesterId){
            return AllTrips::with('patient')->with('tripstatus')->where('requester_type',2)->where('requester_id',$requesterId)->orderby
            ('id','desc')->get();
    }

    public function getOpenInventoryBookingList($requesterId){
        return AllTrips::with('patient')->with('tripstatus')->where('requester_type',2)->where('requester_id',$requesterId)->orderby
        ('id','desc')->get();
    }

    public function getOwnInventoryBookingList($requesterId){
        $getOperatorIds = $this->getOperatorList($requesterId);
        return AllTrips::whereIn('operator_id',$getOperatorIds)->orderby
        ('id','desc')->with
        ('tripstatus')->get();
    }
    public function activeBookingChannels(){
        
    }
    public function getAcceptedInventoryBookingList($requesterId){
        return AllTrips::with('patient')->with('tripstatus')->where('requester_type',2)->where('requester_id',$requesterId)->where('trip_status','2')->orderby
        ('id','desc')->get();
    }
}