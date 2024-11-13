<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\View\View
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Display the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function register(): View
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Авторизация пользователя после регистрации
            Auth::login($user);

            return Redirect::route('dashboard')->with('status', 'registration-successful');
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['error' => 'Registration failed, please try again.']);
        }
    }
}
