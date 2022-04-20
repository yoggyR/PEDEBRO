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
            'education_name' => 'sma/smk'
        ]);
        DB::table('m__educations')->insert([
            'education_name' => 'd3'
        ]);
        DB::table('m__educations')->insert([
            'education_name' => 's1'
        ]);
    }
}
