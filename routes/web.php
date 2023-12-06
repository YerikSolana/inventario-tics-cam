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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/registros', [App\Http\Controllers\RegistroController::class, 'index'])->name('registros');
Route::get('/registros/{registrosid}', [App\Http\Controllers\RegistroController::class, 'show'])->name('detalles-registro');
Route::post('registros', [App\Http\Controllers\RegistroController::class, 'store'])->name('crear-registro');
Route::put('registros/{registroid}', [App\Http\Controllers\RegistroController::class, 'update'])->name('editar-registro');
Route::delete('registros/{registroid}', [App\Http\Controllers\RegistroController::class, 'destroy'])->name('eliminar-registro');

Route::resource('/equipos', App\Http\Controllers\EquipoController::class);

Route::resource('/usuarios', App\Http\Controllers\UserController::class);

Route::resource('/responsables', App\Http\Controllers\ResponsableController::class);

Route::resource('/perifericos', App\Http\Controllers\PerifericoController::class);

Route::resource('/oficinas', App\Http\Controllers\OficinaController::class);