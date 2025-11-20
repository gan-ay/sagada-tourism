<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ToursTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tours')->insert([
            ['name' => 'Hike to Echo Valley', 'package_id' => 1, 'tour_date' => '2025-11-25', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sagada Cultural Tour', 'package_id' => 2, 'tour_date' => '2025-11-26', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
