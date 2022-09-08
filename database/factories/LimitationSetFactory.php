<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateInterval;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LimitationSet>
 */
class LimitationSetFactory extends Factory
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
            'name' => fake()->word(),
            'valid_from' => $start,
            'valid_until' => fake()->randomElement([$start->add(new DateInterval('P3M')), null]),
        ];
    }
}
