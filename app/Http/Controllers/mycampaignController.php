<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class mycampaignController extends Controller
{
    
	protected $view_directory_name="v1.mycampaign.";

	public function MyCampaign() {
 
        return view($this->view_directory_name.'mycampaignbutton');

    }
    public function goalaction() {
 
        return view($this->view_directory_name.'goalaction');

    }
   


}