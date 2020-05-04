<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(\App\User::class)->create([
            'name'     => 'Yeimer',
            'username' => 'yjpinedo',
            'email'    => 'yeimer@mail.com',
            'password' => bcrypt('password'),
        ]);

        factory(\App\User::class, 10)->create();

        $users = \App\User::all();

        foreach ($users as $user) {
            factory(\App\Entry::class, 10)->create([
               'user_id' => $user->id,
            ]);
        }

    }
}
