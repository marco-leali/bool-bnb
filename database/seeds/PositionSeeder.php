<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Position;
use App\Models\Apartment;
use Illuminate\Support\Facades\Http;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $positions = config('positions');

        foreach ($positions as $position) {
            $response = Http::get('https://api.tomtom.com/search/2/structuredGeocode.json', [
                'countryCode' => 'IT',
                'streetNumber' => $position['street'],
                'streetName' => $position['street'],
                'municipality' => $position['city'],
                'postalCode' => $position['postal_code'],
                'key' => 'IKVotV9Xwnzy8UimnZdGePT1sU3HI33N',

            ]);
            $position['latitude'] = $response->json()['results'][0]['position']['lat'];
            $position['longitude'] = $response->json()['results'][0]['position']['lon'];
            $new_position = new Position();
            $new_position->fill($position);
            $new_position->save();
        }



        /* $apartment_ids = Apartment::pluck('id')->toArray();

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

        } */
    }
}
