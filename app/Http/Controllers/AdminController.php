<?php

namespace App\Http\Controllers;

use App\Models\CategoryCourse;
use App\Models\CategoryPost;
use App\Models\Course;
use App\Models\CourseInstruction;
use App\Models\Post;
use App\Models\Test;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

    public function delete_course(Course $course)
    {
        try {
            $course->instructions->each(function ($instruction) {
                Storage::delete('public/InstructionImage/' . $instruction->image_instruction);
                $instruction->delete();
            });

            Storage::delete('public/coursesImage/' . $course->image);
            $course->delete();

            return redirect()->back()->with('success', 'Вы успешно удалили курс!');

        } catch (Exception $e) {
            Log::channel('tests')->error("Ошибка при удалении курса ID {$course->id}: " . $e->getMessage());
            return redirect()->back()->with('error', 'Ошибка при удалении курса. Попробуйте еще раз.');
        }
    }

    public function edit_course(Course $course)
    {
        $categories = CategoryCourse::orderBy('created_at', 'desc')->get();
        return view('admin.edit_course', ['course' => $course, 'categories' => $categories]);
    }

    public function update_course(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video_url' => 'required|url',
            'category_id' => 'required',
            'instructions' => 'required|array|min:1',
            'instructions.*.text' => 'required|string',
            'instructions.*.image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            if ($request->hasFile('photo')) {
                if ($course->image) {
                    Storage::delete('public/coursesImage/' . $course->image);
                }

                $hashPhotoCourse = $request->file('photo')->hashName();
                $request->file('photo')->storeAs('public/coursesImage', $hashPhotoCourse);

                $course->image = $hashPhotoCourse;
            }

            $course->title = $request->title;
            $course->description = $request->description;
            $course->video_url = $request->video_url;
            $course->category_id = $request->category_id;
            $course->save();


            foreach ($course->instructions as $index => $instruction) {
                if (isset($request->instructions[$index])) {
                    $instructionData = $request->instructions[$index];

                    if (isset($instructionData['image']) && $instructionData['image'] instanceof \Illuminate\Http\UploadedFile) {

                        if ($instruction->image_instruction) {
                            Storage::delete('public/InstructionImage/' . $instruction->image_instruction);
                        }

                        $hashInstructionImage = $instructionData['image']->hashName();
                        $instructionData['image']->storeAs('public/InstructionImage', $hashInstructionImage);

                        $instruction->image_instruction = $hashInstructionImage;
                    }

                    $instruction->instruction = $instructionData['text'];
                    $instruction->save();
                }
            }

            $existingInstructionsCount = count($course->instructions);

            foreach ($request->instructions as $index => $instructionData) {
                if ($index >= $existingInstructionsCount) {
                    $newInstruction = new CourseInstruction();
                    $newInstruction->course_id = $course->id;
                    $newInstruction->instruction = $instructionData['text'];
                    $newInstruction->order = $index + 1;

                    if (isset($instructionData['image']) && $instructionData['image'] instanceof \Illuminate\Http\UploadedFile) {
                        $hashInstructionImageNew = $instructionData['image']->hashName();
                        $instructionData['image']->storeAs('public/InstructionImage', $hashInstructionImageNew);

                        $newInstruction->image_instruction = $hashInstructionImageNew;
                    }

                    $newInstruction->save();
                }
            }

            return redirect()->route('admin.courses')->with('success', 'Курс успешно обновлён!');
        } catch (Exception $e) {
            Log::channel('tests')->error($e->getMessage());

            return redirect()->back()->with('error', 'Ошибка при обновлении курса. Попробуйте еще раз!');
        }


    }

    public function delete_instruction(CourseInstruction $instruction)
    {
        try {
            if ($instruction->image_instruction) {
                Storage::delete('public/InstructionImage/' . $instruction->image_instruction);
            }
            $instruction->delete();

            return response()->json([
                'status' => true,
                'message' => 'Инструкция удалена!'
            ]);

        } catch (Exception $e) {
            Log::channel('tests')->error($e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Ошибка при удалении инструкции. Попрбуйте еще раз.'
            ]);
        }

    }

    public function delete_category(Request $request)
    {
        try {
            if ($request->type == 'course') {
                $model = CategoryCourse::findOrFail($request->category_id);
                $model->delete();
            }

            if ($request->type == 'post') {
                $model = CategoryPost::findOrFail($request->category_id);
                $model->delete();
            }

            return redirect()->route('admin.categories')->with('success', 'Категория успешно удалена!');
        } catch (\Exception $e) {

            \Log::error('Ошибка при удалении: ' . $e->getMessage());

            return redirect()->route('admin.categories')->with('error', 'Ошибка при удалении категории.');
        }
    }

    public function update_category(Request $request)
    {
        dd($request->all());
    }


}
