<?php

namespace App\Concerns\Filament;

use Illuminate\Support\Str;

trait Enumerable
{
    public static function asFilamentOptions(): array
    {
        return collect(static::cases())
            ->mapWithKeys(fn ($case) => [$case->value => Str::studly($case->value)])
            ->toArray();
    }
}
