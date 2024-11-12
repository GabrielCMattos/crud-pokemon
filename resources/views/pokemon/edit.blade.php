@extends('layouts.app')

@section('title', 'Novo Pokémon')

@section('content')

<div class="w-full max-w-xs mx-auto flex items-center justify-center min-h-screen">
    <form  class="bg-white shadow-md rounded px-20 pt-6 pb-8 mb-4" action="{{ url('pokemon/' . $pokemons->id) }}" method="POST" enctype="multipart/form-data">
    <img src="/logopokemon.png" alt="logopokemon" class="pb-6">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Name">
        Edit Pokémon Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Pokémon Name" value ="{{$pokemons->name}}" required>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Type">
        Edit Pokémon Type(s)
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" type="text" placeholder="Pokémon Type(s)"  value ="{{$pokemons->type}}" required>
    </div>
   
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Power Points">
        Edit Pokémon Power Points
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="powerPoints" type="number" placeholder="Pokémon Power Points"  value ="{{$pokemons->powerPoints}}" required>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pokémon Image">
        Edit Pokémon Image
      </label>
      <input class="shadow appearance-none border rounded py-2 px-3 w-80 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" value="{{$pokemons->caminhoImage}}" required>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-amber-400 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update Pokémon
      </button>
    </div>
    <div class="flex items-center justify-center">
      <a href="/pokemon/index"><button class="bg-amber-400 hover:scale-110 font-bold py-2 px-4 mt-3 rounded focus:outline-none focus:shadow-outline" type="button">
        All Pokémon
      </button>
      </a>
    </div>
    </form>
</div>

@endsection