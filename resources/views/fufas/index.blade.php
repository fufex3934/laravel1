<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fufa Network | Home</title>
</head>
<body>
    <h2>Currently Available Fufas</h2>
    <p>{{ $greeting}}</p>
    <ul>
    <li>   <a href="">
        {{$fufas[0]["name"]}}
       </a>
    </li>
    <li>   <a href="">
        {{$fufas[1]["name"]}}
       </a>
    </li>
    </ul>
</body>
</html>