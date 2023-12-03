<?php

namespace Database\Factories;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->name(),
            'body' => fake()->paragraph(30),
            'title' => fake()->text(50),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
