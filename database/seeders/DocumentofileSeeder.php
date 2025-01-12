<?php

namespace Database\Seeders;

use App\Models\Documentofile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentofileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documentofile::create([
            'name' => 'Cédula de Identidad',
            'estado'=>random_int(0,1)
        ]);
        Documentofile::create([
            'name' => 'Registro Docente Administrativo',
            'estado'=>random_int(0,1)
        ]);
        Documentofile::create([
             'name' => 'Certificado de Nacimeinto',
             'estado'=>random_int(0,1)
        ]);
        Documentofile::create([
            'name' => 'Certificado de Categoría',
            'estado'=>random_int(0,1)
        ]);
        Documentofile::create([
            'name' => 'Título en Provisión Nacional',
            'estado'=>random_int(0,1)
        ]);
    }
}
