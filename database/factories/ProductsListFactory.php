<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'badminton racket',
            'buy_price' => 100000,
            'sell_price' => 130000,
            'stock' => 10,
            'category' => 'sports',
            'image' => 'images/image 2.png',
        ];
    }
}
