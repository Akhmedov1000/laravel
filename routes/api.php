<?php

use App\Http\Controllers\Api\Api\CandidateController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ResumeSkillsController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;


Route::apiResource('application', \App\Models\Application::class);
Route::apiResource('resume', \App\Models\Resume::class);
Route::apiResource('candidate', CandidateController::class);
Route::apiResource('company', \App\Models\Companies::class);
Route::apiResource('experience', ExperienceController::class);
Route::apiResource('skills', SkillController::class);
Route::apiResource('educations', EducationsController::class);
Route::apiResource('resume-skills', ResumeSkillsController::class);
