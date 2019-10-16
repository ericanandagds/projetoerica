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

Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login');
Route::post('/logar', 'LoginController@logar');
Route::get('/logout', 'LoginController@logout');
Route::get('/cadastro', 'LoginController@cadastro')->name('cadastro');

Route::view('cadastro', 'cadastro');

Route::group(['prefix' => 'logar'], function () {
    Route::get('/', 'pizzaControler@home');
    Route::get('/pizza', 'pizzaControler@home');
    Route::get('/contato', 'pizzaControler@contato');
});
