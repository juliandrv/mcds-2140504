<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')-> insert([

            'name' => 'Xbox Serie X',
            'description' => 'nueva consola de microsoft',            
            'created_at' => now()

        ]);
          
        //eloquence
        $cat = new Category;
        $cat->name = 'PS5';
        $cat->description = 'Play Station 5';           
        $cat->save();

    }
}
