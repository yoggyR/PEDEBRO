<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class M_PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m__positions')->insert([
            'position_name' => 'recruiter'
        ]);
        DB::table('m__positions')->insert([
            'position_name' => 'applicant'
        ]);
    }
}
