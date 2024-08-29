<?php

namespace Database\Seeders;

use App\Enums\SocialMediaPlatform;
use App\Models\Author;
use App\Models\Category;
use App\Models\Event;
use App\Models\Page;
use App\Models\Post;
use App\Models\SocialMedia;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(5)
            ->has(Author::factory()
                ->has(SocialMedia::factory()
                    ->sequence(
                        ['platform' => SocialMediaPlatform::X],
                        ['platform' => SocialMediaPlatform::FACEBOOK],
                        ['platform' => SocialMediaPlatform::LINKEDIN]
                    )
                    ->count(3), 'socialMedias')
            )
            ->has(Category::factory())
            ->create([
                'is_published' => true,
            ]);

        Event::factory(10)
            ->create();

        // Seed two future events
        Event::factory(2)->create([
            'start_date' => now()->addDays(30),
        ]);

        Page::factory(10)
            ->create();
    }
}
