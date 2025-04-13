<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  public function definition(): array
  {
    return [
      'titulo' => $this->faker->sentence(5),
      'description' => $this->faker->sentence(20),
      'imagen' => $this->faker->uuid() . '.jpg',
      'user_id' => $this->faker->randomElement([5]),
    ];
  }
}
