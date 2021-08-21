<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $data = [
            'posts' => $posts
        ];

        return view('admin.posts.index', $data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = Post::create($request->only(['title', 'content']));
        $file = $request->file('cover');

        $file->storeAs('public', $post->id . '.' . $file->extension());

        session()->flash('status', 'store');

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];

        return view('admin.posts.edit', $data);
    }

    public function update(Post $post, PostRequest $request)
    {
        $post->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('status', 'destroy');

        return redirect()->route('admin.posts.index');
    }
}
