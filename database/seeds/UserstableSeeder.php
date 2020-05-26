<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserstableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aeromat',
            'email' => 'Aeroshopsas@gmail.com',
            'password' => Hash::make('123'),
            'rol' => 1,
            'apellidos' => 'Aerosoles sas'
        ]);
        DB::table('users')->insert([
            'name' => 'carlos zambrano',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('123'),
            'rol' => false,
            'apellidos' => 'Zambrano Lamar'

        ]);
    }
}
