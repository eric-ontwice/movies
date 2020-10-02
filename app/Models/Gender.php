<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'name'
    ];

    // sirve para especificar al modelo que no tiene timestamps
    public $timestamps = false;
}
