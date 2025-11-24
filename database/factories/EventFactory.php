<?php

namespace Database\Factories;

use App\Models\Location;
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
            'date' => fake()->dateTimeBetween('+1 days', '+1 month'),
            'time' => '19:00',
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'location_id' => Location::query()->inRandomOrder()->first()->id,
            'image' => fake()->imageUrl(800, 600, 'events'),
            'published' => fake()->boolean(99),
            'canceled' => false,
        ];
    }
}
