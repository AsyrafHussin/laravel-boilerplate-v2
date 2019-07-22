<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // redirect dashboard
        } else {
            return redirect()->back()->with([
                 'errorMessage' => 'Invalid email or password',
             ]);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login')->with([
            'successMessage' => 'Successfully logout',
        ]);
    }
}
