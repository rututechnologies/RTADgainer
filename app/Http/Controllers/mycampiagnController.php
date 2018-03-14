<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class mycampiagnController extends Controller
{
	protected $view_directory_name="v1.mycampiagn.";
	
	public function mycampiagn(){
		return view($this->view_directory_name.'mycampiagn');
	}
	
}