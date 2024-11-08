<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // или Ваша модель пользователя
use Illuminate\Support\Facades\Hash; // для хеширования пароля

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create'); // Создайте view registration.create.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Здесь можно добавить логику редиректа после успешной регистрации
        return redirect('/');
    }
}