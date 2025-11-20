<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminsTableSeeder::class,
            GuidesTableSeeder::class,
            TouristsTableSeeder::class,
            PackagesTableSeeder::class,
            ToursTableSeeder::class,
            ReservationsTableSeeder::class,
            GuidePackageTableSeeder::class,
        ]);
    }
}
