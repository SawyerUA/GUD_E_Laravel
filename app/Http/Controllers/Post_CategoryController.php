<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Post_CategoryController extends Controller
{
    public function show(Category $category){
        $categories = Category::all();
        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('users.name', 'posts.*')->paginate(10);
        return view('forum.post_category', compact('categories', 'category', 'posts'));
    }
}
