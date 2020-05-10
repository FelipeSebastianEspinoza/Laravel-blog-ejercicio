<?php

namespace App\Http\Controllers;

use App\User;


class UserController extends Controller
{
    public function show($name)
    {
        return view('users', ['user' => $user = User::where('name', $name)->firstOrFail()]);
    }

    public function saluda()
    {
        // return view('users',['name' => 'Felipe']);
        return view('users')->with('name', 'Juan');
    }
}
