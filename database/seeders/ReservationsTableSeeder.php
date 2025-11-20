<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReservationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $tourists = DB::table('tourists')->pluck('id')->toArray();
$tours = DB::table('tours')->pluck('id')->toArray();
$guides = DB::table('guides')->pluck('id')->toArray();

        DB::table('reservations')->insert([
            [
                'reservation_date' => '2025-11-25',
                'guide_id' => $guides[0],
                'tour_id' => $tours[0],
                'tourist_id' => $tourists[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'reservation_date' => '2025-11-26',
                'guide_id' => $guides[1],
                'tour_id' => $tours[1],
                'tourist_id' => $tourists[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
