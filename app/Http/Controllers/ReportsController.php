<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ReportsController extends Controller
{
	protected $view_directory_name="v1.Reports.";
	
	public function reportList(){
		return view($this->view_directory_name.'reports');
	}
	public function reportFTP(){
		return view($this->view_directory_name.'micros.reportFTP');
	}
	public function searchreport(Request $request)
	{
		
		
		$category=$request->category; 
       	var_dump($category);
   
        $test = DB::table('campaigns')->select('goal1','goal2','goal3','goal4','default_number')->where('account_id','=',$category )->get();
        return view($this->view_directory_name.'micros.reportssearch',['test' => $test]);   
        return view($this->view_directory_name.'micros.reportssearch');
			
	}
	public function largecsv(){
		return view($this->view_directory_name.'micros.reportslargecsv');
	}
	public function uploadcsv(){
		return view($this->view_directory_name.'micros.uploadcsv');
	}
	public function report1(){
		return view($this->view_directory_name.'micros.report1');
	}
	
	/*public function searchreport_Detail(Request $request)
	{
		$account_id=$request->account_id;
		var_dump($account_id);
		$campname = DB::table('campaingns')->select('campaign_name','account_id')->where('account_id','=',$account_id )->get();
    	return view($this->view_directory_name.'micros.reportssearch',['campname' => $campname]);
	}*/
	
	
	
}

?>
