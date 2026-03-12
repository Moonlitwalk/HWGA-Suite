<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CharacterController, RunController};

Route::get('/runs', [RunController::class, 'index']);
Route::get('/run/{id}', [RunController::class, 'show-run']);

Route::delete('/run/{id}', [RunController::class, 'destroy']);
Route::get('/characters', [CharacterController::class, 'index']);
Route::post('character', [CharacterController::class, 'create']);
Route::post('/character/{id}', [CharacterController::class, 'store']);
Route::delete('/character/{id}', [CharacterController::class, 'destroy']);

//TODO: Leaderboard routes , Loing/Auth Routes