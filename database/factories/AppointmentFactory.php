<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gurdian_name' => fake()->name(),
            'gurdian_email' => fake()->unique()->safeEmail(),
            'student_name' => fake()->name(),
            'student_age' => fake()->numberBetween($min= 4, $max=15),
            'message' => fake()->text()
        ];
    }
}
