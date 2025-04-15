<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{

    protected $fillable = [
        'Job_tittle',
        'description',
        'requirements',
        'teams',
        'zarplata',
        'mestopolozheniye',
        'publication_date',
        'status',
        'companies_id',
        'application_id',
        'application_resumes_id',
        'application_vacancies_id',

    ];
}
