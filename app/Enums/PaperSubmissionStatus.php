<?php

namespace App\Enums;

use App\Concerns\EnumSelectable;

enum PaperSubmissionStatus: string
{
    use EnumSelectable;

    case SUBMITTED = 'submitted';
    case UNDER_REVIEW = 'under_review';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';
    case PUBLISHED = 'published';

}
