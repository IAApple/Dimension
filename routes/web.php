<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController');
//Route::resource('/usuarios', 'UserController') -> middleware('auth');

Route::resource('/roles', 'RoleController');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/imagenC', function () {
    return view('imagenC');
});
Route::get('/proceso', function () {
    return view('proceso');
});

Route::get('/subir', function () {
    return view('subir');
});
Route::get('/DB', function () {
    return view('DBTest');
});

