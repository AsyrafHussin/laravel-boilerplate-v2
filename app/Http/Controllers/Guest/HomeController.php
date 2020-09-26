<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show guest home page.
     *
     * @return \Illuminate\View
     */
    public function index()
    {
        return view('guest.index');
    }
}
