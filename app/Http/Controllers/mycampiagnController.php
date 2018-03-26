<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


class mycampiagnController extends Controller
{
	protected $view_directory_name="v1.mycampiagn.";
	
	public function mycampiagn(){

		$zyk = DB::table('ppc_historical_data')->select('campaign_name', 'clicks', 'calls','conversions','goals','emails','cpa')->get();

    

        return view($this->view_directory_name.'mycampiagn',['zyk' => $zyk]);
		return view($this->view_directory_name.'mycampiagn');
	}
	
}
