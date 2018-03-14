<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class passwordController extends Controller
{
	protected $view_directory_name="v1.icon.";
	

public function passwordbutton(){
		return view($this->view_directory_name.'passwordb');
	}
}