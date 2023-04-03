<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Education::create([
            'degree' => 'Bachelors',
            'institute_name' => 'University of Management & Technology',
            'major_subject' => 'Computer Science',
            'institute_level' => 'sdfsdf',
            'start_date' => date('2017-10-01'),
            'end_date' => date('2023-02-01'),
            'is_currently_studying' => false,
            'display_order' => 1,
            'description' => 'education description',
            'user_id' => 1
        ]);

        Education::create([
            'degree' => 'Intermediate',
            'institute_name' => 'Punjab College Girls',
            'major_subject' => 'Computer Science',
            'institute_level' => 'sdfsdf',
            'start_date' => date('2017-10-01'),
            'end_date' => null,
            'is_currently_studying' => true,
            'display_order' => 2,
            'description' => 'education description',
            'user_id' => 1
        ]);
    }
}
