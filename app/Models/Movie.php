<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'release_date',
        'release_year',
        'duration',
        'image',
        'synopsis',
        'gender_id'        
    ];

    protected $hidden = ['created_at', "updated_at"];

    
}
