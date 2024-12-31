<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
    public function show(string $id): View
    {
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Store a new post.
     */
    public function store(Request $request): RedirectResponse
    {
        Post::create(['content' => $request->content]);
        return redirect('/');
    }
}
