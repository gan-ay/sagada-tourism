<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TouristsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tourists')->insert([
            ['name' => 'Juan Dela Cruz', 'contact_info' => '09170001111', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maria Clara', 'contact_info' => '09170002222', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
