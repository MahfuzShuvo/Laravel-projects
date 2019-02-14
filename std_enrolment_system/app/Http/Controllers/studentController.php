<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class studentController extends Controller
{
    public function student_dashboard()
	{
		return view('student.student_dashboard');
	}
    //View profile...
    // public function student_profile()
    // {
    //     return view('student.student_profile');
    // }
    // //Settings...
    // public function student_settings()
    // {
    //     return view('student.student_settings');
    // }
    // //Logout...
    // public function logout()
    // {
    //     Session::put('student_name', null);
    //     Session::put('student_id', null);

    //     return Redirect::to('/');
    // }

    //Dashboard...
    public function login_dashboard(Request $request)
    {
    	//return view('admin.admin_dashboard');
    	$email = $request->student_email;
    	$password = md5($request->student_password);
    	$result = DB::table('student_tbl')
				    	->where('student_email', $email)
				    	->where('student_password', $password)
				    	->first();

    	//echo "</pre>";
    	//print_r($result);

    	if($result){
    		DB::table('student_tbl')
    				->get();
    		
    		session::put('student_id', $result->student_id);
    		session::put('student_name', $result->student_name);
    		session::put('student_roll', $result->student_roll);
    		session::put('student_department', $result->student_department);
    		session::put('student_image', $result->student_image);
    		
    		return Redirect::to('/student_dashboard');
    	}
    	else{
    		session::put('exception', 'Invalid email or password');
    		return Redirect::to('/');
    	}
    }



   
}
