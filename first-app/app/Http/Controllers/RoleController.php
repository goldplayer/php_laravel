<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){}


    public function create(){
      return view('role.create');
    }

//сюда попадают с формы данные
    public function store() {
        $data = \request()->validate([
            'name'=>'string',
        ]);
        Role::create($data);
        return redirect()->route('role.index');
    }

    public function show(Role $role){
        return view('role.show', compact('role'));
    }

    public function edit(Role $role){
        return view('role.edit', compact('role'));
    }

    public function update(Role $role){
        $data = \request()->validate([
            'name'=>'string',
        ]);
//        dd($data);
        $role->update($data);
        return redirect()->route('role.show', $role->id);
    }


    public function showAllRole(){
        $role = Role::all();
        return view('role.index', compact('role'));
    }
}
