<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'text' => $this->faker->paragraphs(rand(3, 7), true),
            'image' => $this->faker->text(10)
        ];
    }
}
