<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register/sendOtp', 'RegisterController@send_otp');
Route::post('/register/submitOtp', 'RegisterController@submit_otp');
Route::post('/register', 'RegisterController@register');
Route::post('/register/kyc', 'RegisterController@register_kyc');