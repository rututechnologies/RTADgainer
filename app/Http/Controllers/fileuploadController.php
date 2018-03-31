<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\agencyd;
use DB;
use App\ag_files;
use Illuminate\Support\Facades\Input;


class fileuploadController extends Controller
{
protected $view_directory_name = "v1.agencyd.";  

    public function fileUpload(Request $request)
    {
      $ag_files = new ag_files;
      $ag_files->id ="";
      $ag_files->name = "abc";
      $ag_files->file_name = Input::get('logo');
      $ag_files->notes = "abc";
      $ag_files->dept = Input::get('dept');
      $ag_files->uploaded_by = Input::get('uploaded_by');
      $ag_files->uploaded_date = Input::get('uploaded_date');
      echo "<script type='text/javascript'>alert('Update Logo');</script>";
       return view($this->view_directory_name.'agencyd');
    }
    public function colorUpload(Request $request)
    {
       echo "<script type='text/javascript'>alert('Update Color');</script>";
        return view($this->view_directory_name.'agencyd'); 
    }
 public function subdomain(Request $request)
    {
       echo "<script type='text/javascript'>alert('Subdomain Updated');</script>";
        return view($this->view_directory_name.'agencyd'); 
    }
   public function slogan(Request $request)
    {
       echo "<script type='text/javascript'>alert('slogan Updated');</script>";
        return view($this->view_directory_name.'agencyd'); 
    } 
}