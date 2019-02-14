<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class textileController extends Controller
{
    public function textile()
	{
		$textile_students_info = DB::table('student_tbl')
								->where(['student_department'=>'Textile Engineering'])
								->get();

		$manage_students = view('admin.textile')
							->with('textile_students_info', $textile_students_info);

		return view('layout')
				->with('textile', $manage_students);


		//return view('admin.textile');
	}
}
