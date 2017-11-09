<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Home\HomeController@index');


Route::get('/painel', 'Painel\PainelController@index');





Route::resource('/painel/parceiro',        'Painel\ParceiroController');
Route::resource('/painel/parceiro/store',  'Painel\ParceiroController');
Route::resource('/painel/parceiro/update', 'Painel\ParceiroController');


Route::resource('/painel/conta',        'Painel\ContaController');
Route::resource('/painel/conta/store',  'Painel\ContaController');
Route::resource('/painel/conta/update', 'Painel\ContaController');




Route::resource('/painel/despesareceita',        'Painel\DespesaReceitaController');
Route::resource('/painel/despesareceita/store',  'Painel\DespesaReceitaController');
Route::resource('/painel/despesareceita/update', 'Painel\DespesaReceitaController');



Route::resource('/painel/lancamento',        'Painel\LancamentoController');
Route::resource('/painel/lancamento/store',  'Painel\LancamentoController');
Route::resource('/painel/lancamento/update', 'Painel\LancamentoController');



Route::resource('/painel/importar', 'Painel\ImportarController@index');



Auth::routes();
