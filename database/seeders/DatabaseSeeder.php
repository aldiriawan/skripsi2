<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::factory(8)->create();

        Role::create([
            'name' => 'Leader',
            'description' => 'Leading'
        ]);

        Role::create([
            'name' => 'Admin',
            'description' => 'Administration'
        ]);

        Role::create([
            'name' => 'Checker',
            'description' => 'checking'
        ]);

        Role::create([
            'name' => 'User',
            'description' => 'user'
        ]);
    }
}
