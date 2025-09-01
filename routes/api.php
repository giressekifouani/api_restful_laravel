<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\PersonnelController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


// Routes API pour Personne
Route::get('/personnes', [PersonneController::class, 'index']);
Route::post('/personnes', [PersonneController::class, 'store']);
Route::get('/personnes/{id}', [PersonneController::class, 'show']);
Route::put('/personnes/{id}', [PersonneController::class, 'update']);
Route::delete('/personnes/{id}', [PersonneController::class, 'destroy']);
Route::get('/personnel', [PersonnelController::class,'index']);
