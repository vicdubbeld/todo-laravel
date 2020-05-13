<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Todos</title>
</head>
<body>
    <div>
    <h1>Add a task here</h1>
    <form action="post" action="todo/create">
        <input type="text" name="title" />
        <input type="submit" value="Create" />
    </form>
</div>
</body>
</html>
