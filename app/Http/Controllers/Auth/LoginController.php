<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
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
     * @param LoginRequest  $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function auth(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $role = auth()->user()->getRoles()[0];

            if ($role) {
                return redirect()->route($role.'.home');
            }

            return back()->with('errorMessage', 'Error. Cannot Login');
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
