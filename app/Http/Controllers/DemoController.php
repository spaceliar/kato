<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
	public function __construct()
	{
		
	}
	public function demo($demopage = 'index',$guard = null)
	{
		
		return view('admin.' . $demopage)->with(['page' => $demopage]);
	}
}
