<?php

use App\Http\Controllers\Api\CandidateController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\VacancyController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ResumeSkillsController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::apiResource('vacancies', VacancyController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('application', ApplicationController::class);
Route::apiResource('resume', ResumeController::class);
Route::apiResource('candidate', CandidateController::class);
Route::apiResource('experience', ExperienceController::class);
Route::apiResource('skills', SkillController::class);
Route::apiResource('educations', EducationsController::class);
Route::apiResource('resume-skills', ResumeSkillsController::class);

