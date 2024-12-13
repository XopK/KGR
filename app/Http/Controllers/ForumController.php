<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function forum()
    {
        $posts = Post::all();

        return view('forum', ['posts' => $posts]);
    }

    public function post()
    {
        return view('post_page');
    }

    public function create_post()
    {
        $categories = CategoryPost::all();

        return view('add_post', ['categories' => $categories]);
    }

    public function add_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content_post' => 'required',
        ]);

        if ($request->hasFile('photo')) {

            $photoHash = $request->file('photo')->hashName();
            $request->file('photo')->storeAs('public/photoPosts', $photoHash);

        }

        $post = Post::create([
            'title' => $request->title,
            'category_id' => $request->category,
            'photo' => $photoHash,
            'content' => $request->content_post,
            'user_id' => Auth::user()->id,
        ]);

        if ($post) {
            return redirect()->route('forum')->with('success', 'Пост создан!');
        } else {
            return redirect()->back()->with('error', 'Произошла ошибка при создании поста. Попробуйте снова!');
        }
    }
}
