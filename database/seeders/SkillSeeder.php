<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'Javascript',
            'level' => 'Intermediate',
            'display_order' => 1,
            'percentage' => 85,
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'React',
            'level' => 'Intermediate',
            'display_order' => 2,
            'percentage' => 80,
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'MySql',
            'level' => 'Intermediate',
            'display_order' => 3,
            'percentage' => 75,
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Laravel',
            'level' => 'Intermediate',
            'display_order' => 4,
            'percentage' => 70,
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'SEO',
            'level' => 'Intermediate',
            'display_order' => 5,
            'percentage' => 75,
            'user_id' => 1
        ]);

        \App\Models\Skill::factory(10)->create();
    }
}
