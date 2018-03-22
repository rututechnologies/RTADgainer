<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\goalaction;
use DB;
use App\campaign_triggers;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
protected $view_directory_name = "v1.campaign.";  
public function create(Request $request)
{
  
  $campaign_triggers = new campaign_triggers;

$campaign_triggers->account_id = Input::get('account_id');
 $campaign_triggers->campaign_id = "abc";
$campaign_triggers->click_id = Input::get('click_id');
$campaign_triggers->click_class = Input::get('click_class');
  
    $campaign_triggers->click_tag= "abc";
      $campaign_triggers->click_name = Input::get('click_name');
     $campaign_triggers->is_form= "0";
    
    $campaign_triggers->URL = "abc";
      $campaign_triggers->goal_count= "1";
      $campaign_triggers->email_send= "1";
        $campaign_triggers->active= "1";

    $save=$campaign_triggers->save();
    //echo($save);
    if($save==1)
    {
      echo"<script type='text/javascript'> alert('Information saved successfully..');</script>"; 
      return view($this->view_directory_name.'micros.goalaction');
    }
  }
}
 
      