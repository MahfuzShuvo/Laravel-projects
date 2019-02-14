<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class lawController extends Controller
{
    public function law()
	{
		$law_students_info = DB::table('student_tbl')
								->where(['student_department'=>'Law & Justice'])
								->get();

		$manage_students = view('admin.law')
							->with('law_students_info', $law_students_info);

		return view('layout')
				->with('law', $manage_students);

		//return view('admin.law');
	}
}
