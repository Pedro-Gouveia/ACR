<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComponentesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('root');

Route::get('/componentes', [ComponentesController::class, 'index'])->name('componentes.index');

Route::get('/componentes/create', [ComponentesController::class, 'create'])->name('componentes.create')->middleware('auth');

Route::get('/componentes/tipo/{id}', [ComponentesController::class, 'componentes_por_tipo'])->name('componentes.por.tipo')->middleware('auth');

Route::get('/componentes/edit/{id}', [ComponentesController::class, 'edit'])->name('componentes.edit')->middleware('auth');

Route::get('/componentes/{id}', [ComponentesController::class, 'show'])->name('componentes.show');

Route::put('/componentes/{id}', [ComponentesController::class, 'update'])->name('componentes.update')->middleware('auth');

Route::post('/componentes', [ComponentesController::class, 'store'])->name('componentes.store')->middleware('auth');

Route::delete('/componentes/{id}', [ComponentesController::class, 'destroy'])->name('componentes.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
