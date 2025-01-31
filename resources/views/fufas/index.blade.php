
<x-layout>
   

    <h2>Currently Available Fufas</h2>
    
    <ul>
    @foreach ($fufas as $fufa)
    <li>
       <x-card href="{{route('fufas.show',$fufa->id)}}" :highlight="$fufa->skill>70">
        <div>
            <h3>{{$fufa->name}}</h3>
            <p>{{$fufa->dojo->name}}</p>
        </div>
       </x-card>
    </li>
        
    @endforeach
    </ul>

    {{$fufas->links()}}
</x-layout>