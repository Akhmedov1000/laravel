<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class
User extends Authenticatable
{

    protected $fillable = [
        'Job_tittle',
        'description',
        'requirements',
        'teams',
        'zarplata',
        'mestopolozheniye',
        'putification_date',
        'status',
        'companies_id',
        'application_id',
        'companies_id',
        'companies_id',
    ];


}
