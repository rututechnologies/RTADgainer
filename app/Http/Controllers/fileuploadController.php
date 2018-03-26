<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class fileuploadController extends Controller
{
protected $view_directory_name = "v1.agencyd.";  

    public function fileUpload(Request $request)
    {
        
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