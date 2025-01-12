<?php

use App\Http\Controllers\Documento\DocdirueController;
use App\Http\Controllers\Documento\DocfileueController;
use Illuminate\Support\Facades\Route;

Route::get('docdirues', [DocdirueController::class, 'index'])->name('docdirue.index');
Route::get('docdirues/{docdirue}', [DocdirueController::class, 'show'])->name('docdirue.show');
Route::get('docdirueds/{docdirued}', [DocdirueController::class, 'showd'])->name('docdirued.show');
Route::get('docdiruedd/{docdirued}', [DocdirueController::class, 'diplomado'])->name('docdirued.diplomado');

// Route::get('docdirueds/{docdirued}', [DocdirueController::class, 'showd'])->name('docdirued.show');


Route::get('docfileues', [DocfileueController::class, 'index'])->name('docfileues.index');
Route::get('docfileues/{docfileue}', [DocfileueController::class, 'show'])->name('docfileues.show');
Route::get('docfileueds/{docfileued}', [DocfileueController::class, 'showd'])->name('docfileues.showd');
Route::get('docfileuedd/{docdirued}', [DocfileueController::class, 'diplomado'])->name('docfileued.diplomado');
Route::get('docfileuedp/{docdirued}', [DocfileueController::class, 'curso'])->name('docfileued.curso');


