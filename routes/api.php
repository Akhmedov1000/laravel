<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanceController;
use App\Http\Controllers\BookController;
Route::apiResource('categories', VacanceController::class);
Route::apiResource('books', BookController::class);
