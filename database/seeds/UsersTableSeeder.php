<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => env('NAME'),
            'email' => env('EMAIL'), 
            'password' => bcrypt(env('PASSWORD'))
        ]);

        $user->assignRole('admin');
    }
}
