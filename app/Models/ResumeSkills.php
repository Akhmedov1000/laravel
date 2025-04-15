<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeSkills extends Model
{
    protected $fillable = ['resume_id',
        'skill_id',
        'level' ];
}
