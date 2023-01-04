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
    public function definition()
    {
        return [
            'tracking_no'=>  $this->faker->text,
            'fullname'=>  $this->faker->text,
            'email'=>  $this->faker->text,
            'phone'=>  $this->faker->text,
            'pincode'=>  $this->faker->text,
            'address'=>  $this->faker->paragraph,
            'status_message'=>  $this->faker->text,
            'payment_mode'=>  $this->faker->text,
            'payment_id'=>  $this->faker->text,
            'total_price' => $this->faker->numberBetween(25000, 200000),
            'payment_status' => 1,
        ];
    }
}
