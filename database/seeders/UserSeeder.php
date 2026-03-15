<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Professor',
        ]);
        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Student',
        ]);
    }
}
