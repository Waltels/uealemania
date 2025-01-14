<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docente::create([
            'user_id' => '1',
            'ci'=>'3540110',
            'telefono'=>'69590211',
            'Direccion'=>'C. Sgto. Nuñes y Sucre Caracollo'
        ]);
    }
}
