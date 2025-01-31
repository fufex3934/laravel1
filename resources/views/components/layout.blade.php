<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fufa Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Fufa Network</h1>
            <a href="{{route('fufas.index')}}">All Fufas</a>
            <a href="{{route('fufas.create')}}">Create New Fufa</a>
        </nav>
    </header>
    <main class="container">
        {{$slot}}

    </main>
</body>
</html>