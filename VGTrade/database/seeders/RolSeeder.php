<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Alta de los roles
        DB::table("rol")->insert([
            ["id" => 1, "nombre" => "usuario"],
            ["id" => 2, "nombre" => "admin"]
        ]);

        //Asociación de los roles con sus privilegios
        DB::table("rol_privilegio")->insert([
            //User
            ["id" => 1, "rol_id" => 1, "privilegio_id" => 5],
            ["id" => 2, "rol_id" => 1, "privilegio_id" => 3],
            ["id" => 3, "rol_id" => 1, "privilegio_id" => 4],
            
            //Admin
            ["id" => 4, "rol_id" => 2, "privilegio_id" => 1],
            ["id" => 5, "rol_id" => 2, "privilegio_id" => 2],
            ["id" => 6, "rol_id" => 2, "privilegio_id" => 3],
            ["id" => 7, "rol_id" => 2, "privilegio_id" => 4],
            ["id" => 8, "rol_id" => 2, "privilegio_id" => 5]
        ]);
    }
}
