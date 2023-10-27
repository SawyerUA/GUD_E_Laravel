<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function forum(){
        $categories = Category::all();
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id' )
            ->select('users.name', 'posts.*')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        return view('forum.index', compact('categories','posts'));
    }
}

