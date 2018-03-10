<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class centerController extends Controller
{
	protected $view_directory_name="v1.center.";
	
	public function center(){
		return view($this->view_directory_name.'center');
	}

}