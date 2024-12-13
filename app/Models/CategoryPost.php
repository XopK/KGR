<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'category_posts';

    protected $fillable = [
        'name_category',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'category_id');
    }
}
