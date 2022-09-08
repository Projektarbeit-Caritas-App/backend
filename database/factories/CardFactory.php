<?php

namespace Database\Factories;

use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = fake()->dateTime('+1 month');

        return [
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'street' => fake()->optional()->streetAddress(),
            'postcode' => fake()->optional()->postcode(),
            'city' => fake()->optional()->city(),
            'comment' => fake()->optional()->paragraph(),
            'valid_from' => $start,
            'valid_until' => $start->add(new DateInterval('P3M')),
        ];
    }
}
