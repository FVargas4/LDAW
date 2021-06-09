<?php

namespace Database\Factories;

use App\Models\Titulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TituloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Titulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'condicion' => $this->faker->text(),
            'consola' => $this->faker->name(),
            'aprobado' => $this->faker->boolean(),
        ];
    }
}
