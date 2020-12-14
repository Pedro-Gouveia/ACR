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

Route::get('/componentes/{id}', [ComponentesController::class, 'show'])->name('componentes.show');

Route::get('/componentes/create', [ComponentesController::class, 'create'])->name('componentes.create')->middleware('auth');

Route::post('/componentes', [ComponentesController::class, 'store'])->name('componentes.store')->middleware('auth');

Route::delete('/componentes/{id}', [ComponentesController::class, 'destroy'])->name('componentes.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
