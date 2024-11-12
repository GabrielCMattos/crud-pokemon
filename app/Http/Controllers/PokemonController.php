<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Owner;
use Illuminate\Http\Request;


class PokemonController extends Controller
{

public function inicio()
{
    return view ('pokemon.inicio');
}
    public function index()
{
    $pokemons = Pokemon::simplePaginate(8);

    return view('pokemon.index', compact('pokemons'));
}

public function create()
{   
    $owners = Owner::all();
    return view('pokemon.create', compact('owners'));
}

public function store(Request $request)
{
    $caminhoImage = $request->file("image")->store("images","public");
    $pokemons = Pokemon::create([
        "owner_id"=>$request->owner_id,
        "name"=>$request->name,
        "type"=>$request->type,
        "powerPoints"=>$request->powerPoints,
        "caminhoImage"=>$caminhoImage
    ]);
    return redirect('pokemon/index')->with('success', 'Pokemon created successfully.');
}

public function edit($id)
{
    $pokemons = Pokemon::findOrFail($id);
    return view('pokemon.edit', compact('pokemons'));
}

public function update(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $caminhoImage = $request->file("image")->store("images","public");
    $pokemon = $pokemon->update([
        "name"=>$request->name,
        "type"=>$request->type,
        "powerPoints"=>$request->powerPoints,
        "caminhoImage"=>$caminhoImage
    ]);
    return redirect('pokemon/index')->with('success', 'Pokemon updated successfully.');
}

public function destroy($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
}
}
