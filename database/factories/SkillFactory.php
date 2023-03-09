<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
                'Content Writing', 'Marketing', 'V Bloging', 'Dedicated Resources', 'PHP', 'Java', 'REST APIs', 'Nodejs', 'React Native'
            ]),
            'level' => fake()->word(),
            'percentage' => fake()->numberBetween(1, 100),
            'display_order' => fake()->numberBetween(1, 200),
            'user_id' => User::all()->except(1)->pluck('id')->random(),
        ];
    }
}
