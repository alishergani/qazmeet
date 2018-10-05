<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home() {
		return view('pages.home');
	}

	public function pressCenter() {
		return view('pages.press-center');
	}

	public function pressCenterInner() {
		return view('pages.press-center_inner');
	}
	
	public function member() {
		return view('pages.member');
	}

	public function programm()
	{
		return view('pages.programm');
	}

}
