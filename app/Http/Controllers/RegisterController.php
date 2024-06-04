<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //menggunakan bcrypt biasa
        // $validatedData['password'] = bcrypt($validatedData['password']);

        //menggunakan hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        //menggunakan flash cara 1
        // session()->flash('success', 'Registration Succesfull, Please Login');

        //menggunakan flash cara 2 yaitu digabung dengan with
        return redirect('/login')->with('success', 'Registration Succesfull, Please Login');
    }
}
