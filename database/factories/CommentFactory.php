<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'body' => fake()->paragraph(30),
            'approved' => fake()->boolean(),
            'created_at' => fake()->dateTimeBetween('-2 months'),
            'updated_at' => fake()->dateTimeBetween('-1 months')
        ];
    }
}
