<?php

namespace Lavel\Http\Controllers;

use Illuminate\Http\Request;

class Control extends Controller

{
	public function index()
	{
		return view('index');
	}
}
