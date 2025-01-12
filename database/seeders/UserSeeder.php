<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'WALTER LAURA SOTO',
            'email' => 'waltels@gmail.com',
            'password'=> bcrypt('123456789')
        ]);
        User::factory(20)->create();
    }
}
