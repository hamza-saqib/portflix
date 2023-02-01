<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name'=>'Maria Anwar',
            'email'=>'mariaanwar996@gmail.com',
            'role'=>'Super Admin',
            'password'=>Hash::make('maria9771')
        ]);

        // User::create([
        //     'name'=>'Portflix System',
        //     'email'=>'system@portflix.com',
        //     'password'=>Hash::make('afsd$3$5sdf$#5fds')
        // ]);
    }
}
