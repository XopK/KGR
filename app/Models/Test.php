<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //

    protected $table = 'tests';

    protected $fillable = [
        'name',
        'description',
        'course_id',
        'image'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class, 'test_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
