<?php

use App\Http\Controllers\ActCatespecificaController;
use App\Http\Controllers\ActDesincorporacionController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CondicionFisicaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FormaAdquisicionController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\TipoActivoController;
use App\Http\Controllers\UbicacionController;
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

Route::get('/adquisiciones', [FormaAdquisicionController::class, 'index']);
// Route::get('/catespecifica', [ActCatespecificaController::class, 'index']);
Route::get('/tipos', [TipoActivoController::class, 'index']);
// Route::get('/marcas', [ActMarcaController::class, 'index']);
Route::get('/condicion', [CondicionFisicaController::class, 'index']);
Route::get('/color', [ColorController::class, 'index']);
Route::get('/desincorporacion', [ActDesincorporacionController::class, 'index']);
Route::get('/estado', [EstadoController::class, 'index']);
Route::get('/monedas', [MonedaController::class, 'index']);
Route::get('/ubicacion', [UbicacionController::class, 'index']);
