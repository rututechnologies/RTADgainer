<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign;
use DB;

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
    //DB::phone_number_inventory();
    // try{

            //  method1 //


        //$phone_number_inventory=new phone_number_inventory();

        // if (phone_number_inventory::where('phone_number', '=', Input::get('check_phone_1'))->exists())
        //  {
        //     Session::flash('alert-info','Phone number exists');
        //  }
         
        // else
        // {
        //     Session::flash('alert-danger','Phone number does not exists');
        // }

            //  method2 //

        
        // if( DB::table('phone_number_inventory')->get('phone_number') == Input::get('check_phone_1'))
        //     {
        //        Session::flash('alert-info','Phone number exists'); 
        //     }
        //     else
        //     {
        //        Session::flash('alert-danger','Phone number does not exists'); 
        //     }

             //$number = array(DB::table('phone_number_inventory')->get('phone_number'));
        // $user_data = User::where('username',$request->username)->first();

                //method 3//
        // 1. get the submitted phone number
        $phone_number = $request->chck_phone_1;
        $phone_number1 = $request->chck_phone_2;
        $phone_number2 = $request->chck_phone_3;
        $phone_number3 = $request->chck_phone_4;
        $phone_number4 = $request->chck_phone_5;
        $phone_number5 = $request->chck_phone_6;
        $phone_number6 = $request->chck_phone_7;
        $phone_number7 = $request->chck_phone_8;
        $phone_number8 = $request->chck_phone_9;
        $phone_number9 = $request->chck_phone_10;
        // create query builder to check the phone number
        $query = DB::table('phone_number_inventory')->where('phone_number', $phone_number)->get();
        $query1 = DB::table('phone_number_inventory')->where('phone_number',$phone_number1)->get();
        $query2 = DB::table('phone_number_inventory')->where('phone_number',$phone_number2)->get();
        $query3 = DB::table('phone_number_inventory')->where('phone_number',$phone_number3)->get();
        $query4 = DB::table('phone_number_inventory')->where('phone_number',$phone_number4)->get();
        $query5 = DB::table('phone_number_inventory')->where('phone_number',$phone_number5)->get();
        $query6 = DB::table('phone_number_inventory')->where('phone_number',$phone_number6)->get();
        $query7 = DB::table('phone_number_inventory')->where('phone_number',$phone_number7)->get();
        $query8 = DB::table('phone_number_inventory')->where('phone_number',$phone_number8)->get();
        $query9 = DB::table('phone_number_inventory')->where('phone_number',$phone_number9)->get();
        //1//
        // check if collection / result is not empty
        if($query->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //2//
       if($query1->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }

        //3//
        if($query2->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //4//
         if($query3->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //5//
         if($query4->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //6//
         if($query5->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //7//
         if($query6->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //8//
         if($query7->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //9//
         if($query8->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        //10//
         if($query9->isNotEmpty()){
            // phone number is exist
            echo"<script type='text/javascript'> alert('Phone number exists');</script>";
            return view($this->view_directory_name.'micros.CheckPhoneNumber');
           //return back()->withMessage('Phone number exists');

        }
        else{
            echo"<script type='text/javascript'> alert('Phone number not exists');</script>";
           return view($this->view_directory_name.'micros.CheckPhoneNumber'); 
            // phone number not exist
           // return back()->withMessage('Phone number does not exists');

        }
        


    
//     catch(Exception $e){
//         DB::rollback();
//         dd($e);
// }
}


}
