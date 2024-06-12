<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bgColors = ['bg-red-600', 'bg-blue-600', 'bg-green-600',];

        return [
            'title' => $this->faker->sentence(1),
            'slug' => $this->faker->slug(3),
            'bg_color' => $this->faker->randomElement($bgColors),
            'text_color' => 'text-white',
        ];
    }
}
