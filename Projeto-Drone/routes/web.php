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

Route::get('/', 'produtoController@exibirdrone');
    //return view('welcome');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro', 'cadastroController@exibirformulario');

Route::post('/cadastro', 'cadastroController@gravaformulario');

Route::get('/achausuario/{email}','cadastroController@achausuario');

Route::get('/exibecep/{CEP}', 'cadastroController@exibecep');

Route::get('/login', 'loginController@exibirformulario');

Route::post('/login','loginController@versenha');

Route::get('/produto', 'produtoController@exibirformulario');

Route::get('/cadcategorias', 'produtoController@exibircadcategorias');

Route::post('/cadcategorias', 'produtoController@gravacadcategorias');

Route::get('/exibecadtexto/{descricao}', 'produtoController@exibecadtexto');
