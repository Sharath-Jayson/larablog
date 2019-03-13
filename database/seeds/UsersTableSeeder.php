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

       $user = App\User::create([
            'name' => 'Sarath Kumar',
            'email' => 'jaisarat@gmail.com',
            'password' => bcrypt('sarath12'),
            'admin' => 1

        ]);

        App\Profile::create([
           'user_id' => $user->id,
           'avatar' => 'uploads/avatars/1.jpg',
           'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ducimus id, asperiores ea a, est fuga quibusdam vitae, dignissimos dicta iste? Beatae modi vel laboriosam laudantium itaque sunt ipsam voluptatibus.',
           'facebook' => 'facebook.com',
           'youtube' => 'youtube.com'
        ]);
    }
}
