<?php

namespace App\Models;

use App\Enums\PaperSubmissionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'submitter_name',
        'submitter_email',
        'submitter_bio',
        'submitter_photo',
        'submitter_company',
        'submitter_job_title',
    ];

    protected function cast(): array
    {
        return [
            'status' => PaperSubmissionStatus::class,
        ];
    }
}
