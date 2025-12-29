<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publisher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(),
            'authors' => fake()->name(),
            'summary' => fake()->paragraph(),
            'publication_date' => fake()->date(),
            'publisher_id' => Publisher::query()->inRandomOrder()->first()->id,
            'isbn' => fake()->isbn13(),
            'link' => fake()->url(),
            'image' => null,
        ];
    }
}
