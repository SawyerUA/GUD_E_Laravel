<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forum(){
        $categories = Category::all();
        $posts = Post::paginate(10);
        return view('forum.index', compact('categories', 'posts'));
    }
}
