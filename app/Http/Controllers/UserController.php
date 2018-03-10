<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Account;
use Auth;

class UserController extends Controller
{
	protected $view_directory_name="v1.Users.";
	
	public function usersList(){
		$usersList = User::all();
        $accountList = Account::pluck('accountName','id');
        $userAccount = Auth::user();
		return view($this->view_directory_name.'user',compact('usersList','accountList','userAccount'));
	}

	 public function search_user(Request $request){
        $username=trim($request->username);
        $email=trim($request->email);
       
        $usersList=User::Search($username,$email)->get();

        return view($this->view_directory_name.'micros.users_list',compact('usersList'));
    }

      public function save_user(Request $request){
      
            DB::beginTransaction();
            $file_upload_flag=0;
            $destinationPath = "../uploads/users";
            try{
            	$user = new User();
                $user->account_id = $request->account;
            	$user->username = $request->username;
            	$user->email = $request->email;
                $user->password = $request->password;
                $user->phone_number = $request->phone;
                $user->chat_user = $request->chatUser;
                $user->dept = $request->chat_user_dept;
                $user->level = $request->level;
                 $user->save();
                 DB::commit();
                  $usersList=User::all();
                    return view($this->view_directory_name.'micros.users_list',compact('usersList'));
                // if($user->save()){
                //     //save items
                  
                //     $destinationPath='public_images/images/Users/'.$user->id;
                //     if ($request->hasFile('user_image')) {
                //         $fileExt = $request->file('user_image')->getClientOriginalExtension();
                //         $fileName = $destinationPath.'/user_image.'.$fileExt;
                //         $request->file('user_image')->move($destinationPath, $fileName);
                //         $this->save_user_documents('user_image',$user->id,$fileName);
                //     }
                    
                //     DB::commit();
                //     $usersList=$this->users_available($user->id);
                //     return view($this->view_directory_name.'micros.users_list',compact('usersList'));
                // }else {
                //     DB::rollBack();
                // }
            }catch(\Exception $e){
                DB::rollBack();
                dd($e);
            }
       
    }
   
   public function delete_user(Request $request){
        try {
            DB::beginTransaction();
            $user_id = $request->user;
            if($user=User::find($user_id)){
                $user->delete();
                DB::commit();
                $usersList = User::all();
                return view($this->view_directory_name.'micros.users_list', compact('usersList'))->render();
                }else{
                    return response('invalid',422);
                }
           
        } catch (Exception $e){
            DB::rollback();
            \Log::info($e);
            return response('Error',500);
        }
    }

    public function edit_user(Request $request){
        $user_id=$request->user;
        //query select only personal details
        $user=User::where('id',$user_id)
            ->first();
               $accountList = Account::pluck('accountName','id');

        $htm=View($this->view_directory_name.'micros.user_edit_form',compact('user','accountList'))->render();
        $title='Edit User';
        return response(array('content' => $htm,'title'=>$title ));
    }

    public function update_user(Request $request){
        $user = User::find($request->user);
         $user->account_id = $request->account;
                $user->username = $request->username;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->phone_number = $request->phone;
                $user->chat_user = $request->chatUser;
                $user->dept = $request->chat_user_dept;
                $user->level = $request->level;
        if($user->save()){
            $usersList = User::all();
            return view($this->view_directory_name.'micros.users_list', compact('usersList'))->render();
        }else{
             return response('No user found');
         }        

    }

}
