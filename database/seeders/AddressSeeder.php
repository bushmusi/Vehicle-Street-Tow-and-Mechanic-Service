<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Address::create([
            'subcity' => 'Bole',
            'woreda' => 1,
        ]);

        Address::create([
            'subcity' => "Bole",
            'woreda' => 2,
        ]);

        Address::create([
            'subcity' => "Bole",
            'woreda' => 3,
        ]);

        Address::create([
            'subcity' => "Bole",
            'woreda' => 4,
        ]);

        Address::create([
            'subcity' => "Yeka",
            'woreda' => 1,
        ]);

        Address::create([
            'subcity' => "Yeka",
            'woreda' => 2,
        ]);

        Address::create([
            'subcity' => "Yeka",
            'woreda' => 3,
        ]);

        Address::create([
            'subcity' => "Yeka",
            'woreda' => 4,
        ]);

        Address::create([
            'subcity' => "Arada",
            'woreda' => 1,
        ]);

        Address::create([
            'subcity' => "Arada",
            'woreda' => 2,
        ]);

        Address::create([
            'subcity' => "Arada",
            'woreda' => 3,
        ]);
    }
}
