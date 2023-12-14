<?php

use Illuminate\Support\Facades\Route;

//Авторизация
Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout')->name('logout');

//Регистрация
Route::get('register', 'RegistrationController@create')->name('register');
Route::post('register', ['App\Http\Controllers\RegistrationController', 'store']);


Route::get('/', function () {
    return view('create');
});

Route::get('/main', function () {
    return view('main');
});
