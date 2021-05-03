<?php

namespace Database\Factories;

use App\Models\Resena;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResenaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resena::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'id_user' =>  \App\Models\User::inRandomOrder()->first()->id,
           // 'id_user' =>  $this->faker->unique(),
            'id_titulo' =>  \App\Models\Titulo::inRandomOrder()->first()->id,
            'calificacion' => $this->faker->numberBetween(1,10),
            'descripcion' => $this->faker->text()
        ];
    }
}
