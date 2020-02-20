<?php

Route::get('/painel/clientes/tests','Painel\ClienteController@tests');
Route::resource('/painel/clientes', 'Painel\ClienteController');


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
