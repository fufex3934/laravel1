
<x-layout>
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
</x-layout>