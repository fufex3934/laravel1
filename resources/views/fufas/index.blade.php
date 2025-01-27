<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fufa Network | Home</title>
</head>
<body>
    <h2>Currently Available Fufas</h2>
    @if ($greeting =="Hello")
    <p>Hi form inside the if statement</p>
    @endif
    <ul>
    @foreach ($fufas as $fufa)
    <li>
        <p>{{$fufa['name']}}</p>
        <a href="/fufas/{{$fufa['id']}}">View Details</a>
    </li>
        
    @endforeach
    </ul>
</body>
</html>