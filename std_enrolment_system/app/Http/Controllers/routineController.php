<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routineController extends Controller
{
    public function routine()
	{
		return view('admin.routine');
	}
}
