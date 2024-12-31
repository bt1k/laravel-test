<x-layout>
    <h2>Posts</h2>
    @isset($status)
        <p class="statusMessage">{{ $status }}</p>
    @endisset
    <p><a href="/posts/new">New post</a></p>
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
</x-layout>
