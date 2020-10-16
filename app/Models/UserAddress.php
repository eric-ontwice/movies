<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [        
        'address',
        'number',
        'colony',
        'municipality',
        'postal_code',
        'user_id'
    ];

    public $timestamps = false;
}
