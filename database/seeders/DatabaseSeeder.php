<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\ConfiguracaoTableSeeder;
use Database\Seeders\DisponibilidadeTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //seeders
        $this->call(UserTableSeeder::class);
        $this->call(ConfiguracaoTableSeeder::class);
        $this->call(DisponibilidadeTableSeeder::class);
    }
}
