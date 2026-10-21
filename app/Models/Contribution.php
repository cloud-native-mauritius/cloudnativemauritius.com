<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // issue, pr, project
        'type',
        // main person involved
        'author',
        // short description of project
        'description',
        // link, such as a github link to the issue
        'source',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
