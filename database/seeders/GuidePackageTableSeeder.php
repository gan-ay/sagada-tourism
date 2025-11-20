<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuidePackageTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('guide_package')->insert([
            ['guide_id' => 1, 'package_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['guide_id' => 2, 'package_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
