<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $categories = Category::all();
        $posts = Post::search()->paginate(10);
        return view('forum.search', compact('categories', 'posts'));
    }
}
