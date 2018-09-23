<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $this->call(CitiesTableSeeder::class);
        $this->call(SpacesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(HardwareTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
    }
}
