<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Titulo::factory(100)->create();
         \App\Models\JuegoFisico::factory(10)->create();
         \App\Models\Oferta::factory(10)->create();
         \App\Models\Resena::factory(10)->create();
         
         $this->call([
            PrivilegioSeeder::class,
            RolSeeder::class,
            usersSeeder::class,
            ]);
    }
}
