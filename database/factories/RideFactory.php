<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ride>
 */
class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'citizen_id' => fake()->numberBetween(1, 100),
            'company_id' => fake()->numberBetween(1, 10),
            'length' => fake()->numberBetween(1, 30)
        ];
    }
}
