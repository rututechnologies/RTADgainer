<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;



class DashboardController extends Controller {

    protected $view_directory_name="v1.Dashboard.";
    public function index() {
 
        return view($this->view_directory_name.'dashboard');

    }
}