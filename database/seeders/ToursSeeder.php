<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourPackage;

class ToursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourPackage::create([
            'tour_name' => 'Hanging Coffins Adventure',
            'description' => 'Explore the ancient burial tradition of Sagada with a guided tour to the hanging coffins.',
            'price' => 1500.00,
            'duration' => '4 hours',
            'spot_id' => 1, // Assuming spot_id 1 exists
        ]);

        TourPackage::create([
            'tour_name' => 'Bomod-ok Falls Trek',
            'description' => 'Hike through rice terraces and enjoy the majestic Bomod-ok Falls.',
            'price' => 1200.00,
            'duration' => '6 hours',
            'spot_id' => 2, // Assuming spot_id 2 exists
        ]);

        TourPackage::create([
            'tour_name' => 'Sagada Village Tour',
            'description' => 'A comprehensive tour of Sagada village including cultural sites and local markets.',
            'price' => 1000.00,
            'duration' => '3 hours',
            'spot_id' => 1,
        ]);

        TourPackage::create([
            'tour_name' => 'Sunrise at Kiltepan Tower',
            'description' => 'Witness the breathtaking sunrise over the mountains from Kiltepan Tower.',
            'price' => 800.00,
            'duration' => '2 hours',
            'spot_id' => 3, // Assuming spot_id 3 exists
        ]);

        TourPackage::create([
            'tour_name' => 'Cave Connection Exploration',
            'description' => 'Experience the unique cave connection system in Sagada.',
            'price' => 2000.00,
            'duration' => '8 hours',
            'spot_id' => 4, // Assuming spot_id 4 exists
        ]);
    }
}
