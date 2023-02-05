<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_name' => fake()->name(),
            'message' => fake()->sentence(),
            'issue_date' => fake()->date(),
            'related_project' => fake()->boolean(),
            'display_order' => fake()->numberBetween(1, 200),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
