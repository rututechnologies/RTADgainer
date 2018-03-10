<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class CampaigntoolsController extends Controller
{
	protected $view_directory_name="v1.Campaigntools.";
	
	public function Campaigntools(){
		return view($this->view_directory_name.'Campaigntools');
	}
	
}