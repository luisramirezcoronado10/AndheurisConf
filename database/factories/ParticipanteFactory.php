<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'fullname' => $this->faker->firstNameMale.' '.$this->faker->lastName(),
            'email' => $this->faker->email,
            'asistencia' => $this->faker->dateTime($max = 'now', $timezone = null)
        ];
    }
}
