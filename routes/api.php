<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ResumeController;
use \App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\CandidateController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ResumeSkillsController;


Route::apiResource('application', \App\Models\Application::class);
Route::apiResource('resume', \App\Models\Resume::class);
Route::apiResource('candidate', CandidateController::class);
Route::apiResource('experience', ExperienceController::class);
Route::apiResource('skills', SkillController::class);
Route::apiResource('educations', EducationsController::class);
Route::apiResource('resume-skills', ResumeSkillsController::class);
