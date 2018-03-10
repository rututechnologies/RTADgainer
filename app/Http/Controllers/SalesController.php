<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class SalesController extends Controller
{
	protected $view_directory_name="v1.Sales.";
	
	public function traffic_estimator(){
		return view($this->view_directory_name.'trafficestimator');
	}
	
	public function documentslist(){
		return view($this->view_directory_name.'documentslist');
	}
	public function sales_list(){
		return view($this->view_directory_name.'sales');
	}
	public function Sale(){
		return view($this->view_directory_name.'Sale');
	}
	
}

?>
