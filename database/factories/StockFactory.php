<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = \App\Models\Stock::class;

    public function definition()
    {
        return [
            'goods_id' => \App\Models\Good::factory(),
            'count' => $this->faker->numberBetween(1, 20),
            'address' => $this->faker->address,
        ];
    }
}
