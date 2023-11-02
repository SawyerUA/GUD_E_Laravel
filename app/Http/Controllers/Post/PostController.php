<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
//use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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

    public function store(){
        $data = request()->validate([
            'user_id' => '',
            'title' => 'required|min:5|max:30|unique:posts',
            'content' => 'required|min:5',
            'img' => '',
            'category_id' => 'required',
        ]);
        if (isset($data['img'])) {
            $img = $data['img'];
            $data['img'] = Storage::disk('public')->put('/post_images', $img);
        }
        Post::create($data);
        if (Auth::user()->is_admin == 1) {
            return redirect()->route('post.index', app()->getLocale());
        }else{
            return redirect()->route('forum.index', app()->getLocale());
        }
    }

    public function show(Post $post){
        $categories = Category::all();
        $views = $post->views+1;
        Post::where('id', $post->id)->update(['views' => $views]);

        $users = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->where('user_id', $post->user_id)
            ->select('posts.id','posts.title', 'posts.user_id', 'users.name')
            ->get();
        foreach ($users as $user){
            $user = $user->name;
        }

        $comments = Comment::join('posts', 'comments.post_id', '=', 'posts.id')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('users.name', 'posts.id', 'comments.*')
            ->get();

        return view('forum/admin/posts.show', compact('post', 'categories','user', 'comments'));
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
        return redirect(route('post.index', app()->getLocale()));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect(route('post.index', app()->getLocale()));
    }
}
