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
        <h1>Posts</h1>
        <p>Here is/are the last {{ count($posts) }} post(s):</p>
        <table>
            <tr>
                <th>ID</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Content</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="/posts/{{ $post->id }}">{{ $post->id }}</a></td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
