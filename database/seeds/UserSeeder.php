<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'AGSM';
        $user->surname = 'LNPR';
        $user->date_of_birth = Carbon::parse('Tomorrow');
        $user->email = 'agsm.lnpr@bool.it';
        $user->password = bcrypt('password');
        $user->save();
    }
}
