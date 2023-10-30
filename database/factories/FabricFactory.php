<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fabric>
 */
class FabricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fabric = DB::table('fabrics')->inRandomOrder()->count(15);

        return [
            'fabric_id' => $fabric->id,
            'slug' => str()->random(10),
        ];
    }
}
