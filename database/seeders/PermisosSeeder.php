<?php

namespace Database\Seeders;

use App\Models\Permisos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permisos::create([
            'name' => 'Asistencia en Salud',
            'normativa'=>'RM 2513 Faltas y Sanciones'
        ]);

        Permisos::create([
            'name' => 'Asistencia en defunción',
            'normativa'=>'RM 2513 Faltas y Sanciones'
        ]);
    }
}
