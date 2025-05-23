<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $merek =[
           'Polytron', 'Advan', 'Evercoss', 'Maspion', 'Denpoo', 'Sharp Indonesia', 'Samsung Indonesia', 'Xiaomi Indonesia',      
       ];

        return [
            'brand' => $this->faker->randomElement($merek),
            'description' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
