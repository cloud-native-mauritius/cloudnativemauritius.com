<?php

namespace Database\Factories;

use App\Enums\SocialMediaPlatform;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMedia>
 */
class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'platform' => $this->faker->randomElement(SocialMediaPlatform::cases())->value,
            'url' => $this->faker->url(),
        ];
    }
}
