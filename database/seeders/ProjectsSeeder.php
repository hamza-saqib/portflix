<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projects::create([
            'name' => 'Customboxes Us',
            'url' => 'https://www.customboxesus.com/',
            'description' => 'sdfsdf sdf sd f sdf  sdf dsf sd fs d',
            'start_date' => date('2022-02-2'),
            'end_date' => null,
            'is_currently_working' => true,
            'display_order' => 1,
            'experience_id' => null,
        ]);

        Projects::create([
            'name' => 'Customboxes Us',
            'url' => 'https://www.customboxesus.com/',
            'description' => 'sdfsdf sdf sd f sdf  sdf dsf sd fs d',
            'start_date' => date('2022-02-2'),
            'end_date' => null,
            'is_currently_working' => true,
            'display_order' => 1,
            'experience_id' => null,
        ]);
    }
}
