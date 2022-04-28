<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicies= ['Parking','Swimming pool','Concierge','Sea View','Sauna','Wi-Fi','Smoking'];

        foreach($servicies as $service)
        {
            $new_service = new Service();
            $new_service->name = $service;
            $new_service->save();
        } 
    }
}
