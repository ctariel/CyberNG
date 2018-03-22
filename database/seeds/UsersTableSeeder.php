<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@cyberng',
            'password' => bcrypt('admin'),
            'firstname' => 'administrateur',
            'lastname' => 'tout-puissant',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'username' => 'anim',
            'email' => 'anim@cyberng',
            'password' => bcrypt('anim'),
            'firstname' => 'animateur',
            'lastname' => 'multimedia',
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'username' => 'user',
            'email' => 'user@cyberng',
            'password' => bcrypt('user'),
            'firstname' => 'utilisateur',
            'lastname' => 'lambda',
        ]);
    }
}
