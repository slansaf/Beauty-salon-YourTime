<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
       protected $fillable = [
        'name',
        'specialization',
        'experience',
        'description',
        'image',
        'service',
    ];
}
