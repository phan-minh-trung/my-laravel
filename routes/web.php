<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notification/send/mail', 'NotificationController@sendMail')->name('notification.mail');

Route::get('notification/send/db', 'NotificationController@sendDb')->name('notification.db');

Route::get('notification/send/sms', 'NotificationController@sendSms')->name('notification.sms');
