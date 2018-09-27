<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $check = $request->only('email','password');
        // $user = DB::table('users')->where('email',$email)->first();
        if(Auth::attempt($check)){
            return redirect('admin');
        }
        else{
            return redirect('dangnhap');
        }
       
    }
    public function getLogout(){
        Auth::logout();

        return redirect('dangnhap');
    }
}
