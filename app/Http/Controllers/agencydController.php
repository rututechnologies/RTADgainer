<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class agencydController extends Controller
{
    
	protected $view_directory_name="v1.agencyd.";
	
    public function agencyd() {
 
        return view($this->view_directory_name.'agencyd');

    }
}