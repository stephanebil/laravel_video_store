<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>fake()->word(),
            "description"=>fake()->paragraph(5),
            "url_img"=>fake()->imageUrl(640, 480, 'animals', true),
            "nationality"=>fake()->countryCode(),
            "year_created"=>fake()->year(),
            "actors"=>fake()->name(),
            
        ];
    }
}
