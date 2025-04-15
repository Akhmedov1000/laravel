<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['resumes_id','vacancies_id','application_date','status_application'];
}
