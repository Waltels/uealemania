<?php

namespace Database\Seeders;

use App\Models\Docdocente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocdocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docdocente::create([
            'name' => 'Plan anual Trimestralizado',
            'estado'=>random_int(0,1)
        ]);
    }
}
