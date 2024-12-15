<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'user_id',
        'description',
        'content',
        'photo_preview',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
