<?php

namespace Database\Factories;

use App\Models\CustomerBillRecording;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageData>
 */
class ImageDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $buffer = base64_encode(file_get_contents(database_path('factories/img_1.png')));
        return [
            'record_id' => fake()->numberBetween(1,CustomerBillRecording::all()->count()),
            'image_data' => $buffer,
        ];
    }
}
