<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();


class AllstudentsController extends Controller
{
    public function all_students()
	{
		//return view('admin.all_students');

		$all_students_info = DB::table('student_tbl')
								->get();

		$manage_students = view('admin.all_students')
							->with('all_students_info', $all_students_info);

		return view('layout')
				->with('all_students', $manage_students);


	}

	// Delete Student...........................................
	public function delete_student($student_id)
	{
		DB::table('student_tbl')
				->where('student_id', $student_id)
				->delete();

		return  Redirect::to('/all_students');

	}


	// View Student.............................................
	public function view_student($student_id)
	{
		$view_student_info = DB::table('student_tbl')
					->select('*')
					->where('student_id', $student_id)
					->first();


		$manage_student_view = view('admin.view_student')
							->with('view_student_info', $view_student_info);

		return view('layout')
				->with('view_student', $manage_student_view);
		//return view('admin.view_student');
	}



	// Edit Student.............................................
	public function edit_student($student_id)
	{
		$view_student_info = DB::table('student_tbl')
					->select('*')
					->where('student_id', $student_id)
					->first();


		$manage_student_view = view('admin.edit_student')
							->with('view_student_info', $view_student_info);

		return view('layout')
				->with('edit_student', $manage_student_view);
		//return view('admin.edit_student');
	}


	// Update Student...........................................
	public function update_student(Request $request, $student_id)
	{
		$data = array();

		$data['student_name'] = $request->student_name;
		$data['student_fathersname'] = $request->student_fathersname;
		$data['student_mothersname'] = $request->student_mothersname;
		$data['student_mobile'] = $request->student_mobile;
		$data['student_email'] = $request->student_email;
		$data['student_address'] = $request->student_address;
		$data['student_roll'] = $request->student_roll;
		$data['student_department'] = $request->student_department;
		$data['student_password'] = $request->student_password;


		DB::table('student_tbl')
				->where('student_id', $student_id)
				->update($data);

		Session::put('exception', 'Student updated successfully!!');
		return Redirect::to('/all_students');
	}
}
