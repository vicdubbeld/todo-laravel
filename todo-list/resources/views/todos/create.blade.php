<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Todos</title>
</head>
<body>
    <div class="text-center pt-10">
    <h1 class="text-2xl">Add a task here</h1>
    <form action="post" action="todo/create" class="py-5">
        <input type="text" name="title" class="py-2 px-2 border rounded" />
        <input type="submit" value="Create" class="p-2 border rounded-lg" />
    </form>
</div>
</body>
</html>
