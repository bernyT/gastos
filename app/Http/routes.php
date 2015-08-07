<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('gasto', [
    'as' => 'gasto',
    'uses' => 'GastoController@index'
]);

Route::get('gasto_edit/{id}', [
    'as' => 'gasto_edit',
    'uses' => 'GastoController@edit'
]);

Route::get('gasto_pagar/{id}', [
    'as' => 'gasto_pagar',
    'uses' => 'GastoController@pagar'
]);

Route::get('deuda', [
    'as' => 'deuda',
    'uses' => 'GastoController@show_deuda'
]);

Route::patch('gasto_update/{id}', [
    'as' => 'gasto_update',
    'uses' => 'GastoController@update'
]);

Route::get('tipo_gasto', [
    'as' => 'tipo_gasto',
    'uses' => 'TipoGastoController@index'
]);

Route::get('tipo_gasto_crear', [
    'as' => 'tipo_gasto_crear',
    'uses' => 'TipoGastoController@create'
]);

Route::put('tipo_gasto_store', [
    'as' => 'tipo_gasto_store',
    'uses' => 'TipoGastoController@store'
]);

Route::get('tipo_gasto_edit/{id}', [
    'as' => 'tipo_gasto_edit',
    'uses' => 'TipoGastoController@edit'
]);

Route::patch('tipo_gasto_update/{id}', [
    'as' => 'tipo_gasto_update',
    'uses' => 'TipoGastoController@update'
]);

Route::delete('tipo_gasto_delete/{id}', [
    'as' => 'tipo_gasto_delete',
    'uses' => 'TipoGastoController@destroy'
]);