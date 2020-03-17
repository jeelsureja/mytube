<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admindashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    public function login( Request $request )
    {
        // Validate form data
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);
        // Attempt to authenticate user
        // If successful, redirect to their intended location
        if ( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember) ) {
            return redirect('/admindashboard');
        }
        // Authentication failed, redirect back to the login form
        return redirect()->back()->withInput( $request->only('email', 'remember') );
    }

    public function showLogoutForm()
    {
        return view('auth.admin.logout');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'adminlogin' ));
    }
}
