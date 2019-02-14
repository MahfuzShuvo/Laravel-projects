<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class eeeController extends Controller
{
    public function eee()
	{
		$eee_students_info = DB::table('student_tbl')
								->where(['student_department'=>'EEE'])
								->get();

		$manage_students = view('admin.eee')
							->with('eee_students_info', $eee_students_info);

		return view('layout')
				->with('eee', $manage_students);


		//return view('admin.eee');
	}
}
