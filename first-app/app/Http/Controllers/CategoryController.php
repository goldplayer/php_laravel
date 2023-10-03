<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        return view('category.index');
    }

    public function create(){
        return view('category.create');
    }


    public function store(){
        $category_data = \request()->validate([
            'title'=>'string'
        ]);

        Category::create($category_data);


        return redirect()->view('category.index');
    }
}
