<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('App\Http\Controllers\Api')->group(function(){
    Route::get('/', 'ProdutoController@index');
    Route::get('/home', 'ProdutoController@index');
    Route::get('/{id}', 'ProdutoController@show');
    Route::put('/{id}', 'ProdutoController@update');
});
