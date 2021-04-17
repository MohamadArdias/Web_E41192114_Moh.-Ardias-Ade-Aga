<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class DetailMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_mahasiswa')->insert([
            'id' => '4',
            'nama_mhs' => 'Ardias',
            'jurusan' => 'TI',
        ]);
    }
}
