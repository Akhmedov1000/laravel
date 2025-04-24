<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancyResume extends Model
{

 protected $fillable = ['experience', 'education', 'skills', 'desired_position', 'salary_expectation', 'user_id', 'Applications_id', 'Applications_resumes_id', 'Applications_vacancies_id'];
}
