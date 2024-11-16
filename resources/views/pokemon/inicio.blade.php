@extends('layouts.app')

@section('title', 'Início')

@section('content')

<img class="w-64 place-content-center" style="position:fixed;top:0" src="logopokemon.png" alt="">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 min-h-screen flex items-center">

<div class="pr-3">
<a href="pokemon/create" class="group block max-w-xs mx-auto rounded-lg p-6 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
  <div class="flex items-center space-x-3">
    <h3 class="text-slate-900 group-hover:text-blue-600 text-sm font-semibold">Create a Pokémon</h3>
  </div>
  <p class="text-slate-800 group-hover:text-blue-500 text-sm">Create a new pokémon.</p>
</a>
</div>
<div class="pl-3">
<a href="pokemon/index" class="group block max-w-xs mx-auto rounded-lg p-6 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
  <div class="flex items-center space-x-3">
    <h3 class="text-slate-900 group-hover:text-blue-600 text-sm font-semibold">View all Pokémon</h3>
  </div>
  <p class="text-slate-800 group-hover:text-blue-500 text-sm">View all created pokémon.</p>
</a>
</div>
<div class="pr-3">
<a href="owner/create" class="group block max-w-xs mx-auto rounded-lg p-6 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
  <div class="flex items-center space-x-3">
    <h3 class="text-slate-900 group-hover:text-blue-600 text-sm font-semibold">Create a Trainer</h3>
  </div>
  <p class="text-slate-800 group-hover:text-blue-500 text-sm">Create a new trainer.</p>
</a>
</div>
<div class="pl-3">
<a href="owner" class="group block max-w-xs mx-auto rounded-lg p-6 bg-amber-400 border-4 border-blue-600 ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:scale-110">
  <div class="flex items-center space-x-3">
    <h3 class="text-slate-900 group-hover:text-blue-600 text-sm font-semibold">View all Trainers</h3>
  </div>
  <p class="text-slate-800 group-hover:text-blue-500 text-sm">View all created trainers.</p>
</a>
</div>
</div>
@endsection