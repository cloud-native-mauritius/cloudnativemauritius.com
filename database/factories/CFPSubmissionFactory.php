<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CFPSubmission>
 */
class CFPSubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'company' => $this->faker->company(),
            'jobtitle' => $this->faker->jobTitle(),
            'bio' => $this->faker->sentence(10),

            'email' => $this->faker->email(),

            'title' => $this->faker->sentence(2),
            'extract' => $this->faker->sentence(30),

            'confirmed' => $this->faker->boolean(),
        ];
    }
}
