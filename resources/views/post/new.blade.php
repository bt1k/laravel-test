<x-layout>
    <h2>New Post</h2>
    @if ($errors->any())
        <div class="infoMessage error">
            <p>Errors when trying to save post:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/posts" method="post">
        @csrf
        <p>
            <i>
                Content must be the value of "Hello" or "Greetings" or "Bonjour" (case sensitive).
            </i>
        </p>
        <label>Content</label>
        <input type="text" name="content">
        <br>
        <input type="submit" value="Submit">
    </form>
</x-layout>
