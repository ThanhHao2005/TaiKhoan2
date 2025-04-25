<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'order_number' => 'DH' . $this->faker->unique()->numberBetween(1000, 9999),
            'total' => $this->faker->numberBetween(100000, 500000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }

}
