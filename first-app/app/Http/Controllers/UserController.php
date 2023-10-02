<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(){
        $user_data = \request()->validate([
            'fio'=>'string',
            'age'=>'integer',
            'role'=>'string',
            'sex'=>'string',
            'email'=>'required|email',
            'password'=>'required|string|min:6',
            'country'=>'string',
        ]);
        $user_data['role'] = 'guest';

        User::create($user_data);

        return redirect()->route('user.index');
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    }


    public function edit(User $user){
        return view('user.edit', compact('user'));
    }

    public function update(User $user){
        $user_data = \request()->validate([
            'fio'=>'string',
            'age'=>'integer',
            'role'=>'string',
            'sex'=>'string',
            'email'=>'required|email',
            'password'=>'required|string|min:6',
            'country'=>'string',
        ]);
        $user_data['role'] = 'guest';

        $user->update($user_data);
        return redirect()->route('user.show', $user->id);
    }

}
