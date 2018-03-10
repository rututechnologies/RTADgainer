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
	public function searchreport(){
		return view($this->view_directory_name.'micros.reportssearch');
	}
	public function largecsv(){
		return view($this->view_directory_name.'micros.reportslargecsv');
	}
	public function uploadcsv(){
		return view($this->view_directory_name.'micros.uploadcsv');
	}
	public function report1(){
		return view($this->view_directory_name.'micros.uploadcsv');
	}
	
	
	
}

?>
