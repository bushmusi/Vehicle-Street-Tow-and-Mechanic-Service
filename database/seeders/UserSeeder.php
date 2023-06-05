<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Address;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
              // Create an admin user
              $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
            ]);
    
            // Create a mechanic user with associated address
            $mechanic = User::create([
                'name' => 'Mechanic',
                'email' => 'mechanic@example.com',
                'password' => Hash::make('password'),
                'role' => 'Mechanic',
            ]);
    
            $mechanicAddress = Address::create([
                'subcity' => 'SubCity 1',
                'woreda' => 1,
            ]);
    
            $mechanic->address_id = $mechanicAddress->id;
            $mechanic->save();
    
            // Create a driver user with associated address
            $driver = User::create([
                'name' => 'Driver',
                'email' => 'driver@example.com',
                'password' => Hash::make('password'),
                'role' => 'Driver',
            ]);
    
            $driverAddress = Address::create([
                'subcity' => 'SubCity 2',
                'woreda' => 2,
            ]);
    
            $driver->address_id = $driverAddress->id;
            $driver->save();
    
            // Create a service provider user with associated address
            $provider = User::create([
                'name' => 'Service Provider',
                'email' => 'provider@example.com',
                'password' => Hash::make('password'),
                'role' => 'Service-Provider',
            ]);
    
            $providerAddress = Address::create([
                'subcity' => 'SubCity 3',
                'woreda' => 3,
            ]);
    
            $provider->address_id = $providerAddress->id;
            $provider->save();
    }
}
