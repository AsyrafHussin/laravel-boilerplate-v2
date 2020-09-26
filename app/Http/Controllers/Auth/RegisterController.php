<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Show register page.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('auth.register');
    }

    /**
     * Handle user registration.
     *
     * @return void
     */
    public function save()
    {
    }
}
