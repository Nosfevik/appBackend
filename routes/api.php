<?php

use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ProvinciaController;
use App\Http\Controllers\Api\CalleController;
use App\Http\Controllers\Api\CiudadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('regions', RegionController::class);
Route::apiResource('provincias', ProvinciaController::class);
Route::apiResource('ciudades', CiudadeController::class);
Route::apiResource('calles', CalleController::class);


Route::get('/buscar/{id}', [ProvinciaController::class, 'buscar_prov']);

//Route::apiResource('provincias2/{region_id}', [ProvinciaController::class, 'search'])->name('search');


// Route::get('search', [ProvinciaController::class, 'methodname'])->name('search');
