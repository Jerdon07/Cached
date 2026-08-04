<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'description',
])]
class Role extends Model
{
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
    ];
}
