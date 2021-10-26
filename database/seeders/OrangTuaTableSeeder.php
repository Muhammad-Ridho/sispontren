<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrangTuaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtOrangTua')->insert([
            'id'    => 1,
            'namaAyah'   => 'Rahman Bana',
            'tmpLahirAyah'  => 'Dulolong',
            'tglLahirAyah'  => '1981-11-24',
            'pekerjaanAyah'  => 'Petani',
            'namaIbu' => 'Nur Saida Sain',
            'tmpLahirIbu'    => 'Dulolong',
            'tglLahirIbu'   => '1981-11-24',  
            'pekerjaanIbu'   => 'Petani',  
            'alamat'   => 'Dulolong Rt.08 Rw.05 Ds. Dulolong Kec. Alor Barat Laut Kab. Alor',  
        ]);
    }
}
