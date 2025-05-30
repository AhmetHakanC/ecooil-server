<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => fake()->numberBetween(1, 10),
            'collector_id' => fake()->numberBetween(1, 10),
            'address_id' => fake()->numberBetween(1, 10),
            'date' => fake()->dateTime(),
            'amount' => fake()->randomFloat(1, 5, 26),
        ];
    }
}
