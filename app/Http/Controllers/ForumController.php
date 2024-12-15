<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Comment;
use App\Models\LikePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ForumController extends Controller
{
    public function forum()
    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('forum', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        $comments = $post->comments()->orderBy('created_at', 'desc')->get();

        return view('post_page', ['post' => $post, 'comments' => $comments]);
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

        $photoHash = null;

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

    public function like_post(Post $post)
    {
        $user = Auth::user();
        $existingLikes = LikePost::where('post_id', $post->id)->where('user_id', $user->id)->first();

        if ($existingLikes) {
            $existingLikes->delete();
            return response()->json([
                'message' => 'Лайк был снят',
                'minus' => true,
                'status' => true
            ]);
        }

        $like = LikePost::create([
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);

        if ($like) {
            return response()->json([
                'message' => 'Лайк поставлен',
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Ошибка добавления лайка. Попробуйте еще раз!',
                'status' => false,
            ]);
        }

    }

    public function comment_post(Request $request)
    {
        $user = Auth::user();

        if ($request->has('comment') && $request->has('post')) {
            $comment = Comment::create([
                'comment' => $request->comment,
                'post_id' => $request->post,
                'user_id' => $user->id
            ]);

            if ($comment) {
                $comment->user = $user;

                return response()->json([
                    'message' => 'Вы успешно оставили комментарий!',
                    'status' => true,
                    'comment' => $comment
                ]);
            } else {
                return response()->json([
                    'message' => 'Ошибка при отравке комментария. Попробуйте еще раз.',
                    'status' => false,
                    'comment' => null
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Введите данные!',
                'status' => false,
                'comment' => null,
            ]);
        }
    }

}

