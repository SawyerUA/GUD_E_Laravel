<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'name' => 'Admin',
//            'email' => 'admin@admin.com',
//            'is_admin' => 1,
//            'is_registered' => 1,
//            'email_verified_at' => now(),
//            'password' => password_hash('1111',PASSWORD_DEFAULT), // password
//            'remember_token' => Str::random(10),

            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'is_admin' => 0,
            'is_registered' => 1,
            'email_verified_at' => now(),
            'password' => password_hash('1111',PASSWORD_DEFAULT), // password
            'remember_token' => Str::random(10),
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
