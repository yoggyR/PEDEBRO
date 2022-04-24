<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class M_LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m__locations')->insert([
            'location_name' => 'Jakarta'
        ]);
        DB::table('m__locations')->insert([
            'location_name' => 'Bandung'
        ]);
    }
}
