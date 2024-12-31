<x-layout>
    <h2>Post</h2>
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
</x-layout>
