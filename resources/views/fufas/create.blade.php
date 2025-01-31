<x-layout>
    <h2>Create Page</h2>
    <form action="{{route('fufas.store')}}" method="POST">
        @csrf
        <h2>Create a New Ninja</h2>
      
        <!-- ninja Name -->
        <label for="name">Fufa Name:</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          value="{{ old('name') }}" 
          required
        >
      
        <!-- Fufa Strength -->
        <label for="skill">Fufa Skill (0-100):</label>
        <input 
          type="number" 
          id="skill" 
          name="skill" 
          required
        >
      
        <!-- Fufa Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio" 
          name="bio" 
          required
        ></textarea>
      
        <!-- select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
          <option value="" disabled selected>Select a dojo</option>
          @foreach($dojos as $dojo)
          <option value="{{$dojo->id}}">{{$dojo->name}}</option>
          @endforeach
          
        </select>
      
        <button type="submit" class="btn mt-4">Create Fufa</button>
      
        <!-- validation errors -->
        
      </form>
</x-layout>