<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'street' => fake()->streetAddress(),
            'postcode' => fake()->postcode(),
            'city' => fake()->city(),
            'contact' => fake()->phoneNumber(),
            'opening_hours' => json_encode([
                'monday' => [
                    [
                        'slots' => 1,
                        'opens_at' => '08:00',
                        'closes_at' => '11:00'
                    ],
                    [
                        'slots' => 3,
                        'opens_at' => '14:00',
                        'closes_at' => '17:00'
                    ]
                ],
                'tuesday' => [
                    [
                        'slots' => 2,
                        'opens_at' => '08:00',
                        'closes_at' => '11:00'
                    ],
                    [
                        'slots' => 2,
                        'opens_at' => '14:00',
                        'closes_at' => '17:00'
                    ]
                ],
                'wednesday' => [
                    [
                        'slots' => 3,
                        'opens_at' => '08:00',
                        'closes_at' => '11:00'
                    ]
                ],
                'thursday' => [
                    [
                        'slots' => 2,
                        'opens_at' => '08:00',
                        'closes_at' => '11:00'
                    ],
                    [
                        'slots' => 2,
                        'opens_at' => '14:00',
                        'closes_at' => '17:00'
                    ]
                ],
                'friday' => [
                    [
                        'slots' => 4,
                        'opens_at' => '10:00',
                        'closes_at' => '15:00'
                    ]
                ],
                'saturday' => [],
                'sunday' => []
            ])
        ];
    }
}
