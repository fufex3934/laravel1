<x-layout>
    <h2>{{$fufa->name}}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{$fufa->skill}}</p>
        <p><strong>About me:</strong>{{$fufa->bio}}</p>
    </div>
{{-- 
    dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo Information</h3>
        <p><strong>Dojo name:</strong>{{$fufa->dojo->name}}</p>
        <p><strong>Location:</strong>{{$fufa->dojo->location}}</p>
        <p><strong>About the Dojo:</strong>{{$fufa->dojo->description}}</p>
    </div>
    <form action="{{route('fufas.destroy',$fufa->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4">Delete Fufa</button>
    </form>
</x-layout>