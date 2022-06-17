<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::resource('/files', 'FileController');

Route::resource('/usuarios', 'UserController');
//Route::resource('/usuarios', 'UserController') -> middleware('auth');

Route::resource('/roles', 'RoleController');

Route::resource('/forms', 'FormController');

Route::resource('/vistausuarios', 'VistaUsuariosController');

Route::get('/registercot', function () {
    return view('registercot');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cotizaciones', function () {
    return view('cotizaciones');
});


Route::get('/profile', function () {
    return view('profile');
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

