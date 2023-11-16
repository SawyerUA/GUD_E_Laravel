<?php

namespace App\Service\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{

    public function store($data)
    {
        if (isset($data['img'])) {
            $img = $data['img'];
            $data['img'] = Storage::disk('public')->put('/post_images', $img);
        }
        Post::create($data);
    }

    public function update($data, $post)
    {
        if (isset($data['img'])) {
            $img = $data['img'];
            $data['img'] = Storage::disk('public')->put('/post_images', $img);
        }
        $post->update($data);
        return $post;
    }

}
