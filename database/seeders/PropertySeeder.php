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
                'address' => 'Jl. Melati Indah No. 12',
                'description' => 'Rumah dengan desain modern minimalis, dilengkapi dengan 3 kamar tidur, 2 kamar mandi, dan taman kecil yang asri.',
                'picture_path' => 'images/property/property1.png'
            ],
            [
                'property_id' => 2,
                'property_name' => 'Sunrise Hills Residence',
                'owner' => 'Andi Wijaya',
                'location' => 'Cibubur, Jakarta Timur',
                'price' => 1300000000,   // 1,3 Billion Rupiah
                'address' => 'Jl. Cendana Raya No. 5',
                'description' => 'Hunian nyaman di lingkungan aman dan strategis, dekat dengan pusat perbelanjaan dan fasilitas umum.',
                'picture_path' => 'images/property/property2.png'
            ],
            [
                'property_id' => 3,
                'property_name' => 'Maple Green Estate',
                'owner' => 'Lestari Rahmadani',
                'location' => 'Bekasi, Jawa Barat',
                'price' => 1400000000,   // 1,4 Billion Rupiah
                'address' => 'Jl. Dahlia No. 18',
                'description' => 'Rumah baru direnovasi, dilengkapi dengan dapur modern dan ruang tamu luas untuk keluarga besar.',
                'picture_path' => 'images/property/property3.png'
            ],

            [
                'property_id' => 4,
                'property_name' => 'Emerald Park',
                'owner' => 'Dedi Pratama',
                'location' => 'Depok, Jawa Barat',
                'price' => 1200000000,   // 1,2 Billion Rupiah
                'address' => 'Jl. Anggrek Blok A2 No. 9',
                'description' => 'Rumah modern dengan 2 lantai, dilengkapi 4 kamar tidur, 3 kamar mandi, dan halaman belakang luas yang cocok untuk keluarga.',
                'picture_path' => 'images/property/property4.png'
            ],

            [
                'property_id' => 5,
                'property_name' => 'Cendana Valley',
                'owner' => 'Siti Aisyah',
                'location' => 'Tangerang, Banten',
                'price' => 1000000000,   // 1 Billion Rupiah
                'address' => 'Jl. Mawar Indah No. 23',
                'description' => 'Hunian minimalis di lingkungan hijau yang asri, dekat dengan pusat perbelanjaan dan fasilitas pendidikan.',
                'picture_path' => 'images/property/property5.png'
            ],

            [
                'property_id' => 6,
                'property_name' => 'Orchard Hill Residence',
                'owner' => 'Ridwan Kurniawan',
                'location' => 'Sawangan, Kota Depok',
                'price' => 1800000000,   // 1,8 Billion Rupiah
                'address' => 'Jl. Anggrek Lestari Blok B7 No. 12',
                'description' => 'Rumah nyaman dengan konsep open space, memiliki 3 kamar tidur, ruang tamu luas, dan dapur modern.',
                'picture_path' => 'images/property/property6.png'
            ],

            [
                'property_id' => 7,
                'property_name' => 'Grand Mahkota Estate',
                'owner' => 'Nina Hartati',
                'location' => 'Bogor, Jawa Barat',
                'price' => 1500000000,   // 1,5 Billion Rupiah
                'address' => 'Jl. Penuin Blok D3 No. 23',
                'description' => 'Hunian strategis dengan akses mudah ke jalan tol, memiliki 4 kamar tidur, 2 kamar mandi, dan garasi untuk 2 mobil.',
                'picture_path' => 'images/property/property7.png'
            ],

            [
                'property_id' => 8,
                'property_name' => 'Palm View Residence',
                'owner' => 'Agus Santoso',
                'location' => 'Bandung, Jawa Barat',
                'price' => 1300000000,   // 1,3 Billion Rupiah
                'address' => 'Jl. Sukajadi Blok C4 No. 23',
                'description' => 'Rumah minimalis tipe 36 dengan harga terjangkau, cocok untuk pasangan muda atau keluarga kecil.',
                'picture_path' => 'images/property/property8.png'
            ],


            [
                'property_id' => 9,
                'property_name' => 'Vista Green Hills',
                'owner' => 'Rita Sari',
                'location' => 'Bogor, Jawa Barat',
                'price' => 2500000000,   // 2,5 Billion Rupiah
                'address' => 'Jl. Flamboyan Blok C1 No. 10',
                'description' => 'Rumah klasik dengan sentuhan modern, memiliki 3 kamar tidur, 2 kamar mandi, dan halaman depan luas.',
                'picture_path' => 'images/property/property9.png'
            ],

            [
                'property_id' => 10,
                'property_name' => 'Exhuma Grand Residence',
                'owner' => 'Richard Novsevrin',
                'location' => 'Bandung, Jawa Barat',
                'price' => 3500000000,   // 2,5 Billion Rupiah
                'address' => 'Jl. Cemara Kuta F2 No. 5',
                'description' => 'Hunian di lingkungan aman dan nyaman, dekat dengan taman bermain anak dan fasilitas olahraga.',
                'picture_path' => 'images/property/property10.png'
            ]
        

        ]);
    }
}
