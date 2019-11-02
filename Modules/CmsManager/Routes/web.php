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
Route::prefix('admin')->middleware('auth:admin')->namespace('Admin')->as('admin.')->group(function() {
    Route::resources([
        'pages' => 'PagesController',
    ]);
 Route::get('pages/', 'PagesController@index')->name('pages.index');
     Route::get('pages/delete/{id}', 'PagesController@deletePage')->name('pages.delete');
     Route::delete('pages/delete/{id}', 'PagesController@deletePage')->name('pages.delete');
});
