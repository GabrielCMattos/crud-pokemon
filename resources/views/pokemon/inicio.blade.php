

@section('title', 'Início')

<x-app-layout>

<div class="flex flex-col justify-center items-center min-h-screen">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-y-32 gap-x-32 mb-24 ">
    <div class="pr-3">
      <a href="pokemon/create" class="group block max-w-md mx-auto rounded-lg p-8 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
        <div class="flex items-center space-x-3">
          <h3 class="text-slate-900 group-hover:text-blue-600 text-lg font-semibold">Create a Pokémon</h3>
        </div>
        <p class="text-slate-800 group-hover:text-blue-500 text-base">Create a new pokémon.</p>
      </a>
    </div>
    <div class="pl-3">
      <a href="pokemon/index" class="group block max-w-md mx-auto rounded-lg p-8 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
        <div class="flex items-center space-x-3">
          <h3 class="text-slate-900 group-hover:text-blue-600 text-lg font-semibold">View all Pokémon</h3>
        </div>
        <p class="text-slate-800 group-hover:text-blue-500 text-base">View all created pokémon.</p>
      </a>
    </div>
    <div class="pr-3">
      <a href="owner/create" class="group block max-w-md mx-auto rounded-lg p-8 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
        <div class="flex items-center space-x-3">
          <h3 class="text-slate-900 group-hover:text-blue-600 text-lg font-semibold">Create a Trainer</h3>
        </div>
        <p class="text-slate-800 group-hover:text-blue-500 text-base">Create a new trainer.</p>
      </a>
    </div>
    <div class="pl-3">
      <a href="owner" class="group block max-w-md mx-auto rounded-lg p-8 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
        <div class="flex items-center space-x-3">
          <h3 class="text-slate-900 group-hover:text-blue-600 text-lg font-semibold">View all Trainers</h3>
        </div>
        <p class="text-slate-800 group-hover:text-blue-500 text-base">View all created trainers.</p>
      </a>
    </div>
  </div>
  
</x-app-layout>
