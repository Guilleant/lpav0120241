<?php

use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\IntegranteController;
use App\Http\Controllers\IntegranteLenguajeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LenguajeController;
use App\Models\IntegranteHabilidad;
use Illuminate\Support\Facades\Auth;

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
    return view('dashboard');
});

Route::resource('/lenguajes', LenguajeController::class);
Route::resource('/habilidades', HabilidadController::class);

Route::get('/lenguajesintegrante', [IntegranteController::class, 'lenguajes'])->name('lenguajesintegrante');
Route::resource('/integrantes', IntegranteController::class);
Route::resource('/integrantelenguajes', IntegranteLenguajeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
