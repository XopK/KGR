<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forum()
    {
        return view('forum');
    }

    public function create_post()
    {
        return view('add_post');
    }
}
