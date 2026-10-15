<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
     protected $fillable = [
        'form_type',
        'first_name',
        'last_name',
        'email',
        'phone',
        'industry',
        'qualification',
        'preferred_pathway',
        'terms_accepted',
    ];

    protected function casts(): array
    {
        return [
            'terms_accepted' => 'boolean',
        ];
    }

}

