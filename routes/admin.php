<?php

use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\DiplomadoController;
use App\Http\Controllers\Admin\DocdireccionController;
use App\Http\Controllers\Admin\DocdocenteController;
use App\Http\Controllers\Admin\DocenteController;
use App\Http\Controllers\Admin\DocumentofileController;
use App\Http\Controllers\Admin\permissionsController;
use App\Http\Controllers\Admin\PersonaldocController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('docente', DocenteController::class)->names('docente');
Route::resource('personaldocs', PersonaldocController::class)->names('personaldocs');
Route::resource('diplomados', DiplomadoController::class)->names('diplomados');
Route::resource('cursos', CursoController::class)->names('cursos');
Route::resource('documentofiles', DocumentofileController::class)->names('documentofiles');
Route::resource('docdocentes', DocdocenteController::class)->names('docdocentes');
Route::resource('docdireccions', DocdireccionController::class)->names('docdireccions');
Route::resource('/permissions', permissionsController::class)->names('permissions');
Route::resource('/roles', RoleController::class)->names('roles');
Route::resource('/users', UserController::class)->except('show', 'create', 'store');