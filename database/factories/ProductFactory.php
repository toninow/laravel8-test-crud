<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(1),
            'price' => $this->faker->randomFloat($maxDeximals = 2, $min = 3, $max = 100),
            'stock' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['Disponible', 'No disponible']),
            'image' => 'products/' . $this->faker->image('public/storage/products', 640, 480, null, false)
        ];
    }
}