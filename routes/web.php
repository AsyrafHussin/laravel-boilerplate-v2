<?php

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

Route::get('/', function () {
    return view('index');
});

/*
 * Auth
 */
Route::name('auth:')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::name('login')->get('login', 'AuthController@index');
        Route::name('login:check')->post('login/check', 'AuthController@auth');
    });
    Route::name('logout')->middleware('auth')->get('logout', 'AuthController@logout');
});

// sample route
// Route::name('test:')->prefix('test')->group(function () {
//     Route::name('index')->get('/', 'TestController@index');
//     Route::name('save')->post('save', 'TestController@save');
//     Route::name('edit')->get('edit/{id}', 'TestController@edit');
//     Route::name('update')->post('update/{id}', 'TestController@update');
//     Route::name('delete')->get('delete/{id}', 'TestController@delete');
// });
