<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docdocente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(DocumentofileSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(DocdocenteSeeder::class);
        $this->call(FaltasSeeder::class);
        $this->call(MesesSeeder::class);
        $this->call(PermisosSeeder::class);
    }
}
