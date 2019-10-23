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
        App\Setting::create([
          'site_name' => 'Laravel\'s Blog',
          'address' => 'Pakistan, Karachi',
          'contact_number' => '0900 78601',
          'contact_email' => 'info@laravel.com'
        ]);
    }
}
