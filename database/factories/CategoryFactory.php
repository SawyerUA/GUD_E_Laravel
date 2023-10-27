<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'category' => 'Bugs and errors',
            'category_ua' => 'Баги та помилки',
            'category_ru' => 'Баги и ошибки',
            'created_at' => now()
        ];
    }
}
