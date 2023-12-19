<?php

namespace Database\Factories;

use App\Models\Saler;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'saler_id' => fake()->randomElement(Saler::pluck('id')),
            'itemname' => fake()->randomElement(['safeguard','palmolive','coke','ball','bike']),
            'brandname'=> fake()->randomElement(['wawi','samsung','adidas','nikas','spartan']),
            'itemprice' => fake()->randomFloat(2, 1, 1000),
            'itemstock' => fake()->numberBetween(1, 100),
        ];
    }
}
