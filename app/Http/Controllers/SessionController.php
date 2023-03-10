<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = \request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verfified'
            ]);
        }

        \session()->regenerate();

        return \redirect('/')->with('success', 'Welcome back!');




        // return \back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your provided credentials could not be verfified']);
    }

    public function destory()
    {
        auth()->logout();

        return \redirect('/')->with('success', 'Goodbye!');
    }
}
