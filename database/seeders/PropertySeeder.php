<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();
        DB::table('properties')->insert([
            [
                'property_id' => 1,
                'property_name' => 'Green Valley Residence',
                'owner' => 'Rina Setyowati',
                'location' => 'Sawangan, Kota Depok',
                'price' => 1500000000,   // 1,5 Billion Rupiah
                'address' => 'DUMMY ALAMAT',
                'description' => 'DUMMY Deskripsi',
                'picture_path' => ''
            ],
            [
                'property_id' => 2,
                'property_name' => 'Sunrise Hills Residence',
                'owner' => 'Andi Wijaya',
                'location' => 'Cibubur, Jakarta Timur',
                'price' => 1300000000,   // 1, Billion Rupiah
                'address' => 'DUMMY ALAMAT',
                'description' => 'DUMMY Deskripsi',
                'picture_path' => ''
            ],
            [
                'property_id' => 3,
                'property_name' => 'Maple Green Estate',
                'owner' => 'Lestari Rahmadani',
                'location' => 'Bekasi, Jawa Barat',
                'price' => 1400000000,   // 1,4 Billion Rupiah
                'address' => 'DUMMY ALAMAT',
                'description' => 'DUMMY Deskripsi',
                'picture_path' => ''
            ],

        ]);
    }
}
