<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name','description','contact'];

}
