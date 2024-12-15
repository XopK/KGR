<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseInstruction extends Model
{
    protected $table = 'course_instructions';

    protected $fillable = [
        'course_id',
        'instruction',
        'image_instruction',
        'order',
    ];
}
