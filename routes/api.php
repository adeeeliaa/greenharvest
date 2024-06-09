<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesApiController;

Route::get('/categories', [CategoriesApiController::class,'index']);
Route::get('/categories/create', [CategoriesApiController::class,'create']);
Route::post('/categories', [CategoriesApiController::class,'store']);
Route::get('/categories/{id}/edit', [CategoriesApiController::class,'edit']);
Route::get('/categories/{id}', [CategoriesApiController::class,'show']);
Route::put('/categories/{id}', [CategoriesApiController::class,'update']);
Route::delete('/categories/{id}', [CategoriesApiController::class,'destroy']);
