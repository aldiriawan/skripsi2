<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Armada;
use App\Models\Driver;
use App\Models\Codriver;
use App\Models\TipeArmada;
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
            'email' => 'leader1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'leader'
        ]);

        User::create([
            'name' => 'Admin AO',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Checker AO',
            'email' => 'checker1@gmail.com',
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

        TipeArmada::create([
            'tipe_armada' => 'Big Bus',
            'kapasitas' => 48
        ]);

        TipeArmada::create([
            'tipe_armada' => 'Medium Bus',
            'kapasitas' => 39
        ]);

        TipeArmada::create([
            'tipe_armada' => 'Mini Bus',
            'kapasitas' => 14
        ]);

        Armada::create([
            'kode_armada' => 'AOLC01',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC02',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Hino'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC03',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC04',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Mercedes'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC05',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Hino'
        ]);

        Armada::create([
            'kode_armada' => 'AOLC06',
            'id_tipe_armada' => mt_rand(1, 3),
            'merek_armada' => 'Mercedes'
        ]);

        Driver::create([
            'nama_driver' => 'Tony Stark',
            'nik_driver' => '123456789',
            'umur_driver' => '31',
            'telepon_driver' => '089534071111',
            'alamat_driver' => 'Jalan Avengers 1 RT 001 RW 088 Sleman DIY'
        ]);

        Driver::create([
            'nama_driver' => 'Steve Rogers',
            'nik_driver' => '987654321',
            'umur_driver' => '32',
            'telepon_driver' => '089534072222',
            'alamat_driver' => 'Jalan Avengers 2 RT 002 RW 088 Sleman DIY'
        ]);

        Driver::create([
            'nama_driver' => 'Thor Odinson',
            'nik_driver' => '123459876',
            'umur_driver' => '33',
            'telepon_driver' => '089534073333',
            'alamat_driver' => 'Jalan Avengers 3 RT 003 RW 088 Sleman DIY'
        ]);

        Codriver::create([
            'nama_codriver' => 'Robert Downey Jr',
            'nik_codriver' => '1122334455',
            'umur_codriver' => '31',
            'telepon_codriver' => '089534074444',
            'alamat_codriver' => 'Jalan Avengers 4 RT 004 RW 088 Sleman DIY'
        ]);

        Codriver::create([
            'nama_codriver' => 'Chris Evans',
            'nik_codriver' => '5544332211',
            'umur_codriver' => '32',
            'telepon_codriver' => '089534075555',
            'alamat_codriver' => 'Jalan Avengers 5 RT 005 RW 088 Sleman DIY'
        ]);

        Codriver::create([
            'nama_codriver' => 'Chris Hemsworth',
            'nik_codriver' => '1133557799',
            'umur_codriver' => '33',
            'telepon_codriver' => '089534076666',
            'alamat_codriver' => 'Jalan Avengers 6 RT 006 RW 088 Sleman DIY'
        ]);
    }
}
