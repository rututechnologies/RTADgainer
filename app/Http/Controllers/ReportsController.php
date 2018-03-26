<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ReportsController extends Controller
{
	protected $view_directory_name="v1.Reports.";
	
	public function reportList(Request $request)
	{
			DB::table('profile_report_settings')->insert([
    		['duration' => $request->duration],
    		['day' => $request->day],
    		['hour' => $request->hour],
    		['time_zone' => $request->time_zone],
    		['emails' => $request->emails],
    		['format' => $request->format],
    		['ftp_data_id' => $request->ftp_data_id],
    		['account_id' => ""],
    		['username' => ""],
    		['account_account_id' => ""],
    		['campaign_account_id' =>""],
    		['fields' => ""],
    		['report_name' => $request->report_name ],
    		['data_report_name' => $request->data_report],
    		['report' =>""],
    		['is_table' =>""],
    		['rc_table' => ""],
    		['rc_graph' => ""],
    		['rc_pie' => ""],
    		['rType' => $request->rType],
    		['rq_acct' => $request->report_account],
    		['rq_camp ' => $request->report_campaign],
    		['traffic' => $request->traffic],
    		['csv_type' => $request->conv_type],
    		['attach_csv' => $request->attach_csv],
    		['send_ftp' =>""],
    		['group_by' =>"" ],
    		['fromDate' => ""],
    		['toDate' => ""]
]);


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
