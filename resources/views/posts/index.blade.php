<!DOCTYPE html>
<html>
<head>
    <title>Posti</title>
</head>
<body>
    <h1>Visi posti</h1>

    <a href="/posts/create">Izveidot jaunu postu</a>

    <ul>
        @foreach ($posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
            content: {{ $post->content }} <br>
            {{-- <a href="{{ url('/posts/' . $post->id) }}">Show</a> --}}
            <form action="{{ url('/posts/' . $post->id) }}" style="display:inline;">
                @csrf
                <button type="submit">Show</button>
            </form>

            <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Destroy</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
