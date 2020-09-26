<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
     * @param RegisterRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assign('user');

        return redirect()->route('login')->with('successMessage', "You've successfully registered. Now you can login.");
    }
}
