<?php

use Illuminate\Database\Seeder;

class HardwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hardware')->insert([
            'id'  => '1',
            'room_id' => '1',
            'name'     => 'PC-Cyber1',
            'IPAddress' => '192.168.0.1',
            'MACAddress' => 'AA:BB:CC:DD:EE:FF',
            'comment'  => 'Ordi N°1'
        ]);
        DB::table('hardware')->insert([
            'id'  => '2',
            'room_id' => '1',
            'name'     => 'PC-Cyber2',
            'IPAddress' => '192.168.0.2',
            'MACAddress' => 'AA:BB:CC:DD:EE:FF',
            'comment'  => 'Ordi N°2'
        ]);
        DB::table('hardware')->insert([
            'id'  => '3',
            'room_id' => '1',
            'name'     => 'PC-Cyber3',
            'IPAddress' => '192.168.0.3',
            'MACAddress' => 'AA:BB:CC:DD:EE:FF',
            'comment'  => 'Ordi N°3'
        ]);
    }
}
