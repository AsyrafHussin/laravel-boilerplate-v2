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

    /**
     * Show login page.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param Request  $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // redirect dashboard
        } else {
            return back()->with([
                'errorMessage' => 'Invalid email or password',
            ]);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login')->with([
            'successMessage' => 'Successfully logout',
        ]);
    }
}
