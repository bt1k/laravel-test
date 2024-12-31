<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Test</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <h1>Laravel Test</h1>
        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        <p>Random number from controller is: {{ $random }}</p>
        <p><a href="/posts/1">Post 1</a></p>
        <p><a href="/posts/2">Post 2</a></p>
        <p><a href="/posts/3">Post 3</a></p>
    </body>
</html>
