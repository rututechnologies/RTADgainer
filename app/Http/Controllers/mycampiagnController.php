<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class mycampiagnController extends Controller
{
	protected $view_directory_name="v1.mycampiagn.";
	
	public function mycampiagn(Request $request){
		
		$account_id=$request->campaign_account;
		var_dump($account_id);
        $result = DB::table('campaigns')->select('campaign_name','tracking_campaign_type','device_tracking', 'default_number','tracking_type','avgCalls','goal1Memo','goal2Memo','goal3Memo','goal4Memo','goal5Memo','goal6Memo','goal7Memo','goal8Memo','goal9Memo','goal10Memo','goal1','goal2','goal3','goal4','goal5','goal6','goal7','goal8','goal9','goal10')->where('account_id','=',$account_id )->get();
        //var_dump($result);
        return view($this->view_directory_name.'mycampiagn',['result' => $result]);  
		
	}
	
}