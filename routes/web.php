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
Auth::loginUsingId(3);

Route::redirect('dashboard', 'dashboard/profile');

Route::prefix('dashboard')->group(function() {
    Route::get('profile', 'ProfileController@show')
        ->name('profile_view');
    //post profile
    Route::post('profile', 'ProfileController@update')
        ->name('profile_update');
});

