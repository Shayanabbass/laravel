<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>fake()->numberBetween(1,30),
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'address'=>fake()->address(),
            'age'=>fake()->numberBetween(12,30),
            'city'=>fake()->city()


        ];
    }
}
