<?php

namespace Database\Factories;

use App\Models\Oferta;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Oferta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estado' => $this->faker->name(),
            'id_juego_propuesto' =>  \App\Models\JuegoFisico::inRandomOrder()->first()->id,
            'id_juego_ofertado' =>  \App\Models\JuegoFisico::inRandomOrder()->first()->id,
        ];
    }
}
