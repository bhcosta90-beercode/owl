<?php

namespace Database\Factories;

use App\Enums\SaleStatus;
use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => Seller::factory(),
            'customer_id' => Customer::factory(),
            'sold_at' => fake()->dateTimeBetween('-8 years', '-1 year'),
            'total_amount'=> fake()->numberBetween(10000,50000) / 100,
            'status' => fake()->randomElement(SaleStatus::cases()),
        ];
    }
}
