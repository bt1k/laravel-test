<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show a given post.
     */
    public function show(string $id): View
    {
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }
}
