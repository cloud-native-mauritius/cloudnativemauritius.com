<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Console\Command;

class ClearCacheForEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'events:cache-clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will check events and clear cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $recentEvents = Event::query()
            ->where('start_date', '<=', now()->addHours(24)->startOfDay())
            ->where('start_date', '>=', value: now()->subHours(24)->startOfDay())
            ->dumpRawSql()
            ->exists();

        if ($recentEvents) {
            $this->call('responsecache:clear');
            $this->info('Response cache cleared due to recent events.');

            return;
        }

        $this->info('No upcoming or recent events. Cache not cleared.');
    }
}
