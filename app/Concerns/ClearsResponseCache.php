<?php

namespace App\Concerns;

use Spatie\ResponseCache\Facades\ResponseCache;

/**
 * When this trait is used on a model,
 * if a model is created, updated or deleted,
 * This is invalidate the cache.
 *
 * A nice way to invalidate tags is by using tags:
 *      https://github.com/spatie/laravel-responsecache?tab=readme-ov-file#using-tags
 *
 *      Example; you enforce with a contract with models ex. relatedCacheTags function
 *      those tags can be applied on certain routes, and this will only clear the routes
 *      which include those tags.
 * But this... is enough.
 */
trait ClearsResponseCache
{
    public static function bootClearsResponseCache()
    {
        self::created(function () {
            ResponseCache::clear();
        });

        self::updated(function () {
            ResponseCache::clear();
        });

        self::deleted(function () {
            ResponseCache::clear();
        });
    }
}
