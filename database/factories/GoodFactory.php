<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class GoodFactory extends Factory
{
    
    protected $model = \App\Models\Good::class;

    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(),
            'sku' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'name' => $this->faker->word . ' ' . $this->faker->word,
            'prices' => [
                'old' => $this->faker->numberBetween(100, 500),
                'price' => $this->faker->numberBetween(50, 400),
            ],
            'description' => $this->faker->paragraph,
            'is_published' => $this->faker->boolean,
        ];
    }
}
