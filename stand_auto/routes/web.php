<?php

use App\Http\Controllers\CarrosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carros', [CarrosController::class, 'index']);

Route::get('/carros/create', [CarrosController::class, 'create']);

Route::post('/carros', [CarrosController::class, 'store']);

Route::get('/carros/{id}', [CarrosController::class, 'show']);

Route::delete('/carros/{id}', [CarrosController::class, 'destroy']);