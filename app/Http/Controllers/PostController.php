<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('post.index', compact('posts'));
    }

    public function new()
    {
        return view('post.new');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return redirect(route('post_show', ['id' => $post->id]));
    }

    public function edit(Post $post)
    {
        return view('post.edit', ['id' => $post->id]);
    }

    public function update(Request $request, Post $post)
    {
        dd($post->update($request->all()));

        return redirect(route('post_show', ['id' => $post->id]));
    }

    public function delete(Post $post)
    {
        $post->delete();

        redirect(route('post_index'));
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
