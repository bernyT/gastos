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

/*
    Cargo las rutas que estan en routes
*/
foreach (glob(__DIR__ . '/routes/*.php') as $route_file)
{
    require $route_file;
}
 

Route::get('/', function () {
    return view('welcome');
});

