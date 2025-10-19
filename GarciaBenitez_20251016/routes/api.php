<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/zonas',[ZonaController::class,'obtenerZonas']);
Route::get('/zonas{idzona}',[ZonaController::class,'obtenerZona']);