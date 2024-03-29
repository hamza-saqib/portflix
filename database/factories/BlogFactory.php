<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author_name' => $this->faker->name(),
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            // 'image' =>  $this->faker->image('public/storage/images/blogs', 750, 440, null, false),
            'image' =>  null,
            'thumbnail' => $this->faker->image('public/storage/images/blogs', 350, 236, null, false),
            'meta_tag_title' => $this->faker->sentence(),
            'meta_tag_keywords' => $this->faker->sentence(),
            'meta_tag_description' => $this->faker->paragraph(),
            'is_active' => $this->faker->randomElement([true, false]),

            'blog_category_id' => BlogCategory::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
