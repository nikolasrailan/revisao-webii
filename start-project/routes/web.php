<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/eixo', 'App\Http\Controllers\EixoController@index');
Route::resource('/eixo', 'App\Http\Controllers\EixoController');

//Route::get('/report/{eixo_id}', 'App\Http\Controllers\EixoController@report')->name('eixo.report');
Route::get('/report/eixo/', 'App\Http\Controllers\EixoController@report')->name('report');
Route::get('/graph/eixo/', 'App\Http\Controllers\EixoController@graph')->name('graph');