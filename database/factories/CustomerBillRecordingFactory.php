<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerBillRecording>
 */
class CustomerBillRecordingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_sl' => fake()->unique()->numberBetween(20000,20000+Customers::all()->count()),
            'usage' => fake()->numberBetween(0,30),
            'water_costs' => fake()->numberBetween(6000,20000),
            'load_costs' => fake()->numberBetween(6000,20000),
            'fine' => fake()->numberBetween(0,5000),
        ];
    }
}
