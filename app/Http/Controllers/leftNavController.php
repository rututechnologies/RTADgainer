<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class leftNavController extends Controller
{
	protected $view_directory_name="v1.";
	
	public function agency(){
		return view($this->view_directory_name.'agency');
	}
	
	
	
	
	
}

?>
