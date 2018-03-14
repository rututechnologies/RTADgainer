<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class viewbuttonController extends Controller
{
	protected $view_directory_name="v1.viewbutton.";
	
	public function viewbutton(){
		return view($this->view_directory_name.'viewbutton');
	}
	
}