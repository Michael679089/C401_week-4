<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Step 3. Your code here
        return view('games.index', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Step 4.
        echo "Our id we want to get: $id";

        // Find the game with the matching id
        $game = collect($this->game_list)->firstWhere('id', $id);

        // Optionally, handle not found
        if (!$game) {
            abort(404, 'Game not found');
        }

        // Return a view for a single game
        return view('games.index', ['games' => [$game]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theRemovedID = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] == $id;
        });

        return response()->json([
            'message' => 'Record Successfully Deleted.',
            'the-removed-id' => $theRemovedID
        ], 200);
    }

    /// For the Game Model

    public function index_game()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function show_game($id)
    {
        $game = Game::findOrFail($id);
        return view('games.index', ['games' => [$game]]);
    }

    public function destroy_game($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return response()->json([
            'message' => 'Record Successfully Deleted.',
            'the-removed-id' => $id,
            'redirect' => route('games.index_game')
        ], 200);

        // planning to use this code to redirect me back to the index but I can't because of the response->json.
        // return redirect()->route('games.index_game')->with('success', 'Game deleted successfully!');
    }
}