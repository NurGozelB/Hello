<?php

namespace Database\Seeders;

use App\Models\fabricType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FabricTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param $FabricType
     */
    public function run(): void
    {
        $fabricTypes = ['plain', 'colorfull', 'checked', 'woven'];

        foreach ($fabricTypes as $fabricType) {
            FabricType::create([
                'name' => $fabricType,
                'slug' => str($fabricType)->slug(),
            ]);
        }
    }
}
