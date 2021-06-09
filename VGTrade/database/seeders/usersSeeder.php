<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'equipo',
            'email' => 'equipo@correo.com',
            'telefono' => '4444333221',
            'password' => Hash::make('contrasena'),
            'rol_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'usuario',
            'email' => 'user@correo.com',
            'telefono' => '4444333221',
            'password' => Hash::make('contrasena'),
            'rol_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@correo.com',
            'telefono' => '4271212121',
            'password' => Hash::make('contrasena'),
            'rol_id' => 1,
        ]);
    }
}
