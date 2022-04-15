<?php

use Illuminate\Database\Seeder;
use App\User; 


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
        $user->name = 'Salvo';
        $user->email = 'salvo@movienet.it';
        $user->password = bcrypt('password');
        $user->save();
    }
}
