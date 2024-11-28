<?php

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

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');

Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign_up');

Route::get('/lesson/questions', function () {
    return view('test_page');
})->name('questions');
