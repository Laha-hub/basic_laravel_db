<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    // Implicit Binding
    // public function show($id)
    public function show(Post $post)
    {
        // 引数 Post $post で投稿データのidを取得できるので、下記不要となる
        // $post = Post::findOrFail($id);

        return view('posts.show')
            ->with(['post' => $post]);
    }
}
