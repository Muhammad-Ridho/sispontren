<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtkaryawan')->insert([
            'id'    => 1,
            'kodePegawai'   => 'MR0001',
            'namaKaryawan'  => 'Muhammad Ridho Ramadhan',
            'tmpLahir'  => 'Banyuwangi',
            'tglLahir'  => '1998-12-23',
            'jnsKelamin' => 'Laki-Laki',
            'alamat'    => 'Ds. Wringinpitu, Kec. Tegaldlimo, Kab. Banyuwangi',
            'statusPekerjaan'   => 'Kontrak'    
        ]);
    }
}
