<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign;
use DB;

class CampaignController extends Controller
{
    
	protected $view_directory_name="v1.Campaign.";
	
    public function index() {
 
        return view($this->view_directory_name.'campaign');

    }
    public function check_phone_number() {
       
        return view($this->view_directory_name.'micros.CheckPhoneNumber');
    }
    public function goal_action() {
       
        return view($this->view_directory_name.'micros.goalaction');
    }
    public function new_compaign() {
       
        return view($this->view_directory_name.'micros.newcampaign');
    }
    public function view_compaign_Details(Request $request) 
    {
    
        $account_id=$request->campaign_account; // is it from post request? yes
       // var_dump($account_id);
        $tdata = DB::table('campaigns')->select('campaign_name','campaign_budget','avgClicks', 'default_number','ppc_markup','avgCalls','goalsThresh','emailsThresh','avgConversions')->where('account_id','=',$account_id )->get();
        return view($this->view_directory_name.'micros.viewcampaign',['tdata' => $tdata]);   
        return view($this->view_directory_name.'micros.viewcampaign');
    }
    /*(public function all_Tacking_data(Request $request) 
    {
        $account_id=$request->campaign_account;
        $tdata = DB::table('campaigns')->select('campaign_name','ppc_markup','avgCalls','goalsThresh','emailsThresh','avgConversions')->where('account_id','=',$account_id )->get();
        return view($this->view_directory_name.'micros.viewcampaign',['tdata' => $tdata]);

    }*/

        

