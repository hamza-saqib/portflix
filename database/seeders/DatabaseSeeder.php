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

        Theme::create([
            'name' => 'Blon',
            'slug' => 'blon',
            'files_path' => 'blon',
            'summary' => 'Blon is a creative multipurpose personal portfolio HTML template with lots of features, variations, and demos. Blon is for everyone.',
            'description' => 'Blon is a creative multipurpose personal portfolio HTML template with lots of features, variations, and demos. Blon is for everyone. It fit in every category like coming soon, product display, portfolio, Personal, Resume, CV template, Portfolio minimal site, info site, etc.',
            'author_name' => 'C-Kav',
            'category' => json_encode(['medical', 'photography']),
            'display_order' => 3,
        ]);

        Theme::create([
            'name' => 'Jonna',
            'slug' => 'jonna',
            'files_path' => 'jonna',
            'summary' => 'Jonna is personal portfolio website template with modern design. The layouts is responsive and looks great on all devices from desktop to mobile.',
            'description' => 'Jonna is personal portfolio website template with modern design. The layouts is responsive and looks great on all devices from desktop to mobile. Jonna help you build professional looking website in no time. Get Jonna now!',
            'author_name' => 'designesia',
            'category' => json_encode(['photography']),
            'display_order' => 4,
        ]);

        Theme::create([
            'name' => 'CVIT',
            'slug' => 'cvit',
            'files_path' => 'cvit',
            'summary' => 'CVIT is a Multipurpose Personal Portfolio / vCard / CV / Resume Template designed for All kinds of Personal Purpose. It’s an HTML5 template based on Bootstrap 3.3.7.',
            'description' => 'CVIT is a Multipurpose Personal Portfolio / vCard / CV / Resume Template designed for All kinds of Personal Purpose. It’s an HTML5 template based on Bootstrap 3.3.7. Anyone can easily update/edit this template to follow our Well Sorted Documentation.',
            'author_name' => 'cvit',
            'category' => json_encode(['it']),
            'display_order' => 5,
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
