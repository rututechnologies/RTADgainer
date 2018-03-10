<?php
/**
 * Copyright (c) 2017. This code is intent of Sachit Kumar under GoldenHour Systems Pvt. Ltd.
 */
namespace App\Http\Services;
use App\Models\V1\RemoteUser;

/**
 * Created by PhpStorm.
 * User: YADUVANSHIS
 * Date: 3/1/2017
 * Time: 9:42 PM
 */
class UserServices{


    public function findOrRegisterUser($request){
            if($this->checkIfUserExist($request->mobileNumber)){
                return "REGISTERED";
            }else{
                if($this->registerUserAndGiveId($request)){
                    return "REGISTERED";
                }
               return "NOT_REGISTERED";
            }
    }

    public function registerUserAndGiveId($request){
        $user = (new RemoteUser())->registerUser($request);
        if($user){
            return $user;
        }
       return null;
    }

    public function checkIfUserExist($mobileNumber){
      $user  =  RemoteUser::where('phone_number',$mobileNumber)->first();
        if($user){
            return $user->id;
        }
        return null;
    }
}