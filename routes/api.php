<?php

use App\Http\Controllers\Api\CandidateController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\VacancySkillsController;
use App\Http\Controllers\Api\VacancyResumeSkills;
use Illuminate\Support\Facades\Route;


Route::apiResource('application',\App\Http\Controllers\Api\VacancyApplicationController::class);
Route::apiResource('company',\App\Http\Controllers\Api\VacancyCompaniesController::class);
Route::apiResource('experience', ExperienceController::class);
Route::apiResource('skills', \App\Http\Controllers\Api\VacancySkillsController::class);
Route::apiResource('resume-skills', \App\Http\Controllers\Api\VacancyResumeSkills::class);
