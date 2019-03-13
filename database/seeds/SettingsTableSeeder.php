<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Setting::create([

            'site_name' => "Laravel's Blog",

            'address' => "Shire, Newzealand",

             'contact_number' => "9962755626",

             'contact_email'  => "info@larablog.com"
        ]);
    }
}
