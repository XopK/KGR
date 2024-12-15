<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'title',
        'description',
        'image',
        'video_url',
        'category_id',
        'count_views'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryCourse::class, 'category_id');
    }

}
