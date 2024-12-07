<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        DB::table('properties')->insert([
            [
                'property_id' => 1,
                'user_id' => 1,
                'property_name' => 'Rumah Mewah BSD',
                'price' => 3000000000,
                'address' => 'Jl. Raya Serpong, Tangerang',
                'location_link' => 'https://maps.example.com/bsd',
                'picture_path' => null,
                'description' => 'Rumah 2 lantai mewah di BSD City.',
                'building_size' => 150,
                'land_size' => 200,
                'certificate' => 'SHM',
                'bedroom' => 4,
                'bathroom' => 3,
                'carport' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 2,
                'user_id' => 1,
                'property_name' => 'Apartemen City View',
                'price' => 1500000000,
                'address' => 'Jl. Sudirman, Jakarta',
                'location_link' => 'https://maps.example.com/cityview',
                'picture_path' => null,
                'description' => 'Apartemen dengan pemandangan kota.',
                'building_size' => 75,
                'land_size' => 0,
                'certificate' => 'HGB',
                'bedroom' => 2,
                'bathroom' => 2,
                'carport' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 3,
                'user_id' => 2,
                'property_name' => 'Villa Ubud Bali',
                'price' => 5000000000,
                'address' => 'Jl. Raya Ubud, Bali',
                'location_link' => 'https://maps.example.com/ubud',
                'picture_path' => null,
                'description' => 'Villa eksklusif di Ubud.',
                'building_size' => 200,
                'land_size' => 400,
                'certificate' => 'SHM',
                'bedroom' => 5,
                'bathroom' => 4,
                'carport' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 4,
                'user_id' => 2,
                'property_name' => 'Rumah Minimalis Depok',
                'price' => 1200000000,
                'address' => 'Jl. Margonda, Depok',
                'location_link' => 'https://maps.example.com/depok',
                'picture_path' => null,
                'description' => 'Rumah minimalis dekat stasiun.',
                'building_size' => 90,
                'land_size' => 100,
                'certificate' => 'SHM',
                'bedroom' => 3,
                'bathroom' => 2,
                'carport' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 5,
                'user_id' => 3,
                'property_name' => 'Kos Elite Bandung',
                'price' => 1000000000,
                'address' => 'Jl. Dago, Bandung',
                'location_link' => 'https://maps.example.com/dago',
                'picture_path' => null,
                'description' => 'Kos-kosan elite untuk mahasiswa.',
                'building_size' => 120,
                'land_size' => 150,
                'certificate' => 'SHM',
                'bedroom' => 8,
                'bathroom' => 8,
                'carport' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 6,
                'user_id' => 3,
                'property_name' => 'Rumah Tepi Pantai',
                'price' => 4500000000,
                'address' => 'Jl. Pantai Kuta, Bali',
                'location_link' => 'https://maps.example.com/kuta',
                'picture_path' => null,
                'description' => 'Rumah tepi pantai dengan view laut.',
                'building_size' => 180,
                'land_size' => 250,
                'certificate' => 'SHM',
                'bedroom' => 4,
                'bathroom' => 3,
                'carport' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 7,
                'user_id' => 4,
                'property_name' => 'Cluster Cibubur',
                'price' => 2000000000,
                'address' => 'Jl. Alternatif Cibubur, Bogor',
                'location_link' => 'https://maps.example.com/cibubur',
                'picture_path' => null,
                'description' => 'Cluster rumah nyaman di Cibubur.',
                'building_size' => 100,
                'land_size' => 120,
                'certificate' => 'SHM',
                'bedroom' => 3,
                'bathroom' => 2,
                'carport' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 8,
                'user_id' => 4,
                'property_name' => 'Rumah Asri Yogyakarta',
                'price' => 900000000,
                'address' => 'Jl. Kaliurang, Yogyakarta',
                'location_link' => 'https://maps.example.com/kaliurang',
                'picture_path' => null,
                'description' => 'Rumah asri di dekat kampus UGM.',
                'building_size' => 85,
                'land_size' => 100,
                'certificate' => 'SHM',
                'bedroom' => 3,
                'bathroom' => 2,
                'carport' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 9,
                'user_id' => 1,
                'property_name' => 'Rumah Modern Jakarta',
                'price' => 3500000000,
                'address' => 'Jl. Fatmawati, Jakarta',
                'location_link' => 'https://maps.example.com/fatmawati',
                'picture_path' => null,
                'description' => 'Rumah modern dengan desain minimalis.',
                'building_size' => 180,
                'land_size' => 250,
                'certificate' => 'HGB',
                'bedroom' => 4,
                'bathroom' => 4,
                'carport' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 10,
                'user_id' => 2,
                'property_name' => 'Villa Tepi Sungai',
                'price' => 6000000000,
                'address' => 'Jl. Raya Puncak, Bogor',
                'location_link' => 'https://maps.example.com/puncak',
                'picture_path' => null,
                'description' => 'Villa mewah tepi sungai dengan view pegunungan.',
                'building_size' => 250,
                'land_size' => 500,
                'certificate' => 'SHM',
                'bedroom' => 6,
                'bathroom' => 5,
                'carport' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
