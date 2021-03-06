<?php

use App\Models\Apartment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class, ServiceSeeder::class, ApartmentSeeder::class, PackSeeder::class, PositionSeeder::class, IpAddressSeeder::class, MessageSeeder::class]);
    }
}
