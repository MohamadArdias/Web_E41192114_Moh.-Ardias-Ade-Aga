<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;


class DetailMahasiswaSeeder extends Seeder
{
    public function run()
    {
        //
        // DB::table('detail_mahasiswa')->insert([
        //     'id' => '4',
        //     'nama_mhs' => 'Ardias',
        //     'jurusan' => 'TI',
            
        // ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12341234'),
            'akses' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('11223344'),
            'akses' => 'mahasiswa',
        ]);
    }
}
