<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'content',
        'photo',
        'user_id',
    ];

    public function category()
    {
        return $this->hasOne(CategoryPost::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function like()
    {
        return $this->hasMany(LikePost::class, 'post_id');
    }

    public function countLikes()
    {
        return $this->like()->count();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

}
