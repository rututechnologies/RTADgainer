<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class accountsController extends Controller
{
    
	protected $view_directory_name="v1.accounts.";

	public function accounts() {
 
        return view($this->view_directory_name.'accountsbutton');

    }
}