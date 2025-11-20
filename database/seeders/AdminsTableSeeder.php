<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@sagada.test',
            'password' => Hash::make('password123'),
            'contact' => '09171234567',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
