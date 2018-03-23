<?php
namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\campaign_triggers;
//use DB;
class Test1Controller extends Controller
{
	protected $view_directory_name="v1.Campaign.";	
		public function testfunction(){
			return view($this->view_directory_name.'micros.viewcampaign');
	}
}