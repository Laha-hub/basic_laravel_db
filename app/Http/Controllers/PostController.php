<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // private $posts = [
    //     'Title A',
    //     'Title B',
    //     'Title C',
    // ];

    public function index()
    {
        // レコード全件取得
        // $posts = Post::all();

        // レコードを新規順に並び替え
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // orderBy('created_at', 'desc')の省略記法
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
