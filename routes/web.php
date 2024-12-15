<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkRole;
use App\Http\Middleware\authcheck;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = Course::orderBy('created_at', 'desc')->limit(6)->get();
    return view('index', ['courses' => $courses]);
})->name('index');

Route::get('/lesson/{course}', [CourseController::class, 'lessons_page'])->name('lessons');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/lesson/questions/{test}', [CourseController::class, 'question_page'])->name('questions')->middleware(authcheck::class);

Route::post('/lesson/{course}/upload', [CourseController::class, 'upload'])->name('upload')->middleware(authcheck::class);

Route::get('/blog/page', function () {
    return view('blog_single');
})->name('blog_single');

Route::post('/auth/register', [AuthController::class, 'registration'])->name('register');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(checkRole::class);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(authcheck::class);

Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

Route::get('/profile/settings', [UserController::class, 'my_profile'])->name('my_profile')->middleware(authcheck::class);;

Route::get('/profile/portfolio', [UserController::class, 'my_portfolio'])->name('my_portfolio')->middleware(authcheck::class);;

Route::get('profile/liked', [UserController::class, 'my_liked'])->name('my_liked')->middleware(authcheck::class);

Route::post('/profile/settings/update', [UserController::class, 'update_profile'])->name('update_profile')->middleware(authcheck::class);

Route::post('/profile/email_verified', [UserController::class, 'send_code'])->name('send_code')->middleware(authcheck::class);

Route::get('/verify-email/{token}', [UserController::class, 'verify_email'])->name('verify_email');

Route::post('/password/reset', [UserController::class, 'reset_password'])->name('reset_password')->middleware(authcheck::class);

Route::get('/courses', [CourseController::class, 'courses'])->name('courses');

Route::get('/forum', [ForumController::class, 'forum'])->name('forum');

Route::get('/forum/create-post', [ForumController::class, 'create_post'])->name('create_post')->middleware(authcheck::class);

Route::post('/forum/create-post/store', [ForumController::class, 'add_post'])->name('add_post')->middleware(authcheck::class);

Route::get('/forum/{post}', [ForumController::class, 'post'])->name('forum_page');

Route::post('/forum/{post}/like', [ForumController::class, 'like_post'])->name('like_post')->middleware(authcheck::class);

Route::post('/forum/add_comment', [ForumController::class, 'comment_post'])->name('comment_post')->middleware(authcheck::class);

Route::get('/admin/courses', [AdminController::class, 'courses'])->name('admin.courses')->middleware(checkRole::class);

Route::get('/admin/blogs', [AdminController::class, 'blogs'])->name('admin.blogs')->middleware(checkRole::class);

Route::get('/admin/tests', [AdminController::class, 'tests'])->name('admin.tests')->middleware(checkRole::class);

Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users')->middleware(checkRole::class);

Route::get('/admin/userWorks', [AdminController::class, 'userWorks'])->name('admin.userWorks')->middleware(checkRole::class);

Route::get('/admin/courses/create', [AdminController::class, 'create_courses'])->name('admin.courses.create')->middleware(checkRole::class);

Route::post('/admin/courses/create/store', [AdminController::class, 'store_courses'])->name('admin.courses.store')->middleware(checkRole::class);

Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories')->middleware(checkRole::class);

Route::post('/admin/categories/store', [AdminController::class, 'store_categories'])->name('admin.categories.store')->middleware(checkRole::class);

Route::get('/admin/tests/create', [AdminController::class, 'create_tests'])->name('admin.tests.create')->middleware(checkRole::class);

Route::post('/admin/tests/create/store', [AdminController::class, 'store_tests'])->name('admin.tests.store')->middleware(checkRole::class);

Route::get('/profile/complete-tests', [UserController::class, 'complete_tests'])->name('complete_tests')->middleware(authcheck::class);

Route::post('/complete_test/send', [CourseController::class, 'complete_test_send'])->name('complete_test_send')->middleware(authcheck::class);

Route::get('/profile/my_posts', [UserController::class, 'my_posts'])->name('my_posts')->middleware(authcheck::class);

Route::get('/profile/my_posts/edit-post/{post}', [UserController::class, 'edit_post'])->name('edit_post')->middleware(authcheck::class);

Route::post('/profile/edit-post/{post}/update}', [UserController::class, 'update_post'])->name('update_post')->middleware(authcheck::class);

Route::delete('/profile/my_posts/delete/{post}', [UserController::class, 'delete_post'])->name('delete_post')->middleware(authcheck::class);

Route::delete('/admin/courses/delete/{course}', [AdminController::class, 'delete_course'])->name('delete_course')->middleware(checkRole::class);

Route::get('/admin/courses/edit/{course}', [AdminController::class, 'edit_course'])->name('edit_course')->middleware(checkRole::class);

Route::post('/admin/courses/edit/{course}/update', [AdminController::class, 'update_course'])->name('update_course')->middleware(checkRole::class);

Route::delete('/admin/courses/delete_instruction/{instruction}', [AdminController::class, 'delete_instruction'])->name('delete_instruction')->middleware(checkRole::class);

Route::post('/admin/categories/delete', [AdminController::class, 'delete_category'])->name('delete_category')->middleware(checkRole::class);

Route::post('/admin/categories/update', [AdminController::class, 'update_category'])->name('update_category')->middleware(checkRole::class);
