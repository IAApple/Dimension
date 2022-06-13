<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController');
//Route::resource('/usuarios', 'UserController') -> middleware('auth');

Route::resource('/roles', 'RoleController');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/clausulas', function () {
    return view('clausulas');
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

Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});