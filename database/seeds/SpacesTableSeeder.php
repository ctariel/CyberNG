<?php

use Illuminate\Database\Seeder;

class SpacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('spaces')->insert([
            'city_id' => '3',
            'name'    => 'Espace Public Numérique de Test',
            'address' => '2, avenue des Ordinateurs',
            'phoneNumber' => '01.23.45.67.89',
            'logo' => '',
            'email' => 'epn@cyberng.oo'
        ]);
        DB::table('spaces')->insert([
            'city_id' => '2',
            'name'    => 'Médiathèque Municipale',
            'address' => '10, rue des plantes',
            'phoneNumber' => '98.76.54.32.10',
            'logo' => '',
            'email' => 'mediatheque@cyberng.oo'
        ]);
    }
}
