<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Rules\ValidPostRule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show the most recent 10 posts.
     */
    public function index(): View
    {
        return view('post.index', ['posts' => Post::orderBy('id', 'desc')->take(10)->get()]);
    }

    /**
     * Show a given post.
     */
    public function show(Request $request, string $id): View
    {
        return view('post.show', [
            'post' => Post::findOrFail($id),
            'status' => $request->session()->get('status'),
        ]);
    }

    /**
     * Store a new post.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => ['required', 'string', new ValidPostRule],
        ]);
        $post = Post::create(['content' => $request->content]);
        $request->session()->flash('status', 'Post successfully created');

        return redirect('/posts/'.$post->id);
    }

    /**
     * Destroy a post.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
    }
}
