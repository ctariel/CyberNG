<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            'name'    => 'Paris',
            'zipCode' => '75000',
            'country' => 'France',
        ]);
        DB::table('cities')->insert([
            'name'    => 'Lyon',
            'zipCode' => '69000',
            'country' => 'France',
        ]);
        DB::table('cities')->insert([
            'name'    => 'Rennes',
            'zipCode' => '35000',
            'country' => 'France',
        ]);
        DB::table('cities')->insert([
            'name'    => 'Londres',
            'zipCode' => 'EC2M',
            'country' => 'Royaume-Uni',
        ]);
        DB::table('cities')->insert([
            'name'    => 'Berlin',
            'zipCode' => '10115',
            'country' => 'Allemagne',
        ]);


    }
}
