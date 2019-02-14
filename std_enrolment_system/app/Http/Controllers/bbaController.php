<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bbaController extends Controller
{
    public function bba()
	{
		$bba_students_info = DB::table('student_tbl')
								->where(['student_department'=>'BBA'])
								->get();

		$manage_students = view('admin.bba')
							->with('bba_students_info', $bba_students_info);

		return view('layout')
				->with('bba', $manage_students);

		//return view('admin.bba');
	}
}
