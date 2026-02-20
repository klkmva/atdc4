<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->number(1, 10000)->unique(),
            'time' => '19:00',
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(),
            'info' => fake()->paragraph(10),
            'location_id' => null,
            'image' => null,
            'published' => fake()->boolean(99),
            'canceled' => false,
            'book_id' => null,
            'video' => null,
        ];
    }
}
