<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // <-- Add this line

class TouristsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tourists')->insert([
        ['name' => 'Juan Dela Cruz',
            'email' => 'juandelacruz@sagada.test',
            'password' => Hash::make('password123'),
            'contact' => '09179876544',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ['name' => 'Juanita Espada',
            'email' => 'juanitaespada@sagada.test',
            'password' => Hash::make('password123'),
            'contact' => '09123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }
}
