<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name_role',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
