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
            'username' => 'leaderao1',
            'password' => bcrypt('password'),
            'role' => 'leader'
        ]);

        User::create([
            'name' => 'Admin AO',
            'username' => 'adminao1',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Checker AO',
            'username' => 'checkerao1',
            'password' => bcrypt('password'),
            'role' => 'checker'
        ]);

        User::create([
            'name' => 'Leader AO2',
            'username' => 'leaderao2',
            'password' => bcrypt('password'),
            'role' => 'leader'
        ]);

        User::create([
            'name' => 'Admin AO2',
            'username' => 'adminao2',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Checker AO2',
            'username' => 'checkerao2',
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
            'nama_driver' => 'driver 1',
            'nik_driver' => mt_rand(1, 50000)
        ]);

        Driver::create([
            'nama_driver' => 'driver 2',
            'nik_driver' => mt_rand(1, 50000)
        ]);

        Driver::create([
            'nama_driver' => 'driver 3',
            'nik_driver' => mt_rand(1, 50000)
        ]);

        Codriver::create([
            'nama_codriver' => 'Codriver 1',
            'nik_codriver' => mt_rand(1, 50000)
        ]);

        Codriver::create([
            'nama_codriver' => 'Codriver 2',
            'nik_codriver' => mt_rand(1, 50000)
        ]);

        Codriver::create([
            'nama_codriver' => 'Codriver 3',
            'nik_codriver' => mt_rand(1, 50000)
        ]);
    }
}
