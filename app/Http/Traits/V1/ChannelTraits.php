<?php

namespace App\Http\Traits\V1;

use Illuminate\Http\Request;

trait ChannelTraits{
    public function getAvailChannelList($hospital_id){
       $privateChannel = "HOSPITAL_CHANNEL_".$hospital_id;
//       $locationChannel = md5('location_channel'.$hospital_id);
//       $chatChannel = md5('chat_channel'.$hospital_id);
        return ['register'=>$privateChannel];
    }
    public function getKeys(){
        return ['subs_key'=>'sub-c-e1f27bce-ad5f-11e6-a071-02ee2ddab7fe'];
    }
}