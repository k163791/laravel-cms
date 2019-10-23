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
        $user = App\User::create([
          'name' => 'uzair',
          'email' => 'uzair@gmail.com',
          'password' => bcrypt('khuljasimsim'),
          'admin' => 1,
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/1.jpg',
          'about' => 'asdasdasdasd',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
