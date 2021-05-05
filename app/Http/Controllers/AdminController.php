<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();



class AdminController extends Controller
{
    public function admin(Type $var = null)
    {
       return view ('admin_login');
    }

public function showdashboard(Type $var = null)
{
   return view ('admin.dashboard');
}


public function dashboard(Request $request)
{$admin_email=$request->admin_email; 
   $admin_password=md5($request->admin_password);
   $result=DB::table('admin_table')
      ->where('admin_email', $admin_email) 
      ->where('admin_password', $admin_password)
      ->first();
   echo "<pre>";
   print_r($result);
   exit();
   
  
}



}
