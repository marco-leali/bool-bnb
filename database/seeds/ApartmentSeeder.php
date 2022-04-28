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
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $apartment = new Apartment();
            $apartment->user_id = 1;
            $apartment->title_desc = $faker->words(5, true);
            $apartment->image = $faker->imageUrl(640, 480, 'apartment', true);
            $apartment->room = rand(1, 10);
            $apartment->bathroom = rand(1, 3);
            $apartment->bed = rand(1, 7);
            $apartment->square_meters = rand(30, 500);
            $apartment->save();
        }
       
    }
}
