<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TouristSpot;

class TouristSpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TouristSpot::create([
            'spot_name' => 'Echo Valley Hanging Coffins',
            'location' => 'Sagada, Mountain Province',
            'description' => 'Ancient burial site with coffins hanging on cliffs.',
            'opening_hours' => '6:00 AM - 6:00 PM',
            'contact_info' => '+63 917 123 4567',
        ]);

        TouristSpot::create([
            'spot_name' => 'Bomod-ok Falls',
            'location' => 'Sagada, Mountain Province',
            'description' => 'Twin waterfalls surrounded by rice terraces.',
            'opening_hours' => '7:00 AM - 5:00 PM',
            'contact_info' => '+63 917 123 4568',
        ]);

        TouristSpot::create([
            'spot_name' => 'Kiltepan Tower',
            'location' => 'Sagada, Mountain Province',
            'description' => 'Viewpoint for sunrise and mountain views.',
            'opening_hours' => '5:00 AM - 7:00 PM',
            'contact_info' => '+63 917 123 4569',
        ]);

        TouristSpot::create([
            'spot_name' => 'Sumaguing Cave',
            'location' => 'Sagada, Mountain Province',
            'description' => 'Cave system with underground river.',
            'opening_hours' => '8:00 AM - 4:00 PM',
            'contact_info' => '+63 917 123 4570',
        ]);

        TouristSpot::create([
            'spot_name' => 'Sagada Pottery',
            'location' => 'Sagada, Mountain Province',
            'description' => 'Traditional pottery making workshop.',
            'opening_hours' => '9:00 AM - 5:00 PM',
            'contact_info' => '+63 917 123 4571',
        ]);
    }
}
