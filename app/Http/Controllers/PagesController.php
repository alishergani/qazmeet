<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home() {
		return view('pages.home');
	}

	public function info() {
		return view('pages.press.info');
	}

	public function credit() {
		return view('pages.press.credit');
	}

	public function photobank() {
		return view('pages.press.photobank');
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
