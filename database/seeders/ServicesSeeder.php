<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'name'=> 'Web Development',
            'slug'=> 'web-development',
            'min_price'=> '$200',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        Services::create([
            'name'=> 'SEO',
            'slug'=> 'seo',
            'min_price'=> '$50',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        Services::create([
            'name'=> 'UI/UX',
            'slug'=> 'ui-ux',
            'min_price'=> '$40',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        Services::create([
            'name'=> 'Hosting Configurations',
            'slug'=> 'hosting-configurations',
            'min_price'=> '$15',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        Services::create([
            'name'=> 'Mobile App Development',
            'slug'=> 'mobile-app-development',
            'min_price'=> '$500',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        Services::create([
            'name'=> 'Dedicated Resourses',
            'slug'=> 'dedicated-resourses',
            'min_price'=> '$1000',
            'summary'=> 'service summary',
            'description'=> 'service description',
            'thumbnail'=> null,
            'display_order'=> 1,
            'user_id'=> 1
        ]);

        \App\Models\Services::factory(10)->create();
    }
}
