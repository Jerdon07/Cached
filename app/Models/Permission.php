<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
])]
class Permission extends Model
{
    protected $casts = [
        'name' => 'string',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
