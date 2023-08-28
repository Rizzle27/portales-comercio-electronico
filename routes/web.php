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

// Las rutas son combinaciones de un método HTTP con una URL tomada a partir de la carpeta public del framework y se asocian a una acción.
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/galeria', [\App\Http\Controllers\HomeController::class, 'galeria']);