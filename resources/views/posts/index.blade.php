<!DOCTYPE html>
<html>
<head>
    <title>Posti</title>
</head>
<body>
    <h1>Visi posti</h1>

    <a href="/posts/create">Izveidot jaunu postu</a>

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>: {{ $post->content }}
                <br>
                <a href="{{ url('/posts/' . $post->id) }}">Skatīt detaļas</a>
            </li>
        @endforeach
    </ul>

</body>
</html>
