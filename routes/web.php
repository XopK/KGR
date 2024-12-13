<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkRole;
use App\Http\Middleware\authcheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/lesson', function () {
    return view('practic_page');
})->name('lessons');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/lesson/questions', function () {
    return view('test_page');
})->name('questions');

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

Route::get('/forum/page', [ForumController::class, 'post'])->name('forum_page');
