<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'files_path' => fake()->word(),
            'summary' => fake()->sentence(),
            'description' => fake()->sentence(),
            'feature_image' => fake()->url(),
            'author_name' => fake()->name(),
            'category' => json_encode(['it', 'bussiness']),
            'display_order' => fake()->numberBetween(2,32),
            'slug' => fake()->slug(),
        ];
    }
}
