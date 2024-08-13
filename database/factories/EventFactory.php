<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'title' => $this->faker->sentence(4),
            'location' => $this->faker->word(),
            'google_map' => $this->faker->word(),
            'note' => $this->faker->text(),
            'cncf_url' => $this->faker->word(),
            'start_date' => $this->faker->dateTime(),
        ];
    }
}
