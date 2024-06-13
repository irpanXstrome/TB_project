<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1,Users::all()->count()),
            'rayon' => '050511',
            'stand' => fake()->numberBetween(1,5000),
            'three_months_ago' => fake()->numberBetween(1,100),
            'two_months_ago' => fake()->numberBetween(1,100),
            'last_months' => fake()->numberBetween(1,100),
        ];
    }
}
