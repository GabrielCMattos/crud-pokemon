@section('title', 'Pokémon do Treinador')

<x-app-layout>
<div class="justify-center flex items-center min-h-screen pb-32">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @foreach($pokemons as $pokemon)
        <div class="w-64 p-3">
            <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white border-4 border-amber-400">
                <div class="bg-gray-100 py-6 flex justify-center border-b-4 border-amber-400">
                    <img class="hover:scale-150 w-20" src="{{ asset('storage/' . $pokemon->caminhoImage) }}" alt="fotinhoPokemon">
                </div>
                <div class="">
                    <div class="px-12 pb-4 pt-2 text-align-center flex items-center justify-center font-bold text-xl">
                        <h3 class="underline underline-offset-4">{{ $pokemon->name }}</h3>
                    </div>
                    <div class="px-12 text-align-center flex-col justify-center">
                    <p>{{ $pokemon->type }}</p>
                    <p>{{ $pokemon->powerPoints }}</p>
                    <p>{{ $pokemon->owner->name}}</p>
                    </div>
                    <div class="flex items-right justify-end pr-2">
                    <a href="{{ url('pokemon/'.$pokemon->id.'/edit') }}"><button><img class="w-5 mr-1 hover:scale-110 flex "src="/editarlogo.png" alt=""></button></a>
                    <form onsubmit="return confirm('Deseja realmente excluir?')" action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><img class="w-5 ml-1 hover:scale-110 flex "src="/delete.png" alt=""></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
    <div class="mb-1" style="position:fixed;bottom:0"">
    {{$pokemons->links()}}
    </div>
</div>
</x-app-layout>

