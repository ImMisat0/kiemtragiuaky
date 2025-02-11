<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => fake()->asciify('user-****'),
            'model' => fake()->shuffle('hello-world'),
            'produced_on' => date("Y-m-d"),
            'image' =>'hinh'.rand(1,4).'.png',
            'mf_id'=>rand(1,10),
        ];
    }
}
