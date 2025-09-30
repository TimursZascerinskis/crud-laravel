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
            <li>{{ $post->title }}: {{ $post->content }}</li>
        @endforeach
    </ul>

</body>
</html>
