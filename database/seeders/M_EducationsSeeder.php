<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class M_EducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m__educations')->insert([
            'education_name' => 'SMA/SMK'
        ]);
        DB::table('m__educations')->insert([
            'education_name' => 'D3'
        ]);
        DB::table('m__educations')->insert([
            'education_name' => 'S1'
        ]);
    }
}
