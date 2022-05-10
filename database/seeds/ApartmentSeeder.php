<?php

use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Service;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_service_id = Service::pluck('id')->toArray();
        $apartments = config('apartments');

        foreach ($apartments as $apartment) {
            $new_apartment = new Apartment();
            $new_apartment->user_id = rand(1, 4);
            $new_apartment->fill($apartment);
            $new_apartment->save();


            //popolo per ogni giro servizi randomici
            $rand_services = Arr::random($arr_service_id, rand(1, 4));
            $new_apartment->services()->attach($rand_services);
        }
    }
}
