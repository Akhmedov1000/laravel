<?php

use \App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\CandidateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResumeController;

Route::apiResource('candidate', CandidateController::class);
Route::apiResource('experience', ExperienceController::class);
Route::apiResource('resumes', ResumeController::class);
