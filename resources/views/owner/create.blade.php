@section('title', 'Novo Treinador')

<x-app-layout>
<div class="pb-12 w-full max-w-xs mx-auto flex items-center justify-center min-h-screen ">
  <form class="bg-white shadow-md rounded px-20 pb-6 mb-4" action="{{ url('owner') }}" method="POST" enctype="multipart/form-data">
  <img src="../logosaraiva.png" alt="logopokemon" class="">
  @csrf
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Pokémon Name">
        Owner Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Owner Name" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Pokémon Imagem">
        Owner Image
      </label>
      <input class="shadow appearance-none border rounded py-2 px-3 w-80 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" required>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-amber-400 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create Owner
      </button>
    </div>
    <div class="flex items-center justify-center">
      <a href="/owner"><button class=" shadow appearance-none bg-amber-400 hover:scale-110 font-bold py-2 px-4 mt-2 rounded focus:outline-none focus:shadow-outline" type="button">
        All Owners
      </button>
      </a>
    </div>
  </form>
</div>
</x-app-layout>



