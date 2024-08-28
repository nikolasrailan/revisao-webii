<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EixoController;

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

Route::resource('/eixo', 'App\Http\Controllers\EixoController')->middleware(['auth']);
Route::get('/report/eixo/', 'App\Http\Controllers\EixoController@report')->name('report');
Route::get('/graph/eixo/', 'App\Http\Controllers\EixoController@graph')->name('graph');

Route::resource('/curso', 'App\Http\Controllers\CursoController')->middleware(['auth']);

Route::resource('/disciplina', 'App\Http\Controllers\DisciplinaController')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
