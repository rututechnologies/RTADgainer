<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class iconController extends Controller
{
	protected $view_directory_name="v1.icon.";
	
	public function management(){
		return view($this->view_directory_name.'management');
	}
	public function delect(){
		return view($this->view_directory_name.'delect');
	}
	public function buttonform(){
		return view($this->view_directory_name.'lkg');
	}
	public function eidtbutton(){
		return view($this->view_directory_name.'eidtbutton');
	}
	public function passwordbutton(){
		return view($this->view_directory_name.'passwordbutton');
	}
}