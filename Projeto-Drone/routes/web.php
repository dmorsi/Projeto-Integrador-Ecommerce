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
    //return view('welcome');
    return view('drone');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro', 'cadastroController@exibirformulario');

Route::post('/cadastro', 'cadastroController@gravaformulario');

Route::get('/achausuario/{email}','cadastroController@achausuario');

Route::get('/login', 'loginController@exibirformulario');

Route::post('/login','loginController@versenha');

Route::get('/produto', 'produtoController@exibirformulario');
