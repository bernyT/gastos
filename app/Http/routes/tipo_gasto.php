<?php
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