
<x-layout>
    <h2>Currently Available Fufas</h2>
    {{-- @if ($greeting =="Hello")
    <p>Hi form inside the if statement</p>
    @endif --}}
    <ul>
    @foreach ($fufas as $fufa)
    <li>
       <x-card href="/fufas/{{$fufa->id}}" :highlight="$fufa->skill>70">
        <h3>{{$fufa->name}}</h3>
       </x-card>
    </li>
        
    @endforeach
    </ul>
</x-layout>