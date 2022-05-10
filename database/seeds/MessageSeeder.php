<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Apartment;
use App\Models\Message;



class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $apartment_ids = Apartment::pluck('id')->toArray();

        for ($i = 0; $i < 38; $i++) {
            $new_message = new Message();
            $new_message->apartment_id = $apartment_ids[$i];
            $new_message->email = $faker->email();
            $new_message->content = $faker->paragraph(2);
            $new_message->save();
        }
    }
}
