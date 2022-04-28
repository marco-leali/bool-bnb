<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\IpAddress;
use App\Models\Apartment;
use Faker\Generator as Faker;

class IpAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $apartment_ids = Apartment::pluck('id')->toArray();

        for ($i=0; $i < 100; $i++) { 
            
            $new_ipAdress = new IpAddress();
            $new_ipAdress->apartment_id = Arr::random($apartment_ids);
            $new_ipAdress->ip = $faker->ipv4();
            $new_ipAdress->save();

        }
    }
}
