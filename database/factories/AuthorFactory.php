<?php

namespace Database\Factories;

use App\Models\Author;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'bio' => $this->faker->text(),
            'photo' => $this->faker->word(),
            'slug' => $this->faker->slug(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Author $author) {
            // -------------------
            // This is slow, let's use nicolas cage as placeholder :)
            // -------------------
            // $faker = FakerFactory::create();

            // $dir = storage_path('app/public');
            // $image = $faker->image($dir, 640, 640, null, false);

            // $author->photo = $image;
            $author->photo = 'cage.png';

            $author->save();

        });
    }
}
