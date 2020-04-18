<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create', ['user' => new User()]);
    }

    public function store(UserRequest $request)
    {
        User::create([
            'cpf' => $request->cpf,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'signature' => $request->signature
        ]);

        return redirect()->route('user.index');
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }
}
