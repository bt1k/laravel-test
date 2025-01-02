<x-layout>
    @if ($info !== '')
        <p>Dev server info: {{ $info }}</p>
    @endif
    <p><a href="/posts">Posts</a></p>
    <p><a href="/posts/new">New post</a></p>
</x-layout>
