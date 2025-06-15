<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'couple_id',
        'title',
        'description',
        'image_url',
        'thumbnail_url',
        'category',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }
}
