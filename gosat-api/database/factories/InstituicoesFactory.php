<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstituicoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->words(2, true)
        ];
    }
}
