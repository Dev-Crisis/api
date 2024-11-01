<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->company,
            "url" => fake()->url,
            "thumbnail_url" => fake()->imageUrl(width: 800, height: 470),
            "content" => fake()->text(500),
            "image_1_url" => fake()->imageUrl(width: 800, height: 470),
            "image_1_description" => fake()->text(500),
            "image_2_url" => fake()->imageUrl(width: 800, height: 470),
            "image_2_description" => fake()->text(500),
            "visible" => fake()->boolean,
        ];
    }
}
