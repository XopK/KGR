<?php

namespace App\Http\Controllers;

use App\Models\CategoryCourse;
use App\Models\CategoryPost;
use App\Models\Course;
use App\Models\CourseInstruction;
use App\Models\Test;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function courses()
    {
        $courses = Course::all();

        return view('admin.courses', ['courses' => $courses]);
    }

    public function blogs()
    {
        return view('admin.blogs');
    }

    public function tests()
    {
        return view('admin.tests');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function userWorks()
    {
        return view('admin.works');
    }

    public function create_courses()
    {
        $category = CategoryCourse::all();

        return view('admin.create_course', ['categories' => $category]);
    }

    public function store_courses(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video_url' => 'required|url',
            'category_id' => 'required',
            'instructions' => 'required|array|min:1',
            'instructions.*.text' => 'required|string',
            'instructions.*.image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            if ($request->hasFile('photo')) {
                $hashPhoto = $request->file('photo')->hashName();
                $request->file('photo')->storeAs('public/coursesImage', $hashPhoto);
            }

            $course = Course::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $hashPhoto,
                'video_url' => $request->video_url,
                'category_id' => $request->category_id,
            ]);

            foreach ($request->instructions as $index => $instruction) {

                $hashPhotoInstruction = $instruction['image']->hashName();
                $instruction['image']->storeAs('public/InstructionImage', $hashPhotoInstruction);

                CourseInstruction::create([
                    'course_id' => $course->id,
                    'instruction' => $instruction['text'],
                    'image_instruction' => $hashPhotoInstruction,
                    'order' => $index + 1,
                ]);

            }
            return redirect()->route('admin.courses')->with('success', 'Курс успешно создан!');
        } catch (Exception $e) {

            Log::channel('courses')->error($e->getMessage());
            return redirect()->back()->with('error', 'Ошибка при создании курса. Попробуйте еще раз.');
        }
    }

    public function categories()
    {
        $courses = CategoryCourse::all();
        $posts = CategoryPost::all();

        return view('admin.categories', ['courses' => $courses, 'posts' => $posts]);
    }

    public function store_categories(Request $request)
    {
        $request->validate([
            'name_category' => 'required|string',
            'type' => 'required|string',
        ]);

        if ($request->type == 'post') {
            $response = CategoryPost::create([
                'name_category' => $request->name_category,
            ]);
        }

        if ($request->type == 'course') {
            $response = CategoryCourse::create([
                'name_category' => $request->name_category,
            ]);
        }

        if ($response) {
            return redirect()->back()->with('success', 'Категория добавлена!');
        } else {
            return redirect()->back()->with('error', 'Ошибка добавления категории. Попробуйте еще раз.');
        }
    }

    public function create_tests()
    {
        $courses = Course::all();

        return view('admin.create_test', ['courses' => $courses]);
    }

    public function store_tests(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'course_id' => 'required',
            'image_test' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'questions' => 'required|array|min:1',
            'questions.*.text' => 'required|string',
            'questions.*.answers' => 'required|array|min:2',
            'questions.*.answers.*.text' => 'required|string',
            'questions.*.correct' => 'required|integer|min:0',
            'questions.*.photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $hashImageTest = $request->file('image_test')->hashName();
            $request->file('image_test')->storeAs('public/TestImage', $hashImageTest);

            $test = Test::create([
                'name' => $request->name,
                'description' => $request->description,
                'course_id' => $request->course_id,
                'image' => $hashImageTest,
            ]);

            foreach ($request->questions as $questionData) {
                $hashQuestion = $questionData['photo']->hashName();
                $questionData['photo']->storeAs('public/QuestionsImage', $hashQuestion);

                $question = $test->questions()->create([
                    'question_text' => $questionData['text'],
                    'test_id' => $test->id,
                    'photo' => $hashQuestion,
                ]);

                foreach ($questionData['answers'] as $index => $answerData) {
                    $question->answers()->create([
                        'question_id' => $question->id,
                        'answer' => $answerData['text'],
                        'is_correct' => $index === (int)$questionData['correct'],
                    ]);
                }
            }

            return redirect()->route('admin.tests')->with('success', 'Тест успешно создан!');
        } catch (Exception $e) {
            Log::channel('tests')->error($e->getMessage());
            return redirect()->back()->with('error', 'Ошибка при создании теста. Попробуйте еще раз.');
        }

    }
}
