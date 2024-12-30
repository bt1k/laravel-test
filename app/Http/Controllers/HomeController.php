<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the home page, and pass a variable to it.
     */
    public function home(): View
    {
        return view('home', ['random' => rand()]);
    }
}
