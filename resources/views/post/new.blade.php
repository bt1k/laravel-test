<x-layout>
    <h2>New Post</h2>
    <form action="/posts" method="post">
        @csrf
        <label>Content</label>
        <input type="text" name="content">
        <br>
        <input type="submit" value="Submit">
    </form>
</x-layout>
