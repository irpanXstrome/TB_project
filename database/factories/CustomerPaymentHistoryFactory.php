<?php

namespace Database\Factories;

use App\Models\CustomerBillRecording;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerPaymentHistory>
 */
class CustomerPaymentHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loket = ['Dana','Gopay','BNI','Mandiri','BCA'];
        return [
            'record_id' => fake()->numberBetween(1,CustomerBillRecording::all()->count()),
            'paid_total' => fake()->numberBetween(10000,100000),
            'counter' => $loket[array_rand($loket)]
        ];
    }
}
