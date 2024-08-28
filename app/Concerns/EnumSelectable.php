<?php

namespace App\Concerns;

trait EnumSelectable
{
    // enum to array of key value pairs
    public static function toSelectionArray()
    {
        return collect(static::cases())->mapWithKeys(function ($enum) {
            return [
                $enum->value => __(str($enum->value)
                    ->replace('_', ' ')
                    ->replace('-', ' ')
                    ->title()
                    ->toString()),
            ];
        })->toArray();
    }
}
