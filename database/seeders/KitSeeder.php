<?php

namespace Database\Seeders;
use App\models\Kit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Kit::create([
            'name' => 'STARTER_KIT'
        ]);
        Kit::create([
            'name' => 'EDUCATIONAL_ROBOTICS_KIT'
        ]);
        Kit::create([
            'name' => 'KIT_5'
        ]);
    }
}
