<?php

use App\Http\Controllers\AuthController;
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
    Route::name('login')->get('login', [AuthController::class, 'login']);
    Route::name('login.check')->post('login/check', [AuthController::class, 'auth']);
});
Route::middleware('auth')->group(function () {
    Route::name('logout')->get('logout', [AuthController::class, 'logout']);
});
