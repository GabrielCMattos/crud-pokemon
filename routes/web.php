<?php


use App\Http\Controllers\PokemonController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemon', function () {
    return view('pokemon/inicio');
})->middleware(['auth', 'verified'])->name('pokemon.inicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
    Route::get('pokemon/index', [PokemonController::class, 'index'])->name('pokemon.index');
    Route::get('pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
    Route::post('pokemon', [PokemonController::class, 'store']);
    Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');
    Route::put('pokemon/{id}', [PokemonController::class, 'update']);
    Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

    Route::get('owner', [OwnerController::class, 'index'])->name('owner.index');
    Route::get('owner/pokemon/{id}', [OwnerController::class, 'getPokemonByOwner']);
    Route::get('owner/create', [OwnerController::class, 'create'])->name('owner.create');
    Route::post('owner', [OwnerController::class, 'store']);
    Route::get('owner/{id}/edit', [OwnerController::class, 'edit'])->name('owner.edit');
    Route::put('owner/{id}', [OwnerController::class, 'update']);
    Route::delete('owner/{id}', [OwnerController::class, 'destroy']);
});

require __DIR__.'/auth.php';




