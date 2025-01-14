<?php

use App\Http\Controllers\Documento\DocdirueController;
use App\Http\Controllers\Documento\DocfileueController;
use App\Http\Controllers\Documento\FaltadocenteController;
use App\Http\Controllers\Documento\FaltasController;
use App\Http\Controllers\Documento\MesesController;
use App\Http\Controllers\Documento\PermisodocenteController;
use App\Http\Controllers\Documento\PermisosController;
use Illuminate\Support\Facades\Route;

Route::get('docdirues', [DocdirueController::class, 'index'])->name('docdirue.index');
Route::get('docdirues/{docdirue}', [DocdirueController::class, 'show'])->name('docdirue.show');
Route::get('docdirueds/{docdirued}', [DocdirueController::class, 'showd'])->name('docdirued.show');

Route::get('docfileues', [DocfileueController::class, 'index'])->name('docfileues.index');
Route::get('docfileues/{docfileue}', [DocfileueController::class, 'show'])->name('docfileues.show');
Route::get('docfileueds/{docfileued}', [DocfileueController::class, 'showd'])->name('docfileues.showd');
Route::get('docfileuedd/{docdirued}', [DocfileueController::class, 'diplomado'])->name('docfileued.diplomado');
Route::get('docfileuedp/{docdirued}', [DocfileueController::class, 'curso'])->name('docfileued.curso');


//RUTAS PARA LOS REGISTROS DE FALTAS Y PERMISOS

Route::resource('faltas', FaltasController::class)->except('show', 'destroy');
Route::resource('permisos', PermisosController::class)->except('show', 'destroy');
Route::resource('meses', MesesController::class)->except('show', 'store','create', 'edit', 'destroy');

Route::resource('permisodocentes', PermisodocenteController::class)->except('edit','update', 'destroy');;
Route::resource('faltadocentes', FaltadocenteController::class)->names('faltadocentes');


