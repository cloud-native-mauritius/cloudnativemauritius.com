<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaperSubmission>
 */
class PaperSubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'submitter_name' => $this->faker->firstName(),
            'submitter_company' => $this->faker->company(),
            'submitter_job_title' => $this->faker->jobTitle(),
            'submitter_email' => $this->faker->safeEmail(),
            'submitter_bio' => $this->faker->text(),
            'title' => $this->faker->sentence(4),
            'abstract' => $this->faker->paragraphs(3, true),
            'submitter_photo' => $this->faker->image(Storage::disk('submitters-photos')->path(''), 640, 640, null, false),
        ];
    }
}
