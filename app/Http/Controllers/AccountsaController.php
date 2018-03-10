<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class AccountsaController extends Controller
{
	protected $view_directory_name="v1.Accountsa.";
	
	public function Accountsa(){
		return view($this->view_directory_name.'Accountsa');
	}
}