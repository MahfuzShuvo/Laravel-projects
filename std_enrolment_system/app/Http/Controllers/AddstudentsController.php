<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AddstudentsController extends Controller
{
    public function add_students()
	{
		return view('admin.add_students');
	}


	public function save_students(Request $reuest)
	{
		$data = array();

		$data['student_name'] = $reuest->student_name;
		$data['student_fathersname'] = $reuest->student_fathersname;
		$data['student_mothersname'] = $reuest->student_mothersname;
		$data['student_mobile'] = $reuest->student_mobile;
		$data['student_email'] = $reuest->student_email;
		$data['student_address'] = $reuest->student_address;
		$data['student_department'] = $reuest->student_department;
		$data['student_roll'] = $reuest->student_roll;
		$data['student_blood'] = $reuest->student_blood;
		$data['student_gender'] = $reuest->student_gender;
		$data['student_nationality'] = $reuest->student_nationality;
		$data['student_religion'] = $reuest->student_religion;
		$data['student_birthyear'] = $reuest->student_birthyear;
		$data['student_admissionyear'] = $reuest->student_admissionyear;
		$data['student_password'] = md5($reuest->student_password);
		$image = $reuest->file('student_image');

		if($image) {
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'_'.$ext;
			$upload_path = 'image/';
			$image_url = $upload_path.$image_full_name;
			$success = $image->move($upload_path,$image_full_name);

			if($success) {
				$data['student_image'] = $image_url;

				DB::table('student_tbl')->insert($data);
				Session::put('exception', 'Student added successfully!!');
				return Redirect::to('/add_students');
			}
		}
		$data['image'] = $image_url;
			DB::table('student_tbl')->insert($data);
			Session::put('exception', 'Student added successfully!!');
			return Redirect::to('/add_students');

		DB::table('student_tbl')->insert($data);
		Session::put('exception', 'Student added successfully!!');
		return Redirect::to('/add_students');
	}
}
