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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/transferencia-registrada', function () {
    return view('transferencia-registrada');
});

Route::get('/consultar', function () {
    return view('consultar-transferencia');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('weuirs', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('adswqrty', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('mostrartransferencia', 'MostrarTransferenciaController');

Route::resource('admin', 'TransferenciasController', ['only' => [
    'index'
]]);

Route::resource('transferencias', 'TransferenciasController', ['only' => [
    'edit', 'update', 'destroy'
]]);

Route::get('/home', 'HomeController@index')->name('home');
