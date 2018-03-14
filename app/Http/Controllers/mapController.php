<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class mapController extends Controller
{
	protected $view_directory_name="v1.map.";
	
	public function map(){
		return view($this->view_directory_name.'map');
	}
	
}