<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
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
            'slug' => fake()->slug(),
            'summary' => fake()->sentence(),
            'description' => fake()->sentence(),
            'display_order' => fake()->numberBetween(1, 200),
            'thumbnail' => null,
            'min_price' => fake()->numberBetween(1000, 20000000),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
