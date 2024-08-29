<?php

namespace App\Models;

use App\Enums\SocialMediaPlatform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['platform', 'url'];

    protected function casts()
    {
        return [
            'platform' => SocialMediaPlatform::class,
        ];
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
