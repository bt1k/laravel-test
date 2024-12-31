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
        <h1>Post</h1>
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <th>Created at</th>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th>Updated at</th>
                <td>{{ $post->updated_at }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ $post->content }}</td>
            </tr>
        </table>
    </body>
</html>
