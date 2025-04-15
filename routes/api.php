<?php

use \App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\CandidateController;
use Illuminate\Support\Facades\Route;

Route::apiResource('candidate', CandidateController::class);
Route::apiResource('experience', ExperienceController::class);
