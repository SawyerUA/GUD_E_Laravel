<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
//use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        $categories = Category::all();
        return view('forum/admin/posts/index', compact('posts', 'categories'));
    }

    public function create(){
        $categories = Category::all();
        return view('forum/admin/posts/create', compact('categories'));
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5',
            'category_id' => 'required',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post){
        $categories = Category::all();
        return view('forum/admin/posts.show', compact('post', 'categories'));
    }

    public function edit(Post $post){
        $categories = Category::all();
        return view('forum/admin/posts/edit', compact('post', 'categories'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'required|min:5',
            'content' => 'required|max:500',
            'category_id' => 'required',
        ]);
        $post->update($data);
        return redirect(route('post.index'));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect(route('post.index'));
    }
}
