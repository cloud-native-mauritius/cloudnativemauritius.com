<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Due to SQLite nature, we have to rely on
     * Observer to update the published_at column instead of
     * using a STORED GENERATED column.
     * See more: https://www.sqlite.org/deterministic.html
     * Tried using updated_at to generate published_at, but updated_at does not mean
     * the post is published at that time.
     */
    protected function updatePublishedAt(Post $post): void
    {
        if ($post->is_published && $post->published_at === null) {
            $post->published_at = now();
            $post->saveQuietly();

            return;
        }

        if (! $post->is_published && $post->published_at !== null) {
            $post->published_at = null;
            $post->saveQuietly();

            return;
        }
    }

    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        $this->updatePublishedAt($post);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        $this->updatePublishedAt($post);
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
