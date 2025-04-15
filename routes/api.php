<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ResumeController;
Route::apiResource('application', \App\Models\Application::class);
Route::apiResource('resume', \App\Models\Resume::class);
