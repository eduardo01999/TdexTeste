<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

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


Route::resource('/empresa', 'App\Http\Controllers\EmpresaController');

Route::post('/home',[EmpresaController::class, 'auth'])->name('auth.empresa');

Route::resource('/veiculo', 'App\Http\Controllers\VeiculoController');

Route::resource('/multa', 'App\Http\Controllers\MultaController');