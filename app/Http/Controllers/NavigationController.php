<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;
use DB;
use Carbon\Carbon;

class NavigationController extends Controller
{

	protected $view_directory_name="v1.Navigation.";
	
	public function navigation_list(){
		$navigationList = Navigation::all();
		return view($this->view_directory_name.'navigation',compact('navigationList'));
	}

	 public function search_navigation(Request $request){
        $username=trim($request->username);
        $email=trim($request->email);
       
        $navigationList=Navigation::Search($username,$email)->get();

        return view($this->view_directory_name.'micros.navigation_list',compact('navigationList'));
    }

      public function save_navigation(Request $request){
      
            DB::beginTransaction();
            
            try{
            	$navigation = new Navigation();
            	$navigation->link_parent = $request->link_parent;
            	$navigation->link_text = $request->link_text;
                $navigation->link_url = $request->link_url;
                $levels = implode(',', $request->viewable_levels);
                 $navigation->viewable_levels = $levels;
                  $navigation->dashboard_nav = $request->dashboard_nav;
                  $current_time = Carbon::now()->toDateTimeString();
                //$navigation->created_at = $current_time;
             ///  $navigation->updated_at = $current_time;

                $navigation->save();
                 DB::commit();
                  $navigationList=Navigation::all();
                    return view($this->view_directory_name.'micros.navigation_list',compact('navigationList'));
              
            }catch(\Exception $e){
                DB::rollBack();
                dd($e);
            }
       
    }
   
   public function delete_navigation(Request $request){
        try {
            DB::beginTransaction();
            $nav_id = $request->nav;
            if($nav=Navigation::find($nav_id)){
                $nav->delete();
                DB::commit();
                $navigationList = Navigation::all();
                return view($this->view_directory_name.'micros.navigation_list', compact('navigationList'))->render();
                }else{
                    return response('invalid',422);
                }
           
        } catch (Exception $e){
            DB::rollback();
            \Log::info($e);
            return response('Error',500);
        }
    }

    public function edit_navigation(Request $request){
        $nav_id=$request->nav;
        //query select only personal details
        $nav=Navigation::where('id',$nav_id)
            ->first();
       
        $htm=View($this->view_directory_name.'micros.navigation_edit_form',compact('nav'))->render();
        $title='Edit Navigation Link';
        return response(array('content' => $htm,'title'=>$title ));
    }

    public function update_navigation(Request $request){
        $navigation = Navigation::find($request->nav);
      $navigation->link_parent = $request->link_parent;
                $navigation->link_text = $request->link_text;
                $navigation->link_url = $request->link_url;
                $levels = implode(',', $request->viewable_levels);
                 $navigation->viewable_levels = $levels;
                  $navigation->dashboard_nav = $request->dashboard_nav;
        if($navigation->save()){
            $navigationList = Navigation::all();
            return view($this->view_directory_name.'micros.navigation_list', compact('navigationList'))->render();
        }else{
             return response('No navigation found');
         }        

    }
}