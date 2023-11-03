<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Post_CategoryController extends Controller
{
    public function show(Category $category){
        $categories = Category::all();
        $posts = Post::where('posts.category_id', '=', $category->id)->paginate(10);
        return view('forum.post_category', compact('categories', 'category', 'posts'));
    }
}
