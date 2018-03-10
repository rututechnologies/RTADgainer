<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ChatController extends Controller
{
	protected $view_directory_name="v1.Chat.";
	
	public function chatlist(){
		return view($this->view_directory_name.'chat');
	}
	public function pregenmsg(){
		return view($this->view_directory_name.'pregenmsg');
	}
	public function webchat(){
		return view($this->view_directory_name.'webchat');
	}
	public function message(){
		return view($this->view_directory_name.'message');
	}
	
	
	
	
	
}

?>
