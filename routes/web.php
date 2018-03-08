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

Route::get('/', 'Site\SiteController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('loja', 'Site\LojaController@index');
Route::get('blog', 'Site\BlogController@index');
Route::get('galeria', 'Site\GaleriaController@index');
Route::get('carrinho', 'Site\CarrinhoController@index');





