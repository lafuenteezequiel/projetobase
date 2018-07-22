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

Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::get('produtos/criar', 'ProdutoController@create');
Route::get('produtos/editar/{id}', 'ProdutoController@edit');
Route::post('produtos/store', 'ProdutoController@store');
Route::get('produtos/excluir/{id}', 'ProdutoController@destroy');
