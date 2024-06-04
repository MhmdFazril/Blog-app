<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

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
            'title' => fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),

            // cara pertama menggunakan implode untuk memecah array dan dimasukan kedalam P
            // 'body' => '<p>' . implode('</p><p>', fake()->paragraphs(mt_rand(5, 10))) . '</p>',

            // cara kedua menggunakan map untuk memecah array dengan closure function
            // 'body' => collect(fake()->paragraphs(mt_rand(5, 10)))->map(function ($p) {
            //     return "<p>$p</p>";
            // }),

            // cara ketiga sama dengan kedua dengan metode baru dari php
            'body' => collect(fake()->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),

            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
