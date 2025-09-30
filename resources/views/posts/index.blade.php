<!DOCTYPE html>
<html>
<head>
    <title>Posti</title>
</head>
<body>
    <h1>Visi posti</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}: {{ $post->content }}</li>
        @endforeach
    </ul>

</body>
</html>
