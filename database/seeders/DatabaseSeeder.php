<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$user = User::factory(19)->create();

        $category = Category::factory(6)->sequence(
            [
                'category' => 'Bugs and errors',
                'category_ua' => 'Баги та помилки',
                'category_ru' => 'Баги и ошибки',
                'created_at' => now()
            ],
            [
                'category' => 'Tactics and strategies',
                'category_ua' => 'Тактики та стратегії',
                'category_ru' => 'Тактики и стратегии',
                'created_at' => now()
            ],
            [
                'category' => 'Gamers guides',
                'category_ua' => 'Гайди гравців',
                'category_ru' => 'Гайды игроков',
                'created_at' => now()
            ],
            [
                'category' => 'Proposal improvements',
                'category_ua' => 'Пропозиції про покращення',
                'category_ru' => 'Предложения об улучшении',
                'created_at' => now()
            ],
            [
                'category' => 'Feature updates',
                'category_ua' => 'Майбутні оновлення',
                'category_ru' => 'Будущие обновления',
                'created_at' => now()
            ],
            [
                'category' => 'Offtopic',
                'category_ua' => 'Оффтопік',
                'category_ru' => 'Оффтопик',
                'created_at' => now()
            ])->create();

        //$post = Post::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
