<!DOCTYPE html>
<html>
<head>
    <title>create</title>
</head>
<body>
    <h1>Izveidot jaunu postu</h1>

    <form action="/posts/store" method="POST">
        @csrf 

        <label for="title">Nosaukums:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">Saturs:</label><br>
        <textarea id="content" name="content" required></textarea><br><br>

        <button type="submit">Izveidot</button>
    </form>

</body>
</html>
