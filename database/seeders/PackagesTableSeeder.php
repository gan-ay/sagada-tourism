<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PackagesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('packages')->insert([
            ['name' => 'Adventure Package', 'description' => 'Hiking and nature tour', 'price' => 1500, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cultural Package', 'description' => 'Village and cultural experience', 'price' => 1200, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
