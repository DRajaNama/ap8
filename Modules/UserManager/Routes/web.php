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
Auth::routes();


Route::prefix('admin')->middleware('auth:admin')->namespace('Admin')->as('admin.')->group(function () {
    Route::resource('usersmanager','UsersController');
    Route::post('/usersmanager/changestatus/{id}', 'UsersController@changeStatus')->name('users.changeStatus');
    Route::get('/usersmanager/view/{id}', 'UsersController@profile')->name('users.view');
});
