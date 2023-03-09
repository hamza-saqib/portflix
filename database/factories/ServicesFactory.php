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
            'name' => fake()->randomElement([
                'Web Designing', 'Graphic Designing', 'App Development', 'IT Consultancy',
                'Content Writing', 'Marketing', 'V Bloging', 'Dedicated Resources'
            ]),
            'slug' => fake()->slug(),
            'summary' => fake()->sentence(),
            'description' => fake()->sentence(),
            'display_order' => fake()->numberBetween(1, 200),
            'thumbnail' => null,
            'min_price' => '$3545',
            'user_id' => User::all()->except(1)->pluck('id')->random(),
        ];
    }
}
