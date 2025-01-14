<?php

namespace Database\Seeders;

use App\Models\Meses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meses::create([
            'name' => 'Enero',
        ]);
        Meses::create([
            'name' => 'Febrero',
        ]);
        Meses::create([
            'name' => 'Marzo',
        ]);
        Meses::create([
            'name' => 'Abril',
        ]);
        Meses::create([
            'name' => 'Mayo',
        ]);
        Meses::create([
            'name' => 'Junio',
        ]);
        Meses::create([
            'name' => 'Julio',
        ]);
        Meses::create([
            'name' => 'Agosto',
        ]);
        Meses::create([
            'name' => 'Septiembre',
        ]);
        Meses::create([
            'name' => 'Octubre',
        ]);
        Meses::create([
            'name' => 'Noviembre',
        ]);
        Meses::create([
            'name' => 'Diciembre',
        ]);
    }
}
