<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.create');
    }


    public function store(){
        $category_data = \request()->validate([
            'title'=>'string'
        ]);

        Category::create($category_data);
       
        return redirect()->route('category.index');
    }

    public function show(Category $category){
        return view('category.show', compact('category'));
    }

    public function edit(Category $category){
        return view('category.edit', compact('category'));
    }
    
    public function update(Category $category){
        $category_data = \request()->validate([
            'title'=>'string'
        ]);

        $category->update($category_data);
        return redirect()->route('category.index', $category->id);
    }

}
