<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert([
            'id'  => '1',
            'space_id' => '1',
            'name'     => 'Salle média',
            'comment'  => 'Ordinateurs fixes'
        ]);
        DB::table('rooms')->insert([
            'id'  => '2',
            'space_id' => '1',
            'name'     => 'matériel mobile',
            'comment'  => 'ordinateurs portables et tablettes'
        ]);
        DB::table('rooms')->insert([
            'id'  => '3',
            'space_id' => '2',
            'name'     => 'Médiathèque',
            'comment'  => 'Super commentaire !!'
        ]);
    }
}
