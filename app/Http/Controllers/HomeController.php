<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the home page, and pass a variable to it.
     */
    public function home(): View
    {
        $info = '';
        if (App::environment('local')) {
            $info = 'Laravel v'.Application::VERSION.' (PHP v'.PHP_VERSION.')';
        }

        return view('home', ['info' => $info]);
    }
}
