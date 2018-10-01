<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('pages.home');
	}

	public function pressCenter()
	{
		return view('pages.press-center');
	}

	public function pressCenterInner()
	{
		return view('pages.press-center_inner');
	}
}
