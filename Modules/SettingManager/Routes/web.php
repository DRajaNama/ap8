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

    Route::prefix('admin')->middleware('auth:admin')->namespace('Admin')->group(function () {
        Route::get('settings/logos', 'SettingManagerController@getlogos')->name('settingtheme');
        Route::delete('settings/themedelete/{id}', 'SettingManagerController@themedelete')->name('setting.deletelogo');
        Route::post('settings/update-theme-images', 'SettingManagerController@storeLogos')->name('setting.logo.update');
        Route::post('settings/store-image-temp', 'SettingManagerController@storeTempImage');
        Route::get('settings/smtp', 'SettingManagerController@getSmtpSetting')->name('setting.smtp');
        Route::post('settings/save-smtp-settings', 'SettingManagerController@updateSmtpSetting')->name('setting.smtp.update');
        Route::get('settings/general', 'SettingManagerController@getGeneralSetting')->name('setting.general');
        Route::get('settings/general/add', 'SettingManagerController@addGeneralSetting')->name('setting.general.add');
        Route::post('settings/general/add', 'SettingManagerController@storeGeneralSetting')->name('setting.general.store');
        Route::get('settings/general/view/{id}', 'SettingManagerController@showGeneralSetting')->name('setting.general.view');
        Route::get('settings/general/edit/{id}', 'SettingManagerController@editGeneralSetting')->name('setting.general.edit');
        Route::patch('settings/general/{id}/edit', 'SettingManagerController@updateGeneralSetting')->name('setting.general.update');
    });
