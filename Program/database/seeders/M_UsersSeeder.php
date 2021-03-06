<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class M_UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m__users')->insert([
            'fk_position_id'    => '2',
            'full_name'         => 'Yoggy Rachmawan',
            'gender'            => 'Male',
            'place'             => 'Prabumulih',
            'date_of_brith'     => '1997/01/10',
            'phone_number'      => '089624735217',
            'email'             => 'yoggyrachmawan12@gmail.com',
            'address'           => 'Jl. Mekar Sari, No.105, RT/RW 003/004, Kel. Majasari, Kec. Prabumulih Selatan, Kota Prabumulih',
            'password'          => bcrypt('recruiter')
        ]);
        DB::table('m__users')->insert([
            'fk_position_id'    => '1',
            'full_name'         => 'Admin Pedebro',
            'gender'            => 'Male',
            'place'             => 'Prabumulih',
            'date_of_brith'     => '1997/01/10',
            'phone_number'      => '0895801121100',
            'email'             => 'admin@pedebro.com',
            'address'           => 'Jl. Mekar Sari, No.105, RT/RW 003/004, Kel. Majasari, Kec. Prabumulih Selatan, Kota Prabumulih',
            'password'          => bcrypt('recruiter')
        ]);
    }
}
