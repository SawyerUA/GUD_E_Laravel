<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10),
            'content' => fake()->text(rand(40, 200)),
            'img' => fake()->imageUrl(),
            'views' => random_int(1, 1000),
            'category_id' => Category::get()->random()->id,
            'user_id' => User::get()->random()->id,
            'created_at' => fake()->date('Y-m-d, h:i:s'),
        ];
    }
}
