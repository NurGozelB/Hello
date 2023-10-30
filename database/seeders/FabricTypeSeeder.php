<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FabricTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fabricTypes = ['plain', 'colorfull', 'checked', 'woven'];

        foreach ($fabricTypes as $fabricType) {
            FabricType::create([
                'name' => $FabricType,
                'slug' => str($FabricType)->slug(),
            ]);
        }
    }
}
