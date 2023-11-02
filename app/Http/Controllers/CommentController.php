<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    public function store(Post $post){
        $data = request()->validate([
            'user_id' => '',
            'comment' => '',
            'post_id' => '',
        ]);
        Comment::create($data, $data);
        return redirect(route('post.show', [$post->id, app()->getLocale()]));
    }

//    public function edit(Comment $comment, Post $post){
//        return redirect(route('post.show', [$comment, $post->id, app()->getLocale()]));
//    }
//
//    public function update(Comment $comment, Post $post){
//        $data = request()->validate([
//            'user_id' => '',
//            'comment' => '',
//            'post_id' => '',
//        ]);
//        $comment->update($data);
//        return redirect(route('post.show', [$post->id, app()->getLocale()]));
//    }

    public function destroy(Comment $comment, Post $post){
        $comment->delete();
        return redirect(route('post.show', [$post->id, app()->getLocale()]));
    }
}
