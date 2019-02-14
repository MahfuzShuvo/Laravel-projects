<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{
	public function admin_dashboard()
	{
		return view('admin.admin_dashboard');
	}
    //View profile...
    public function admin_profile()
    {
        return view('admin.admin_profile');
    }
    //Settings...
    public function admin_settings()
    {
        return view('admin.admin_settings');
    }
    //Logout...
    public function logout()
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return Redirect::to('/admin');
    }

    //Dashboard...
    public function login_dashboard(Request $request)
    {
    	//return view('admin.admin_dashboard');
    	$email = $request->admin_email;
    	$password = md5($request->admin_password);
    	$result = DB::table('admin_tbl')
    	->where('admin_email', $email)
    	->where('admin_password', $password)
    	->first();

    	//echo "</pre>";
    	//print_r($result);

    	if($result){
    		session::put('admin_email', $result->admin_email);
    		session::put('admin_id', $result->admin_id);
    		return Redirect::to('/admin_dashboard');
    	}
    	else{
    		session::put('exception', 'Invalid email or password');
    		return Redirect::to('/admin');
    	}
    }
}
