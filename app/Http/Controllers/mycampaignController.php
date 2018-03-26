<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class mycampaignController extends Controller
{
    
	protected $view_directory_name="v1.mycampaign.";

	public function MyCampaign() {
 
        return view($this->view_directory_name.'mycampaignbutton');
        /*$test = DB::table(' ppc_historical_data')->select('campaign_name', 'clicks', 'calls','conversions','goals','emails','cpa')->get();

       return view($this->view_directory_name.'micros.mycampaign',['test' => $test]);
       return view($this->view_directory_name.'micros.mycampaign');*/

    }
    public function goalaction() {
 
        return view($this->view_directory_name.'goalaction');

    }
     public function mycampiagn() {

        return view($this->view_directory_name.'mycampiagn');
    }
    
   public function ppctracking(Request $request){
      $account_id=$request->campaign_account;


   	 $test = DB::table('ppc_historical_data')->select('campaign_name', 'clicks', 'calls','conversions','goals','emails','cpa')->where('account_id','=',$account_id )->get();

       return view($this->view_directory_name.'micros.mycampiagn',['test' => $test]);
       return view($this->view_directory_name.'micros.mycampiagn');

   }


}