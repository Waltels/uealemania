<?php

namespace Database\Seeders;

use App\Models\Faltas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaltasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faltas::create([
            'name' => 'Inasistencia al trabajo',
            'normativa'=>'RM 2513 Faltas y Sanciones'
        ]);
        Faltas::create([
            'name' => 'Inasistencia al desfiles',
            'normativa'=>'RM 2513 Faltas y Sanciones'
        ]);
    }
}
