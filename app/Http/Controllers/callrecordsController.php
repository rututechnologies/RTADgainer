<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class callrecordsController extends Controller
{
	protected $view_directory_name="v1.callrecords.";
	

public function callrecords(){
		return view($this->view_directory_name.'callrecords');
	}
	public function ppcdail(){
		return view($this->view_directory_name.'ppcdail');
	}
}