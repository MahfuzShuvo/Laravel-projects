<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AddTeachersController extends Controller
{
    public function add_teachers()
	{
		return view('admin.add_teachers');
	}


	public function save_teachers(Request $reuest)
	{
		$data = array();

		$data['teacher_name'] = $reuest->teacher_name;
		$data['teacher_mobile'] = $reuest->teacher_mobile;
		$data['teacher_email'] = $reuest->teacher_email;
		$data['teacher_address'] = $reuest->teacher_address;
		$data['teacher_department'] = $reuest->teacher_department;
		$data['teacher_designation'] = $reuest->teacher_designation;
		$data['teacher_blood'] = $reuest->teacher_blood;
		$data['teacher_gender'] = $reuest->teacher_gender;
		$data['teacher_nationality'] = $reuest->teacher_nationality;
		$data['teacher_religion'] = $reuest->teacher_religion;
		$data['teacher_salary'] = $reuest->teacher_salary;
		$data['teacher_marital_status'] = $reuest->teacher_marital_status;
		$data['teacher_password'] = md5($reuest->teacher_password);
		$image = $reuest->file('teacher_image');

		if($image) {
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'_'.$ext;
			$upload_path = 'image/';
			$image_url = $upload_path.$image_full_name;
			$success = $image->move($upload_path,$image_full_name);

			if($success) {
				$data['teacher_image'] = $image_url;

				DB::table('teacher_tbl')->insert($data);
				Session::put('exception', 'Teacher added successfully!!');
				return Redirect::to('/add_teachers');
			}
		}
		$data['image'] = $image_url;
			DB::table('teacher_tbl')->insert($data);
			Session::put('exception', 'Teacher added successfully!!');
			return Redirect::to('/add_teachers');

		DB::table('teacher_tbl')->insert($data);
		Session::put('exception', 'Teacher added successfully!!');
		return Redirect::to('/add_teachers');
	}
}
