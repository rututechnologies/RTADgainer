<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\japanese;
use DB;
use App\User;

class japaneseController extends Controller
{
   protected $view_directory_name="v1.japanese.";
	
	public function japanese(){
		
		return view($this->view_directory_name.'japanese');
	}
	
}

