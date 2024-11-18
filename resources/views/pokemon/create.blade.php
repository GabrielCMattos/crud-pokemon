

@section('title', 'Novo Pokémon')


<x-app-layout>
<div class="w-full max-w-xs mx-auto flex items-center justify-center pt-2">
  <form class="bg-white shadow-md rounded px-20 pt-6 pb-8 mb-2" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
  <img src="../logopokemon.png" alt="logopokemon" class="pb-2">
  @csrf
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Name">
        Pokémon Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Pokémon Name" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Type">
        Pokémon Type(s)
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" type="text" placeholder="Pokémon Type(s)" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Power Points">
        Pokémon Power Points
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="powerPoints" type="number" placeholder="Pokémon Power Points" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Owner">
        Pokémon Owner
      </label>
      <select class="block text-gray-700 text-sm font-bold mb-2" name="owner_id">
        @forelse ($owners as $owner)
          <option value ="{{$owner->id}}">{{$owner->name}}</option>
          @empty
          <option disabled>Nenhum owner cadastrado</option>
        @endforelse
      </select>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Imagem">
        Pokémon Image
      </label>
      <input class="shadow appearance-none border rounded py-2 px-3 w-80 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" required>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-amber-400 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create Pokémon
      </button>
    </div>
    <div class="flex items-center justify-center">
      <a href="/pokemon"><button class=" shadow appearance-none bg-amber-400 hover:scale-110 font-bold py-2 px-4 mt-3 rounded focus:outline-none focus:shadow-outline" type="button">
        All Pokémon
      </button>
      </a>
    </div>
  </form>
</div>
</x-app-layout>




