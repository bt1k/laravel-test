<x-layout>
    <h2>Post</h2>
    @isset($status)
        <div class="infoMessage okay">{{ $status }}</div>
    @endisset
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>Created at</th>
            <td>{{ $post->formattedCreationTimestamp() }}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{ $post->content }}</td>
        </tr>
    </table>
    <form id="deletePostForm">
        <fieldset disabled>
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <input type="submit" value="Delete">
        </fieldset>
    </form>
    <p><a href="/posts">&larr; Posts</a></p>
</x-layout>
