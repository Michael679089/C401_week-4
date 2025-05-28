<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        // Load the array from datasource.php
        $games = require database_path('datasource.php');

        // Insert each game into the database
        foreach ($games as $game) {
            DB::table('games')->insert($game);
        }
    }
}