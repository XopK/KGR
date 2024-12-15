<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('courses', ['courses' => $courses]);
    }
}
