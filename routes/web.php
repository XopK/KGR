<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\checkRole;
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

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(checkROle::class);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
