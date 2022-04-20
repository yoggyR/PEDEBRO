<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class M_LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m__levels')->insert([
            'level_name' => 'fresh graduate'
        ]);
        DB::table('m__levels')->insert([
            'level_name' => 'experience'
        ]);
    }
}
