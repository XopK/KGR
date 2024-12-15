<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Test;
use App\Models\UserWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();

        return view('courses', ['courses' => $courses]);
    }

    public function lessons_page(Course $course)
    {
        preg_match('/video\/([a-f0-9]{32})\//', $course->video_url, $matches);

        if (isset($matches[1])) {
            $video_id = $matches[1];
        } else {
            $video_id = null;
        }

        $api = "https://rutube.ru/api/play/options/{$video_id}";
        $response = Http::get($api);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['thumbnail_url'])) {
                $image_url = $data['thumbnail_url'];
            } else {
                $image_url = 'https://imgholder.ru/1920x1080';
            }
        } else {
            $image_url = 'https://imgholder.ru/1920x1080';
        }

        $course->setAttribute('thumbnail_url', $image_url);

        return view('practic_page', ['course' => $course]);
    }

    public function question_page(Test $test)
    {
        $questions = $test->questions()->with('answers')->get();

        $formattedQuestions = $questions->map(function ($question) {
            return [
                'question' => $question->question_text,
                'answers' => $question->answers->pluck('answer')->toArray(),
                'correct' => $question->answers->firstWhere('is_correct', 1)->answer,
                'photo' => $question->photo, // добавляем путь к изображению
            ];
        });


        return view('test_page', ['questions' => $formattedQuestions]);
    }

    public function upload(Request $request, Course $course)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,jpg,png|max:2048'
        ]);

        $user = Auth::user();

        $hasFile = $request->file('file')->hashName();
        $request->file('file')->storeAs('public/works', $hasFile);

        $work = UserWork::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'works' => $hasFile,
        ]);

        if ($work) {
            return redirect()->back()->with('success', 'Файл успешно отправлен!');
        } else {
            return redirect()->back()->with('error', 'Ошибка при отправке файла. Поробуйте еще раз.');
        }

    }
}
