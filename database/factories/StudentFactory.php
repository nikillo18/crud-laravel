<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "dni"=>fake()->randomNumber($nbDigits=8,$strict=true),
            'apellido' => fake()->lastName(),
            'nombre' => fake()->name(),
            "nacimiento"=>fake()->date(),
            'año'=>fake()->numberBetween($min = 1, $max = 3),
            'asisst'=>fake()->numberBetween($min = 1, $max = 10)
        ];
    }
}
