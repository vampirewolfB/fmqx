<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
            'subject' => $this->faker->sentence(20),
            'content' => $this->faker->sentence(20),
        ];
    }
}
