<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cseController extends Controller
{
    public function cse()
	{
		$cse_students_info = DB::table('student_tbl')
								->where(['student_department'=>'CSE'])
								->get();

		$manage_students = view('admin.cse')
							->with('cse_students_info', $cse_students_info);

		return view('layout')
				->with('cse', $manage_students);


		//return view('admin.cse');
	}
}
