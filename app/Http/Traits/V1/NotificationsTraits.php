<?php
namespace App\Http\Traits\V1;
use App\Models\HospitalNotifications;

trait NotificationsTraits
{
    public function allNotifcation(){
       return HospitalNotifications::where('hospital_id',Auth::id())->get();
    }
}