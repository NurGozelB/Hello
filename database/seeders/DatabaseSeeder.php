<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FabricSeeder::class,
            CategorySeeder::class,
        ]);

        \App\Models\Fabric::factory(85)->create();
    }
}
