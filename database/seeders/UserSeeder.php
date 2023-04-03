<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Maria Anwar',
            'phone' => '+92 322 4188002',
            'address' => '13j Gulberg 3, Lahore, Pakistan',
            'tagline' => 'MERN Stack Developer',
            'first_name' => 'Maria',
            'last_name' => 'Anwar',
            'username' => 'maria-anwar',
            'bio' => "I am a Mern Stack developer. I did my bachelors in software engineering from University of Management and Technology. My major expertise are in React.js and Node.js. I have 1 year of working experience in mern stack development. Paralelly, I also have worked with PHP Laravel projects.",
            'email' => 'mariaanwar996@gmail.com',
            'password' => Hash::make('maria9771'),
            'linkedin' => 'https://www.linkedin.com/in/maria-anwar-a21b68218/',
            'facebook' => 'https://www.facebook.com/',
            'pinterest' => 'https://www.pinterest.com/',
            'twiter' => 'https://www.twiter.com/',
            'skills_summary' => 'My Proficiencies are in the following technologies: React.js, Node.Js with Express framework, Laravel-PHP framework, Creating Database with MongoDB & MySQL, Making APIs, Website Configuration, JavaScript',
            'experiences_summary' => 'I got 2 years experience in Laravel and in Mern Stack from Pair Programmers in which I worked on different projects including Portflix and customboxes.',
            'educations_summary' => 'I did ICS(Intermediate Computer Science) from Punjab College Lahore, I did my bachelors in BSSE from University of Management and Technology. I did Mern Stack course from Beacon House',
            'blogs_summary' => 'Laravel is a popular PHP framework that is designed to help developers build robust and scalable web applications.',
            'theme_id' => 5,
            'selected_theme_path' => 'cvit',
            'no_of_projects' => '9',
            'no_of_clients' => '5',
            'no_of_coffee_cups' => '2',
            'no_of_code_lines' => '30',
        ]);

        \App\Models\User::factory(5)->create();
    }
}
