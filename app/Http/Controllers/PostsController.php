<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        Post::create(
            [
                'title' => $request->get('title'),
                'author' => $request->get('author'),
                'body' => $request->get('body'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts/show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts/edit', compact('post'));
    }

        public function update(Request $request, Post $post)
        {
            $post->update([
                'title' => $request->get('title'),
                'body' => $request->get('body')
            ]);
            $postId = $post->id;

            return redirect("posts/$postId");
        }

    public function destroy(string $id)
    {
    }
}
