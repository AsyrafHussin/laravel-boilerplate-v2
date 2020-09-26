<?php

use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and "guest" middleware group. Now create something great!
|
*/

Route::name('index')->get('/', [HomeController::class, 'index']);
