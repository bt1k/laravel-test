<x-layout>
    <h2>Posts</h2>
    <p><a href="/posts/new">New post</a></p>
    <p>Last {{ count($posts) }} post(s):</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Created at</th>
            <th>Content</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td><a href="/posts/{{ $post->id }}">{{ $post->id }}</a></td>
                <td>{{ $post->formattedCreationTimestamp() }}</td>
                <td>{{ $post->content }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
