<?php

namespace Database\Seeders;

use App\Models\Disponibilidade;
use Illuminate\Database\Seeder;

class DisponibilidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disponibilidade::create([
            'disponibilidade' => date('Y-m-d H:i:s'),
            'disponivel' => 'sim',
            'disponivel_status' => 'sim',
        ]);
    }
}
