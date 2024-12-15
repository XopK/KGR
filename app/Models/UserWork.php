<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWork extends Model
{
    protected $table = 'user_works';

    protected $fillable = [
        'user_id',
        'course_id',
        'works',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
