<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\CategoryPost;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Exception;

class UserController extends Controller
{
    public function my_profile()
    {
        return view('profile_settings');
    }

    public function my_portfolio()
    {
        return view('my_project');
    }

    public function my_liked()
    {
        return view('liked_post');
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($request->user()->id),
            ],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $user = Auth::user();

            if ($request->hasFile('photo')) {
                $photoHash = $request->file('photo')->hashName();

                $request->file('photo')->storeAs('public/userPhotos', $photoHash);

                if ($user->profile_img != 'default.png') {
                    Storage::delete('public/userPhotos/' . $user->profile_img);
                }

                $user->profile_img = $photoHash;
            }

            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->save();

            return redirect()->back()->with('success', 'Данные успешно обновлены!');

        } catch (Exception $e) {

            Log::channel('profile_updates')->error('Ошибка при обновлении профиля', [
                'user_id' => Auth::id(),
                'error' => $e->getMessage(),
                'time' => now(),
            ]);

            return redirect()->back()->with('error', 'Произошла ошибка при обновлении профиля. Пожалуйста, попробуйте снова.');

        }
    }

    public function send_code(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $token = Str::random(64);
        $expiration = now()->addMinutes(10)->timestamp;

        DB::table('email_verified')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'expiration' => $expiration, 'created_at' => now(), 'updated_at' => now()]
        );

        Mail::to($request->email)->send(new VerifyEmail($token));

        return redirect()->back()->with('success', 'Ссылка для подтверждения отправлена на вашу почту.');
    }

    public function verify_email($token)
    {
        $record = DB::table('email_verified')->where('token', $token)->first();

        if (!$record || $record->expiration < now()->timestamp) {
            abort('400');
        }

        $user = User::where('email', $record->email)->first();
        if ($user) {
            $user->email_verified_at = now();
            $user->save();
        }

        DB::table('email_verified')->where('token', $token)->delete();

        return redirect()->route('my_profile')->with('success', 'Ваш email подтвержден!');

    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Неверный текущий пароль.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Пароль успешно изменен!');
    }

    public function complete_tests()
    {
        return view('complete_test');
    }

    public function my_posts()
    {
        return view('my_posts');
    }

    public function edit_post(Post $post)
    {
        $categories = CategoryPost::orderBy('created_at', 'desc')->get();

        return view('edit_post', ['post' => $post, 'categories' => $categories]);
    }

    public function update_post(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'content_post' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $photoHash = $post->photo;

            if ($request->hasFile('photo')) {

                if ($post->photo) {
                    Storage::delete('public/photoPosts/' . $post->photo);
                }

                $photoHash = $request->file('photo')->hashName();
                $request->file('photo')->storeAs('public/photoPosts', $photoHash);
            }

            $post->update([
                'title' => $request->title,
                'category_id' => $request->category,
                'content' => $request->content_post,
                'photo' => $photoHash,
            ]);

            return redirect()->route('my_posts')->with('success', 'Пост успешно изменен!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Произошла ошибка при обновалении. Попробуйте еще раз.');
        }

    }

    public function delete_post(Post $post)
    {
        try {
            if (!empty($post->photo)) {
                Storage::delete('public/photoPosts/' . $post->photo);
            }

            $post->delete();

            return redirect()->back()->with('success', 'Пост успешно удалён!');
        } catch (\Exception $e) {
            \Log::error('Ошибка удаления поста: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Ошибка при удалении поста. Попробуйте еще раз.');
        }
    }


}
