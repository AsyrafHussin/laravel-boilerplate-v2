<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register auth routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::name('login')->get('login', [LoginController::class, 'login']);
    Route::name('login.check')->post('login/check', [LoginController::class, 'auth']);
});
Route::middleware('auth')->group(function () {
    Route::name('logout')->get('logout', [LoginController::class, 'logout']);
});
