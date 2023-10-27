<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        $categories = Category::all();
        $search = $request->search;
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('users.name', 'posts.*')
            ->where('title', 'LIKE', "%$search%")
            ->orWhere('content', 'LIKE', "%$search%")
            ->paginate(10);
        return view('forum.search', compact('categories', 'posts'));
    }
}
