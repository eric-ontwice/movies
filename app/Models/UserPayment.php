<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    protected $fillable = [        
        'card_number',
        'expiration_month',
        'expiration_year',
        'cvv',
        'user_id',
        'bank_id'
    ];

    protected $hidden = ['created_at', "updated_at"];
}
