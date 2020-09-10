<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show home page.
     *
     * @return \Illuminate\View
     */
    public function index()
    {
        return view('index');
    }
}
