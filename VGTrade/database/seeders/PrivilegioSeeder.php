<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("privilegio")->insert([
            ["id" => 1, "nombre" => "Usuarios"],
            ["id" => 2, "nombre" => "Crear_Titulos"],
            ["id" => 3, "nombre" => "Ver_Calendario"],
            ["id" => 4, "nombre" => "Crear_Resena"],
            ["id" => 5, "nombre" => "Crear_oferta"]
        ]);
    }
}
