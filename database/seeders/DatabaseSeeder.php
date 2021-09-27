<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Armada;
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
        //User::factory(8)->create();

        User::create([
            'name' => 'Leader AO',
            'email' => 'leader@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'leader'
        ]);

        User::create([
            'name' => 'Admin AO',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Checker AO',
            'email' => 'checker@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'checker'
        ]);

        User::create([
            'name' => 'Leader AO2',
            'email' => 'leader2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'leader'
        ]);

        User::create([
            'name' => 'Admin AO2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Checker AO2',
            'email' => 'checker2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'checker'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC01',
            'Tipe_armada' => 'Big Bus',
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC02',
            'Tipe_armada' => 'Medium Bus',
            'merek_armada' => 'Hino'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC03',
            'Tipe_armada' => 'Mini Bus',
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC04',
            'Tipe_armada' => 'Big Bus',
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC05',
            'Tipe_armada' => 'Medium Bus',
            'merek_armada' => 'Hino'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC06',
            'Tipe_armada' => 'Mini Bus',
            'merek_armada' => 'Mercedes'
        ]);
    }
}
