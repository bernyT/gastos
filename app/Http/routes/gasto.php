<?php
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

Route::get('gasto_create', [
    'as' => 'gasto_create',
    'uses' => 'GastoController@create'
]);

Route::get('gasto_instantaneo', [
    'as' => 'gasto_instantaneo',
    'uses' => 'GastoController@create_instantaneo'
]);

Route::patch('gasto_update/{id}', [
    'as' => 'gasto_update',
    'uses' => 'GastoController@update'
]);

Route::put('gasto_store', [
    'as' => 'gasto_store',
    'uses' => 'GastoController@store'
]);
