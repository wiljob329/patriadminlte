<?php

use App\Http\Controllers\ActAdquisicioneController;
use App\Http\Controllers\ActCatespecificaController;
use App\Http\Controllers\ActColorController;
use App\Http\Controllers\ActCondicionController;
use App\Http\Controllers\ActDesincorporacionController;
use App\Http\Controllers\ActMarcaController;
use App\Http\Controllers\ActTipoController;
use App\Http\Controllers\EstadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/adquisiciones', [ActAdquisicioneController::class, 'index']);
Route::get('/catespecifica', [ActCatespecificaController::class, 'index']);
Route::get('/tipos', [ActTipoController::class, 'index']);
// Route::get('/marcas', [ActMarcaController::class, 'index']);
Route::get('/condicion', [ActCondicionController::class, 'index']);
Route::get('/color', [ActColorController::class, 'index']);
Route::get('/desincorporacion', [ActDesincorporacionController::class, 'index']);
Route::get('/estado', [EstadoController::class, 'index']);
