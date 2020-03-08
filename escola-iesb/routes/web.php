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
    return view('welcome');
});

Route::get('/curso', 'CursoController@index');

Route::get('/ex1', 'Dever1Controller@ex1');
Route::post('/ex1', 'Dever1Controller@resultado1');

Route::get('/ex2', 'Dever1Controller@ex2');
Route::post('/ex2', 'Dever1Controller@resultado2');
