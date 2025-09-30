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
            <strong>{{ $post->title }}</strong>: {{ $post->content }}

            <a href="{{ url('/posts/' . $post->id) }}">Skatīt detaļas</a>

            <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tiešām dzēst šo postu?')">Dzēst</button>
            </form>
        </li>
    @endforeach
</ul>


</body>
</html>
