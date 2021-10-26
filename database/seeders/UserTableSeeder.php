<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    => 1,
            'noIdentitas'  => 'MR00001',
            'email' => 'ramadhanjenius1@gmail.com',
            'level' => 'admin',
            'password'  => bcrypt('admin'),
            'remember_token'=> NULL,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);


    }
}
