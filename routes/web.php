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
    return view('index');
});

Route::get('/iniciar', [App\Http\Controllers\controllerNegrali::class, 'index']) ->name('iniciar');
Route::post('/dadosPagina1',[App\Http\Controllers\controllerNegrali::class, 'dadosPagina1']) ->name('dadosPagina1');
Route::post('/dadosPagina2',[App\Http\Controllers\controllerNegrali::class, 'dadosPagina2']) ->name('dadosPagina2');
Route::post('/dadosPagina3',[App\Http\Controllers\controllerNegrali::class, 'dadosPagina3']) ->name('dadosPagina3');
