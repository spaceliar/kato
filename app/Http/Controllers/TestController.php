<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
   public function getCheck($guard = null){
   	 $check = Auth::guard($guard)->check();
    return var_dump($check);
   }
}
