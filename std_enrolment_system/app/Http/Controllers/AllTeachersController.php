<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AllTeachersController extends Controller
{
    public function all_teachers()
	{
		//return view('admin.all_teachers');

		$all_teachers_info = DB::table('teacher_tbl')
								->get();

		$manage_teachers = view('admin.all_teachers')
							->with('all_teachers_info', $all_teachers_info);

		return view('layout')
				->with('all_teachers', $manage_teachers);


	}

	// Delete Teacher...........................................
	public function delete_teacher($student_id)
	{
		DB::table('teacher_tbl')
				->where('teacher_id', $teacher_id)
				->delete();

		return  Redirect::to('/all_teachers');

	}


	// View Teacher.............................................
	public function view_teacher($teacher_id)
	{
		$view_teacher_info = DB::table('teacher_tbl')
					->select('*')
					->where('teacher_id', $teacher_id)
					->first();


		$manage_teacher_view = view('admin.view_teacher')
							->with('view_teacher_info', $view_teacher_info);

		return view('layout')
				->with('view_teacher', $manage_teacher_view);
		//return view('admin.view_teacher');
	}



	// Edit Student.............................................
	public function edit_teacher($teacher_id)
	{
		$view_teacher_info = DB::table('teacher_tbl')
					->select('*')
					->where('teacher_id', $teacher_id)
					->first();


		$manage_teacher_view = view('admin.edit_teacher')
							->with('view_teacher_info', $view_teacher_info);

		return view('layout')
				->with('edit_teacher', $manage_teacher_view);
		//return view('admin.edit_teacher');
	}


	// Update Student...........................................
	public function update_teacher(Request $request, $teacher_id)
	{
		$data = array();

		$data['teacher_name'] = $request->teacher_name;
		$data['teacher_mobile'] = $request->teacher_mobile;
		$data['teacher_email'] = $request->teacher_email;
		$data['teacher_address'] = $request->teacher_address;
		$data['teacher_designation'] = $request->teacher_designation;
		$data['teacher_salary'] = $request->teacher_salary;
		$data['teacher_password'] = $request->teacher_password;


		DB::table('teacher_tbl')
				->where('teacher_id', $teacher_id)
				->update($data);

		Session::put('exception', 'Teacher updated successfully!!');
		return Redirect::to('/all_teachers');
	}
}
