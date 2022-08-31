<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('students.register');
    }

    public function store(Request $request){
        $formData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $formData['password'] = bcrypt($formData['password']);

        $user = User::create($formData);

        auth()->login($user);

        return redirect('/')->with('success', 'User created successfully. ' . $formData['name'] . ' logged in.'); 
    }

    public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function login(){
        return view('students.login');
    }

    public function validateUser(){
        $formData = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formData)){
            request()->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in.');
        }

        return back()-> withErrors(['email' => 'Invalid credentials entered. Please try again.'])->onlyInput('email');
    }
}
