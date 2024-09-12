<?php

namespace App\Enums;

use App\Concerns\Filament\Enumerable;

enum SocialMediaPlatform: string
{
    use Enumerable;

    // Well you know, twitter...
    case X = 'x';
    case GITHUB = 'github';
    case LINKEDIN = 'linkedin';
    case FACEBOOK = 'facebook';
}
