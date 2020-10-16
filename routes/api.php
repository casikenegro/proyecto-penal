<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResource('delitos','DelitoController');
Route::get('articulos','ArticuloController@index');
Route::get('articulos/delito/{id}','ArticuloController@show');
Route::apiResource('atenuantes-agravantes','AtenuanteAgravanteController');
Route::post('login','UserController@login');
Route::post('sentencia/{id}','DelitoController@sentencia'); 
//sentencia, recibe atenuante y agravante, que son ambos enteros, o sea contadores de lo seleccionado

