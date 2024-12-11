<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\String\s;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Auth::login($user);
            return redirect()->back()->with('success', 'Успешная регистрация!');
        } else {
            return redirect()->back()->with('error', 'Ошибка регистрации, повторите еще раз!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
