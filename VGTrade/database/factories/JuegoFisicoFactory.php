<?php

namespace Database\Factories;

use App\Models\JuegoFisico;
use Illuminate\Database\Eloquent\Factories\Factory;

class JuegoFisicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JuegoFisico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'condicion' => $this->faker->text(),
            'consola' => $this->faker->name(),
            'titulo_id' => \App\Models\Titulo::inRandomOrder()->first()->id,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,

        ];
    }
}
