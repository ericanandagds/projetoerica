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
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/logar', 'LoginController@logar')-> name ('logar');
Route::post('/logout', 'LoginController@logout')->name('logout');
Route::post('/cadastro', 'LoginController@cadastro')->name('cadastro');


Route::get('/pizza', 'loginController@home');
Route::post('/contato', 'pizzaController@contato');

Route::get('/pizza', 'pizzaController@salvar');