<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i <= 5; $i++) { 
            DB::table('nha_hangs')->insert([
                'name'         => $i,
                'logo'         => '',
                'location'     => $i,
                'cuisine'      => $i,
                'rating'       => $i,               
                'created_at'   => Carbon::now(),               
                'updated_at'   => Carbon::now()               
            ]);
        }
    }
}
