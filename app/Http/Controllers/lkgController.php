<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class lkgController extends Controller
{
	protected $view_directory_name="v1.icon.";

	public function lkg(){
		return view($this->view_directory_name.'lkg');
	}
}