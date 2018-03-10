<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
use DB;
use App\User;

class msgController extends Controller
{
   protected $view_directory_name="v1.message.";
	
	public function msglist(){
		
		return view($this->view_directory_name.'premsg');
	}
}
