<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'company_name' => 'Pair Programmers',
            'position' => 'Senior Developer',
            'job_title' => 'Mern Stack Developer',
            'description' => 'In my 2 years of experience in Mern Stack development from Pair Programmers, I worked on different projects including Portflix and customboxes.',
            'start_date' => date('2021-02-01'),
            'end_date' => null,
            'is_currently_working' => true,
            'display_order' => 1,
            'user_id' => 1
        ]);
    }
}
