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

Route::redirect('dashboard', 'dashboard/profile');

Route::prefix('dashboard')->group(function() {
    Route::get('profile', 'ProfileController@show')
        ->name('profile_view');
    //post profile
    Route::post('profile', 'ProfileController@update')
        ->name('profile_update');

    Route::prefix('user/{userId}')->group(function() {
        Route::get('project', 'ProjectController@index')->name('project_list');
        Route::get('project/create', 'ProjectController@create')->name('project_create');
        Route::get('project/{id}/delete', 'ProjectController@delete')->name('project_delete');
        Route::get('project/{id}/edit', 'ProjectController@edit')->name('project_edit');

        //post routes
        Route::post('project', 'ProjectController@store')->name('project_store');
        Route::post('project/{id}/update', 'ProjectController@update')->name('project_update');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
