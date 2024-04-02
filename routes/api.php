<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspeciesController;
use App\Http\Controllers\RecintosController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ActividadController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especies', EspeciesController::class);
Route::resource('/Recintos', RecintosController::class);
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/Actividad', ActividadController::class);
    return $request->user();
});
