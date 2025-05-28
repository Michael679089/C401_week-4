<?php

use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/get-csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});

// Routes for GamesController actions
Route::get('/', [GamesController::class, 'index_game'])->name('games.index');  // List all games
Route::get("/games/{id}", [GamesController::class, 'show_game'])->name('games.show_game'); // Show a single game (like when user goes deeper to that specific games)
Route::delete("/games/{id}", [GamesController::class, 'destroy_game'])->name('games.destroy_game'); // Delete a game in the DB
Route::get('games/{id}/form', function ($id) {
    $game = App\Models\Game::findOrFail($id); // If using Eloquent
    // If using array: $game = collect(require database_path('datasource.php'))->firstWhere('id', $id);
    return view('games.form', compact('game'));
})->name('games.form');