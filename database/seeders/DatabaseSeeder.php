<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Services;
use App\Models\Skill;
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

        $theme = Theme::create([
            'name' => 'CVIT',
            'slug' => 'cvit',
            'files_path' => 'cvit',
            'summary' => 'CVIT is a Multipurpose Personal Portfolio / vCard / CV / Resume Template designed for All kinds of Personal Purpose. It’s an HTML5 template based on Bootstrap 3.3.7.',
            'description' => 'CVIT is a Multipurpose Personal Portfolio / vCard / CV / Resume Template designed for All kinds of Personal Purpose. It’s an HTML5 template based on Bootstrap 3.3.7. Anyone can easily update/edit this template to follow our Well Sorted Documentation.',
            'author_name' => 'cvit',
            'category' => json_encode(['it']),
            'display_order' => 5,
        ]);

        $user = User::create([
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
            'blogs_summary' => 'Laravel is a popular PHP framework that is designed to help developers build robust and scalable web applications. On the other hand, MERN stack is a set of four technologies - MongoDB, Express, React, and Node.js - that is used to create full-stack web applications. In this article, we will explore how Laravel and MERN stack technologies can be used together to build highly performant and scalable web applications.

            Introduction to Laravel. Laravel is an open-source PHP framework that was developed by Taylor Otwell. It follows the Model-View-Controller (MVC) architecture and provides a range of features and tools that simplify the development of web applications. Laravel has gained immense popularity in recent years due to its expressive syntax, robust features, and extensive documentation.

            Some of the key features of Laravel include:Routing: Laravel provides a simple and elegant way to define application routes using the Route class.

            Blade Templating Engine: Laravel Blade templating engine is a powerful tool that allows developers to create reusable templates and layouts.

            Eloquent ORM: Laravels Eloquent ORM provides a simple and intuitive way to work with databases. Authentication: Laravel comes with built-in authentication features that allow developers to easily implement user authentication and authorization.

            Introduction to MERN Stack

            MERN stack is a collection of four technologies - MongoDB, Express, React, and Node.js - that are used together to build full-stack web applications. Here is a brief overview of each of these technologies:
            MongoDB: MongoDB is a NoSQL database that stores data in JSON-like documents. It is highly scalable and provides powerful querying capabilities.

            Express: Express is a web application framework for Node.js that provides a range of features for building web applications.

            React: React is a JavaScript library for building user interfaces. It is widely used for creating single-page applications.

            Node.js: Node.js is a JavaScript runtime environment that allows developers to run JavaScript code outside of a web browser.

            Why Laravel and MERN Stack?

            Laravel and MERN stack technologies can be used together to build full-stack web applications that are highly performant and scalable. Here are some of the key benefits of using Laravel and MERN stack together:

            Scalability: Both Laravel and MERN stack technologies are designed to be highly scalable. By combining these technologies, developers can build web applications that can handle a large number of users and data.

            Robustness: Laravel provides a range of features and tools that help developers build robust web applications. Similarly, MERN stack technologies provide a solid foundation for building web applications that are reliable and performant.

            Flexibility: Laravel and MERN stack technologies are both highly flexible and can be customized to meet the specific needs of different projects.

            Extensibility: Both Laravel and MERN stack technologies provide a range of libraries and tools that can be used to extend their functionality and add new features to web applications.

            Conclusion

            Laravel and MERN stack technologies can be used together to build full-stack web applications that are highly performant and scalable. By combining the robust features of Laravel with the flexibility and scalability of MERN stack technologies, developers can create web applications that are tailored to meet the specific needs of different projects. Whether you are building a small web application or a large-scale enterprise solution, Laravel and MERN stack technologies can help you build a web application that is reliable, performant, and scalable.',
            'theme_id' => $theme->id,
            'selected_theme_path' => $theme->files_path
        ]);

        Skill::create([
            'name' => 'Javascript',
            'level' => 'Intermediate',
            'display_order' => 1,
            'percentage' => 85,
            'user_id' => $user->id
        ]);

        Skill::create([
            'name' => 'React',
            'level' => 'Intermediate',
            'display_order' => 2,
            'percentage' => 80,
            'user_id' => $user->id
        ]);

        Skill::create([
            'name' => 'MySql',
            'level' => 'Intermediate',
            'display_order' => 3,
            'percentage' => 75,
            'user_id' => $user->id
        ]);

        Skill::create([
            'name' => 'Laravel',
            'level' => 'Intermediate',
            'display_order' => 4,
            'percentage' => 70,
            'user_id' => $user->id
        ]);

        Skill::create([
            'name' => 'SEO',
            'level' => 'Intermediate',
            'display_order' => 5,
            'percentage' => 75,
            'user_id' => $user->id
        ]);

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
            'user_id' => $user->id,
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
            'user_id' => $user->id,
        ]);

        Experience::create([
            'company_name' => 'Pair Programmers',
            'position' => 'Senior Developer',
            'job_title' => 'Mern Stack Developer',
            'description' => 'In my 2 years of  experience in Mern Stack development from Pair Programmers, I worked on different projects including Portflix and customboxes.',
            'start_date' => date('2021-02-01'),
            'end_date' => null,
            'is_currently_working' => true,
            'display_order' => 1,
            'user_id' => $user->id,
        ]);

        Services::create([
            'name'=> 'Web Development',
            'slug'=> 'web-development',
            'min_price'=> '$200',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        Services::create([
            'name'=> 'SEO',
            'slug'=> 'seo',
            'min_price'=> '$50',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        Services::create([
            'name'=> 'UI/UX',
            'slug'=> 'ui-ux',
            'min_price'=> '$40',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        Services::create([
            'name'=> 'Hosting Configurations',
            'slug'=> 'hosting-configurations',
            'min_price'=> '$15',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        Services::create([
            'name'=> 'Mobile App Development',
            'slug'=> 'mobile-app-development',
            'min_price'=> '$500',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        Services::create([
            'name'=> 'Dedicated Resourses',
            'slug'=> 'dedicated-resourses',
            'min_price'=> '$1000',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> $user->id,
        ]);

        \App\Models\User::factory(5)->create();
        \App\Models\Theme::factory(5)->create();
        \App\Models\Skill::factory(5)->create();
        \App\Models\Services::factory(5)->create();
        \App\Models\Testimonial::factory(5)->create();
        \App\Models\BlogCategory::factory(10)->create();
        // \App\Models\Blog::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name' => 'Maria Anwar',
            'email' => 'mariaanwar996@gmail.com',
            'role' => 'Super Admin',
            'password' => Hash::make('maria9771')
        ]);
    }
}
