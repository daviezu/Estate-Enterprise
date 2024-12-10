<?php

namespace Database\Seeders;

use App\Models\AppUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AppUser::class,
            PropertySeeder::class,
        ]);
    }
}
