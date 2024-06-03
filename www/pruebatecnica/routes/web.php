<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');



//Ruta para clientes
Route::get('/cliente', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/cliente/registrocliente', [ClienteController::class, 'create'])->name('clientes.registrocliente');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('cliente/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('cliente/{cliente}/actualizarcliente', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::patch('cliente/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//Ruta para tecnicos
Route::get('/tecnico', [TecnicoController::class, 'index'])->name('tecnicos.index');
Route::get('/tecnico/registrotecnico', [TecnicoController::class, 'create'])->name('tecnicos.registrotecnico');
Route::post('tecnicos', [TecnicoController::class, 'store'])->name('tecnicos.store');
Route::get('tecnico/{tecnico}', [TecnicoController::class, 'show'])->name('tecnicos.show');
Route::get('tecnico/{tecnico}/actualizartecnico', [TecnicoController::class, 'edit'])->name('tecnicos.edit');
Route::patch('tecnico/{tecnico}', [TecnicoController::class, 'update'])->name('tecnicos.update');
Route::delete('/tecnico/{tecnico}', [TecnicoController::class, 'destroy'])->name('tecnicos.destroy');

//Ruta para marcas
Route::get('/marca', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/marca/registromarca', [MarcaController::class, 'create'])->name('marcas.registromarca');
Route::post('marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::get('marca/{marca}', [MarcaController::class, 'show'])->name('marcas.show');
Route::get('marca/{marca}/actualizarmarca', [MarcaController::class, 'edit'])->name('marcas.edit');
Route::patch('marca/{marca}', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marca/{marca}', [MarcaController::class, 'destroy'])->name('marcas.destroy');

//Ruta para equipos
Route::get('/equipo', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/equipo/registroequipo', [EquipoController::class, 'create'])->name('equipos.registroequipo');
Route::post('equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('equipo/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
Route::get('equipo/{equipo}/actualizarequipo', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::patch('equipo/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipo/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

//Ruta para servicios
Route::get('/servicio', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicio/registroservicio', [ServicioController::class, 'create'])->name('servicios.registroservicio');
Route::post('servicios', [ServicioController::class, 'store'])->name('servicios.store');
Route::get('servicio/{servicio}', [ServicioController::class, 'show'])->name('servicios.show');
Route::get('servicio/{servicio}/actualizarservicio', [ServicioController::class, 'edit'])->name('servicios.edit');
Route::patch('servicio/{servicio}', [ServicioController::class, 'update'])->name('servicios.update');
Route::delete('/servicio/{servicio}', [ServicioController::class, 'destroy'])->name('servicios.destroy');


