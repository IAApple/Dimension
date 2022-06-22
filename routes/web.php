<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::resource('/files', 'FileController');

Route::resource('/usuarios', 'UserController');
//Route::resource('/usuarios', 'UserController') -> middleware('auth');
Route::resource('/admin', 'AdminController');
Route::resource('/roles', 'RoleController');

Route::resource('/forms', 'FormController');

Route::resource('/vistausuarios', 'VistaUsuariosController');

Route::resource('/vistaforms', 'VistaFormController');

Route::resource('/profile', 'ProfileController');

Route::get('/registercot', function () {
    return view('registercot');
});

Route::get('/pago', function () {
    return view('pago');
});

Route::get('/capacitacion', function () {
    return view('capacitacion');
});
Route::get('/como', function () {
    return view('como');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cotizaciones', function () {
    return view('cotizaciones');
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

