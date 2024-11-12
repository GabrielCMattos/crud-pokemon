<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('pokemon', [PokemonController::class, 'inicio']);
Route::get('pokemon/index', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'store']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

Route::get('owner', [OwnerController::class, 'index']);
Route::get('owner/pokemon/{id}', [OwnerController::class, 'getPokemonByOwner']);
Route::get('owner/create', [OwnerController::class, 'create']);
Route::post('owner', [OwnerController::class, 'store']);
Route::get('owner/{id}/edit', [OwnerController::class, 'edit']);
Route::put('owner/{id}', [OwnerController::class, 'update']);
Route::delete('owner/{id}', [OwnerController::class, 'destroy']);