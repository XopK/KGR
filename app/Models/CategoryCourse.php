<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryCourse extends Model
{
    protected $table = 'category_courses';

    protected $fillable = [
        'name_category',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
}
