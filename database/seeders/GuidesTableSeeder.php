<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuidesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('guides')->insert([
            ['name' => 'Pedro', 'specialization' => 'Hiking', 'contact_info' => '09171234568', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Liza', 'specialization' => 'Cultural Tours', 'contact_info' => '09179876544', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
