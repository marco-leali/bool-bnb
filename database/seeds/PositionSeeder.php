<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Position;
use App\Models\Apartment;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $apartment_ids = Apartment::pluck('id')->toArray();

        for ($i=0; $i < 10; $i++) { 
            
            $new_position = new Position();
            $new_position->apartment_id = $apartment_ids[$i];
            $new_position->postal_code = $faker->postcode();
            $new_position->province = $faker->stateAbbr();
            $new_position->latitude = $faker->latitude();
            $new_position->longitude = $faker->longitude();
            $new_position->street = $faker->streetAddress();
            $new_position->city = $faker->city();
            $new_position->save();

        }
    }
}
