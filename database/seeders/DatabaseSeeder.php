<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AddressSeeder;
use Database\Seeders\UserSeeder;
use App\Models\Address;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AddressSeeder::class);
        $this->call(UserSeeder::class);
    }
}
