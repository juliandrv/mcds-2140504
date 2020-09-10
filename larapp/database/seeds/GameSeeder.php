<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')-> insert([

            'name' =>  'FIFA20',
            'description' => 'futbol',
            'user_id' => 1,
            'category_id' => 1,
            'price' => 60,
            'created_at' => now()            

        ]);

        $game = new Game;
        $game->name = 'resident evil';
        $game->description = 'suspenso';
        $game->user_id = 2;
        $game->category_id = 2;
        $game->price = 80;
        $game->save();
    }
}
