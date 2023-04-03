<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'customer_name' => 'M. Asim',
            'message' => 'it have been amazing working with maria',
            'issue_date' => date('2022-02-09'),
            'related_project' => 1,
            'display_order' => 1,
            'user_id' => 1
        ]);

        Testimonial::create([
            'customer_name' => 'Hamza Saqib',
            'message' => 'it have been amazing working with maria',
            'issue_date' => date('2022-02-09'),
            'related_project' => 1,
            'display_order' => 1,
            'user_id' => 1
        ]);

        Testimonial::create([
            'customer_name' => 'Maria Anwar',
            'message' => 'it have been amazing working with maria',
            'issue_date' => date('2022-02-09'),
            'related_project' => 1,
            'display_order' => 1,
            'user_id' => 1
        ]);

        \App\Models\Testimonial::factory(10)->create();
    }
}
