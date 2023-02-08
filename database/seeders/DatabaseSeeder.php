<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/images/users');
        Storage::makeDirectory('public/images/blogs');

        Theme::create([
            'name' => 'Ratsaan',
            'slug' => 'ratsaan',
            'files_path' => 'ratsaan',
            'summary' => 'A modern Startup agency and Personal Portfolio template for business, agency and startup company.',
            'description' => 'Ratsaan – A modern Startup agency and Personal Portfolio template for business, agency and startup company. Modifying the template is quite simple.Working contact form is handy for you to get email from the site.',
            'author_name' => 'pxelCode',
            'category' => json_encode(['it', 'bussiness', 'photography']),
            'display_order' => 1,
        ]);

        Theme::create([
            'name' => 'Martyn',
            'slug' => 'martyn',
            'files_path' => 'martyn',
            'summary' => 'Creating a professional, modern and sophisticated online resume website is easy with Martyn CV / Resume / Personal Portfolio / One page. Martyn CV / Resume HTML Template is a perfect solution for professional resume / cv / portfolio and personal website.',
            'description' => 'Martyn – Creating a professional, modern and sophisticated online resume website is easy with Martyn CV / Resume / Personal Portfolio / One page. Martyn CV / Resume HTML Template is a perfect solution for professional resume / cv / portfolio and personal website. it comes with a lot of useful features. It is easy to customize this template for any of Your website needs.',
            'author_name' => 'Az_Template',
            'category' => json_encode(['it', 'bussiness']),
            'display_order' => 2,
        ]);

        User::create([
            'name' => 'Maria Anwar',
            'username' => 'maria-anwar',
            'bio' => "Hi, I'm Maria. I'm a Star.",
            'email' => 'mariaanwar996@gmail.com',
            'password' => Hash::make('maria9771'),
            'linkedin' => 'https://www.linkedin.com/in/maria-anwar-a21b68218/',
            'facebook' => 'https://www.facebook.com/',
            'pinterest' => 'https://www.pinterest.com/',
            'twiter' => 'https://www.twiter.com/'
        ]);

        \App\Models\Theme::factory(5)->create();
        \App\Models\Skill::factory(5)->create();
        \App\Models\Services::factory(5)->create();
        \App\Models\Testimonial::factory(5)->create();
        \App\Models\BlogCategory::factory(10)->create();
        \App\Models\Blog::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name' => 'Maria Anwar',
            'email' => 'mariaanwar996@gmail.com',
            'role' => 'Super Admin',
            'password' => Hash::make('maria9771')
        ]);
    }
}
