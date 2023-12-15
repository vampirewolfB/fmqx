<?php

namespace Database\Factories;

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
            'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
            'post_id' => random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id')),
            'content' => $this->faker->sentence(20),
        ];
    }
}
