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
                'first_name' => 'Budi',
                'last_name' => 'Santoso',
                'username' => 'budi.santoso',
                'email' => 'budi.santoso@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081234567890',
                'remember_token' => null,
                'picture_path' => null,
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'first_name' => 'Siti',
                'last_name' => 'Aminah',
                'username' => 'siti.aminah',
                'email' => 'siti.aminah@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081298765432',
                'remember_token' => null,
                'picture_path' => null,
                'is_agent' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'first_name' => 'Andi',
                'last_name' => 'Saputra',
                'username' => 'andi.saputra',
                'email' => 'andi.saputra@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081223344556',
                'remember_token' => null,
                'picture_path' => null,
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'first_name' => 'Rina',
                'last_name' => 'Wijaya',
                'username' => 'rina.wijaya',
                'email' => 'rina.wijaya@gmail.com',
                'password' => bcrypt('secret'),
                'phone_number' => '081299887766',
                'remember_token' => null,
                'picture_path' => null,
                'is_agent' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
