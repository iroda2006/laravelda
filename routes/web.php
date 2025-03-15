<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


Route::get('/form', [PostController::class, 'index']);

Route::post('/form', [PostController::class, 'store']);
Route::delete('/form', [PostController::class, 'delete']);
Route::put('/form', [PostController::class, 'update']);
Route::patch('/form', [PostController::class, 'patch']);


