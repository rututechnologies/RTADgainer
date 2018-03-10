<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\accounting;
use DB;
use App\User;

class accountingController extends Controller
{
   protected $view_directory_name="v1.accounting.";
	
	public function accounting(){
		
		return view($this->view_directory_name.'accounting');
	}
	
}

