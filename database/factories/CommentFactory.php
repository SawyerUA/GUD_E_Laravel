<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => fake()->text(rand(30, 255)),
            'user_id' => User::get()->random()->id,
            'post_id' => Post::get()->random()->id,
            'created_at' => fake()->date('Y-m-d, h:i:s'),
        ];
    }
}
