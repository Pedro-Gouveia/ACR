<?php

use App\Http\Controllers\ProdutosCOntroller;
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

Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/create', [ProdutosCOntroller::class, 'create']);

Route::post('/produtos', [ProdutosController::class, 'store']);

Route::get('/produtos/{id}', [ProdutosController::class, 'show']);

Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy']);
