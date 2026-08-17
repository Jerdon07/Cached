<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'contact_person' => fake()->name(),
            'phone' => '09'.fake()->numerify('#########'),
            'email' => fake()->companyEmail(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->country(),
            'postal_code' => fake()->postcode(),
        ];
    }
}
