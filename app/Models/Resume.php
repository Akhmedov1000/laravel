<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['candidate_id', 'experience_id', 'title', 'summary', 'salary_expectation', 'city'];
}
