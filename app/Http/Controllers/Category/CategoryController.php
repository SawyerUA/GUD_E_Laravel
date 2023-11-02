<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use function Laravel\Prompts\error;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('forum/admin/categories/index', compact('categories'));
    }

    public function create(){
        $categories = Category::all();
        return view('forum/admin/categories/create', compact('categories'));
    }

    public function store(){
        $data = request()->validate([
            'category' => 'required|min:5|max:30|unique:categories',
        ]);
        Category::create($data);
        return redirect()->route('category.index', app()->getLocale());
    }

    public function edit(Category $category){
        $categories = Category::all();
        return view('forum/admin/categories/edit', compact('category', 'categories'));
    }

    public function update(Category $category){
        $data = request()->validate([
            'category' => '',
        ]);
        $category->update($data);
        return redirect(route('category.index', app()->getLocale()));
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect(route('category.index'));
    }
}
