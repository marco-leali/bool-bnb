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
        $users = [
            [
                'name' => 'Antonio',
                'surname' => 'Nicodemo',
                'date_of_birth' => '1997-04-25',
                'email' => 'antonio@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Marco',
                'surname' => 'Leali',
                'date_of_birth' => '1990-11-20',
                'email' => 'marco@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Salvatore',
                'surname' => 'Pitanza',
                'date_of_birth' => '1986-05-17',
                'email' => 'salvatore@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Gioele',
                'surname' => 'Runza',
                'date_of_birth' => '1999-07-11',
                'email' => 'gioele@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $user) {
            $new_user = new User();
            $new_user->name = $user['name'];
            $new_user->surname = $user['surname'];
            $new_user->date_of_birth = $user['date_of_birth'];
            $new_user->email = $user['email'];
            $new_user->password = $user['password'];
            $new_user->save();
        }
    }
}
