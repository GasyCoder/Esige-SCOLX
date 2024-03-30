<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClasseController;
use App\Http\Controllers\Api\MatiereController;
use App\Http\Controllers\Api\ParcourController;
use App\Http\Controllers\Api\EtudiantController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/etudiants', [EtudiantController::class, 'index'])->middleware('auth:sanctum');
Route::get('/classes',  [ClasseController::class, 'index'])->middleware('auth:sanctum');
Route::get('/parcours', [ParcourController::class, 'index'])->middleware('auth:sanctum');
Route::get('/matieres', [MatiereController::class, 'index'])->middleware('auth:sanctum');