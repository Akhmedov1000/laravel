<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $fillable = ['resumes_id',
                    'institution_name',
                    'degree',
                   'field_of_study',
                    'start_date',
                    'end_date',
                    'description'];

    public function resume()
    {
        return $this->belongsTo(VacancyResume::class);
    }
}
