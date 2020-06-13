<?php

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('register', 'Auth\RegisterController@register');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');