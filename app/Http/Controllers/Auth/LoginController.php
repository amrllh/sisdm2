<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) 
    {
        return $next($request);
        if (Auth::attempt($request->all())) {
            if (Auth::user()->role == 1)  // 1 = ADMIN
            {
              return redirect('/dashboard');
            } 
            else if (Auth::user()->role == 2) // 2 = PENGAJAR
            {
                return redirect('/dashboardpengajar');
            }
            else if (Auth::user()->role == 3) // 3 = PIMPINAN
            {
              return redirect('/dashboardpimpinan');
            } 
            else 
            {
                return redirect()->route('login')->with('error', 'Email address and Password are wrong.');
            }
        }
    }
}
