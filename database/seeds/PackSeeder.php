<?php

use Illuminate\Database\Seeder;
use App\Models\Pack;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packs= [
            ['name' => 'Bronze','price' => 2.99,'time' => 24],
            ['name' => 'Silver','price' => 5.99,'time' => 72],
            ['name' => 'Gold','price' => 9.99,'time' => 144]
        ];

        foreach($packs as $pack)
        {
            $new_pack = new Pack();
            $new_pack->fill($pack);
            $new_pack->save();
        }
    }
}
