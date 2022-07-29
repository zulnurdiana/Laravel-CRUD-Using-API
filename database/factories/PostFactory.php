<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(mt_rand(2, 6)),
            'slug' => $this->faker->slug(mt_rand(5, 7)),
            'excerpt' => $this->faker->paragraph(mt_rand(1, 2)),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 6)

        ];
    }
}
