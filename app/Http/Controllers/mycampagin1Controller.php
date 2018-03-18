<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class mycampagin1Controller extends Controller
{
	protected $view_directory_name="v1.mycampiagn.";
	
	public function mycampagin1(){
		return view($this->view_directory_name.'mycampiagn');
	}
}