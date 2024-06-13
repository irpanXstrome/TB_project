<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = mt_rand(0,1);
        $name = fake()->name($gender ? 'male' : 'female');
        return [
            'name' => fake()->name(),
            'username' => strtolower(str_replace(' ','_',$name)),
            'address' => fake()->address(),
            'number' => fake()->phoneNumber(),
            'role' => 0,
            'gender' => $gender+2,
            'password' => Hash::make('123'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
