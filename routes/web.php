<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

// Auth
Route::middleware('guest')->prefix('login')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('check', [AuthController::class, 'auth'])->name('login.check');
});
Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

// sample route
// Route::name('test.')->prefix('test')->group(function () {
//     Route::get('/', [TestController::class, 'index'])->name('index');
//     Route::post('save', [TestController::class, 'save'])->name('save');
//     Route::get('edit/{id}', [TestController::class, 'edit'])->name('edit');
//     Route::post('update/{id}', [TestController::class, 'update'])->name('update');
//     Route::get('delete/{id}', [TestController::class, 'delete'])->name('delete');
// });
