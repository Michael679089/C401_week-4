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
Route::get('/', [GamesController::class, 'index'])->name('games.index');  // List all games
Route::get("/games/{id}", [GamesController::class, 'show'])->name('games.show'); // Show a single game (like when user goes deeper to that specific games)
Route::delete("/games/{id}", [GamesController::class, 'destroy'])->name('games.destroy'); // Delete a game in the DB