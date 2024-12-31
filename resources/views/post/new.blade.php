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
        <h1>New Post</h1>
        <form action="/posts" method="post">
            @csrf
            <label>Content</label>
            <input type="text" name="content">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
