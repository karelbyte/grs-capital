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
        \App\User::query()->create([
            'name' => 'Karel Puerto Diaz',
            'email' => 'karelpuerto78@gmail.com',
            'password' => Hash::make('12345')
        ]);

        \App\User::query()->create([
            'name' => 'Alcides DS ',
            'email' => 'alcides@grscapital.com.mx',
            'password' => Hash::make('12345')
        ]);
    }
}
