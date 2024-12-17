<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app_users')->insert([
            [
                'user_id' => 1,
                "fullname"=>"Budi Santoso",
                'email' => 'budi.santoso@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081234567890',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/5234256/pexels-photo-5234256.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                "fullname"=>"Siti Aminah",
                'email' => 'siti.aminah@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081298765432',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/4909509/pexels-photo-4909509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'fullname'=>"Andi Saputra",
                'email' => 'andi.saputra@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081223344556',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/17065388/pexels-photo-17065388/free-photo-of-man-with-black-hair-and-in-eyeglasses.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'fullname'=> "Rina Wijaya",
                'email' => 'rina.wijaya@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081299887766',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/1157454/pexels-photo-1157454.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'fullname' => 'Dewi Kartika',
                'email' => 'dewi.kartika@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081311223344',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/15827726/pexels-photo-15827726/free-photo-of-portrait-of-a-brunette.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'fullname' => 'Rendy Pratama',
                'email' => 'rendy.pratama@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081322334455',
                'remember_token' => null,
                'picture_path' => 'https://images.pexels.com/photos/10928778/pexels-photo-10928778.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'fullname' => 'Hansen Huang',
                'email' => 'hansen.huang@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '08117316325',
                'remember_token' => null,
                'picture_path' => '',
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'fullname' => 'Wilson Hermanto',
                'email' => 'wilson.hermanto@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '08117755521',
                'remember_token' => null,
                'picture_path' => '',
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
      
        ]);
    }
}
