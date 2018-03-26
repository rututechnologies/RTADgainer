<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignController extends Controller
{
    
	protected $view_directory_name="v1.Campaign.";
	
    public function index() {
 
        return view($this->view_directory_name.'campaign');

    }
    public function check_phone_number() {
       
        return view($this->view_directory_name.'micros.CheckPhoneNumber');
    }
    public function goal_action() {
       
        return view($this->view_directory_name.'micros.goalaction');
    }
    public function new_compaign() {
       
        return view($this->view_directory_name.'micros.newcampaign');
    }
    public function view_compaign() {
       
        return view($this->view_directory_name.'micros.viewcampaign');
    }
    
//$test = DB::table('campaigns')->select('campaign_name', 'clicksThresh', 'callsThresh','avgCalls','avgConversions','goal1_inc','emailsThresh','conversion_flag','avgConversions')->get();

       // return view($this->view_directory_name.'micros.viewcampaign',['test' => $test]);
       // return view($this->view_directory_name.'micros.viewcampaign');



public function check(Request $request)
{
   

          
        $phone_number1 = (string) $request->input('chck_phone_1');
        $phone_number2 = $request->chck_phone_2;
        $phone_number3 = $request->chck_phone_3;
        $phone_number4 = $request->chck_phone_4;
        $phone_number5 = $request->chck_phone_5;
        $phone_number6 = $request->chck_phone_6;
        $phone_number7 = $request->chck_phone_7;
        $phone_number8 = $request->chck_phone_8;
        $phone_number9 = $request->chck_phone_9;
        $phone_number10 = $request->chck_phone_10;

        $data = [];

        if($phone_number1){
            $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number1 )->get();
            $msg = (count($query) > 0) ? $phone_number1 .' : Phone number exists' : $phone_number1 . ' : Phone number not exists';
            array_push($data, $msg);

        }

        if($phone_number2){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number2 )->get();
            $msg = (count($query) > 0) ? $phone_number2 .' : Phone number exists' : $phone_number2 . ' : Phone number not exists';
            array_push($data, $msg);
        }

        if($phone_number3){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number3 )->get();
            $msg = (count($query) > 0) ? $phone_number3 .' : Phone number exists' : $phone_number3 . ' : Phone number not exists';
            array_push($data, $msg);
        }

        if($phone_number4){
            $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number4 )->get();
            $msg = (count($query) > 0) ? $phone_number4 .' : Phone number exists' : $phone_number4 . ' : Phone number not exists';
            array_push($data, $msg);

        }

        if($phone_number5){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number5 )->get();
            $msg = (count($query) > 0) ? $phone_number5 .' : Phone number exists' : $phone_number5 . ' : Phone number not exists';
            array_push($data, $msg);
        }

        if($phone_number6){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number6 )->get();
            $msg = (count($query) > 0) ? $phone_number6 .' : Phone number exists' : $phone_number6 . ' : Phone number not exists';
            array_push($data, $msg);
        }

        if($phone_number7){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number7 )->get();
            $msg = (count($query) > 0) ? $phone_number7 .' : Phone number exists' : $phone_number7 . ' : Phone number not exists';
            array_push($data, $msg);
        }

         if($phone_number8){
            $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number8 )->get();
            $msg = (count($query) > 0) ? $phone_number8 .' : Phone number exists' : $phone_number8 . ' : Phone number not exists';
            array_push($data, $msg);

        }

        if($phone_number9){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number9 )->get();
            $msg = (count($query) > 0) ? $phone_number9 .' : Phone number exists' : $phone_number9 . ' : Phone number not exists';
            array_push($data, $msg);
        }

        if($phone_number10){
           $query = DB::table('phone_number_inventory')->where("phone_number", $phone_number10 )->get();
            $msg = (count($query) > 0) ? $phone_number10 .' : Phone number exists' : $phone_number10 . ' : Phone number not exists';
            array_push($data, $msg);
        }


        return back()->with('check', $data);

       

}


}
