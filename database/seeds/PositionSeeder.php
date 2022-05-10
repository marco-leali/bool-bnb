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

        /* $positions = config('positions'); */

        $positions =  [
    [
        'apartment_id' => 1,
        'postal_code' => 25121,
        'city' => 'Brescia',
        'province' => 'BS',
        'street' => 'Attilio Franchi, 1',
    ],
    [
        'apartment_id' => 2,
        'postal_code' => 66040,
        'city' => 'Roccascalegna',
        'province' => 'CH',
        'street' => 'Via Roma, 3',
    ],
    [
        'apartment_id' => 3,
        'postal_code' => 98023,
        'city' => 'Furci Siculo',
        'province' => 'ME',
        'street' => 'Via Cesare Battisti, 6',
    ],
    [
        'apartment_id' => 4,
        'postal_code' => 66052,
        'city' => 'Gissi',
        'province' => 'CH',
        'street' => 'Via dello Stadio, 5',
    ],
    [
        'apartment_id' => 5,
        'postal_code' => 80129,
        'city' => 'Napoli',
        'province' => 'NA',
        'street' => 'Via Pigna, 8',
    ],
    [
        'apartment_id' => 6,
        'postal_code' => 53100,
        'city' => 'Peruzzo',
        'province' => 'SI',
        'street' => 'Strada della Peruzza, 9',
    ],
    [
        'apartment_id' => 7,
        'postal_code' => 52025,
        'city' => 'Pestello',
        'province' => 'AR',
        'street' => 'Via Reno, 12',
    ],
    [
        'apartment_id' => 8,
        'postal_code' => 34149,
        'city' => 'Gropada',
        'province' => 'TS',
        'street' => 'Piazzetta del Pozzo, 5',
    ],
    [
        'apartment_id' => 9,
        'postal_code' => 10090,
        'city' => 'Reano',
        'province' => 'TO',
        'street' => 'Via S. Rocco, 8',
    ],
    [
        'apartment_id' => 10,
        'postal_code' => 20080,
        'city' => 'Riazzolo',
        'province' => 'MI',
        'street' => 'Str. per Riazzolo, 6',
    ],
    [
        'apartment_id' => 11,
        'postal_code' => 20862,
        'city' => 'Arcore',
        'province' => 'MB',
        'street' => 'Via A. Casati, 15',
    ],
    [
        'apartment_id' => 12,
        'postal_code' => 20862,
        'city' => 'Arcore',
        'province' => 'MB',
        'street' => 'Viale S. Martino, 5',
    ],
    [
        'apartment_id' => 13,
        'postal_code' => 20862,
        'city' => 'Arcore',
        'province' => 'MB',
        'street' => 'Via Francesco Caglio, 4',
    ],
    [
        'apartment_id' => 14,
        'postal_code' => 20862,
        'city' => 'Arcore',
        'province' => 'MB',
        'street' => 'Via Alessandro Manzoni, 4',
    ],

    [
        'apartment_id' => 15,
        'postal_code' => 30100,
        'city' => 'Marghera',
        'province' => 'VE',
        'street' => 'Via Pietro Zerman, 6',
    ],
    [
        'apartment_id' => 16,
        'postal_code' => 30100,
        'city' => 'Marghera',
        'province' => 'VE',
        'street' => 'Via Delle Macchina, 10',
    ],
    [
        'apartment_id' => 17,
        'postal_code' => 30100,
        'city' => 'Marghera',
        'province' => 'VE',
        'street' => 'Via Elettricità, 5',
    ],
    [
        'apartment_id' => 18,
        'postal_code' => 30100,
        'city' => 'Marghera',
        'province' => 'VE',
        'street' => 'Via Alessandro Volta, 6',
    ],
    [
        'apartment_id' => 19,
        'postal_code' => 00055,
        'city' => 'Ladispoli',
        'province' => 'RM',
        'street' => 'Via La Spezia, 4',
    ],
    [
        'apartment_id' => 20,
        'postal_code' => 00055,
        'city' => 'Ladispoli',
        'province' => 'RM',
        'street' => 'Via Palermo, 3',
    ],
    [
        'apartment_id' => 21,
        'postal_code' => 00055,
        'city' => 'Ladispoli',
        'province' => 'RM',
        'street' => 'Via Fiume, 5',
    ],
    [
        'apartment_id' => 22,
        'postal_code' => 10060,
        'city' => 'Macello',
        'province' => 'TO',
        'street' => 'Viale Rimembranza, 8',
    ],
    [
        'apartment_id' => 23,
        'postal_code' => 10060,
        'city' => 'Macello',
        'province' => 'TO',
        'street' => 'Via Buriasco, 6',
    ],
    [
        'apartment_id' => 24,
        'postal_code' => 10060,
        'city' => 'Macello',
        'province' => 'TO',
        'street' => 'Via Campanile, 8',
    ],
    [
        'apartment_id' => 25,
        'postal_code' => 89065,
        'city' => 'Motta San Giovanni',
        'province' => 'RC',
        'street' => 'Via Antonio Caserta, 8',
    ],
    [
        'apartment_id' => 26,
        'postal_code' => 89065,
        'city' => 'Motta San Giovanni',
        'province' => 'RC',
        'street' => 'Via Annunziato Laganà, 7',
    ],
    [
        'apartment_id' => 27,
        'postal_code' => 66054,
        'city' => 'Vasto',
        'province' => 'CH',
        'street' => 'Via Marco Polo, 6',
    ],
    [
        'apartment_id' => 28,
        'postal_code' => 66054,
        'city' => 'Vasto',
        'province' => 'CH',
        'street' => 'Via S.Rocco, 3',
    ],
    [
        'apartment_id' => 29,
        'postal_code' => 66054,
        'city' => 'Vasto',
        'province' => 'CH',
        'street' => 'Piazza del Popolo, 5',
    ],
    [
        'apartment_id' => 30,
        'postal_code' => 66054,
        'city' => 'Vasto',
        'province' => 'CH',
        'street' => 'Piazza del Popolo, 2',
    ],
    [
        'apartment_id' => 31,
        'postal_code' => 35030,
        'city' => 'Caselle',
        'province' => 'PD',
        'street' => 'Via Pelosa, 1',
    ],
    [
        'apartment_id' => 32,
        'postal_code' => 35030,
        'city' => 'Caselle',
        'province' => 'PD',
        'street' => 'Via Monti, 6',
    ],
    [
        'apartment_id' => 33,
        'postal_code' => 98051,
        'city' => 'Barcellona Pozzo di Gotto',
        'province' => 'ME',
        'street' => 'Via Militi, 5',
    ],
    [
        'apartment_id' => 34,
        'postal_code' => 98051,
        'city' => 'Barcellona Pozzo di Gotto',
        'province' => 'ME',
        'street' => 'Via Giuseppe Parini, 3',
    ],
    [
        'apartment_id' => 35,
        'postal_code' => 98051,
        'city' => 'Barcellona Pozzo di Gotto',
        'province' => 'ME',
        'street' => 'Via Monti, 7',
    ],
    [
        'apartment_id' => 36,
        'postal_code' => 25072,
        'city' => 'Bagolino',
        'province' => 'BS',
        'street' => 'Via Forno, 4',
    ],
    [
        'apartment_id' => 37,
        'postal_code' => 25072,
        'city' => 'Bagolino',
        'province' => 'BS',
        'street' => 'Via Mignano, 3',
    ],
    [
        'apartment_id' => 38,
        'postal_code' => 25072,
        'city' => 'Bagolino',
        'province' => 'BS',
        'street' => 'Via Madonna Di S.Luca, 6',
    ],
];


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
