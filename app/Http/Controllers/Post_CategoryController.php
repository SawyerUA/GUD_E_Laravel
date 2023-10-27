<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Post_CategoryController extends Controller
{
    public function show(Category $category){
        $categories = Category::all();
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('users.name', 'posts.*')
            ->where('posts.category_id', '=', $category->id)
            ->paginate(10);
        //dd($posts);
        return view('forum.post_category', compact('categories', 'category', 'posts'));
    }
}
