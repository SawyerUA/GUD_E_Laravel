<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use App\Http\Requests\FilterRequest;

class PostController extends BaseController
{
    public function index(){
        $posts = Post::paginate(10);
        $categories = Category::all();
        return view('forum/admin/posts/index', compact('posts', 'categories'));
    }

    public function create(){
        $users = User::all();
        $categories = Category::all();
        return view('forum/admin/posts/create', compact('categories', 'users'));
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        $this->service->store($data);

        if (Auth::user()->is_admin == 1) {
            return redirect()->route('post.index', app()->getLocale());
        }else{
            return redirect()->route('forum.index', app()->getLocale());
        }
    }

    public function show(Post $post){
        $categories = Category::all();
        $comments = Comment::all();
        $views = $post->views+1;
        Post::where('id', $post->id)->update(['views' => $views]);
        return view('forum/admin/posts.show', compact('post', 'categories', 'comments'));
    }

    public function edit(Post $post){
        $categories = Category::all();
        return view('forum/admin/posts/edit', compact('post', 'categories'));
    }

    public function update(Post $post, UpdateRequest $request){
        $data = $request->validated();
        $this->service->update($data, $post);
        return redirect(route('post.index', app()->getLocale()));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect(route('post.index', app()->getLocale()));
    }
}
