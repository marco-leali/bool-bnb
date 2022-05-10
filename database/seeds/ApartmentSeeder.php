<?php

use Illuminate\Database\Seeder;
use App\Models\Apartment;
use Faker\Generator as Faker;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = config('apartments');

        foreach ($apartments as $apartment) {
            $new_apartment = new Apartment();
            $new_apartment->user_id = rand(1, 4);
            $new_apartment->fill($apartment);
            $new_apartment->save();
        }
    }
}
