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
Route::post('/logout', 'LoginController@logout');
Route::post('/cadastro', 'LoginController@cadastro')->name('cadastro');


Route::get('/pizza', 'pizzaController@home');
Route::get('/contato', 'pizzaController@contato');

// Route::get('/pizza', 'pizzaController@salvar');