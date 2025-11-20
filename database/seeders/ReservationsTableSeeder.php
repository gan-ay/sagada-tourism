<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReservationsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservations')->insert([
            ['reservation_date' => '2025-11-25', 'tourist_id' => 1, 'tour_id' => 1, 'guide_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['reservation_date' => '2025-11-26', 'tourist_id' => 2, 'tour_id' => 2, 'guide_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
