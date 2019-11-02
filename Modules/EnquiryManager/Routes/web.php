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

Route::prefix('enquirymanager')->group(function() {
    Route::post('/save', 'EnquiryManagerController@saveEnquiry')->name('enquiry.save');
});
Route::prefix('admin')->middleware('auth:admin')->namespace('Admin')->as('admin.')->group(function () {
    Route::resource('enquirymanager','EnquiriesController');

});
