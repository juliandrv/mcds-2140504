<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([

            'fullname' => 'Alejo López',
            'email' => 'alejoloopez5@gmail.com',
            'phone' => 3192768238,
            'birthdate' => '1987/08/20',
            'gender' => 'Male',
            'address' => 'calle falsa 123',
            'password' => bcrypt('admin'),
            'role' => 'Admin',
            'created_at' => now()

        ]);

        //eloquence
        $usr = new User;
        $usr->fullname = 'Manuel Gutierrez';
        $usr->email = 'malg.nmg@hotmail.com';
        $usr->phone = 3502487845;
        $usr->birthdate = '1988/08/20';
        $usr->gender = 'Male';
        $usr->address = 'Calle verdadera 654';
        $usr->password = bcrypt('customer');        
        $usr->save();

        //factory
        factory(User::class, 100)->create();
    }
}
