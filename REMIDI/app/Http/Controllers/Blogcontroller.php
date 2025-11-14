<?php

namespace App\Http\Controllers;

use App\Models\Post; // pastikan ini ditambahkan!

class BlogController extends Controller
{
    // halaman home isinya banyak post
    public function home()
    {
        $posts = Post::data();
        $totalposts = Post::count();

        return view('home', compact('posts', 'totalposts'));
    }

    // halaman single post
    public function show($id)
    {
        $post = Post::caridata($id);

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }

    // halaman tentang
    public function about()
    {
        $info = [
            'name' => 'deva',
            'bio' => 'penulis.'
        ];

        return view('about', compact('info'));
    }
}
