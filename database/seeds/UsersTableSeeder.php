<?php

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
        //

        App\User::create([
            'name' => 'Sarath Kumar',
            'email' => 'jaisarat@gmail.com',
            'password' => bcrypt('sarath12')

        ]);
    }
}
