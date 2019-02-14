<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionController extends Controller
{
    public function tution_fee()
	{
		return view('admin.tution_fee');
	}
}
