<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoriesController::class,'index']);
Route::get('/categories/create', [CategoriesController::class,'create']);
Route::post('/categories', [CategoriesController::class,'store']);
Route::get('/categories/{id}/edit', [CategoriesController::class,'edit']);
Route::put('/categories/{id}', [CategoriesController::class,'update']);
Route::delete('/categories/{id}', [CategoriesController::class,'destroy']);