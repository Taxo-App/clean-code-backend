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
            'topic_id' => $this->faker->randomElement([2,3,4,5,6,7,8,9,10]),
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'body' => $this->faker->sentence(25)
        ];
    }
}
