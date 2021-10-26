<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dtSantri')->insert([
            'id'    => 1,
            'noInduk'   => '1110007',
            'tglMasuk'  => '2011-07-03',
            'nisn'  => '9996723845',
            'namaSantri' => 'Khalid Mawardi Ali',
            'tmpLahir'  => 'Dulolong',
            'tglLahir'  => '1999-11-04',
            'jnsKelamin'    => 'Laki-Laki',
            'alamat'    => 'Alor Barat Laut',
            'statusSosial'  => 'Yatim',
            'statusStudi'   => 'Aktif'

        ]);
    }
}
