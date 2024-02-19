<?php

use Illuminate\Support\Facades\Route;

Route::namespace('User')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::controller('LoginController')->group(function () {
            Route::post('/login', 'LoginController@loginApi')->name('login');
        });
        Route::prefix('register')->group(function () {
            Route::post('/', 'RegisterController@registerApi')->name('register');
        });
    });
    Route::post('/request-otp/{type}', 'AuthorizationController@sendVerifyCode')->name('request.otp')->middleware('auth:api');
});
