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
        $fabricType = ['plain', 'colorfull', 'checked', 'woven'];

        foreach ($fabricType as $fabricTypes) {
            FabricTypes::create([
                'name' => $FabricTypes,
                'slug' => str($FabricTypes)->slug(),
            ]);
        }
    }
}
