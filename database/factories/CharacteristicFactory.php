<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CharacteristicFactory extends Factory
{
    protected $model = \App\Models\Characteristic::class;

    public function definition()
    {
        return [
            'goods_id' => \App\Models\Good::factory(),
            'name' => $this->faker->word,
            'value' => $this->faker->word,
        ];
    }
}
