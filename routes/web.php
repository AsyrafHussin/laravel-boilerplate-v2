<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest
Route::middleware('guest')->group(function () {
    Route::name('index')->get('/', [HomeController::class, 'index']);
});

// Auth
Route::middleware('guest')->group(function () {
    Route::name('login')->get('login', [AuthController::class, 'login']);
    Route::name('login.check')->post('login/check', [AuthController::class, 'auth']);
});
Route::middleware('auth')->group(function () {
    Route::name('logout')->get('logout', [AuthController::class, 'logout']);
});

// sample route
// Route::name('test.')->prefix('test')->group(function () {
//     Route::name('index')->get('/', [TestController::class, 'index']);
//     Route::name('save')->post('save', [TestController::class, 'save']);
//     Route::name('edit')->get('edit/{id}', [TestController::class, 'edit']);
//     Route::name('update')->post('update/{id}', [TestController::class, 'update']);
//     Route::name('delete')->get('delete/{id}', [TestController::class, 'delete']);
// });