     public function new_Campaign_General(Request $request)
    {
         try
         {
                   $newcampaigns = new Campaign();
                    
                    $newcampaigns->campaign_id ="";
                    $newcampaigns->account_id =$request->account;
                    $newcampaigns->yahoojpn_aid =$request->yahoojpn_aid;
                    $newcampaigns->yahoojpn_cid =$request->yahoojpn_cid;
                    $newcampaigns->adwords_campaign_id =$request->adwords_campaign_id;
                    $newcampaigns->bing_campaign_id =$request->bing_campaign_id;
                    $newcampaigns->sp_campaign_id =$request->sp_campaign_id;
                    $newcampaigns->dblclick_name_calls =$request->dblclick_name_calls;
                $newcampaigns->dblclick_name_goals =$request->dblclick_name_goals;
                $newcampaigns->dblclick_agency_id=$request->dblclick_agency_id;
                $newcampaigns->dblclick_advertiser_id =$request->dblclick_advertiser_id;
                $newcampaigns->dblclick_action ="";
                $newcampaigns->ppc_markup =$request->ppc_markup;
                $newcampaigns->chat_campaign =$request->chat_campaign;
                $newcampaigns->save_chat =$request->save_chat;
                $newcampaigns->campaign_name =$request->campaign_name;
                $newcampaigns->account_mgt =$request->account;
                $newcampaigns->campaign_cycle =$request->campaign_cycle;
                $newcampaigns->campaign_budget =$request->campaign_budget;
                $newcampaigns->campaign_currency =$request->campaign_currency;
                $newcampaigns->campaign_mgr =$request->campaign_mgr;
                $newcampaigns->account_mgr=$request->account_mgr;
                //$newcampaigns->campaign_per =""; 
                $newcampaigns->correlation_time=$request->correlation_time;
                $newcampaigns->timeZone =$request->timeZone;
                 $newcampaigns->show_number = $request->show_number;
                $newcampaigns->numbers_to_replace=$request->numbers_to_replace;
                $newcampaigns->transfer_to_number=$request->transfer_to_number;
                $newcampaigns->vanity_to_replace ="";
                 $newcampaigns->tracking_type=$request->tracking_type;
                 $newcampaigns->phone_format=$request->phone_format;
                 $newcampaigns->default_number=$request->default_number;
                 $newcampaigns->default_phone_format=$request->default_phone_format;
                 //$newcampaigns->conversion_flag  ="";
                 $newcampaigns->greet_voice=$request->greet_voice;
                 $newcampaigns->language=$request->language;
                 $newcampaigns->greeting=$request->greeting;
                 $newcampaigns->prompt=$request->prompt;
                 //$newcampaigns->record_calls="";
                 //$newcampaigns->call_notification="";
                foreach($request->input("call_notification")as $call_notification)
                {
                   $newcampaigns->call_notification=$call_notification; 
                }
                 $newcampaigns->multi_phone=$request->multi_phone;
                 $newcampaigns->email_notify=$request->email_notify;
                 $newcampaigns->email_notify_user=$request->email_notify_user;
                 //$newcampaigns->default_notify="";
                 $newcampaigns->goal_notify =$request->goal_code;
                $newcampaigns->goal_notify_email ="";
                 $newcampaigns->email_to_notify=$request->email_to_notify;
                 $newcampaigns->email_to_notify_user=$request->email_to_notify_user;
                 //$newcampaigns->notified  ="";
                 //$newcampaigns->notified_date="";
                 //$newcampaigns->text_notify ="";
                 $newcampaigns->cell_provider=$request->cell_provider;
                  $newcampaigns->cell_to_text=$request->cell_to_text;
                 $newcampaigns->postback_page=$request->postback_page;
                 $newcampaigns->post_back_type=$request->post_back_type;
                 foreach($request->input("postback_fields")as $postback_fields)
                {
                   $newcampaigns->postback_fields=$postback_fields; 
                }
                 $newcampaigns->tag_words=$request->tag_words;
                 $newcampaigns->blacklist_words=$request->blacklist_words;

                 $newcampaigns->blacklist_ips=$request->blacklist_ips;
                 $newcampaigns->heatmap_code ="11";
                 $newcampaigns->fingerprint_code ="11";
                 $newcampaigns->tracking_code ="11";
                 $newcampaigns->email_code="1111"; 
                 $newcampaigns->multi_code="11";   
                 $newcampaigns->source_code="11";  
                 $newcampaigns->source_numbers ="12";  
                 $newcampaigns->source_multi="12";  
                 $newcampaigns->omit_google_ip="1";
                 $newcampaigns->email_tracking = $request->email_tracking; 
                 $newcampaigns->email_tracking_email ="qasd `"; 
                 $newcampaigns->email_tracking_post_page ="ddD`"; 
                 $newcampaigns->active ="SLDL"; 
                 $newcampaigns->number_serve_active=$request->number_serve_active;
                 $newcampaigns->number_serve_schedule="adD"; 
                 //$newcampaigns->single_to_many_numbers="SDFA`"; 
                 $newcampaigns->country_tracking =$request->country_tracking;
                    /*$newcampaigns->tracking_campaign_type =$request->campaign_type;tracking_campaign_type*/
                 $newcampaigns->tracking_campaign_type=$request->tracking_campaign_type;
                 //$newcampaigns->allow_leads="KDWK"; 
                 $newcampaigns->location_tracking=$request->location_tracking;
                $newcampaigns->location_device =$request->location_device;             
//               $newcampaigns->device_tracking  ="KDM"; 
                $newcampaigns->date_created="MMW"; 
                $newcampaigns->goal1=$request->goal_page1;
                $newcampaigns->goal2=$request->goal_page2;
                $newcampaigns->goal3=$request->goal_page3;
                $newcampaigns->goal4=$request->goal_page4;
                $newcampaigns->goal5=$request->goal_page5;
                $newcampaigns->goal6=$request->goal_page6;
                $newcampaigns->goal7=$request->goal_page7;
                $newcampaigns->goal8=$request->goal_page8;
                $newcampaigns->goal9=$request->goal_page9;
                $newcampaigns->goal10=$request->goal_page10;

                $newcampaigns->goal1Memo =$request->goal_page1_memo;
                $newcampaigns->goal2Memo=$request->goal_page2_memo;
                $newcampaigns->goal3Memo=$request->goal_page3_memo;
                $newcampaigns->goal4Memo=$request->goal_page4_memo;
                $newcampaigns->goal5Memo=$request->goal_page5_memo;
                $newcampaigns->goal6Memo=$request->goal_page6_memo;
                $newcampaigns->goal7Memo=$request->goal_page7_memo;
                $newcampaigns->goal8Memo=$request->goal_page8_memo;
                $newcampaigns->goal9Memo=$request->goal_page9_memo;
                $newcampaigns->goal10Memo=$request->goal_page10_memo;

                $newcampaigns->goal1_inc="1"; 
                $newcampaigns->goal2_inc="1"; 
                $newcampaigns->goal3_inc="1"; 
                $newcampaigns->goal4_inc="1"; 
                $newcampaigns->goal5_inc="1"; 
                $newcampaigns->goal6_inc="1"; 
                $newcampaigns->goal7_inc="1"; 
                $newcampaigns->goal8_inc="1"; 
                $newcampaigns->goal9_inc="1"; 
                $newcampaigns->goal10_inc="1"; 

                $newcampaigns->kakao_id =""; 
                $newcampaigns->line_id=""; 
                $newcampaigns->viber_id="";   
                $newcampaigns->whatsapp_id  ="";       
                $newcampaigns->wechat_id=""; 
                $newcampaigns->avgCalls=$request->avgCalls;
                $newcampaigns->avgClicks=$request->avgClicks;
                $newcampaigns->avgEmails=$request->avgEmails;
                $newcampaigns->avgGoalPgs=$request->avgGoalPgs;
                $newcampaigns->avgConversions=$request->avgConversions;
                $newcampaigns->goalsThresh=$request->goalsThresh;
                $newcampaigns->callsThresh=$request->callsThresh;
                $newcampaigns->emailsThresh=$request->emailsThresh;
                $newcampaigns->clicksThresh=$request->clicksThresh;
                $newcampaigns->convsThresh=$request->convsThresh;
                $newcampaigns->camp_custom1=$request->camp_custom1;
                 $newcampaigns->camp_custom2=$request->camp_custom2;
                 $newcampaigns->camp_custom3=$request->camp_custom3;
                 $newcampaigns->camp_custom4=$request->camp_custom4;
                 $newcampaigns->camp_custom5=$request->camp_custom5;
                 $newcampaigns->camp_custom6=$request->camp_custom6;
                 $newcampaigns->camp_custom7=$request->camp_custom7;
                 $newcampaigns->camp_custom8=$request->camp_custom8;
                 $newcampaigns->camp_custom9=$request->camp_custom9;
                 $newcampaigns->camp_custom10=$request->camp_custom10;
                $newcampaigns->TWILIO_XML=""; 
                 $save = $newcampaigns->save();
                // echo($save);
                 if($save=='1')
                 {
                    echo "<script type='text/javascript'>alert('Campaingn Details Saved Successfully...')</script>";

                    return view( $this->view_directory_name .'micros.newcampaign' );
                 }
                /* $newcampaigns->=$request->call_code;*/
               
        
            DB::commit();


    }
     catch(\PDOException $e)
     {
          DB::rollBack();
     }       
 }
    

    

}

