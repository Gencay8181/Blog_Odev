<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postlar = Post::latest()->get();
        return view('index', compact('postlar'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
        ]);

        Post::create($request->only('baslik', 'icerik'));
        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
