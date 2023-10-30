<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'curtains and  tulles',
            'clothes fabrics',
            'furniture fabrics',
            'bed fabrics',
            'new_year',
        ];

        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => str($category)->slug(),
            ]);
        }
    }
}
